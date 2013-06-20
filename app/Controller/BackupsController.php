<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Backups Controller
 *
 */
class BackupsController extends AppController {

	public $helpers = array( 'Number' );

	public function beforeFilter() {
		$this->Auth->allow( '*' );
	}

	public function historial( $id_servicio_backup = null, $id_usuario = null, $id_servicio = null ) {
		// Cargo los datos del historial
		if( isset( $this->request->query['gestotux'] ) ) {
			// Solicitud de parte del programa
			$this->autoRender = false;
			$id_usuario = $this->request->query['num_cliente'];
			$this->loadModel( 'Usuario' );
			$id_servicio_backup = $this->Usuario->buscarIdServicioBackup( $id_usuario );
			$driver = $this->request->query['driver'];
			$data = $this->Backup->find( 'all',
						array( 'conditions' =>
								array( 	'servicio_backup_id' => $id_servicio_backup,
										'usuario_id' => $id_usuario )
							 )
			);
			if( count( $data ) > 0 ) {
				return json_encode( $data );
			} else {
				return json_encode( array( 'error' => true, 'texto' => 'No existen backups todavia. <br /> id_servicio_backup='.$id_servicio_backup.' - id_usuario='.$id_usuario.'<br />'.print_r( $data, true ) ) );
			}

		}
		$this->set( 'historial', $this->Backup->find( 'all', array( 'conditions' => array( 'id_servicio_backup' => $id_servicio_backup	, 'id_usuario' => $id_usuario ) ) ) );
		$this->set( 'id_usuario', $id_usuario );
		$this->set( 'id_servicio_backup', $id_servicio_backup );
		$this->set( 'id_servicio', $id_servicio );
	}

	public function envio()
	{
		$this->autoRender = false;
		if( $this->request->isPost() ) {
			// Busco si están todos los parametros
			// Parametro especial, para acelerar la subida de elementos
			if( isset( $this->request->query['ids'] ) ) {
			    // Guardo los datos
			    //$this->log( print_r( $this->request, true ) );
                return $this->guardar_cola( $this->request->query['ids'],
                                            $this->request->data['cola'],
                                            $this->request->data['posicion'] );

			}
			$id_cliente=null; $id_servicio_backup=null; $driver=null;
			if( isset( $this->request->query['num_cliente'] ) ) {
				$id_cliente = $this->request->query['num_cliente'];
			}
			if( isset( $this->request->query['id_servicio_backup'] ) ) {
				$id_servicio_backup = $this->request->query['id_servicio_backup'];
			}
			// Verifico ambos datos
			if( $id_cliente == null || $id_servicio_backup == null ) {
				return json_encode( array( 'error' => 'true', 'mensaje' => 'No se encontró ningun parametro', 'query' => $this->request->query, 'param' => $this->request->params ) );
			}
			// Verifico si existen realmente
			$this->loadModel( 'Usuario' );
			$this->Usuario->id = $id_cliente;
			if( !$this->Usuario->exists() ) {
				return json_encode( array( 'error' => true, 'mensaje' => 'El Cliente no existe! :'.$id_cliente ) );
			}
		 	$this->loadModel( 'ServicioBackup' );
			$this->ServicioBackup->id = $id_servicio_backup;
			if( $this->ServicioBackup->exists() ) {
				return json_encode( array( 'error' => true, 'mensaje' => 'El Servicio de Backup no existe!' ) );
			}
			// veo el driver usado
			if( isset( $this->request->query['driver'] ) ) {
				$driver = $this->request->query['driver'];
			}
			// Veo la acción
			if( isset( $this->request->query['inicio'] ) ) {
				if( $this->request->query['inicio'] == 0 ) {
					// Inicio el sistema para un backup
					return $this->iniciar_backup( $id_cliente, $id_servicio_backup, $driver );
				}
			}
			if( isset( $this->request->query['fin'] ) ) {
				if( $this->request->query['fin'] == 0 ) {
					// fin del backup
					return $this->finalizar_backup( $id_cliente, $id_servicio_backup, $driver );
				}
			}
			/*if( isset( $this->request->query['cancelar'] ) ) {
				return $this->cancelar_backup( $id_cliente, $id_servicio_backup, $driver );
			}*/
			//$this->log( $this->request->data['posicion'].":".$this->request->data['cola'] );

		} else {
			return json_encode( array( 'error' => true, 'mensaje' => 'Metodo desconocido' ) );
	    }
	}

	private function iniciar_backup( $num_cliente = null, $id_sb = null, $driver = null ) {
		// Creo un archivo con los datos del sistema en cuestión
		$d = new Folder( APP );
		$d->cd( 'tmp' );
		$d->cd( 'backups' );
		// Genero el archivo que va a tener el contenido
		$f = new File( $d->pwd().DS.$num_cliente.$id_sb.$driver.".sql", true, 0777 );
		$this->log( "Iniciando Backup en archivo: ".$f->pwd() );
		if( Cache::write( 'archivo'.$num_cliente.$id_sb.$driver, $f->pwd() ) ) {
			return json_encode( array( 'error' => false, 'mensaje' => 'Backup Iniciado....', 'ids' => $num_cliente.$id_sb.$driver ) );
		} else {
			return json_encode( array( 'error' => true, 'mensaje' => 'Error al escribir el archivo temproal a la cache' ) );
		}
	}

	private function finalizar_backup( $num_cliente = null, $id_sb = null, $driver = null ) {
		// Busco el archivo
		$dest = Cache::read( 'archivo'.$num_cliente.$id_sb.$driver );

		$f = new File( $dest, false );
		if( !$f->open() ) {
			return json_encode( array( 'error' => true, 'mensaje' => 'No se pudo encontrar el archivo temporal del backup. Consulte el servicio tecnico' ) );
		}
		// Elimino la clave del cache
		Cache::delete( 'archivo'.$num_cliente.$id_sb.$driver );
		// Genero la ubicación final
		$dir = new Folder( APP );
		$dir->cd( 'webroot' );
		if( $dir->cd( 'backups' ) == false ) {
			$dir->create( 'backups' );
			$dir->cd( 'backups' );
		}
		if( $dir->cd( $num_cliente ) == false ) {
			$dir->create( $dir->pwd().DS.$num_cliente );
			$dir->cd( $num_cliente );
		}
		if( $dir->cd( $driver ) == false ) {
			$dir->create( $dir->pwd.DS.$driver );
			$dir->cd( $driver );
		}
		// Estoy en la ruta deseada, genero el nombre que corresponde al backup
		$nombre = date( "YmdHis");
		$archivo_db = $dir->pwd() . DS . $nombre . ".bkp";
		$this->log( "Archivo db: ".$archivo_db );
		if( !$f->copy( $archivo_db ) ) {
			$this->log( 'Error al copiar el archivo '.$f->pwd().' a '.$archivo_db );
			return json_encode( array( 'error' => true, 'mensaje' => 'No se pudo copiar el archivo a su ubicación final' ) );
		}
		// calculo el tamaño
		$tam = $f->size();
		// elimino el archivo temporal
		$f->delete();
		// Genero la entrada correspondiente
		$data = array(
			'Backup' => array(
				'servicio_backup_id' => $id_sb,
				'usuario_id' => $num_cliente,
				'fecha' => date( "Y-m-d H:i:s" ),
				'tamano' => $tam,
				'archivo_db' => $archivo_db
			)
		);
		if( $this->Backup->save( $data ) ) {
			// Actualizo los totales
			$this->loadModel( 'ServicioBackupUsuario' );
			$this->ServicioBackupUsuario->actualizarUso( $num_cliente, 1, $tam, $id_sb );
			return json_encode( array( 'error' => false, 'mensaje' => 'Backup guardado correctamente' ) );
		} else {
			return json_encode( array( 'error' => true, 'mensaje' => 'Error al guardar el backup' ) );
		}
	}

	private function cancelar_backup( $num_cliente = null, $id_sb = null, $driver = null ) {
		// Elimino el archivo temporal escrito
		$dest = Cache::read( 'archivo'.$num_cliente.$id_sb.$driver );
		$f = new File( $dest, false );
		if( ! $f->delete() ) {
			$this->log( 'No se pudo eliminar el archivo '.$dest.'. Por favor, verifique de eliminarlo manualmente.' );
		}
		Cache::delete( 'archivo'.$num_cliente.$id_sb.$driver );
		return json_encode( array( 'error' => false, 'mensaje' => 'Cancelado' ) );
	}

	private function guardar_cola( $ids = null, $cola = null, $posicion = null ) {
		// Leo el archivo
		//$this->log( 'Data: '.'archivo'.$ids );
		$dest = Cache::read( 'archivo'.$ids );
		//$this->log( "Archivo:".$dest );
		$f = new File( $dest, false, 0777 );
		if( $f->open() ) {
			if( $f->append( $posicion.': '.$cola ) ) {
				$f->close();
                //$this->log( "Dato guardado correctamente: ".$posicion.': '.$cola );
				return json_encode( array( 'error' => false, 'mensaje' => 'Cola '.$posicion.' guardada' ) );
			} else {
				$f->close();
				$this->log( 'No se pudieron guardar los datos de la cola '.$posicion );
				return json_encode( array( 'error' => true, 'mensaje' => 'No se pudieron agregar los datos' ) );
			}
		} else {
			$this->log( 'No se pudo abrir el archivo temporal' );
			return json_encode( array( 'error' => true, 'mensaje' => 'No se pudo abrir el archivo temporal' ) );
		}
	}

	public function delete( $id_backup = null, $id_servicio_backup = null, $id_usuario = null ) {
		$this->Backup->id = $id_backup;
		if( !$this->Backup->exists() ) {
			throw new NotFoundException( "El backup que intenta eliminar no existe" );
		}
		if( $this->Backup->delete( $id_backup ) ) {
			$this->Session->setFlash( 'El backup ha sido eliminado correctamente', 'default', array( 'class' => 'success' ) );
		} else {
			$this->Session->setFlash( 'No se pudo eliminar el backup', 'default', array( 'class' => 'error' ) );
		}
		$this->redirect( array( 'action' => 'historial', $id_servicio_backup, $id_usuario ) );
	}

	public function descargar( $id_backup = null, $id_servicio_backup = null, $id_usuario = null ) {
		$this->Backup->id = $id_backup;
		if( !$this->Backup->exists() ) {
			throw new NotFoundException( "El backup que intenta descargar no existe" );
		}
		// El backup existe, busco su archivo final
		$archivo = $this->Backup->field( 'archivo_db' );

		// Pongo la vista para que sea una descarga
		$this->viewClass = 'Media';
		$this->autoLayout = false;
		$temp = explode( '/', $archivo );
		$id = array_pop( $temp );
        // Download app/outside_webroot_dir/example.zip
        $this->set( 'id'       , $id );
        $this->set( 'name'     , $name );
		$this->set( 'download' , true );
		$this->set( 'entension', $ext );
		$this->set( 'path'     , '/webroot'.implode( DS, $temp ).DS );
		$this->set( 'mimeType' , array( $ext => $type ) );

	}
}

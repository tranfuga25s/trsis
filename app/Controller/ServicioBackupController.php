<?php
class ServicioBackupController extends AppController {
	
	public $helpers = array( 'Number' );

	public function inicio( $id_usuario = null, $id_servicio = null )
	{
		// Busco que servicio posee
		$this->loadModel( 'Usuario' );
		$this->Usuario->id = $id_usuario;
		if( !$this->Usuario->exists() ) {
			throw new NotFoundException( 'El cliente pasado como parametro no existe');
		}
		$this->loadModel( 'ServicioBackupUsuario' );
		$id = $this->ServicioBackupUsuario->buscarIdServicioBackup( $id_usuario, $id_servicio );

		if( $id == false ) {
			throw new NotFoundException( 'No existe una asociación de su usuario con un servicio de backup' );
		}
		$datos = $this->ServicioBackup->read( null, $id );
		$temp = $this->ServicioBackupUsuario->find( 'first',
				array( 'conditions' => array( 'id_servicio_backup' => $id, 'id_usuario' => $id_usuario ),
					   'fields' => array( 'codigo', 'espacio', 'cantidad' ),
					   'recursive' => -1 ) 
		);
		$datos['ServicioBackupUsuario'] = $temp['ServicioBackupUsuario'];
		$datos['ServicioBackup']['id_cliente'] = $id_usuario;
		// Cargo los datos de resumen
		$this->set( 'datos', $datos );
	}
	
	public function masEspacio() {
		throw new NotFoundException( "No implementado todavía" );
	}
}
?>
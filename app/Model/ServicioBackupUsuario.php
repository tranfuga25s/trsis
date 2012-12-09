<?php
App::uses('AppModel', 'Model');
/**
 * ServicioBackupUsuario Model
 *
 */
class ServicioBackupUsuario extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'servicio_backup_usuario';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_servicio_backup';
	
	public $belongsTo =array( 
				'ServicioBackup' => array(
						'className' => 'ServicioBackup',
						'foreignKey' => 'id_servicio_backup')
				);
	
	public function buscarCodigo( $id_usuario ) {
		$d = $this->find( 'first', array( 'conditions' => array( 'id_usuario' => $id_usuario ), 'recursive' => -1, 'fields' => array( 'codigo' ) ) );
		return $d['ServicioBackupUsuario']['codigo'];
	}
	
	public function buscarIdServicioBackup( $id_usuario, $id_servicio ) {
		$d = $this->find( 'first', array( 'conditions' => array( 'ServicioBackupUsuario.id_usuario' => $id_usuario, 'ServicioBackup.id_servicio' => $id_servicio  ),
										  'fields' => array( 'id_servicio_backup' ),
										  'recursive' => 1 ) );
		return $d['ServicioBackupUsuario']['id_servicio_backup'];
	}

	public function verificarRelacionUsuario( $id_usuario, $id_servicio ) {
		if( $id_usuario == null || $id_servicio == null ) {
			return true;
		}
		
		$d = $this->find( 'count', array(
			'conditions' => array(
				'usuario_id' => $id_usuario,
				'servicio_id' => $id_servicio
			)
		));
		if( $d > 0 ) {
			return true;
		} else {
			return false;
		}
	}
	
	public function actualizarUso( $num_cliente, $cantidad, $tam, $id_servicio ) {
		$data = $this->find( 'first', array( 'conditions' => array( 'id_usuario' => $num_cliente, 'id_servicio_backup' => $id_servicio ), 'recursive' => -1 ) );
		$this->updateAll( array( 'cantidad' => $data['ServicioBackupUsuario']['cantidad'] + $cantidad,
								 'tamano' => $data['ServicioBackupUsuario']['tamano'] + $tam  ),
						  array( 'id_usuario' => $num_cliente, 'id_servicio_backup' => $id_servicio ) ) ;
	}
	
}

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

	public function buscarIdServicioBackup( $id_usuario ) {
		$d = $this->find( 'first', array( 'conditions' => array( 'ServicioBackupUsuario.id_usuario' => $id_usuario ),
										  'fields' => array( 'id_servicio_backup' ),
										  'recursive' => 1 ) );
		return $d['ServicioBackupUsuario']['id_servicio_backup'];
	}

	public function verificarRelacionUsuario( $id_usuario, $id_servicio_backup ) {
		if( $id_usuario == null || $id_servicio_backup == null ) {
			return true;
		}

		$d = $this->find( 'count', array(
			'conditions' => array(
				'id_usuario' => $id_usuario,
				'id_servicio_backup' => $id_servicio_backup
			),
			'recursive' => -1
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
								 'espacio' => $data['ServicioBackupUsuario']['espacio'] + $tam  ),
						  array( '`ServicioBackupUsuario`.`id_usuario`' => $num_cliente, '`ServicioBackupUsuario`.`id_servicio_backup`' => $id_servicio ) ) ;
	}

}

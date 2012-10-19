<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 */
class Usuario extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_usuario';
	
	
	public function buscarIdUsuario( $id_cliente ) 
	{
		$t = $this->find( 'first', array( 'conditions' => array( 'cliente_id' => $id_cliente ), 'fields' => array( 'id_usuario' ), 'recursive' => -1 ) );
		return $t['Usuario']['id_usuario'];
	}

	public function buscarIdServicioBackup( $ids_backup )
	{
		if( $this->id == null ) { return false; }
		return $this->ServiciosCliente->find( 'first', array( 'conditions' => 
								  					   		array( 'ServiciosCliente.id_cliente' => $this->id,
																   'ServiciosCliente.id_servicio' => $ids_backup ),
													          'fields' => array( 'id_servicio' ),
													          'recursive' => -1 ) );
	}

}
?>
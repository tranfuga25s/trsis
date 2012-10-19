<?php
App::uses('AppController', 'Controller');
/**
 * Ctactes Controller
 *
 * @property Ctacte $Ctacte
 */
class CtactesController extends AppController {

	public $uses = array( 'Ctacte' );

	public function verCtaCte() {
	    // Datos personales
		$id_usuario = $this->Auth->user();
		// Busco que cliente es
		$this->loadModel( 'Usuario' );
		$this->Usuario->id = $id_usuario['Usuario']['username'];
		$id_cliente = $this->Usuario->field( 'cliente_id' );
		$tmp = $this->Ctacte->find( 'first', array( 'conditions' => array( 'id_cliente' => $id_cliente ),
													'recursive' => -1, 
													'fields' => array( 'numero_cuenta' ) ) );
		$idctacte = $tmp['Ctacte']['numero_cuenta'];
		unset( $tmp ); unset( $id_cliente ); unset( $id_usuario );
		// Busco la cuenta corriente para el cliente
		$this->loadModel( 'ItemCtacte' );
		$this->set( 'lista', $this->ItemCtacte->find( 'all', array( 'conditions' => array( 'id_ctacte' => $idctacte ) ) ) );
	}
	
}

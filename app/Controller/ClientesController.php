<?php

class ClientesController extends AppController {
	
	public $helpers = array( 'Number' );

    public function beforeFilter() {
    	$this->Auth->allow( array( 'usar' ) );
    }

	public function usar( $servicio ) {
		if( $servicio == "backup" ) {
			return $this->render( 'altaBackup' );
		} else if( $servicio == "estadisticas" ) {
			return $this->render( 'estadisticas' );
		} else {
			throw new NotFoundException();
		}
	}
	
	public function inicio() {
		// Datos personales
		$id_usuario = $this->Auth->user();
		// Busco que cliente es
		$this->loadModel( 'Usuario' );
		$this->Usuario->id = $id_usuario['Usuario']['username'];
		$id_cliente = $this->Usuario->field( 'cliente_id' );
		$datos = $this->Cliente->find( 'first', array( 'conditions' => array( '`Cliente`.`id`' => $id_cliente ), 'recursive' => 1 ) );
		$datos2 = $this->Usuario->read();
		$datos['Usuario'] = $datos2['Usuario'];
		unset( $datos2 );
		$this->loadModel( 'Servicio' );
		$servicios = $this->Servicio->find( 'list' );
		$this->set( 'datos', $datos  );
		$this->set( 'servicios', $servicios );
		
	}

}

?>
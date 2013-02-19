<?php

App::uses('CakeEmail', 'Network/Email');

class FeedbacksController extends AppController {
	
	public function beforeFilter() {
    	$this->Auth->allow('*');
    }
	
	public function enviar() {
		$email = new CakeEmail();
		$email->from( array( 'noreply@gestotux.com.ar' => 'Feedback Plugin' ) );
		$email->to('esteban.zeller@gmail.com');
		$email->subject( 'Feedback de gestotux - cliente: '.$this->data['cliente'] );
		$email->send( 'Ha tenido un nuevo informe de erroes a través del sitio de gestotux: \n'.$this->data[0] );
		$datos = array( 'Feedback' => array( 'cliente' => $this->data['cliente'], 'contenido' => $this->data[0], 'fecha' => date( 'Y-m-d H:i' ) ) );
		$this->Feedback->save($datos);
		$this->autoRender = false;
		return true;
	}
	
	public function index() {
		$this->set( 'feedbacks', $this->paginate() );
	}
	
	public function view( $id = null ) {
		$this->Feedback->id = $id;
		if( !$this->Feedback->exists() ) {
			throw new NotFoundException( 'El Reporte #'.$id.' no existe' );
		}
		
		$this->set( 'feedback', $this->Feedback->read( null, $id ) );
	}
	
}
?>

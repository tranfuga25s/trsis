<?php

class FeedbackController extends AppController {
	
	public function beforeFilter() {
    	$this->Auth->allow('*');
    }
	
	public function enviar() {
		debug( $this->request->params );
		
		if( $this->request->isPost() ) {
			$email = new CakeEmail();
			$email->from( array( 'Feedback plugin' => 'noreply@gestotux.com.ar' ) );
			$email->to('esteban.zeller@gmail.com');
			$email->subject( 'Feedback de gestotux' );
			$email->send( 'Ha tenido un nuevo informe de erroes a través del sitio de gestotux: \n'.debug( $this->data['contacto'] ) );
			$this->autoRender = false;
			return true;
		} else {
			throw new NotFoundException( "Metodo de envío no encontrado" );
		}
	}
	
}
?>

<?php
App::import('Utility', 'Validation');
App::uses('CakeEmail', 'Network/Email');

/**
 * 
 */
class ContactoController extends AppController {

    /**
     *
     * @var type 
     */
    public $components = array(
        'Recaptcha.Recaptcha' => array(
            'actions' => array('enviar')
        )
    );

    /**
     * 
     */
    public function beforeFilter() {
        $this->Auth->allow();
    }

    /**
     * 
     */
    public function formulario() {}

    /**
     * 
     * @throws NotFoundException
     */
    public function enviar() {
        if ($this->request->isPost()) {
            // Verifico la dirección de email
            if (!Validation::email($this->data['contacto']['email'], true)) {
                $this->Session->setFlash("La dirección de email ingresado no es válida.");
                $this->redirect(array('action' => 'formulario'));
            } else {
                if ($this->Recaptcha->verify()) {
                    $email = new CakeEmail();
                    $email->from(array($this->data['contacto']['email'] => $this->data['contacto']['nombre']));
                    $email->to('esteban.zeller@gmail.com');
                    $email->subject('Contacto de gestotux');
                    $email->send('Ha tenido un nuevo contacto a través del sitio de gestotux: \n' . $this->data['contacto']['texto']);
                    $this->Session->setFlash("Su mensaje ha sido enviado correctamente. Gracias por contactarse con nosotros!");
                    $this->redirect('/');
                } else {
                    $this->Session->setFlash($this->Recaptcha->error);
                }
            }
        } else {
            throw new NotFoundException("Metodo de envío no encontrado");
        }
    }

}
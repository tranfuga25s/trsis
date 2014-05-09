<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Auth' => array(
            'loginAction' => array(
                'controller' => 'usuarios',
                'action' => 'ingresaradmin'
            ),
            'authError' => 'Usted no tiene permisos para ingresar en esta sección',
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Usuario',
                    'fields' => array('username' => 'id_usuario',
                                      'password' => 'codigo')
                )
            ),
            'authorize' => array( 'Controller' )
        ),
        'Session'
    );
    
    public $helpers = array('Number', 'Html', 'Session', 'Form', 'Time', 'Text', 'Js');
    
    public function beforeFilter() {
        $this->Auth->allow();
    }
    
    public function isAuthorized( $user = array() ) { 
        return true;
    }
    
}
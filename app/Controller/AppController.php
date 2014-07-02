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
        'Session',
        'RequestHandler'
    );
    
    public $helpers = array('Number', 'Html', 'Session', 'Form', 'Time', 'Text', 'Js');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('*'));
    }
    
    public function isAuthorized( $user = array() ) { 
        if( $this->prefix == 'api' ) {
            return true;
        }
        return true;
    }
    
}
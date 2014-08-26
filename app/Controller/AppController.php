<?php
App::uses('Controller', 'Controller');

/**
 * 
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'RequestHandler',
        'Auth' => array(
            'loginAction' => array( 'controller' => 'usuarios', 'action' => 'ingresar' ),
            'logoutRedirect' => '/',
            'authError' => 'Usted no tiene permisos para ingresar en esta sección',
            'authenticate' => array(
                'Gestotux',
                'Form' => array(
                    'userModel' => 'Usuario',
                    'fields' => array('username' => 'id_usuario',
                                      'password' => 'codigo'    )
                )
            ),
            'authorize' => array( 'Controller' ),
            'flash' => array(
                'element' => 'alert',
                'key' => 'auth',
                'params' => array(
                    'class' => 'alert-error'
                )
            )
        )
    );
    
    /**
     *
     * @var type 
     */
    public $helpers = array(
        'Number', 
        'Html', 
        'Session', 
        'Form', 
        'Time', 
        'Text', 
        'Js'
    );
    
    /**
     * 
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }
    
    /**
     * 
     * @param type $user
     * @return type
     */
    public function isAuthorized( $user = array() ) { 
        /*if( $this->prefix == 'api' ) {
            return true;
        }*/
        return $this->Auth->loggedIn();
    }
    
}

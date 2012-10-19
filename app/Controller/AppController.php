<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public $components = array(
    						'Auth' => array(
       							 'loginAction' => array(
           						 		'controller' => 'usuarios',
            					 		'action' => 'ingresar'
        						 		),
        						'authError' => 'Usted no tiene permisos para ingresar en esta sección',
        						'authenticate' => array(
        							 'Form' => array(
        							 	'userModel' => 'Usuario',
        						 		'fields' => array( 'username' => 'id_usuario',
        						 		                   'password' => 'codigo' )
					            	 )
        						 )
    						),
    						'Session'
						);
}
?>
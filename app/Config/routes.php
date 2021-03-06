<?php

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
//Router::connect( '/administracion/pages/*', array( 'controller' => 'pages', 'action' => 'display' ) );

Router::connect('/administracion', array('prefix' => 'administracion', 'controller' => 'usuarios', 'action' => 'ingresaradmin'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Enables REST API for backups
 */
Router::mapResources('backups');
Router::mapResources('usuarios');
Router::parseExtensions();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';

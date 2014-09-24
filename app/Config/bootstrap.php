<?php
// Setup a 'default' cache configuration for use in the application.
Cache::config( 'default', array( 'engine' => 'File' ) );

CakePlugin::load( 'Recaptcha', array( 'bootstrap' => true ) );
CakePlugin::load( 'PreguntaFrecuente' );

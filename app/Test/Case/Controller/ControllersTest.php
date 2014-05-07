<?php
/**
 * Clase para ejecutar todos los test
 */
class ControllersTests extends PHPUnit_Framework_TestSuite {

    /**
     * Suite define the tests for this suite
     *
     * @return $suite
     */
	public static function suite() {
   	    $suite = new PHPUnit_Framework_TestSuite('Test de controladores');
            $path = APP_TEST_CASES . DS . 'Controller' . DS;
            $suite->addTestFile( $path.'CtactesControllerTest.php' );
            $suite->addTestFile( $path.'NoticiasControllerTest.php' );
            $suite->addTestFile( $path.'UsuariosControllerTest.php' );
            return $suite;
	}
}

<?php
/**
 * Clase para ejecutar todos los test de modelos
 */
class AllModelTests extends PHPUnit_Framework_TestSuite {

    /**
     * Suite define the tests for this suite
     *
     * @return $suite
     */
    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('Test de todos los modelos');
        $path = APP_TEST_CASES . DS . 'Model' . DS;
        $suite->addTestFile( $path.'BackupTest.php' );
        $suite->addTestFile( $path.'CtacteTest.php' );
        $suite->addTestFile( $path.'ItemCtacteTest.php' );
        $suite->addTestFile( $path.'NoticiaTest.php' );
        $suite->addTestFile( $path.'ServicioBackupTest.php' );
        $suite->addTestFile( $path.'ServicioBackupUsuarioTest.php' );
        $suite->addTestFile( $path.'ServiciosClienteTest.php' );
        $suite->addTestFile( $path.'UsuarioTest.php' );
        return $suite;
    }
}

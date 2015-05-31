<?php
App::uses('Usuario', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * Usuario Test Case
 *
 */
class UsuarioTestCase extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array(
        'app.usuario',
        'app.cliente'
    );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $this->Usuario = ClassRegistry::init('Usuario');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
        unset($this->Usuario);
        parent::tearDown();
    }

    public function testBasic() {
        $this->assertEqual(true, true);
    }
    
    /*!
     * Testea que cuando se guarden datos te de una contraesña correcta en la db
     */
    public function testCambiaContrasena() {
        $usuario = $this->Usuario->find( 'first', array( 'fields' => array( 'id_usuario', 'email', 'contra' ), 'recursive' => -1 ) );
        $this->assertNotEqual( count( $usuario ), 0 );
        $this->assertArrayHasKey( 'Usuario', $usuario );
        $this->assertArrayHasKey( 'contra', $usuario['Usuario'] );
        $this->assertArrayHasKey( 'id_usuario', $usuario['Usuario'] );
        $this->assertArrayHasKey( 'email', $usuario['Usuario'] );
        $contra_anterior = $usuario['Usuario']['contra'];
        $email = $usuario['Usuario']['email'];
        $id_usuario = intval( $usuario['Usuario']['id_usuario'] );
        
        $nueva_contra = $this->Usuario->generarNuevaContraseña( $email );
        $this->assertNotEqual( $nueva_contra, false );
        $this->Usuario->clear();
        $this->Usuario->id = $id_usuario;
        $this->assertNotEqual($this->Usuario->field('contra'), $contra_anterior);
        $this->assertNotEqual($this->Usuario->field('contra'), $nueva_contra);
        
    }
    
    public function testExisteEmail() {
        $this->assertNotEqual( $this->Usuario->verificarSiExiste( 'email@email.com' ), true );
        $this->assertEqual( $this->Usuario->verificarSiExiste( 'admin@admin.com' ), true );
    }

}

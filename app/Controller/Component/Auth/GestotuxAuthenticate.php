<?php
App::uses('BaseAuthenticate', 'Controller/Component/Auth');
/**
 * CakePHP GestotuxKeyAuthenticate
 * @author ezeller
 */
class GestotuxAuthenticate extends BaseAuthenticate {

    /**
     * Verifies that the user can be logged IN
     * 
     * @param CakeRequest $request
     * @param CakeResponse $response
     * @return boolean|array
     */
    public function authenticate( CakeRequest $request, CakeResponse $response ) {
        $token = $request->header('X-Gestotux-Token' );
        $this->Client = ClassRegistry::init( 'Cliente' );
        if( $this->Client->existeToken( $token ) !== false ) {
            return $this->Cliente->getUserSegunToken( $token );
        }
        return false;
    }
    
    /**
     * 
     * @param CakeRequest $request
     */
    public function getUser( CakeRequest $request) {
        $token = $request->header('X-Gestotux-Token' );
        $this->Client = ClassRegistry::init( 'Cliente' );
        if( $this->Client->existeToken( $token ) !== false ) {
            return $this->Cliente->getUserSegunToken( $token );
        } else {
            return false;
        }
    }
}

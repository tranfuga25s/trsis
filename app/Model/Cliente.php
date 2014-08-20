<?php

App::uses('AppModel', 'Model');

/**
 * Cliente Model
 *
 * @property  $
 * @property Servicio $Servicio
 */
class Cliente extends AppModel {

    /**
     * Use database config
     *
     * @var string
     */
    public $useDbConfig = 'gestotux';
    
    /**
     * Primary Key
     * 
     * @var string 
     */
    public $primaryKey = 'id';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'razon_social';

    /**
     *
     * @var array 
     */
    public $hasMany = array(
        'ServiciosCliente' => array(
            'foreignKey' => 'id_cliente'
        )
    );
    
    /**
     *
     * @var array
     */
    public $hasOne = array(
        'Ctacte' => array(
            'foreignKey' => 'id_cliente'
        ),
        'Usuario' => array(
            'foreignKey' => 'cliente_id'
        )
    );
    
    /**
     *
     * @var array 
     */
    public $validate = array(
      'email' => array(
          'rule' => array( 'email' ),
          'message' => 'Por favor, ingrese un email valido'
      )  
    );

    /**
     * Verifica si existe un cliente con el email pasado como parametro
     * @param email Email a verificar
     * @return Verdadero si está en la base de datos
     */
    public function existe($email) {
        $c = $this->find('count', array('conditions' => array('email' => $email), 'recursive' => -1));
        if ($c > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Da de alta el cliente con los datos pasados como parametro
     * @param Nombre -> razon social
     * @param email 
     * @param id_cliente Identificador donde se devolverá el id recien dado de alta
     * @return Verdadero si se pudo realizar la accion.
     */
    public function darDeAlta( $nombre, $email, $telefono, $id_cliente) {
        if( is_null( $nombre ) || is_null( $email ) || is_null( $telefono ) ) {
            return false;
        }
        if( $id_cliente <= 0 ) { return false; }
        $dato = array(
            'Cliente' => array(
                'razon_social' => $nombre,
                'email' => $email,
                'tel_fijo' => $telefono
            )
        );
        $this->create();
        if ($this->save($dato)) {
            $id_cliente = $this->id;
            return true;
        } else {
            return false;
        }
    }
    
    /**
     *  Verifica la existencia de un token
     * 
     * @param type $token
     * @return boolean
     */
    public function existeToken( $token = null ) {
        if( is_null( $token ) ) { return false; }
        if( empty( $token ) ) { return false; }
        
        return $this->Usuario->existeToken( $token );
    }
    
    /**
     * 
     * @param type $token
     * @return type
     */
    public function getUserSegunToken( $token = null ) {
        return $this->Usuario->findByToken( $token );
    }

}

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
    public $primaryKey = 'id';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'razon_social';

    public $hasMany = array('ServiciosCliente' => array('foreignKey' => 'id_cliente'));
    public $hasOne = array('Ctacte' => array('foreignKey' => 'id_cliente'));
    
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

}

<?php

App::uses('AppModel', 'Model');

/**
 * Ctacte Model
 *
 * @property Item $Item
 */
class Ctacte extends AppModel {

    /**
     * Use database config
     *
     * @var string
     */
    public $useDbConfig = 'gestotux';

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'ctacte';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'numero_cuenta';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'numero_cuenta';

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasMany = array('ItemCtaCte' => array('className' => 'ItemCtacte', 'foreignKey' => 'id_ctacte'));

}

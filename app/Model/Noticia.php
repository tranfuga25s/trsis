<?php
App::uses('AppModel', 'Model');
/**
 * Noticia Model
 *
 */
class Noticia extends AppModel {
	/**
	 * Primary key field
	 *
	 * @var string
	 */
	public $primaryKey = 'id_noticia';
	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'titulo';
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'titulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El titulo no puede estar vacío'
			)
		),
		'contenido' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'El contenido no puede estar vacío'
			)
		),
		'publicada' => array(
			'boolean' => array(
				'rule' => array('boolean')
			)
		),
		'fecha' => array(
			'date' => array(
				'rule' => array('datetime')
			)
		)
	);
}

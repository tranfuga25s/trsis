<?php
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
            if (isset($event['create'])) {
                switch ($event['create']) {
                    case "usuarios": {
                      App::uses('ClassRegistry', 'Utility');
                        $user = ClassRegistry::init('Usuario');
                        $user->saveMany(array(
                            array('User' =>
                                array('id_usuario' => 1,
                                      'email' => 'admin@admin.com',
                                      'contra' => '123456',
                                      'cliente_id' => 2,
                                      'token' => 'token_seguridad_123456789'
                                 )
                            )
                          )
                       );
                       break;
                    }
                }
            }
	}

	public $backup = array(
		'id_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'servicio_backup_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index'),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'tamano' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'archivo_db' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'archivo_est' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'archivo_pref' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id_backup', 'unique' => 1), 'servicio_backup_id' => array('column' => 'servicio_backup_id', 'unique' => 0), 'usuario_id' => array('column' => 'usuario_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
	public $noticias = array(
		'id_noticia' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'titulo' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'contenido' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'publicada' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_noticia', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);
	public $servicio_backup = array(
		'id_servicio_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'id_servicio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'fecha_alta' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'limite_cantidad' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'limite_espacio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'comment' => 'expresado en kb'),
		'indexes' => array('PRIMARY' => array('column' => 'id_servicio_backup', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
	public $servicio_backup_usuario = array(
		'id_servicio_backup' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'id_usuario' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'suspendido' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'codigo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'espacio' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 20),
		'indexes' => array('PRIMARY' => array('column' => array('id_servicio_backup', 'id_usuario'), 'unique' => 1), 'id_usuario' => array('column' => 'id_usuario', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
	public $usuarios = array(
		'id_usuario' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'contra' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ultimo_acceso' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'ultimo_backup' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
                'token' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id_usuario', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
}

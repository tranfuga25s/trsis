<?php

/**
 * 
  CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id_feedback` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente` tinytext COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` longblob NOT NULL,
  PRIMARY KEY (`id_feedback`)
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;
 */
class Feedback extends AppModel {

    /**
     *
     * @var type 
     */
    public $primaryKey = 'id_feedback';
    
    /**
     *
     * @var type 
     */
    public $displayField = 'cliente';
    
    /**
     *
     * @var type 
     */
    public $tableName = 'feedbacks';
    

}
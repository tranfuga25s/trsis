

DROP TABLE IF EXISTS `trsis`.`backup`;
DROP TABLE IF EXISTS `trsis`.`noticias`;
DROP TABLE IF EXISTS `trsis`.`servicio_backup`;
DROP TABLE IF EXISTS `trsis`.`servicio_backup_usuario`;
DROP TABLE IF EXISTS `trsis`.`usuarios`;


CREATE TABLE `trsis`.`backup` (
	`id_backup` int(20) NOT NULL AUTO_INCREMENT,
	`servicio_backup_id` int(20) NOT NULL,
	`usuario_id` int(20) NOT NULL,
	`fecha` datetime NOT NULL,
	`tamano` int(20) DEFAULT 0 NOT NULL,
	`archivo_db` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`archivo_est` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
	`archivo_pref` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,	PRIMARY KEY  (`id_backup`),
	KEY `servicio_backup_id` (`servicio_backup_id`),
	KEY `usuario_id` (`usuario_id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

CREATE TABLE `trsis`.`noticias` (
	`id_noticia` int(20) NOT NULL AUTO_INCREMENT,
	`titulo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`contenido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`publicada` tinyint(1) NOT NULL,
	`fecha` datetime NOT NULL,	PRIMARY KEY  (`id_noticia`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=MyISAM;

CREATE TABLE `trsis`.`servicio_backup` (
	`id_servicio_backup` int(20) NOT NULL AUTO_INCREMENT,
	`id_servicio` int(20) NOT NULL,
	`fecha_alta` date DEFAULT NULL,
	`limite_cantidad` int(11) NOT NULL,
	`limite_espacio` int(11) NOT NULL COMMENT 'expresado en kb',	PRIMARY KEY  (`id_servicio_backup`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

CREATE TABLE `trsis`.`servicio_backup_usuario` (
	`id_servicio_backup` int(20) NOT NULL AUTO_INCREMENT,
	`id_usuario` int(20) NOT NULL AUTO_INCREMENT,
	`suspendido` tinyint(1) NOT NULL,
	`codigo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`cantidad` int(11) DEFAULT 0 NOT NULL,
	`espacio` int(20) DEFAULT 0 NOT NULL,	PRIMARY KEY  (`id_servicio_backup`, `id_usuario`),
	KEY `id_usuario` (`id_usuario`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;

CREATE TABLE `trsis`.`usuarios` (
	`id_usuario` int(20) NOT NULL AUTO_INCREMENT,
	`contra` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	`ultimo_acceso` datetime DEFAULT NULL,
	`ultimo_backup` datetime DEFAULT NULL,
	`cliente_id` int(20) NOT NULL,
	`email` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,	PRIMARY KEY  (`id_usuario`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_spanish_ci,
	ENGINE=InnoDB;


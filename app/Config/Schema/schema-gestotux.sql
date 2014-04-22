USE "trsis";
CREATE TABLE IF NOT EXISTS `clientes` (  `id` bigint(10) NOT NULL AUTO_INCREMENT,  `razon_social` tinytext COLLATE utf8_spanish_ci NOT NULL,  `nombre` tinytext COLLATE utf8_spanish_ci,  `apellido` tinytext COLLATE utf8_spanish_ci,  `calle` tinytext COLLATE utf8_spanish_ci,  `numero` int(2) DEFAULT NULL,  `piso` int(2) DEFAULT NULL,  `depto` tinytext COLLATE utf8_spanish_ci,  `ciudad` tinytext COLLATE utf8_spanish_ci,  `codigo_postal` tinytext COLLATE utf8_spanish_ci,  `provincia` bigint(20) DEFAULT NULL,  `pais` bigint(20) DEFAULT NULL,  `tel_fijo` tinytext COLLATE utf8_spanish_ci,  `tel_celular` tinytext COLLATE utf8_spanish_ci,  `fax` tinytext COLLATE utf8_spanish_ci,  `email` tinytext COLLATE utf8_spanish_ci,  `comprobante_email` tinyint(1) DEFAULT '1',  `ctacte` tinyint(1) DEFAULT NULL,  `CUIT/CUIL` tinytext COLLATE utf8_spanish_ci,  `id_estado_fiscal` int(11) NOT NULL,  PRIMARY KEY (`id`),  KEY `pais_fk` (`pais`),  KEY `provincia_fk` (`provincia`) ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;
CREATE TABLE IF NOT EXISTS `cobro_servicio_cliente_periodo` (  `id_periodo_servicio` bigint(20) NOT NULL,  `id_servicio` bigint(20) NOT NULL,  `id_cliente` bigint(20) NOT NULL,  `id_factura` bigint(20) NOT NULL,  `id_recibo` bigint(20) DEFAULT NULL,  `id_ctacte` bigint(20) DEFAULT NULL,  PRIMARY KEY (`id_periodo_servicio`,`id_servicio`,`id_cliente`),  KEY `id_servicio` (`id_servicio`,`id_cliente`),  KEY `id_ctacte` (`id_ctacte`),  KEY `id_recibo` (`id_recibo`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
CREATE TABLE IF NOT EXISTS `ctacte` (  `numero_cuenta` bigint(20) NOT NULL AUTO_INCREMENT,  `id_cliente` bigint(20) NOT NULL,  `fecha_alta` date NOT NULL,  `fecha_baja` date DEFAULT NULL,  `saldo` double DEFAULT NULL,  `limite` double(20,4) DEFAULT NULL,  `suspendida` tinyint(1) NOT NULL DEFAULT '0',  PRIMARY KEY (`numero_cuenta`),KEY `ctacte_cliente_fk` (`id_cliente`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;
CREATE TABLE IF NOT EXISTS `estado_fiscal` (  `id_estado_fiscal` int(11) NOT NULL AUTO_INCREMENT,`titulo` tinytext COLLATE utf8_spanish_ci NOT NULL,  PRIMARY KEY (`id_estado_fiscal`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;
CREATE TABLE IF NOT EXISTS `item_ctacte` (  `id_op_ctacte` bigint(6) NOT NULL AUTO_INCREMENT, `fecha` datetime NOT NULL,  `id_referencia` bigint(20) NOT NULL,  `tipo_op` smallint(6) NOT NULL,  `descripcion` tinytext COLLATE utf8_spanish_ci,  `debe` decimal(12,3) DEFAULT NULL,  `haber` decimal(12,3) DEFAULT NULL,  `id_ctacte` bigint(20) NOT NULL,  `numero_comprobante` tinytext COLLATE utf8_spanish_ci,  PRIMARY KEY (`id_op_ctacte`),  KEY `item_ctacte_ctacte_fk` (`id_ctacte`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=63 ;
CREATE TABLE IF NOT EXISTS `paises` (  `id_pais` bigint(20) NOT NULL AUTO_INCREMENT,  `nombre` tinytext COLLATE utf8_spanish_ci NOT NULL,  `predeterminado` tinyint(1) NOT NULL DEFAULT '0',  PRIMARY KEY (`id_pais`),  UNIQUE KEY `nombre_unico` (`nombre`(50))) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=242 ;
CREATE TABLE IF NOT EXISTS `periodo_servicio` (  `id_periodo_servicio` bigint(20) NOT NULL AUTO_INCREMENT,  `id_servicio` bigint(20) NOT NULL,  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,  `periodo` int(11) NOT NULL,  `ano` year(4) NOT NULL,  `fecha_inicio` date NOT NULL,  `fecha_fin` date NOT NULL,  PRIMARY KEY (`id_periodo_servicio`),  KEY `id_servicio` (`id_servicio`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `servicios` (  `id_servicio` bigint(1) NOT NULL AUTO_INCREMENT,  `nombre` tinytext CHARACTER SET latin1 NOT NULL,  `descripcion` text CHARACTER SET latin1,  `fecha_alta` date NOT NULL,  `fecha_baja` date DEFAULT NULL,  `precio_base` double(10,3) NOT NULL,  `periodo` int(10) NOT NULL,  `dia_cobro` int(10) NOT NULL,  `forma_incompleto` int(10) NOT NULL,  PRIMARY KEY (`id_servicio`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=11 ;
CREATE TABLE IF NOT EXISTS `servicios_clientes` (  `id_servicio` bigint(1) NOT NULL DEFAULT '0',  `id_cliente` bigint(1) NOT NULL DEFAULT '0',  `fecha_alta` datetime NOT NULL,  `fecha_baja` datetime DEFAULT NULL,  `razon` tinytext COLLATE utf8_spanish_ci,  PRIMARY KEY (`id_servicio`,`id_cliente`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
ALTER TABLE `clientes` ADD CONSTRAINT `pais_fk` FOREIGN KEY (`pais`) REFERENCES `paises` (`id_pais`), ADD CONSTRAINT `provincia_fk` FOREIGN KEY (`provincia`) REFERENCES `provincias` (`id_provincia`);
ALTER TABLE `cobro_servicio_cliente_periodo` ADD CONSTRAINT `cobro_servicio_cliente_periodo_ibfk_1` FOREIGN KEY (`id_periodo_servicio`) REFERENCES `periodo_servicio` (`id_periodo_servicio`), ADD CONSTRAINT `cobro_servicio_cliente_periodo_ibfk_2` FOREIGN KEY (`id_servicio`, `id_cliente`) REFERENCES `servicios_clientes` (`id_servicio`, `id_cliente`), ADD CONSTRAINT `cobro_servicio_cliente_periodo_ibfk_3` FOREIGN KEY (`id_ctacte`) REFERENCES `item_ctacte` (`id_op_ctacte`), ADD CONSTRAINT `cobro_servicio_cliente_periodo_ibfk_4` FOREIGN KEY (`id_recibo`) REFERENCES `recibos` (`id_recibo`);
ALTER TABLE `ctacte` ADD CONSTRAINT `ctacte_cliente_fk` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);
ALTER TABLE `item_ctacte`  ADD CONSTRAINT `item_ctacte_ctacte_fk` FOREIGN KEY (`id_ctacte`) REFERENCES `ctacte` (`numero_cuenta`);
ALTER TABLE `periodo_servicio` ADD CONSTRAINT `periodo_servicio_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`);
INSERT OR UPDATE INTO `clientes` (`id`, `razon_social`, `nombre`, `comprobante_email` ) VALUES ( 0, 'Consumidor Final','Consumidor Final', 1 );
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (1, 'Responsable Inscripto');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (2, 'Responsable Monotributista');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (3, 'No Responable Inscripto');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (4, 'Exento');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (5, 'Consumidor Final');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (6, 'Monotributista Social');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (7, 'Pequeño Contribuidor Eventual');
INSERT OR UPDATE INTO `estado_fiscal` (`id_estado_fiscal`, `titulo`) VALUES (8, 'Pequeño Contribuyente Eventual Social');
INSERT OR UPDATE INTO `paises` VALUES (13, 'Argentina');
INSERT OR UPDATE INTO `provincias` VALUES ( 168, 'Buenos Aires',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 169, 'Catamarca',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 170, 'Chaco',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 171, 'Chubut',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 172, 'Cordoba',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 173, 'Corrientes',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 174, 'Distrito Federal',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 175, 'Entre Rios',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 176, 'Formosa',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 177, 'Jujuy',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 178, 'La Pampa',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 179, 'La Rioja',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 180, 'Mendoza',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 181, 'Misiones',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 182, 'Neuquen',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 183, 'Rio Negro',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 184, 'Salta',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 185, 'San Juan',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 186, 'San Luis',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 187, 'Santa Cruz',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 188, 'Santa Fe',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 189, 'Santiago del Estero',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 190, 'Tierra del Fuego',  13 );
INSERT OR UPDATE INTO `provincias` VALUES ( 191, 'Tucuman',  13 );
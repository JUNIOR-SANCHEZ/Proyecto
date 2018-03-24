/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.29-MariaDB : Database - sanjuanbautista
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sanjuanbautista` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE `sanjuanbautista`;

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(320) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` int(11) NOT NULL,
  `noticia` int(11) NOT NULL,
  `reply` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comentarios_usuarios` (`usuario`),
  KEY `comentarios_noticia` (`noticia`),
  CONSTRAINT `comentarios_noticia` FOREIGN KEY (`noticia`) REFERENCES `noticias` (`id`),
  CONSTRAINT `comentarios_usuarios` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `comentarios` */

insert  into `comentarios`(`id`,`comentario`,`usuario`,`noticia`,`reply`,`fecha`) values (1,'hola soy Julio me gusta programar y la comida ',1,5,0,'2018-03-24 09:15:07'),(2,'Soy un usuario y este es mi primer comentario',3,5,0,'2018-03-24 09:46:49'),(3,'soy un administrado chevere ',1,5,0,'2018-03-24 09:51:01'),(13,'Este es un mensaje',3,5,0,'2018-03-24 11:15:51'),(14,'Este es un mensaje',3,5,0,'2018-03-24 11:15:52');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cuerpo` blob NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`nombre`,`cuerpo`,`imagen`,`fecha`,`id_usuario`) values (5,'Fundación San Juan Bautista','La Fundación de Desarrollo Social “SAN JUAN BAUTISTA” es una organización social sin fines de lucro cuyo objetivo principal es, ejecutar proyectos integrales de desarrollo social en beneficio de los sectores más vulnerables y de manera especial de los Grupos de Atención Prioritaria, garantizando el mejoramiento de los niveles de vida de la sociedad y el pleno goce de sus derechos fundamentales.','upl_5ab5d23d58775.jpg','2018-03-23 23:21:17',1);

/*Table structure for table `permisos` */

DROP TABLE IF EXISTS `permisos`;

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `key` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `permisos` */

insert  into `permisos`(`id_permiso`,`permiso`,`key`) values (1,'Tareas de administracion','admin_access'),(2,'Agregar publiccion','nuevo_publ'),(3,'Editar Publicacion','editar_publ'),(4,'Eliminar Publicacion','eliminar_publ'),(5,'Agrega Comentario','nuevo_coment'),(6,'Editar Comentario','editar_coment'),(7,'Eliminar Comentario','eliminar_coment');

/*Table structure for table `permisos_role` */

DROP TABLE IF EXISTS `permisos_role`;

CREATE TABLE `permisos_role` (
  `role` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL,
  KEY `role` (`role`),
  KEY `permiso` (`permiso`),
  CONSTRAINT `permisos_role_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id_role`),
  CONSTRAINT `permisos_role_ibfk_2` FOREIGN KEY (`permiso`) REFERENCES `permisos` (`id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `permisos_role` */

insert  into `permisos_role`(`role`,`permiso`,`valor`) values (1,1,1),(1,2,1),(1,3,1),(1,4,1),(2,3,1),(2,4,1),(3,2,0),(3,3,1),(4,5,1),(1,1,1),(1,2,1),(1,3,1),(1,4,1),(1,5,1),(1,6,1),(1,7,1),(2,3,1),(2,4,1),(2,5,1),(2,6,1),(3,2,0),(3,3,1),(3,5,1),(3,6,1),(3,2,0),(3,3,1),(3,5,1),(3,6,1),(4,5,1),(4,6,1),(1,1,1),(1,2,1),(1,3,1),(1,4,1),(1,5,1),(1,6,1),(1,7,1),(2,3,1),(2,4,1),(2,5,1),(2,6,1),(4,5,1),(4,6,1),(4,7,1);

/*Table structure for table `permisos_usuario` */

DROP TABLE IF EXISTS `permisos_usuario`;

CREATE TABLE `permisos_usuario` (
  `usuario` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) DEFAULT NULL,
  KEY `permiso` (`permiso`),
  KEY `permisos_usuario_ibfk_2` (`usuario`),
  CONSTRAINT `permisos_usuario_ibfk_1` FOREIGN KEY (`permiso`) REFERENCES `permisos` (`id_permiso`),
  CONSTRAINT `permisos_usuario_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `permisos_usuario` */

/*Table structure for table `pruebas` */

DROP TABLE IF EXISTS `pruebas`;

CREATE TABLE `pruebas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `pruebas` */

insert  into `pruebas`(`id`,`nombre`,`ciudad`,`edad`) values (1,'nombre - 0','ciudad - 0',0),(2,'nombre - 1','ciudad - 1',1),(3,'nombre - 2','ciudad - 2',2),(4,'nombre - 3','ciudad - 3',3),(5,'nombre - 4','ciudad - 4',4),(6,'nombre - 5','ciudad - 5',5),(7,'nombre - 6','ciudad - 6',6),(8,'nombre - 7','ciudad - 7',7),(9,'nombre - 8','ciudad - 8',8),(10,'nombre - 9','ciudad - 9',9),(11,'nombre - 10','ciudad - 10',10),(12,'nombre - 11','ciudad - 11',11),(13,'nombre - 12','ciudad - 12',12),(14,'nombre - 13','ciudad - 13',13),(15,'nombre - 14','ciudad - 14',14),(16,'nombre - 15','ciudad - 15',15),(17,'nombre - 16','ciudad - 16',16),(18,'nombre - 17','ciudad - 17',17),(19,'nombre - 18','ciudad - 18',18),(20,'nombre - 19','ciudad - 19',19),(21,'nombre - 20','ciudad - 20',20),(22,'nombre - 21','ciudad - 21',21),(23,'nombre - 22','ciudad - 22',22),(24,'nombre - 23','ciudad - 23',23),(25,'nombre - 24','ciudad - 24',24),(26,'nombre - 25','ciudad - 25',25),(27,'nombre - 26','ciudad - 26',26),(28,'nombre - 27','ciudad - 27',27),(29,'nombre - 28','ciudad - 28',28),(30,'nombre - 29','ciudad - 29',29),(31,'nombre - 30','ciudad - 30',30),(32,'nombre - 31','ciudad - 31',31),(33,'nombre - 32','ciudad - 32',32),(34,'nombre - 33','ciudad - 33',33),(35,'nombre - 34','ciudad - 34',34),(36,'nombre - 35','ciudad - 35',35),(37,'nombre - 36','ciudad - 36',36),(38,'nombre - 37','ciudad - 37',37),(39,'nombre - 38','ciudad - 38',38),(40,'nombre - 39','ciudad - 39',39),(41,'nombre - 40','ciudad - 40',40),(42,'nombre - 41','ciudad - 41',41),(43,'nombre - 42','ciudad - 42',42),(44,'nombre - 43','ciudad - 43',43),(45,'nombre - 44','ciudad - 44',44),(46,'nombre - 45','ciudad - 45',45),(47,'nombre - 46','ciudad - 46',46),(48,'nombre - 47','ciudad - 47',47),(49,'nombre - 48','ciudad - 48',48),(50,'nombre - 49','ciudad - 49',49),(51,'nombre - 50','ciudad - 50',50),(52,'nombre - 51','ciudad - 51',51),(53,'nombre - 52','ciudad - 52',52),(54,'nombre - 53','ciudad - 53',53),(55,'nombre - 54','ciudad - 54',54),(56,'nombre - 55','ciudad - 55',55),(57,'nombre - 56','ciudad - 56',56),(58,'nombre - 57','ciudad - 57',57),(59,'nombre - 58','ciudad - 58',58),(60,'nombre - 59','ciudad - 59',59),(61,'nombre - 60','ciudad - 60',60),(62,'nombre - 61','ciudad - 61',61),(63,'nombre - 62','ciudad - 62',62),(64,'nombre - 63','ciudad - 63',63),(65,'nombre - 64','ciudad - 64',64),(66,'nombre - 65','ciudad - 65',65),(67,'nombre - 66','ciudad - 66',66),(68,'nombre - 67','ciudad - 67',67),(69,'nombre - 68','ciudad - 68',68),(70,'nombre - 69','ciudad - 69',69),(71,'nombre - 70','ciudad - 70',70),(72,'nombre - 71','ciudad - 71',71),(73,'nombre - 72','ciudad - 72',72),(74,'nombre - 73','ciudad - 73',73),(75,'nombre - 74','ciudad - 74',74),(76,'nombre - 75','ciudad - 75',75),(77,'nombre - 76','ciudad - 76',76),(78,'nombre - 77','ciudad - 77',77),(79,'nombre - 78','ciudad - 78',78),(80,'nombre - 79','ciudad - 79',79),(81,'nombre - 80','ciudad - 80',80),(82,'nombre - 81','ciudad - 81',81),(83,'nombre - 82','ciudad - 82',82),(84,'nombre - 83','ciudad - 83',83),(85,'nombre - 84','ciudad - 84',84),(86,'nombre - 85','ciudad - 85',85),(87,'nombre - 86','ciudad - 86',86),(88,'nombre - 87','ciudad - 87',87),(89,'nombre - 88','ciudad - 88',88),(90,'nombre - 89','ciudad - 89',89),(91,'nombre - 90','ciudad - 90',90),(92,'nombre - 91','ciudad - 91',91),(93,'nombre - 92','ciudad - 92',92),(94,'nombre - 93','ciudad - 93',93),(95,'nombre - 94','ciudad - 94',94),(96,'nombre - 95','ciudad - 95',95),(97,'nombre - 96','ciudad - 96',96),(98,'nombre - 97','ciudad - 97',97),(99,'nombre - 98','ciudad - 98',98),(100,'nombre - 99','ciudad - 99',99),(101,'nombre - 0','ciudad - 0',0),(102,'nombre - 1','ciudad - 1',1),(103,'nombre - 2','ciudad - 2',2),(104,'nombre - 3','ciudad - 3',3),(105,'nombre - 4','ciudad - 4',4),(106,'nombre - 5','ciudad - 5',5),(107,'nombre - 6','ciudad - 6',6),(108,'nombre - 7','ciudad - 7',7),(109,'nombre - 8','ciudad - 8',8),(110,'nombre - 9','ciudad - 9',9),(111,'nombre - 10','ciudad - 10',10),(112,'nombre - 11','ciudad - 11',11),(113,'nombre - 12','ciudad - 12',12),(114,'nombre - 13','ciudad - 13',13),(115,'nombre - 14','ciudad - 14',14),(116,'nombre - 15','ciudad - 15',15),(117,'nombre - 16','ciudad - 16',16),(118,'nombre - 17','ciudad - 17',17),(119,'nombre - 18','ciudad - 18',18),(120,'nombre - 19','ciudad - 19',19),(121,'nombre - 20','ciudad - 20',20),(122,'nombre - 21','ciudad - 21',21),(123,'nombre - 22','ciudad - 22',22),(124,'nombre - 23','ciudad - 23',23),(125,'nombre - 24','ciudad - 24',24),(126,'nombre - 25','ciudad - 25',25),(127,'nombre - 26','ciudad - 26',26),(128,'nombre - 27','ciudad - 27',27),(129,'nombre - 28','ciudad - 28',28),(130,'nombre - 29','ciudad - 29',29),(131,'nombre - 30','ciudad - 30',30),(132,'nombre - 31','ciudad - 31',31),(133,'nombre - 32','ciudad - 32',32),(134,'nombre - 33','ciudad - 33',33),(135,'nombre - 34','ciudad - 34',34),(136,'nombre - 35','ciudad - 35',35),(137,'nombre - 36','ciudad - 36',36),(138,'nombre - 37','ciudad - 37',37),(139,'nombre - 38','ciudad - 38',38),(140,'nombre - 39','ciudad - 39',39),(141,'nombre - 40','ciudad - 40',40),(142,'nombre - 41','ciudad - 41',41),(143,'nombre - 42','ciudad - 42',42),(144,'nombre - 43','ciudad - 43',43),(145,'nombre - 44','ciudad - 44',44),(146,'nombre - 45','ciudad - 45',45),(147,'nombre - 46','ciudad - 46',46),(148,'nombre - 47','ciudad - 47',47),(149,'nombre - 48','ciudad - 48',48),(150,'nombre - 49','ciudad - 49',49),(151,'nombre - 50','ciudad - 50',50),(152,'nombre - 51','ciudad - 51',51),(153,'nombre - 52','ciudad - 52',52),(154,'nombre - 53','ciudad - 53',53),(155,'nombre - 54','ciudad - 54',54),(156,'nombre - 55','ciudad - 55',55),(157,'nombre - 56','ciudad - 56',56),(158,'nombre - 57','ciudad - 57',57),(159,'nombre - 58','ciudad - 58',58),(160,'nombre - 59','ciudad - 59',59),(161,'nombre - 60','ciudad - 60',60),(162,'nombre - 61','ciudad - 61',61),(163,'nombre - 62','ciudad - 62',62),(164,'nombre - 63','ciudad - 63',63),(165,'nombre - 64','ciudad - 64',64),(166,'nombre - 65','ciudad - 65',65),(167,'nombre - 66','ciudad - 66',66),(168,'nombre - 67','ciudad - 67',67),(169,'nombre - 68','ciudad - 68',68),(170,'nombre - 69','ciudad - 69',69),(171,'nombre - 70','ciudad - 70',70),(172,'nombre - 71','ciudad - 71',71),(173,'nombre - 72','ciudad - 72',72),(174,'nombre - 73','ciudad - 73',73),(175,'nombre - 74','ciudad - 74',74),(176,'nombre - 75','ciudad - 75',75),(177,'nombre - 76','ciudad - 76',76),(178,'nombre - 77','ciudad - 77',77),(179,'nombre - 78','ciudad - 78',78),(180,'nombre - 79','ciudad - 79',79),(181,'nombre - 80','ciudad - 80',80),(182,'nombre - 81','ciudad - 81',81),(183,'nombre - 82','ciudad - 82',82),(184,'nombre - 83','ciudad - 83',83),(185,'nombre - 84','ciudad - 84',84),(186,'nombre - 85','ciudad - 85',85),(187,'nombre - 86','ciudad - 86',86),(188,'nombre - 87','ciudad - 87',87),(189,'nombre - 88','ciudad - 88',88),(190,'nombre - 89','ciudad - 89',89),(191,'nombre - 90','ciudad - 90',90),(192,'nombre - 91','ciudad - 91',91),(193,'nombre - 92','ciudad - 92',92),(194,'nombre - 93','ciudad - 93',93),(195,'nombre - 94','ciudad - 94',94),(196,'nombre - 95','ciudad - 95',95),(197,'nombre - 96','ciudad - 96',96),(198,'nombre - 97','ciudad - 97',97),(199,'nombre - 98','ciudad - 98',98),(200,'nombre - 99','ciudad - 99',99);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `roles` */

insert  into `roles`(`id_role`,`role`) values (1,'Administrador'),(2,'Gestor'),(3,'Editor'),(4,'Usuario');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sexo` enum('hombre','mujer') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estadoCivil` enum('casado','soltero','divorsiado') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ocupacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `fecha` date NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nombre`,`imagen`,`usuario`,`pass`,`email`,`phone`,`sexo`,`estadoCivil`,`ocupacion`,`role`,`estado`,`fecha`,`codigo`) values (1,'Admin','upl_5ab5527e92d63.jpg','admin','710f9d5d43fb39fb06facf99d677841a2e19c07b','admin@admin.com',NULL,NULL,NULL,NULL,1,1,'2018-03-23',1963007335),(3,'Usuario','upl_5ab5a450cfef4.jpg','usuario','710f9d5d43fb39fb06facf99d677841a2e19c07b','usuario@usuario.com',NULL,NULL,NULL,NULL,4,1,'2018-03-23',1963007335);

/* Procedure structure for procedure `insertar` */

/*!50003 DROP PROCEDURE IF EXISTS  `insertar` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insertar`()
BEGIN
	DECLARE con INT DEFAULT 0;
	WHILE con < 100 DO
	INSERT INTO pruebas (id,nombre,ciudad,edad) VALUES (NULL,concat("nombre - ",con),concat("ciudad - ",con),con);
	SET con= con+1;
	END WHILE;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

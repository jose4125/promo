# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.44)
# Database: usuariosalkosto
# Generation Time: 2012-06-23 04:52:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table DATOS
# ------------------------------------------------------------

CREATE TABLE `DATOS` (
  `consecutivo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL DEFAULT '0',
  `nombres` varchar(200) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `aceptaT` char(1) DEFAULT NULL,
  `ofertas` char(1) DEFAULT NULL,
  `fan` varchar(140) DEFAULT '',
  `frase` varchar(200) DEFAULT '',
  PRIMARY KEY (`consecutivo`,`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `DATOS` WRITE;
/*!40000 ALTER TABLE `DATOS` DISABLE KEYS */;

INSERT INTO `DATOS` (`consecutivo`, `cedula`, `nombres`, `ciudad`, `email`, `telefono`, `aceptaT`, `ofertas`, `fan`, `frase`)
VALUES
	(1,80000000,'prueba1','bogota','prueba1@hotmail.com','1234567','N','N','',''),
	(2,70000000,'prueba2','medellin','prueba2@hotmail.com','7654321','S','S','',''),
	(3,60000000,'prueba3','cucuta','prueba3@hotmail.com','2111111','N','N','',''),
	(4,50000000,'prueba4','bquilla','prueba4@hotmail.com','3111111','S','S','',''),
	(5,40000000,'prueba5','bucaramanga','prueba5@hotmail.com','4111111','N','N','','');

/*!40000 ALTER TABLE `DATOS` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.17)
# Database: restaurant
# Generation Time: 2017-04-20 01:11:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table restaurant
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurant`;

CREATE TABLE `restaurant` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `evaluation` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;

INSERT INTO `restaurant` (`id`, `nom`, `adresse`, `type`, `evaluation`)
VALUES
	(1,'La Menara','12 Rue des Fossés 59000 Lille','Cuisine Marocaine','3.6'),
	(2,' Le Dragon D\'or','192 Rue Solférino, 59000 Lille','Cuisine chinoise','4.2'),
	(3,'La Fossetta','Rue des Fossés','Cuisine italienne','4.5'),
	(4,'LA PIAZZA DEL GUSTO','wrwere','werwerwe','2'),
	(5,'Les Toquées','110 Quai Géry Legrand','Cuisine francaise','4');
	(6,'HD Diner','12 Rue Royale, 59000 Lille','Cuisine Américaine','4'),
	(7,'Happy Fox Premium Quality Pizza','189 Rue du Faubourg de Roubaix, 59000 Lille','Cuisine Américaine','4.4'),
	(8,'Chiquita Bacana','82 Rue de Gand, 59800 Lille','Cuisine brésilienne','4.5'),
	(9,'Le Djurdjura','28 Boulevard Jean-Baptiste Lebas, 59000 Lille','Cuisine algérienne','4.3'),
	(10,'Soleil d\'Agadir','5 Rue Princesse, 59800 Lille','Cuisne marocaine','4');
	(11,'La Babouche','437 Rue Léon Gambetta, 59000 Lille','Cuisine tunisienne','3.1'),
	

/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

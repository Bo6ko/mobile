-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mobile
CREATE DATABASE IF NOT EXISTS `mobile` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mobile`;

-- Dumping structure for table mobile.vehicules
CREATE TABLE IF NOT EXISTS `vehicules` (
  `vehicule_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marque_id` smallint(5) unsigned DEFAULT NULL,
  `modele_id` smallint(5) unsigned DEFAULT NULL,
  `engine_id` smallint(5) unsigned DEFAULT NULL,
  `carrosserie_id` smallint(5) unsigned DEFAULT NULL,
  `vehicule_date_creation` datetime DEFAULT NULL,
  `vehicule_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vehicule_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`vehicule_id`),
  KEY `FK_vehicules_vehicule_energies` (`engine_id`),
  KEY `FK_vehicules_vehicule_modeles` (`modele_id`),
  KEY `FK_vehicules_vehicule_carrosseries` (`carrosserie_id`),
  KEY `FK_vehicules_vehicule_marques` (`marque_id`),
  CONSTRAINT `FK_vehicules_vehicule_carrosseries` FOREIGN KEY (`carrosserie_id`) REFERENCES `vehicule_carrosseries` (`carrosserie_id`),
  CONSTRAINT `FK_vehicules_vehicule_engines` FOREIGN KEY (`engine_id`) REFERENCES `vehicule_engines` (`engine_id`),
  CONSTRAINT `FK_vehicules_vehicule_marques` FOREIGN KEY (`marque_id`) REFERENCES `vehicule_marques` (`marque_id`),
  CONSTRAINT `FK_vehicules_vehicule_modeles` FOREIGN KEY (`modele_id`) REFERENCES `vehicule_modeles` (`modele_id`) ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicules_characteristics
CREATE TABLE IF NOT EXISTS `vehicules_characteristics` (
  `ve_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicule_id` int(10) unsigned DEFAULT NULL,
  `characteristic_id` smallint(5) unsigned DEFAULT NULL,
  `characteristic_description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ve_id`),
  KEY `FK_vehicules_characteristics_vehicules` (`vehicule_id`),
  KEY `FK_vehicules_characteristics_vehicule_characteristics` (`characteristic_id`),
  KEY `ve_id` (`ve_id`),
  CONSTRAINT `FK_vehicules_characteristics_vehicules` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`vehicule_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_characteristics_vehicule_characteristics` FOREIGN KEY (`characteristic_id`) REFERENCES `vehicule_characteristics` (`characteristic_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicules_equipements
CREATE TABLE IF NOT EXISTS `vehicules_equipements` (
  `ve_id` int(10) NOT NULL AUTO_INCREMENT,
  `vehicule_id` int(10) unsigned DEFAULT NULL,
  `equipement_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`ve_id`),
  KEY `FK_vehicules_equipements_vehicule_equipements` (`equipement_id`),
  KEY `FK_vehicule_equipements_vehicules` (`vehicule_id`),
  CONSTRAINT `FK_vehicules_equipements_vehicules` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`vehicule_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_equipements_vehicule_equipements` FOREIGN KEY (`equipement_id`) REFERENCES `vehicule_equipements` (`equipement_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_carrosseries
CREATE TABLE IF NOT EXISTS `vehicule_carrosseries` (
  `carrosserie_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `carrosserie_name` varchar(50) DEFAULT NULL,
  `carrosserie_date_creation` datetime DEFAULT NULL,
  `carrosserie_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `carrosserie_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`carrosserie_id`),
  KEY `carroserie_id` (`carrosserie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_characteristics
CREATE TABLE IF NOT EXISTS `vehicule_characteristics` (
  `characteristic_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `characteristic_name` varchar(50) DEFAULT NULL,
  `characteristic_date_creation` datetime DEFAULT NULL,
  `characteristic_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `characteristic_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`characteristic_id`),
  KEY `characteristic_id` (`characteristic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_engines
CREATE TABLE IF NOT EXISTS `vehicule_engines` (
  `engine_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `engine_name` varchar(50) DEFAULT NULL,
  `engine_date_creation` datetime DEFAULT NULL,
  `engine_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `engine_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`engine_id`),
  KEY `engine_id` (`engine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_equipements
CREATE TABLE IF NOT EXISTS `vehicule_equipements` (
  `equipement_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `equipement_name` varchar(50) DEFAULT NULL,
  `equipement_date_creation` datetime DEFAULT NULL,
  `equipement_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `equipement_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`equipement_id`),
  KEY `equipement_id` (`equipement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_marques
CREATE TABLE IF NOT EXISTS `vehicule_marques` (
  `marque_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `marque_name` varchar(30) DEFAULT NULL,
  `marque_slogan` varchar(50) DEFAULT NULL,
  `marque_date_creation` datetime DEFAULT NULL,
  `marque_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `marque_status` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`marque_id`),
  KEY `marque_id` (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table mobile.vehicule_modeles
CREATE TABLE IF NOT EXISTS `vehicule_modeles` (
  `modele_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `marque_id` smallint(5) unsigned DEFAULT NULL,
  `modele_name` varchar(30) DEFAULT NULL,
  `modele_slogan` varchar(50) DEFAULT NULL,
  `modele_date_creation` datetime DEFAULT NULL,
  `modele_date_modification` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modele_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`modele_id`),
  KEY `modele_id` (`modele_id`),
  KEY `FK_vehicule_modeles_vehicule_marques` (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

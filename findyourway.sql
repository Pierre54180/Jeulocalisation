-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `findyourway`;
CREATE DATABASE `findyourway` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `findyourway`;

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(80) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admins` (`Id`, `Username`, `Password`) VALUES
(1,	'bvarnerot',	'aze'),
(2,	'fdagnet',	'aze'),
(3,	'csteeg',	'aze'),
(4,	'pdelcros',	'aze');

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE `destinations` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Longitude` varchar(20) DEFAULT NULL,
  `Latitude` varchar(20) DEFAULT NULL,
  `Nom` varchar(80) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `destinations` (`Id`, `Longitude`, `Latitude`, `Nom`, `Description`, `Image`) VALUES
(2,	'6.2',	'48.683331',	'Nancy',	'Une belle ville étudiante',	NULL),
(4,	'-0.1257400',	'51.5085300',	'Londres',	'',	NULL),
(5,	'2.1589900',	'41.3887900',	'Barcelone',	NULL,	NULL),
(6,	'9.1895100',	'45.4642700',	'Milan',	NULL,	NULL),
(7,	'12.3326500',	'45.4371300',	'Venise',	NULL,	NULL);

DROP TABLE IF EXISTS `generer`;
CREATE TABLE `generer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Paths` int(11) NOT NULL,
  `Id_Party` int(11) NOT NULL,
  `Number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Paths`,`Id_Party`),
  UNIQUE KEY `Id` (`Id`),
  KEY `FK_Generer_Id_Party` (`Id_Party`),
  CONSTRAINT `FK_Generer_Id_Party` FOREIGN KEY (`Id_Party`) REFERENCES `party` (`Id`),
  CONSTRAINT `generer_ibfk_1` FOREIGN KEY (`Id_Paths`) REFERENCES `paths` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `indices`;
CREATE TABLE `indices` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  `Id_Destinations` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Indices_Id_Destinations` (`Id_Destinations`),
  CONSTRAINT `FK_Indices_Id_Destinations` FOREIGN KEY (`Id_Destinations`) REFERENCES `destinations` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `indices` (`Id`, `Type`, `Description`, `Id_Destinations`) VALUES
(6,	'text',	'La plus belle place d\'Europe',	2),
(7,	'text',	'IUT Charlemagne',	2),
(8,	'text',	'Le chardon',	2),
(9,	'text',	'Une grande ville étudiante ',	2),
(10,	'text',	'Parc de la Pépinière',	2),
(16,	'text',	'Big Ben',	4),
(17,	'text',	'Palais de Westminster',	4),
(18,	'text',	'Tower Bridge',	4),
(19,	'text',	'Tate Modern',	4),
(20,	'text',	'CHurchill War Room',	4),
(21,	'text',	'Parc Güell',	5),
(22,	'text',	'Montserrat',	5),
(23,	'text',	'Camp Nou',	5),
(24,	'text',	'Casa Milà',	5),
(25,	'text',	'Segrada Familia',	5),
(26,	'text',	'Château des Sforza',	6),
(27,	'text',	'Basilique Saint-Ambroise',	6),
(28,	'text',	'Pinacothèque de Brera',	6),
(29,	'text',	'Brera',	6),
(30,	'text',	'Musée Bagatti Valsecchi',	6),
(31,	'text',	'Basilique Saint-Marc',	7),
(32,	'text',	'Pont du Rialto',	7),
(33,	'text',	'Murano',	7),
(34,	'text',	'Scuola Grande de San Rocco',	7),
(35,	'text',	'Museo Correr',	7);

DROP TABLE IF EXISTS `party`;
CREATE TABLE `party` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Token` varchar(32) DEFAULT NULL,
  `Pseudo` varchar(50) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Id_Destinations` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Party_Id_Destinations` (`Id_Destinations`),
  CONSTRAINT `FK_Party_Id_Destinations` FOREIGN KEY (`Id_Destinations`) REFERENCES `destinations` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paths`;
CREATE TABLE `paths` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Longitude` varchar(20) DEFAULT NULL,
  `Latitude` varchar(20) DEFAULT NULL,
  `Nom` varchar(80) DEFAULT NULL,
  `Indication` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `paths` (`Id`, `Longitude`, `Latitude`, `Nom`, `Indication`) VALUES
(1,	'2.3488000',	'48.8534100',	'Paris',	'Tour Eiffel'),
(2,	'4.35',	'43.833328',	'Nîmes',	'Jardin de la Fontaine'),
(3,	'5.3810700',	'43.2969500',	'Marseille',	'Le Vieux Port'),
(4,	'1.4436700',	'43.6042600',	'Toulouse',	'Eglise Notre-Dame de la Dalbade'),
(5,	'-0.5805000',	'44.8404400',	'Bordeaux',	'Vin de ...'),
(6,	'26.1062600',	'44.4322500',	'Bucarest',	'Parc Her?str?u'),
(7,	'13.4105300',	'52.5243700',	'Berlin',	'Le fameux mur de ...'),
(8,	'23.7162200',	'37.9794500',	'Athènes',	'Olympiéion'),
(9,	'12.5655300',	'55.6759400',	'Copenhague',	'Jardins de Tivoli'),
(10,	'10.7460900',	'59.9127300',	'Oslo',	'La forteresse d\'Akershus'),
(11,	'14.4207600',	'50.0880400',	'Prague',	'Pont Charles'),
(12,	'10.0153400',	'53.5753200',	'Hambourg',	'Miniatur-Wunderland'),
(13,	'-8.6109900',	'41.1496100',	'Porto',	'Palacio de Bolsa'),
(14,	'6.9500000',	'50.9333300',	'Cologne',	'Eau de ...'),
(15,	'4.3487800',	'50.8504500',	'Bruxelles',	'Le Manneken-Pis');

-- 2017-02-11 11:09:11

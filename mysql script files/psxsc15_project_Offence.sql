CREATE DATABASE  IF NOT EXISTS `psxsc15_project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `psxsc15_project`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: mysql.cs.nott.ac.uk    Database: psxsc15_project
-- ------------------------------------------------------
-- Server version	5.5.60-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Offence`
--

DROP TABLE IF EXISTS `Offence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Offence` (
  `Offence_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Offence_description` varchar(50) NOT NULL,
  `Offence_maxFine` int(11) NOT NULL,
  `Offence_maxPoints` int(11) NOT NULL,
  PRIMARY KEY (`Offence_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Offence`
--

LOCK TABLES `Offence` WRITE;
/*!40000 ALTER TABLE `Offence` DISABLE KEYS */;
INSERT INTO `Offence` VALUES (1,'Speeding',1000,3),(2,'Speeding on a motorway',2500,6),(3,'Seat belt offence',500,0),(4,'Illegal parking',500,0),(5,'Drink driving',10000,11),(6,'Driving without a licence',10000,0),(7,'Driving without a licence',10000,0),(8,'Traffic light offences',1000,3),(9,'Cycling on pavement',500,0),(10,'Failure to have control of vehicle',1000,3),(11,'Dangerous driving',1000,11),(12,'Careless driving',5000,6),(13,'Dangerous cycling',2500,0);
/*!40000 ALTER TABLE `Offence` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-14 15:05:57

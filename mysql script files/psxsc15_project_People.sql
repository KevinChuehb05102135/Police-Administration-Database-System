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
-- Table structure for table `People`
--

DROP TABLE IF EXISTS `People`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `People` (
  `People_ID` int(11) NOT NULL AUTO_INCREMENT,
  `People_name` varchar(50) NOT NULL,
  `People_address` varchar(50) DEFAULT NULL,
  `People_licence` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`People_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `People`
--

LOCK TABLES `People` WRITE;
/*!40000 ALTER TABLE `People` DISABLE KEYS */;
INSERT INTO `People` VALUES (1,'James Smith','23 Barnsdale Road, Leicester','SMITH92LDOFJJ829'),(2,'Jennifer Allen','46 Bramcote Drive, Nottingham','ALLEN88K23KLR9B3'),(3,'John Myers','323 Derby Road, Nottingham','MYERS99JDW8REWL3'),(4,'James Smith','26 Devonshire Avenue, Nottingham','SMITHR004JFS20TR'),(5,'Terry Brown','7 Clarke Rd, Nottingham','BROWND3PJJ39DLFG'),(6,'Mary Adams','38 Thurman St, Nottingham','ADAMSH9O3JRHH107'),(7,'Neil Becker','6 Fairfax Close, Nottingham','BECKE88UPR840F9R'),(8,'Angela Smith','30 Avenue Road, Grantham','SMITH222LE9FJ5DS'),(9,'Xene Medora','22 House Drive, West Bridgford','MEDORH914ANBB223');
/*!40000 ALTER TABLE `People` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-14 15:05:56

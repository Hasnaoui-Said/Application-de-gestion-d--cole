-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_ecole
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrateur` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`matricule`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrateur`
--

LOCK TABLES `administrateur` WRITE;
/*!40000 ALTER TABLE `administrateur` DISABLE KEYS */;
INSERT INTO `administrateur` VALUES (1,'superadmin','homme',1,'superadmin','17c4520f6cfd1ab53d8745e84681eb49','Ahmed');
/*!40000 ALTER TABLE `administrateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPro` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPro` (`idPro`),
  KEY `idPro_2` (`idPro`),
  KEY `idPro_3` (`idPro`),
  KEY `idPro_4` (`idPro`),
  KEY `niveau` (`niveau`),
  CONSTRAINT `Niveau_constraint` FOREIGN KEY (`niveau`) REFERENCES `niveau` (`matricule`),
  CONSTRAINT `Pro_constraint` FOREIGN KEY (`idPro`) REFERENCES `professeur` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (2,2,1),(3,1,1);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `adresse` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `tuteur` int(11) DEFAULT NULL,
  `idNiveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `tuteur` (`tuteur`),
  KEY `idNieau` (`idNiveau`),
  CONSTRAINT `constrainNiveauEtudiant` FOREIGN KEY (`idNiveau`) REFERENCES `niveau` (`matricule`),
  CONSTRAINT `tuteur` FOREIGN KEY (`tuteur`) REFERENCES `tuteur` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES (2,'said hasnaoui','homme',1,'youssoufia','2002-05-15','yassin@gmail.com',4,2),(3,'Ahmed','homme',1,'avenue allal fassi, Marrakech','2012-05-01','yasmin@gmail.com',1,2),(14,'Ahmed','homme',1,'avenue allal fassi, Marrakech','2002-05-15','agadir@gmail.com',1,2),(16,'test','homme',1,'adresse','2000-04-27','email',1,1),(17,'Moundir','homme',1,'adresse','2000-04-27','email',1,1),(18,'Meryem','',1,'adressssssssssse','0000-00-00','email@gmail.com',NULL,1),(19,'Ahmed','homme',1,'avenue allal fassi, Marrakech','0000-00-00','ahmed@gmail.com',1,1),(20,'hasnaoui','homme',1,'adresssssssssssssse','2022-05-10','said@gmail.com',NULL,NULL);
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveau` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveau`
--

LOCK TABLES `niveau` WRITE;
/*!40000 ALTER TABLE `niveau` DISABLE KEYS */;
INSERT INTO `niveau` VALUES (1,'error404','Descrption: 1ere année',1),(2,'1 ere année college','Descrption: 1ere année',1);
/*!40000 ALTER TABLE `niveau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professeur` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `matiere` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professeur`
--

LOCK TABLES `professeur` WRITE;
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
INSERT INTO `professeur` VALUES (1,'Abderahim','homme',1,'Math','0633556644'),(2,'moundir jabir','homme',1,'Informatique/web','+212642041077');
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuteur`
--

DROP TABLE IF EXISTS `tuteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuteur` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `job` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `situation` varchar(255) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuteur`
--

LOCK TABLES `tuteur` WRITE;
/*!40000 ALTER TABLE `tuteur` DISABLE KEYS */;
INSERT INTO `tuteur` VALUES (1,'Ahmed','homme',1,'chauffeur taxi','avenue allal fassi, Marrakech','0633556644','père'),(2,'hamza','homme',1,'Hofar','adddessss','+212642048787','père'),(3,'said hasnaoui','homme',0,'Hofar','adddessss','+212642041077','homme'),(4,'said hasnaoui','homme',0,'Hofar','youssoufia','+21264204199','père');
/*!40000 ALTER TABLE `tuteur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-17 16:15:39

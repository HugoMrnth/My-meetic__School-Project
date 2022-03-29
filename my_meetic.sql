-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: my_meetic
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-0+deb11u1

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
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'femme'),(2,'homme'),(3,'autre');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobby`
--

DROP TABLE IF EXISTS `hobby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobby`
--

LOCK TABLES `hobby` WRITE;
/*!40000 ALTER TABLE `hobby` DISABLE KEYS */;
INSERT INTO `hobby` VALUES (1,'cuisine'),(2,'bar'),(3,'musées'),(4,'cinema'),(5,'sport'),(6,'voyages'),(7,'musique'),(8,'lecture'),(9,'nature'),(10,'bricolage');
/*!40000 ALTER TABLE `hobby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `join_hobby`
--

DROP TABLE IF EXISTS `join_hobby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `join_hobby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_hobby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_join_hobby_FK` (`id_user`),
  KEY `id_join_hobby_FK_1` (`id_hobby`),
  CONSTRAINT `id_join_hobby_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  CONSTRAINT `id_join_hobby_FK_1` FOREIGN KEY (`id_hobby`) REFERENCES `hobby` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `join_hobby`
--

LOCK TABLES `join_hobby` WRITE;
/*!40000 ALTER TABLE `join_hobby` DISABLE KEYS */;
INSERT INTO `join_hobby` VALUES (1,7,1),(2,7,7),(3,9,2),(4,8,7),(5,10,2),(6,5,8),(7,6,7),(8,11,7),(9,10,4),(10,11,9),(11,8,10),(12,14,1),(13,14,1),(14,21,2),(15,22,5),(16,22,4),(17,23,1),(18,23,3),(19,24,1),(20,24,4),(21,25,5),(22,25,3),(23,26,1),(24,26,3),(25,27,2),(26,27,5),(27,28,1),(28,28,10),(29,29,6),(30,29,8);
/*!40000 ALTER TABLE `join_hobby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `anniversaire` date DEFAULT NULL,
  `id_genre` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_emai_UN` (`email`),
  KEY `user_FK` (`id_ville`),
  KEY `user_FK_1` (`id_genre`),
  CONSTRAINT `user_FK` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`),
  CONSTRAINT `user_FK_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'Super','Didier','1990-06-25',2,1,'didier@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(6,'Coco','Jeanne','1965-04-15',1,3,'jeanne@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(7,'M','Hugo','1995-01-01',2,1,'hugo@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(8,'H','Julie','1995-01-01',1,3,'julie@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(9,'B','Alexis','1995-01-01',2,4,'alexis@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(10,'L','Laurent','1995-01-01',2,3,'laurent@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(11,'Db','Maria','1995-01-01',1,1,'mariadb@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(12,'World','Hello','1995-01-01',3,2,'hello@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(14,'M','H','1990-01-12',3,2,'h@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(21,'a','b','1991-01-01',2,2,'a@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(22,'Van Daaaaaaaamn','Jean-Claude','1960-10-18',2,2,'jean-claude@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(23,'Etoile','Patrick','1990-01-01',3,5,'patrick@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(24,'h','p','1990-01-01',1,1,'p@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(25,'Mystèrre','Martin','2002-01-01',2,5,'martin@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(26,'10','Ben','1984-01-01',3,5,'ben@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(27,'Blues','Dimitri','1997-12-23',2,3,'dimitri@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(28,'Tatcher','Margaret','1925-10-13',1,1,'margaret@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785'),(29,'Bubblegum','Princess','1998-12-01',1,4,'princesse@gmail.com','dc76e9f0c0006e8f919e0c515c66dbba3982f785');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ville`
--

LOCK TABLES `ville` WRITE;
/*!40000 ALTER TABLE `ville` DISABLE KEYS */;
INSERT INTO `ville` VALUES (1,'Paris'),(2,'Lyon'),(3,'Nantes'),(4,'Montpellier'),(5,'Marseille');
/*!40000 ALTER TABLE `ville` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-30 21:32:19

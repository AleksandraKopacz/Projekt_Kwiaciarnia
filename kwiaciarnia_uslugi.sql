-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: kwiaciarnia
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `uslugi`
--

DROP TABLE IF EXISTS `uslugi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uslugi` (
  `id_uslugi` int(11) NOT NULL AUTO_INCREMENT,
  `usluga` varchar(45) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `cena_uslugi` double DEFAULT NULL,
  `typ` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_uslugi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uslugi`
--

LOCK TABLES `uslugi` WRITE;
/*!40000 ALTER TABLE `uslugi` DISABLE KEYS */;
INSERT INTO `uslugi` VALUES (1,'Bukiet \"Pachnący Ogród\"','Bukiet \"Pachnący ogród\" to piękna pastelowa kompozycja ułożona z sezonowych kwiatów i dodatków otulonych wiosennym zapachem.',169,'Bukiet'),(2,'Bukiet \"Z różanego ogrodu\"','Bukiet \"Z różanego ogrodu\" to kompozycja utrzymana w delikatnej pudrowo-różowej tonacji, ułożona z róży i róży gałązkowej. Bukiet wypełniają sezonowe dodatki.',169,'Bukiet'),(3,'Goździki KarmeLove','Goździki KarmeLove to klasyczna kompozycja ułożona z goździków gałązkowych oraz eukaliptusa, owinięta papierem.',149,'Bukiet'),(4,'Bukiet \"Kocham Cię\"','Bukiet \"Kocham Cię\" to wyjątkowa kompozycja ułożona z czerwonych róż odmiany Red Naomi. Bukiet zdobią dwa czerwone serduszka, całość otulona naturalną kryzą.',189,'Bukiet'),(5,'Box \"Śmietankowy\"','Box \"Śmietankowy\" to delikatne połączenie kremowych różyczek z gałązkami limonium i eukaliptusa. Całość upięta w welurowym boxie.',159,'Box'),(6,'Box \"Odcień różu\"','Box \"Odcień różu\" to kompozycja ułożona w welurowym boxie z sezonowych kwiatów.',209,'Box'),(7,'\"Flowers Box\"','\"Flowers Box\" to kompozycja ułożona z pastelowych kwiatów i eukaliptusa w welurowym boxie.',159,'Box');
/*!40000 ALTER TABLE `uslugi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-28 21:51:44

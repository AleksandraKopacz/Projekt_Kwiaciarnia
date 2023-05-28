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
-- Table structure for table `kwiaty`
--

DROP TABLE IF EXISTS `kwiaty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kwiaty` (
  `id_kwiaty` int(11) NOT NULL AUTO_INCREMENT,
  `kwiat` varchar(45) DEFAULT NULL,
  `kolory` text DEFAULT NULL,
  `symbolika` text DEFAULT NULL,
  `cena` double DEFAULT NULL,
  PRIMARY KEY (`id_kwiaty`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kwiaty`
--

LOCK TABLES `kwiaty` WRITE;
/*!40000 ALTER TABLE `kwiaty` DISABLE KEYS */;
INSERT INTO `kwiaty` VALUES (1,'Tulipan','Czerwony, żółty, różowy, biały, fioletowy','Wyznanie miłości, sława, uwierz mi, (czerwone) prawdziwa miłość, (żółte) beznadziejna miłość, (białe) przebaczenie',8),(2,'Niezapominajka','Niebieski','Wierność, nieprzemijająca miłość, wspomnienia, nie zapomnij o mnie',4),(3,'Bratek','Fioletowy, żółty, biały, niebieski, bordowy, pomarańczowy','Myślę o tobie, jest mi wesoło, myśl o mnie, lekko mi na sercu',5),(4,'Kamelia','Czerwony, biały, różowy','Podziw, powodzenie, wdzięczność, zrozumienie',9),(5,'Róża','Błękitna, pomarańczowa, ciemnoróżowa, czerwona, biała, herbaciana','(Błękitna) miłość od pierwszego wejrzenia, (pomarańczowa) namiętność, (ciemnoróżowa) wdzięczność, (czerwona) prawdziwa miłość, (biała) wieczna miłość, (herbaciana) zawsze czarująca',15),(6,'Bez','Purpurowy, liliowy, biały','Pierwsze uczucia',7),(7,'Konwalia','Biały','Powrót szczęścia, bycie godnym zaufania',7),(8,'Groszek pachnący','Różowy, łososiowy, czerwony, biały, kremowy, purpurowy, fioletowy','Rozstanie, dziękuję za wspaniałe chwile',8),(9,'Narcyz','Biały, złoty','Oficjalność, niepewność',12),(10,'Zawilec','Czerwony, purpurowy, liliowy, biały','Oczekiwanie, szczerość, niesłabnąca miłość',9),(11,'Irys','Niebieski, purpurowy, biały, żółty','Wiara, nadzieja',11);
/*!40000 ALTER TABLE `kwiaty` ENABLE KEYS */;
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

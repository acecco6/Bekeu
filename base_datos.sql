-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: bekeu
-- ------------------------------------------------------
-- Server version	10.6.5-MariaDB

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
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'AK','Alaska','2021-08-01 19:23:51','2021-08-01 19:23:51'),(2,'AL','Alabama','2021-08-01 19:23:51','2021-08-01 19:23:51'),(3,'HI','Hawaii','2021-08-01 19:23:51','2021-08-01 19:23:51'),(4,'AZ','Arizona','2021-08-01 19:23:51','2021-08-01 19:23:51'),(5,'CA','California','2021-08-01 19:23:51','2021-08-01 19:23:51'),(6,'AR','Arkansas','2021-08-01 19:23:51','2021-08-01 19:23:51'),(7,'ID','Idaho','2021-08-01 19:23:51','2021-08-01 19:23:51'),(8,'GA','Georgia','2021-08-01 19:23:51','2021-08-01 19:23:51'),(9,'CO','Colorado','2021-08-01 19:23:51','2021-08-01 19:23:51'),(10,'DE','Delaware','2021-08-01 19:23:51','2021-08-01 19:23:51'),(11,'CT','Connecticut','2021-08-01 19:23:51','2021-08-01 19:23:51'),(12,'FL','Florida','2021-08-01 19:23:51','2021-08-01 19:23:51'),(13,'IL','Illinois','2021-08-01 19:23:51','2021-08-01 19:23:51'),(14,'IA','Iowa','2021-08-01 19:23:51','2021-08-01 19:23:51'),(15,'IN','Indiana','2021-08-01 19:23:51','2021-08-01 19:23:51'),(16,'KS','Kansas','2021-08-01 19:23:51','2021-08-01 19:23:51'),(17,'KY','Kentucky','2021-08-01 19:23:51','2021-08-01 19:23:51'),(18,'LA','Louisiana','2021-08-01 19:23:51','2021-08-01 19:23:51'),(19,'ME','Maine','2021-08-01 19:23:51','2021-08-01 19:23:51'),(20,'MD','Maryland','2021-08-01 19:23:51','2021-08-01 19:23:51'),(21,'MA','Massachusetts','2021-08-01 19:23:51','2021-08-01 19:23:51'),(22,'MI','Michigan','2021-08-01 19:23:51','2021-08-01 19:23:51'),(23,'MN','Minnesota','2021-08-01 19:23:51','2021-08-01 19:23:51'),(24,'MS','Mississippi','2021-08-01 19:23:51','2021-08-01 19:23:51'),(25,'MO','Missouri','2021-08-01 19:23:51','2021-08-01 19:23:51'),(26,'NE','Nebraska','2021-08-01 19:23:51','2021-08-01 19:23:51'),(27,'MT','Montana','2021-08-01 19:23:51','2021-08-01 19:23:51'),(28,'NV','Nevada','2021-08-01 19:23:51','2021-08-01 19:23:51'),(29,'NH','New','2021-08-01 19:23:51','2021-08-01 19:23:51'),(30,'NJ','New','2021-08-01 19:23:51','2021-08-01 19:23:51'),(31,'NM','New','2021-08-01 19:23:51','2021-08-01 19:23:51'),(32,'NY','New','2021-08-01 19:23:51','2021-08-01 19:23:51'),(33,'NC','North','2021-08-01 19:23:51','2021-08-01 19:23:51'),(34,'ND','North','2021-08-01 19:23:51','2021-08-01 19:23:51'),(35,'OK','Oklahoma','2021-08-01 19:23:51','2021-08-01 19:23:51'),(36,'OH','Ohio','2021-08-01 19:23:51','2021-08-01 19:23:51'),(37,'OR','Oregon','2021-08-01 19:23:51','2021-08-01 19:23:51'),(38,'PA','Pennsylvania','2021-08-01 19:23:51','2021-08-01 19:23:51'),(39,'RI','Rhode','2021-08-01 19:23:51','2021-08-01 19:23:51'),(40,'SC','South','2021-08-01 19:23:51','2021-08-01 19:23:51'),(41,'SD','South','2021-08-01 19:23:51','2021-08-01 19:23:51'),(42,'TN','Tennessee','2021-08-01 19:23:51','2021-08-01 19:23:51'),(43,'TX','Texas','2021-08-01 19:23:51','2021-08-01 19:23:51'),(44,'UT','Utah','2021-08-01 19:23:51','2021-08-01 19:23:51'),(45,'VT','Vermont','2021-08-01 19:23:51','2021-08-01 19:23:51'),(46,'VA','Virginia','2021-08-01 19:23:51','2021-08-01 19:23:51'),(47,'WA','Washington','2021-08-01 19:23:51','2021-08-01 19:23:51'),(48,'WV','West','2021-08-01 19:23:51','2021-08-01 19:23:51'),(49,'WI','Wisconsin','2021-08-01 19:23:51','2021-08-01 19:23:51'),(50,'WY','Wyoming','2021-08-01 19:23:51','2021-08-01 19:23:51');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suscripciones`
--

DROP TABLE IF EXISTS `suscripciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suscripciones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `suscripciones_email_unique` (`email`),
  KEY `suscripciones_estado_id_foreign` (`estado_id`),
  CONSTRAINT `suscripciones_estado_id_foreign` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suscripciones`
--

LOCK TABLES `suscripciones` WRITE;
/*!40000 ALTER TABLE `suscripciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `suscripciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-08 18:08:37

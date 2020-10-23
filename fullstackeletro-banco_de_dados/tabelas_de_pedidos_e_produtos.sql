CREATE DATABASE  IF NOT EXISTS `fullstackeletro` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `fullstackeletro`;
-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: fullstackeletro
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `idpedidos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(90) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `nome_produto` varchar(250) DEFAULT NULL,
  `valor_unitario` decimal(8,2) DEFAULT NULL,
  `quantidade` decimal(20,0) DEFAULT NULL,
  `valor_total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idpedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `precoantigo` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'geladeira','Geladeira Brastemp Frost Free Side Inverse 540 Litros','imagens/produtos/geladeira_brastemp.jpg',6799.00,4899.90),(2,'geladeira','Geladeira Brastemp Frost Free Inverse 443 Litros','imagens/produtos/geladeira_brastemp2.jpg',3999.00,3599.10),(3,'geladeira','Geladeira Consul Frost Free Duplex 397 Litros','imagens/produtos/geladeira_consul3.jpg',3769.00,2742.57),(4,'fogao','Fogão de Piso 4 Bocas Brastemp Clean Inox','imagens/produtos/fog%C3%A3o_brastemp1.jpg',1275.00,1089.00),(5,'fogao','Fogão de Piso 5 Bocas Electrolux','imagens/produtos/fog%C3%A3o_electrolux2.jpg',1899.00,1649.00),(6,'microondas','Microondas LG Solo 30 Litros','imagens/produtos/microondas_lg1.jpg',719.00,575.10),(7,'microondas','Microondas Philco 32 Litros','imagens/produtos/microondas_philco2.jpg',708.51,529.90),(8,'microondas','Microondas Electrolux 31 Litros','imagens/produtos/microondas_electrolux3.jpg',847.90,716.00),(9,'lavadoraderoupas','Lavadora e Secadora Samsung 11Kg','imagens/produtos/lavadora_samsung1.jpg',4619.00,3599.00),(10,'lavadoraderoupas','Lavadora e Secadora LG 11Kg','imagens/produtos/lavadora_lg2.jpg',4399.00,3719.07),(11,'lavaloucas','Lava-louças Brastemp 14 serviços Inox','imagens/produtos/lavalou%C3%A7a_brastemp1.jpg',5229.00,3599.10),(12,'lavaloucas','Lava-Louças de Bancada Philco 14 Serviços Inox','imagens/produtos/lavalou%C3%A7a_philco2.jpg',3629.00,2699.00);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-23 15:09:24

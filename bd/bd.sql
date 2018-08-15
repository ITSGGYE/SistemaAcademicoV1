-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: sistemaacademico
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `institucion_Alumno` varchar(300) NOT NULL,
  `nombre_Alumno` varchar(100) NOT NULL,
  `sexo_Alumno` char(1) NOT NULL,
  `cedula_Alumno` varchar(10) NOT NULL,
  `ciudad_Alumno` varchar(200) NOT NULL,
  `provincia_Alumno` varchar(200) NOT NULL,
  `telefono_Alumno` varchar(10) NOT NULL,
  `celular_Alumno` varchar(10) DEFAULT NULL,
  `direccion_Alumno` varchar(200) NOT NULL,
  `fechanac_Alumno` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (37,'Young Living Academy									','Jordan Andrés	 Lapo Calle 								','M','3050090632','Madrid				','Madrid (España)				','04605299		','0999166060','Valle Alto Etapa Paris Mz 1116 V 23												','2012-07-22','2018-02-09'),(40,'UNIDAD EDUCATIVA TORREMOLINOS									','JOHAN ALEXANDER MURILLO PINEDA 							','M','0953041571','GUAYAQUIL				','GUAYAS				','05048801		','0939744168','URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2												','0011-09-23','2018-02-09'),(49,'Young Living Academy									','Federico  Macias Guerrero 				','M','0954162350','Guayaquil				','Guayas			','0','0989594759','Chongon, La Renta MZ 11 Sl 8												','2012-05-22','2018-02-09'),(66,'Young Living Academy									','David Jeremias Zuñiga Gamarra 								','M','0954529178','Guayaquil','Guayas','045036974	','0999643270','Ciudad Olimpo Mz 2558 V 20												','2011-11-13','2018-02-09'),(69,'Young Living Academy									','Rosa Anahí Lascano Villa 							','F','0944224807','Guayaquil		','Guayas		','0','0967130821','Flor de verano Mz 102 Sl. 11												','2011-11-10','2018-02-09'),(74,'Young Living Academy									','Aylen Jazmin Zambrano Soriano 								','F','0954309357','Guayaquil				','Guayas				','0','0979780407','Km 24 Via a la Costa Mz 6 Sl 1												','2012-06-18','2018-02-09'),(76,'Young Living Academy									','Virginia Daniela Mero Pico 					','F','0953643269','Guayaquil','Guayas','043156010	','0967454747','San Geronimo 1 Mz 482 sl 52, atras del parque												','2012-02-17','2018-02-09'),(78,'Young Living Academy									','Ivan Josua Moreira Alvarado 								','M','0931948368','Guayaquil				','Guayas				','0','0988522167','Km 24 Via a la Costa San Geronimo 1 mz 39 Sl 5												','2011-10-20','2018-02-09'),(81,'Young Living Academy									','Leonel Emanuel Leon Granda 		','M','0954089298','Guayaquil','Guayas','042738308	','0993935920','Chongón Calle 4ta y Av 4ta Barrio la madre												','2012-04-06','2018-02-09'),(83,'Young Living Academy									','Angelina Anahí Maldonado Morales 						','F','0931971295','Guayaquil','Guayas','0','0990396403','COLIBRI 2 MZ A SL 3												','2011-12-06','2018-02-09'),(104,'Young Living Academy									','Marlon Alexander Morán Cirino 									','M','0958648156','Lomas de Sargentillo				','Guayas','0','0982928683','Chongoncito La Cadena												','2012-02-10','2018-02-09'),(107,'Young Living Academy	','Jacob Exequiel Baidal Tumbaco 	','M','0953873619','Guayaquil','Guayas','9999999','0982788730','Chongon LA RENTA','2012-01-30','2018-02-09'),(117,'Young Living Academy','Edison Manuel Ayala León ','M','0954319885','Guayaquil','Guayas','042738139','0981463398','San Geronimo 1 Mz 146 Sl 6','1995-09-04','2018-02-09'),(132,'ESCUELA SIMON BOLIVAR									','BRIANNA MAITE ORTEGA ROMERO  						','F','0954347803','GUAYAQUIL				','GUAYAS				','042738879	','0981066585','CHONGON MZ 28 SL 9												','2011-08-31','2018-02-09'),(138,'Young Living Academy									',' Melanie Estefany Olives Zambrano								','F','0932143811','Guayaquil				','Guayas				','042738210	','0959472823','			Km 24 Via a laCosta																	','2012-06-19','2018-02-09'),(149,'Young Living Academy									','Nebraska Valeska Coronel Reyes 								','F','0954618633','Guayaquil','Guayas','0','0991766086','San Geronimo 2 Mz C-3 Sl. 8	','2012-07-14','2018-02-09'),(152,'Young Living Academy								','Cristopher Mathias Barreiro Vargas 		','M','0953966314','Guayaquil','Guayas','0','0969617091','Km 24 via a la Costa San Geronimo 2 ','2012-02-01','2018-02-09'),(173,'Young Living Academy	','Lenin Alberto Benavides Salazar 								','M','0932112998','Guayaquil','Guayas				','0','0979975772','Chongon Av. Principal entre la 5ta y la 6ta 												','2012-05-24','2018-02-09'),(216,'Young Living Academy									','Mia Alejandra	Tagle Espinoza 						','F','0953616836','Guayaquil				','Guayas				','06025092		','0981633278','CHORRILLO												','2011-07-17','2018-02-09'),(235,'Young Living Academy									','SHEYLA KATHERINA VILLON PONCE 								','F','0932204266','Guayaquil				','Guayas				','0','0989467650','		26 Y CAP. NAJERA 													','2012-10-05','2018-02-09'),(303,'ANNE SULLIVAN									','ASHLEY DAMARIS AYALA TOMALA 								','F','0953242740','GUAYAQUIL				','GUAYAS				','0','0939272222','KM 17 VIA A LA COSTA PTO. HONDO												','2011-12-12','2018-02-09'),(312,'Young Living Academy									','Ambar Zarahí Reinoso Ruiz 								','F','0953042421','Guayaquil','Guayas','0','0990250050','Chongon Av Principal Frente a Ciudad Olimpo. Diagonal a Contiagua												','2011-08-09','2018-02-09'),(327,'Young Living Academy									','Enzo Ayala Ollague 				','M','9999999999','Guayaquil	','Guayas	','999999999','0999424308','Lomas de Urdesa, Cdla. El Porton 	','2013-01-13','2018-02-09'),(1000,'Young Living Academy									',' Ivanna Rosemary Correa Peñafiel					','F','0955049077','Guayaquil','Guayas				','0','0989632013','Chongon Av 1era y Calle 2da						','2011-08-14','2018-02-09');
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aniolectivo`
--

DROP TABLE IF EXISTS `aniolectivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aniolectivo` (
  `id_aniolectivo` smallint(6) NOT NULL AUTO_INCREMENT,
  `fk_seccion` int(11) NOT NULL,
  `fk_sistcalif` int(11) NOT NULL,
  `anio_lectivo` char(12) NOT NULL,
  `estado_aniolectivo` char(2) DEFAULT NULL,
  PRIMARY KEY (`id_aniolectivo`),
  KEY `fk_seccion` (`fk_seccion`),
  KEY `fk_sistcalif` (`fk_sistcalif`),
  CONSTRAINT `aniolectivo_ibfk_1` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`),
  CONSTRAINT `aniolectivo_ibfk_2` FOREIGN KEY (`fk_sistcalif`) REFERENCES `sistemacalificaciones` (`id_sistcalif`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aniolectivo`
--

LOCK TABLES `aniolectivo` WRITE;
/*!40000 ALTER TABLE `aniolectivo` DISABLE KEYS */;
INSERT INTO `aniolectivo` VALUES (1,2,1,'2017-2018','CR');
/*!40000 ALTER TABLE `aniolectivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_Curso` varchar(30) NOT NULL,
  `estado_Curso` char(1) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'Inicial ','1'),(2,'Primero de Basico','1'),(3,'Segundo ','1'),(4,'Tercero de Basica','1'),(5,'Cuarto de Basico','1'),(6,'Quinto de Basico','1'),(7,'Sexto de Basico','1'),(8,'Octavo de Basico','1'),(9,'Noveno de Basica','1'),(10,'Decimo de Basica','1'),(11,'Primero de Bachillerato','1'),(12,'Segundo de Bachillerato','1'),(13,'Tercero de Bachillerato','1');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso_alumno`
--

DROP TABLE IF EXISTS `curso_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso_alumno` (
  `id_curso_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `fk_alumno` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_anio` smallint(6) NOT NULL,
  `estado` char(2) DEFAULT NULL,
  PRIMARY KEY (`id_curso_alumno`),
  KEY `fk_alumno` (`fk_alumno`),
  KEY `fk_curso` (`fk_curso`),
  KEY `fk_seccion` (`fk_seccion`),
  KEY `fk_anio` (`fk_anio`),
  CONSTRAINT `curso_alumno_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `curso_alumno_ibfk_2` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`),
  CONSTRAINT `curso_alumno_ibfk_3` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`),
  CONSTRAINT `curso_alumno_ibfk_4` FOREIGN KEY (`fk_anio`) REFERENCES `aniolectivo` (`id_aniolectivo`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso_alumno`
--

LOCK TABLES `curso_alumno` WRITE;
/*!40000 ALTER TABLE `curso_alumno` DISABLE KEYS */;
INSERT INTO `curso_alumno` VALUES (1,37,2,2,1,'A'),(2,49,2,2,1,'A'),(3,40,2,2,1,'A'),(4,66,2,2,1,'A'),(5,69,2,2,1,'A'),(6,74,2,2,1,'A'),(7,76,2,2,1,'A'),(8,78,2,2,1,'A'),(10,81,2,2,1,'A'),(11,83,2,2,1,'A'),(12,104,2,2,1,'A'),(13,107,2,2,1,'A'),(15,117,2,2,1,'A'),(16,132,2,2,1,'A'),(17,138,2,2,1,'A'),(18,149,2,2,1,'A'),(19,152,2,2,1,'A'),(20,173,2,2,1,'A'),(21,216,2,2,1,'A'),(22,235,2,2,1,'A'),(23,303,2,2,1,'A'),(24,312,2,2,1,'A'),(25,327,2,2,1,'A'),(26,1000,2,2,1,'A');
/*!40000 ALTER TABLE `curso_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_madre`
--

DROP TABLE IF EXISTS `datos_madre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_madre` (
  `id_datosmadre` int(11) NOT NULL AUTO_INCREMENT,
  `fk_alumno` int(11) NOT NULL,
  `nombre_madre` varchar(200) NOT NULL,
  `cedula_madre` varchar(10) NOT NULL,
  `ocupacion_madre` varchar(100) NOT NULL,
  `instruccion_madre` varchar(100) NOT NULL,
  `telefono_madre` varchar(13) NOT NULL,
  `correo_madre` varchar(100) NOT NULL,
  `direccion_madre` varchar(100) NOT NULL,
  `lugartra_madre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_datosmadre`),
  KEY `fk_alumno` (`fk_alumno`),
  CONSTRAINT `datos_madre_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_madre`
--

LOCK TABLES `datos_madre` WRITE;
/*!40000 ALTER TABLE `datos_madre` DISABLE KEYS */;
INSERT INTO `datos_madre` VALUES (1,117,'Narcisa Leon Salazar						','0917969586','Quehaceres Domesticos					','Primaria			','042738139			','0','San Geronimo 1 Mz 146 Sl 6							','0'),(2,327,'Andrea Ollague Alarcòn						','0','Administradora					','Superior			','0999424308			','aollague@younglivingacademy.edu.ec							','Lomas de Urdesa, Cdla. El Porton 							','Fundacion Rayo de Sol						'),(3,107,'Maria Tumbaco Alvarado						','0919894469','Enfermera					','Secundaria			','0982788730			','0','Chongon LA RENTA							','Clinica Spa Novavita S.A.						');
/*!40000 ALTER TABLE `datos_madre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_padre`
--

DROP TABLE IF EXISTS `datos_padre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_padre` (
  `id_datospadre` int(11) NOT NULL AUTO_INCREMENT,
  `fk_alumno` int(11) NOT NULL,
  `nombre_padre` varchar(200) NOT NULL,
  `cedula_padre` varchar(10) NOT NULL,
  `ocupacion_padre` varchar(100) NOT NULL,
  `instruccion_padre` varchar(100) NOT NULL,
  `telefono_padre` varchar(13) NOT NULL,
  `correo_padre` varchar(100) NOT NULL,
  `direccion_padre` varchar(100) NOT NULL,
  `lugartra_padre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_datospadre`),
  KEY `fk_alumno` (`fk_alumno`),
  CONSTRAINT `datos_padre_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_padre`
--

LOCK TABLES `datos_padre` WRITE;
/*!40000 ALTER TABLE `datos_padre` DISABLE KEYS */;
INSERT INTO `datos_padre` VALUES (1,117,'Edison Ayala Aguirre						','0','Agente de Transito					','Secundaria			','0','0','San Geronimo 1 Mz 146 Sl 6							','ESTACION PROGRESO						'),(2,327,'Luis Carlos Ayala						','0916597388','0','Superior			','0','0','Los Ceibos, Colinas de los Ceibos							','0'),(3,107,'Regulo Baidal Vega						','0','Electromecanico					','Secundaria			','0','0','Chongon LA RENTA							','0');
/*!40000 ALTER TABLE `datos_padre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_representante`
--

DROP TABLE IF EXISTS `datos_representante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_representante` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
  `fk_alumno` int(11) NOT NULL,
  `nombre_representante` varchar(100) NOT NULL,
  `direccion_representante` varchar(100) NOT NULL,
  `ocupacion_representante` varchar(100) NOT NULL,
  `lugar_trabajo_representante` varchar(100) DEFAULT NULL,
  `cedula_representante` varchar(10) NOT NULL,
  `telefono_representante` varchar(10) NOT NULL,
  `email_representante` varchar(80) NOT NULL,
  `relacion_representante` varchar(80) NOT NULL,
  PRIMARY KEY (`id_representante`),
  KEY `fk_alumno` (`fk_alumno`),
  CONSTRAINT `datos_representante_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_representante`
--

LOCK TABLES `datos_representante` WRITE;
/*!40000 ALTER TABLE `datos_representante` DISABLE KEYS */;
INSERT INTO `datos_representante` VALUES (2,117,'Narcisa Leon Salazar						','San Geronimo 1 Mz 146 Sl 6							','Quehaceres Domésticos					','Estacion Progreso						','0917969586','042738139	','0','Madre'),(3,327,'Luis Carlos Ayala						','Los Ceibos, Colinas de los Ceibos							','0','0','0','091659738-','0','Padre'),(4,107,'Maria Tumbaco Alvarado','Chongon LA RENTA		','Enfermera					','Clinica Spa Novavita S.A.','0919894469','0982788730','0','Madre'),(5,152,'Veronica Vargas Martinez','Km 24 via a la Costa San Geronimo 2 	','Comerciante					','0','220043315','0980143533','0','Madre'),(6,173,'Cynthia Salazar Estrada						','Chongon Av. Principal entre la 5ta y la 6ta 							','Obrera		','Nestle						','0925773822','0999683189','0','Madre'),(7,149,'Marilyn Reyes Rodriguez			','San Geronimo 2 Mz C-3 Sl. 8							','Quehaceres Domesticos			','Independiente					','0915310312','0991766086','0','Madre'),(8,1000,'Pedro Correa Villao						','Chongon Av 1era y Calle 2da							','Chofer					','Cooperativa de Chongon						','0','0999493567','0','Padre'),(9,69,'Andrea Villa Marcillo						','Flor de verano Mz 102 Sl. 11							','Quehaceres Domesticos					','0','1311323347','0967130821','0','Madre'),(10,81,'Roberto Leon Rosales						','Chongón Calle 4ta y Av 4ta Barrio la madre							','Chofer		','Taxista						','0911074201','0993935920','0','Padre'),(11,49,'Maria Guerrero Nuñez						','Chongon, La Renta MZ 11 Sl 8							','Quehaceres Domesticos					','0','0952739423','0989594759','0','Madre'),(12,83,'Lady Morales Lavayen						','COLIBRI 2 MZ A SL 3','Estudiante					','FINCA BOTANICA						','0925474876','0990396403','lady.di.mo@hotmail.com							','Madre'),(13,76,'Martha Pico Estrada						','San Geronimo 1 Mz 482 sl 52, atras del parque							','Auxiliar de Enfermeria					','Bio Medic						','0926537879','0967454747','m-janeth2010@hotmail.com							','Madre'),(14,104,'Gisela Salazar Cirino						','Chongoncito La Cadena							','Quehaceres Domesticos					','0','0921053369','0982928683','0','Madre'),(15,78,'Melissa Alvarado Macias						','Km 24 Via a la Costa San Geronimo 1 mz 39 Sl 5							','Quehaceres Domesticos					','0','0921431078','0988522167','0','Madre'),(16,138,'Mariela Zambrano Andrade						','Km 24 Via a laCosta							','Quehaceres Domesticos					','0','0930854286','0959472823','marielita_gt92@hotmail.com							','Madre'),(17,312,'Margarita Mero Mero						','Chongon Av Principal Frente a Ciudad Olimpo. Diagonal a Contiagua							','Costurera					','0','0908193717','		09900205','0','Abuela'),(18,74,'Yaritza Soriano Panchana						','Km 24 Via a la Costa Mz 6 Sl 1							','0','0','0950221309','0979780407','\"yariedu.sorianop@gmail.com							\"							','Madre'),(19,66,'Karem Gamarra Morante						','Ciudad Olimpo Mz 2558 V 20							','Quehaceres Domesticos					','0','0927504985','0999643270','karen-198921@hotmail.com							','Madre'),(20,37,'Patricia Calle Moran						','Valle Alto Etapa Paris Mz 1116 V 23							','Quehaceres Domesticos					','0','0914811849','0999166060','0','MADRE				'),(21,216,'Danny Tagle Macias						','CHORRILLO							','Profesor de Ingles				','Young Living Academy','0909325938','0981633278','0','Padre'),(22,40,'			VICTOR MURILLO									','URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2							','0	','0','	091922227','0939744168','0','PADRE				'),(23,132,'ERICA ROMERO						','0','ESTILISTA					','0','0928721612','0981066585','0','Madre'),(24,235,'MARIANA PONCE FIGUEROA						','32 Y GOMEZ RENDON							','PROFESORA				','YOUNG LIVING ACADEMY						','0','0','mari7_doll2014@hotmail.com							','Tia'),(25,303,'MICHELLE TOMALA						','KM 17 VIA A LA COSTA PTO. HONDO							','QUEHACERES DOMESTICOS					','0','0919450130','0986921148','mtomalacorrea@yahoo.com							','Madre');
/*!40000 ALTER TABLE `datos_representante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `datosalumno`
--

DROP TABLE IF EXISTS `datosalumno`;
/*!50001 DROP VIEW IF EXISTS `datosalumno`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `datosalumno` AS SELECT 
 1 AS `id_alumno`,
 1 AS `nombre_Alumno`,
 1 AS `institucion_Alumno`,
 1 AS `sexo_Alumno`,
 1 AS `cedula_Alumno`,
 1 AS `ciudad_Alumno`,
 1 AS `provincia_Alumno`,
 1 AS `telefono_Alumno`,
 1 AS `celular_Alumno`,
 1 AS `direccion_Alumno`,
 1 AS `fechanac_Alumno`,
 1 AS `nombre_representante`,
 1 AS `direccion_representante`,
 1 AS `ocupacion_representante`,
 1 AS `lugar_trabajo_representante`,
 1 AS `cedula_representante`,
 1 AS `telefono_representante`,
 1 AS `email_representante`,
 1 AS `relacion_representante`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `detalle_pensum_academico`
--

DROP TABLE IF EXISTS `detalle_pensum_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_pensum_academico` (
  `id_detalle_pensum` int(11) NOT NULL AUTO_INCREMENT,
  `fk_pensum` int(4) unsigned zerofill NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `estado` char(2) NOT NULL,
  PRIMARY KEY (`id_detalle_pensum`),
  KEY `fk_pensum` (`fk_pensum`),
  KEY `fk_profesor` (`fk_profesor`),
  KEY `fk_materia` (`fk_materia`),
  CONSTRAINT `detalle_pensum_academico_ibfk_1` FOREIGN KEY (`fk_pensum`) REFERENCES `pensum_academico` (`id_pensum`),
  CONSTRAINT `detalle_pensum_academico_ibfk_2` FOREIGN KEY (`fk_profesor`) REFERENCES `profesor` (`id_profesor`),
  CONSTRAINT `detalle_pensum_academico_ibfk_3` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_pensum_academico`
--

LOCK TABLES `detalle_pensum_academico` WRITE;
/*!40000 ALTER TABLE `detalle_pensum_academico` DISABLE KEYS */;
INSERT INTO `detalle_pensum_academico` VALUES (1,0014,20,1,'AB'),(2,0014,20,3,'AB');
/*!40000 ALTER TABLE `detalle_pensum_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_profesor`
--

DROP TABLE IF EXISTS `img_profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_profesor` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `ruta` varchar(500) DEFAULT NULL,
  `fechaSubida` date DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_profesor`
--

LOCK TABLES `img_profesor` WRITE;
/*!40000 ALTER TABLE `img_profesor` DISABLE KEYS */;
INSERT INTO `img_profesor` VALUES (1,'logo.png','../../Imagenes/Profesores/logo.png','2018-02-08'),(2,'logo.png','../../Imagenes/Profesores/logo.png','2018-02-08'),(3,'3165.png','../../Imagenes/Profesores/3165.png','2018-02-08'),(4,'MPHH.jpg','../../Imagenes/Profesores/MPHH.jpg','2018-02-08'),(5,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-08'),(6,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-08'),(7,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-08'),(8,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-08'),(9,'(90) Danny Tagle.mhtml','../../Imagenes/Profesores/(90) Danny Tagle.mhtml','2018-02-08'),(10,'(90) Danny Tagle.mhtml','../../Imagenes/Profesores/(90) Danny Tagle.mhtml','2018-02-08'),(11,'(90) Danny Tagle.mhtml','../../Imagenes/Profesores/(90) Danny Tagle.mhtml','2018-02-08'),(12,'foto 2.jpg','../../Imagenes/Profesores/foto 2.jpg','2018-02-08'),(13,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-08'),(14,'anie.jpg','../../Imagenes/Profesores/anie.jpg','2018-02-08'),(15,'MARIELA FOTO.jpg','../../Imagenes/Profesores/MARIELA FOTO.jpg','2018-02-09'),(16,'Mariela Foto.jpg','../../Imagenes/Profesores/Mariela Foto.jpg','2018-02-09'),(17,'IMG_20170912_101117.jpg','../../Imagenes/Profesores/IMG_20170912_101117.jpg','2018-02-09'),(18,'IMG_20170912_101117.jpg','../../Imagenes/Profesores/IMG_20170912_101117.jpg','2018-02-09'),(19,'IMG_20170921_081441.jpg','../../Imagenes/Profesores/IMG_20170921_081441.jpg','2018-02-09'),(20,'IMG_20170912_101700.jpg','../../Imagenes/Profesores/IMG_20170912_101700.jpg','2018-02-09'),(21,'IMG_20170914_110235.jpg','../../Imagenes/Profesores/IMG_20170914_110235.jpg','2018-02-09'),(22,'IMG_20170914_110235.jpg','../../Imagenes/Profesores/IMG_20170914_110235.jpg','2018-02-09'),(23,'IMG_20170912_100151.jpg','../../Imagenes/Profesores/IMG_20170912_100151.jpg','2018-02-09'),(24,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-14'),(25,'foto1.jpg','../../Imagenes/Profesores/foto1.jpg','2018-02-14'),(26,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-14'),(27,'foto.jpg','../../Imagenes/Profesores/foto.jpg','2018-02-14'),(28,'susy.jpg','../../Imagenes/Profesores/susy.jpg','2018-02-14');
/*!40000 ALTER TABLE `img_profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(100) NOT NULL,
  `estado_materia` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'Lenguaje y Literatura','1'),(2,'Matematica','1'),(3,'Educación Física','1'),(4,'Ingles','1'),(5,'Musica','1');
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL AUTO_INCREMENT,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_parcial` int(4) unsigned zerofill NOT NULL,
  `nota` smallint(6) NOT NULL,
  `nota2` smallint(6) NOT NULL,
  `nota3` smallint(6) NOT NULL,
  `nota4` smallint(6) NOT NULL,
  `nota5` smallint(6) NOT NULL,
  PRIMARY KEY (`id_notas`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (1,37,3,20,2,0001,10,10,8,9,10),(2,40,3,20,2,0001,5,6,10,10,10),(3,49,3,20,2,0001,10,8,9,10,10),(4,37,1,20,2,0001,10,10,10,1,5),(5,40,1,20,2,0001,5,6,6,6,6),(6,49,1,20,2,0001,8,8,8,8,8),(7,66,1,20,2,0001,9,9,9,9,9),(8,69,1,20,2,0001,10,10,10,10,10),(9,74,1,20,2,0001,8,9,6,3,10),(10,76,1,20,2,0001,5,10,10,5,2),(11,78,1,20,2,0001,6,3,6,2,1),(12,81,1,20,2,0001,6,5,6,3,10),(13,83,1,20,2,0001,10,1,10,10,1),(14,104,1,20,2,0001,10,1,10,10,10),(15,107,1,20,2,0001,10,10,10,10,10),(16,117,1,20,2,0001,10,1,10,10,9),(17,132,1,20,2,0001,8,8,8,8,8),(18,138,1,20,2,0001,8,8,8,8,8),(19,149,1,20,2,0001,8,8,8,10,10),(20,152,1,20,2,0001,10,1,0,10,1),(21,173,1,20,2,0001,10,1,0,5,6),(22,216,1,20,2,0001,6,2,6,3,1),(23,235,1,20,2,0001,2,3,5,6,2),(24,303,1,20,2,0001,5,6,10,10,10),(25,312,1,20,2,0001,10,8,8,8,8),(26,327,1,20,2,0001,8,8,8,8,8),(27,1000,1,20,2,0001,8,8,8,8,8);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parciales`
--

DROP TABLE IF EXISTS `parciales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parciales` (
  `codigo_parcial` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `parcial` varchar(20) DEFAULT NULL,
  `fk_periodo` int(4) unsigned zerofill NOT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`codigo_parcial`),
  KEY `fk_periodo` (`fk_periodo`),
  CONSTRAINT `parciales_ibfk_1` FOREIGN KEY (`fk_periodo`) REFERENCES `periodos` (`codigo_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parciales`
--

LOCK TABLES `parciales` WRITE;
/*!40000 ALTER TABLE `parciales` DISABLE KEYS */;
INSERT INTO `parciales` VALUES (0001,'Primer Parcial',0001,'1'),(0002,'Segundo Parcial',0001,'0');
/*!40000 ALTER TABLE `parciales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pensum_academico`
--

DROP TABLE IF EXISTS `pensum_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pensum_academico` (
  `id_pensum` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fk_anio` smallint(6) DEFAULT NULL,
  `fk_curso` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  PRIMARY KEY (`id_pensum`),
  KEY `fk_curso` (`fk_curso`),
  KEY `fk_anio` (`fk_anio`),
  CONSTRAINT `pensum_academico_ibfk_1` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`),
  CONSTRAINT `pensum_academico_ibfk_2` FOREIGN KEY (`fk_anio`) REFERENCES `aniolectivo` (`id_aniolectivo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pensum_academico`
--

LOCK TABLES `pensum_academico` WRITE;
/*!40000 ALTER TABLE `pensum_academico` DISABLE KEYS */;
INSERT INTO `pensum_academico` VALUES (0014,1,2,'2018-02-14','AB');
/*!40000 ALTER TABLE `pensum_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodos`
--

DROP TABLE IF EXISTS `periodos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodos` (
  `codigo_periodo` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `periodo` varchar(20) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`codigo_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodos`
--

LOCK TABLES `periodos` WRITE;
/*!40000 ALTER TABLE `periodos` DISABLE KEYS */;
INSERT INTO `periodos` VALUES (0001,'Primer Periodo','1'),(0002,'Segundo Periodo','0');
/*!40000 ALTER TABLE `periodos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_profesor` varchar(100) NOT NULL,
  `direccion_profesor` varchar(100) NOT NULL,
  `telefono_profesor` varchar(10) NOT NULL,
  `celular_profesor` varchar(100) NOT NULL,
  `cedula_profesor` varchar(10) NOT NULL,
  `email_profesor` varchar(100) NOT NULL,
  `fechanac_profesor` date DEFAULT NULL,
  `titulo_profesor` varchar(100) NOT NULL,
  `genero_profesor` char(1) NOT NULL,
  `imagen_profesor` int(11) NOT NULL,
  `fechareg_profesor` date DEFAULT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (4,'Maria Paulina Huayamave Hernandez','Urbanización Belo Horizonte Mz 20 Villa 7','04-6018441','09-85905708','0912766425','phuayamave@younglivingacademy.edu.ec','1981-02-06','Economista','F',4,'2018-02-08'),(8,'Verónica Alexandra Piguave Ruiz','Urb. Portón de Beata Bloque 2 Villa8','042995993','0982869315','0911605897','vpiguave@younglivingcademy.edu.ec','1967-03-28','Docente','F',8,'2018-02-08'),(9,'Danny Raul Tagle Macias','Samanes 6 Manzana 944 Villa 85','0985810268','0985810268','090932593-','dtagle@younglivingacademy.edu.ec','1978-08-25','Docente','M',9,'2018-02-08'),(12,'Greta Marjorie Ordoñez Santos','Alborada 7ma etapa mz 746 villa 3','042238672','0998146026','0905847547','gordonez@younglivingcademy.edu.ec','1957-03-03','Docente','F',12,'2018-02-08'),(14,'ANA LUISA ILLICACHI PUCUNA','CALLE C ENTRE LA 37 Y LA 38AVA','6059394','0989199965','0917843526','ailicachi@younglivingacadey.edu.ec','1979-08-04','DOCENTE','F',14,'2018-02-08'),(16,'Mariela Elizabeth Gaybor Vera','11ava N° 316 entre Colón y Sucre','0985283365','0985283365','0917234270','mgaybor@younglivingacademy.edu.ec','1981-08-11','Licenciada','F',16,'2018-02-09'),(17,'Saida Adriana Rivera León ','Ciudadela El Recreo Mz 352 V.16','042670106','0967332973','0916885635','arivera@younglivingacademy.edu.ec','1978-05-18','Docente','F',17,'2018-02-09'),(19,'Rafael Alejandro Escobar Alvarez','Alborada 12º Etapa, Manzana 09, Villa 19.','273684','0988746523','0917398547','rescobar@younglivingacademy.edu.ec','1988-07-18','Docente','M',19,'2018-02-09'),(20,'Jairo Josue Ariopaja Andrade','Acacias mz D2 villa 5','3855177','0960135484','0925655003','jariopaja@younglivingacademy.edu.ec','1993-11-09','Licenciado','M',20,'2018-02-09'),(21,'Jose Francisco Herbas De la Torre','Pradera 1 C2 Villa 19','042439570','0988193612','0903595544','jherbas@younglivingacademy.edu.ec','1953-09-03','Docente','M',21,'2018-02-09'),(23,'Andrea Elizabeth Cardenas Vaccaro','16 y Chambers','042670106','0960511218','0924961949','acardenas@younglivingacademy.edu.ec','1987-06-26','Docente','F',23,'2018-02-09'),(25,'Yomaira Karina Torres Santana','Chongón ','042738632','0996323114','0921052486','ytorres@younglivingacademy.edu.ec','1983-07-04','Lcda. Parvularia ','F',25,'2018-02-14'),(28,'Susana del Carmen Sarmiento Riera','Cdla. Las Acacias Bloque B2 Dpto. 01','042340796','0986101803','0918468166','ssarmiento@younglivingacademy.edu.ec','1977-07-24','Licenciada Parvularia','F',28,'2018-02-14');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion`
--

DROP TABLE IF EXISTS `seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion`
--

LOCK TABLES `seccion` WRITE;
/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
INSERT INTO `seccion` VALUES (1,'Inicial 2'),(2,'Primaria'),(3,'Secundaria'),(4,'Bachillerato');
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sistemacalificaciones`
--

DROP TABLE IF EXISTS `sistemacalificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sistemacalificaciones` (
  `id_sistcalif` int(11) NOT NULL AUTO_INCREMENT,
  `fk_seccion` int(11) NOT NULL,
  `nombre_sistcalif` varchar(100) NOT NULL,
  `descripcion_sistcalif` varchar(100) NOT NULL,
  `cant_perido_sistcalif` char(1) NOT NULL,
  `cant_parcial_sistcalif` char(1) NOT NULL,
  `nota_promocion_sistcalif` char(2) NOT NULL,
  `nota_rojo_sistcalif` char(2) NOT NULL,
  `estado_sistcalif` char(1) NOT NULL,
  PRIMARY KEY (`id_sistcalif`),
  KEY `fk_seccion` (`fk_seccion`),
  CONSTRAINT `sistemacalificaciones_ibfk_1` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistemacalificaciones`
--

LOCK TABLES `sistemacalificaciones` WRITE;
/*!40000 ALTER TABLE `sistemacalificaciones` DISABLE KEYS */;
INSERT INTO `sistemacalificaciones` VALUES (1,2,'Quimestre','gsg','4','4','4','4','1'),(2,3,'Quimestral','Sistema de Calificacion por Quimestre','2','3','7','5','1');
/*!40000 ALTER TABLE `sistemacalificaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `fk_profesor` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `contrasena` tinytext NOT NULL,
  `privilegio` char(5) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_profesor` (`fk_profesor`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_profesor`) REFERENCES `profesor` (`id_profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (0003,8,'jaicaza','7c222fb2927d828af22f592134e8932480637c0d','1','2018-02-14'),(0004,20,'jairo123','2d9b1ec56b464dad9dcfe29975adfbecf19e68df','C','2018-02-14');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vista_sistcalif`
--

DROP TABLE IF EXISTS `vista_sistcalif`;
/*!50001 DROP VIEW IF EXISTS `vista_sistcalif`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vista_sistcalif` AS SELECT 
 1 AS `id_sistcalif`,
 1 AS `descripcion`,
 1 AS `nombre_sistcalif`,
 1 AS `descripcion_sistcalif`,
 1 AS `cant_perido_sistcalif`,
 1 AS `cant_parcial_sistcalif`,
 1 AS `nota_promocion_sistcalif`,
 1 AS `nota_rojo_sistcalif`,
 1 AS `estado_sistcalif`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `datosalumno`
--

/*!50001 DROP VIEW IF EXISTS `datosalumno`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `datosalumno` AS (select `a`.`id_alumno` AS `id_alumno`,`a`.`nombre_Alumno` AS `nombre_Alumno`,`a`.`institucion_Alumno` AS `institucion_Alumno`,`a`.`sexo_Alumno` AS `sexo_Alumno`,`a`.`cedula_Alumno` AS `cedula_Alumno`,`a`.`ciudad_Alumno` AS `ciudad_Alumno`,`a`.`provincia_Alumno` AS `provincia_Alumno`,`a`.`telefono_Alumno` AS `telefono_Alumno`,`a`.`celular_Alumno` AS `celular_Alumno`,`a`.`direccion_Alumno` AS `direccion_Alumno`,`a`.`fechanac_Alumno` AS `fechanac_Alumno`,`r`.`nombre_representante` AS `nombre_representante`,`r`.`direccion_representante` AS `direccion_representante`,`r`.`ocupacion_representante` AS `ocupacion_representante`,`r`.`lugar_trabajo_representante` AS `lugar_trabajo_representante`,`r`.`cedula_representante` AS `cedula_representante`,`r`.`telefono_representante` AS `telefono_representante`,`r`.`email_representante` AS `email_representante`,`r`.`relacion_representante` AS `relacion_representante` from (`alumno` `a` join `datos_representante` `r` on((`a`.`id_alumno` = `r`.`fk_alumno`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vista_sistcalif`
--

/*!50001 DROP VIEW IF EXISTS `vista_sistcalif`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vista_sistcalif` AS (select `s`.`id_sistcalif` AS `id_sistcalif`,`e`.`descripcion` AS `descripcion`,`s`.`nombre_sistcalif` AS `nombre_sistcalif`,`s`.`descripcion_sistcalif` AS `descripcion_sistcalif`,`s`.`cant_perido_sistcalif` AS `cant_perido_sistcalif`,`s`.`cant_parcial_sistcalif` AS `cant_parcial_sistcalif`,`s`.`nota_promocion_sistcalif` AS `nota_promocion_sistcalif`,`s`.`nota_rojo_sistcalif` AS `nota_rojo_sistcalif`,`s`.`estado_sistcalif` AS `estado_sistcalif` from (`sistemacalificaciones` `s` join `seccion` `e` on((`s`.`fk_seccion` = `e`.`id_seccion`)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-14 15:09:22

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 02:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaacademico`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `institucion_Alumno` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_Alumno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sexo_Alumno` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_Alumno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad_Alumno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `provincia_Alumno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_Alumno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `celular_Alumno` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion_Alumno` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fechanac_Alumno` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `institucion_Alumno`, `nombre_Alumno`, `sexo_Alumno`, `cedula_Alumno`, `ciudad_Alumno`, `provincia_Alumno`, `telefono_Alumno`, `celular_Alumno`, `direccion_Alumno`, `fechanac_Alumno`, `fecha_registro`) VALUES
(37, 'Young Living Academy									', 'Jordan Andrés	 Lapo Calle 								', 'M', '3050090632', 'Madrid				', 'Madrid (España)				', '04605299		', '0999166060', 'Valle Alto Etapa Paris Mz 1116 V 23												', '2012-07-22', '2018-02-09'),
(40, 'UNIDAD EDUCATIVA TORREMOLINOS									', 'JOHAN ALEXANDER MURILLO PINEDA 							', 'M', '0953041571', 'GUAYAQUIL				', 'GUAYAS				', '05048801		', '0939744168', 'URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2												', '0011-09-23', '2018-02-09'),
(49, 'Young Living Academy									', 'Federico  Macias Guerrero 				', 'M', '0954162350', 'Guayaquil				', 'Guayas			', '0', '0989594759', 'Chongon, La Renta MZ 11 Sl 8												', '2012-05-22', '2018-02-09'),
(66, 'Young Living Academy									', 'David Jeremias Zuñiga Gamarra 								', 'M', '0954529178', 'Guayaquil', 'Guayas', '045036974	', '0999643270', 'Ciudad Olimpo Mz 2558 V 20												', '2011-11-13', '2018-02-09'),
(69, 'Young Living Academy									', 'Rosa Anahí Lascano Villa 							', 'F', '0944224807', 'Guayaquil		', 'Guayas		', '0', '0967130821', 'Flor de verano Mz 102 Sl. 11												', '2011-11-10', '2018-02-09'),
(74, 'Young Living Academy									', 'Aylen Jazmin Zambrano Soriano 								', 'F', '0954309357', 'Guayaquil				', 'Guayas				', '0', '0979780407', 'Km 24 Via a la Costa Mz 6 Sl 1												', '2012-06-18', '2018-02-09'),
(76, 'Young Living Academy									', 'Virginia Daniela Mero Pico 					', 'F', '0953643269', 'Guayaquil', 'Guayas', '043156010	', '0967454747', 'San Geronimo 1 Mz 482 sl 52, atras del parque												', '2012-02-17', '2018-02-09'),
(78, 'Young Living Academy									', 'Ivan Josua Moreira Alvarado 								', 'M', '0931948368', 'Guayaquil				', 'Guayas				', '0', '0988522167', 'Km 24 Via a la Costa San Geronimo 1 mz 39 Sl 5												', '2011-10-20', '2018-02-09'),
(81, 'Young Living Academy									', 'Leonel Emanuel Leon Granda 		', 'M', '0954089298', 'Guayaquil', 'Guayas', '042738308	', '0993935920', 'Chongón Calle 4ta y Av 4ta Barrio la madre												', '2012-04-06', '2018-02-09'),
(83, 'Young Living Academy									', 'Angelina Anahí Maldonado Morales 						', 'F', '0931971295', 'Guayaquil', 'Guayas', '0', '0990396403', 'COLIBRI 2 MZ A SL 3												', '2011-12-06', '2018-02-09'),
(104, 'Young Living Academy									', 'Marlon Alexander Morán Cirino 									', 'M', '0958648156', 'Lomas de Sargentillo				', 'Guayas', '0', '0982928683', 'Chongoncito La Cadena												', '2012-02-10', '2018-02-09'),
(107, 'Young Living Academy	', 'Jacob Exequiel Baidal Tumbaco 	', 'M', '0953873619', 'Guayaquil', 'Guayas', '9999999', '0982788730', 'Chongon LA RENTA', '2012-01-30', '2018-02-09'),
(117, 'Young Living Academy', 'Edison Manuel Ayala León ', 'M', '0954319885', 'Guayaquil', 'Guayas', '042738139', '0981463398', 'San Geronimo 1 Mz 146 Sl 6', '1995-09-04', '2018-02-09'),
(132, 'ESCUELA SIMON BOLIVAR									', '	BRIANNA MAITE ORTEGA ROMERO  						', 'F', '0954347803', 'GUAYAQUIL				', 'GUAYAS				', '042738879	', '0981066585', 'CHONGON MZ 28 SL 9												', '2011-08-31', '2018-02-09'),
(138, 'Young Living Academy									', ' Melanie Estefany Olives Zambrano								', 'F', '0932143811', 'Guayaquil				', 'Guayas				', '042738210	', '0959472823', '			Km 24 Via a laCosta																	', '2012-06-19', '2018-02-09'),
(149, 'Young Living Academy									', 'Nebraska Valeska Coronel Reyes 								', 'F', '0954618633', 'Guayaquil', 'Guayas', '0', '0991766086', 'San Geronimo 2 Mz C-3 Sl. 8	', '2012-07-14', '2018-02-09'),
(152, 'Young Living Academy								', 'Cristopher Mathias Barreiro Vargas 		', 'M', '0953966314', 'Guayaquil', 'Guayas', '0', '0969617091', 'Km 24 via a la Costa San Geronimo 2 ', '2012-02-01', '2018-02-09'),
(173, 'Young Living Academy	', 'Lenin Alberto Benavides Salazar 								', 'M', '0932112998', 'Guayaquil', 'Guayas				', '0', '0979975772', 'Chongon Av. Principal entre la 5ta y la 6ta 												', '2012-05-24', '2018-02-09'),
(216, 'Young Living Academy									', 'Mia Alejandra	Tagle Espinoza 						', 'F', '0953616836', 'Guayaquil				', 'Guayas				', '06025092		', '0981633278', 'CHORRILLO												', '2011-07-17', '2018-02-09'),
(235, 'Young Living Academy									', 'SHEYLA KATHERINA VILLON PONCE 								', 'F', '0932204266', 'Guayaquil				', 'Guayas				', '0', '0989467650', '		26 Y CAP. NAJERA 													', '2012-10-05', '2018-02-09'),
(303, 'ANNE SULLIVAN									', 'ASHLEY DAMARIS AYALA TOMALA 								', 'F', '0953242740', 'GUAYAQUIL				', 'GUAYAS				', '0', '0939272222', 'KM 17 VIA A LA COSTA PTO. HONDO												', '2011-12-12', '2018-02-09'),
(312, 'Young Living Academy									', 'Ambar Zarahí Reinoso Ruiz 								', 'F', '0953042421', 'Guayaquil', 'Guayas', '0', '0990250050', 'Chongon Av Principal Frente a Ciudad Olimpo. Diagonal a Contiagua												', '2011-08-09', '2018-02-09'),
(327, 'Young Living Academy									', 'Enzo Ayala Ollague 				', 'M', '9999999999', 'Guayaquil	', 'Guayas	', '999999999', '0999424308', 'Lomas de Urdesa, Cdla. El Porton 	', '2013-01-13', '2018-02-09'),
(1000, 'Young Living Academy									', ' Ivanna Rosemary Correa Peñafiel					', 'F', '0955049077', 'Guayaquil', 'Guayas				', '0', '0989632013', 'Chongon Av 1era y Calle 2da						', '2011-08-14', '2018-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `alumnos_supletorio`
--

CREATE TABLE `alumnos_supletorio` (
  `id_supletorio` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `alumnos_supletorio`
--

INSERT INTO `alumnos_supletorio` (`id_supletorio`, `fk_alumno`, `fk_curso`, `fk_anio`, `fk_profesor`, `fk_materia`) VALUES
(1, 37, 3, 1, 20, 4),
(2, 40, 3, 1, 20, 4),
(3, 49, 3, 1, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aniolectivo`
--

CREATE TABLE `aniolectivo` (
  `id_aniolectivo` smallint(6) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_sistcalif` int(11) NOT NULL,
  `anio_lectivo` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `estado_aniolectivo` char(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aniolectivo`
--

INSERT INTO `aniolectivo` (`id_aniolectivo`, `fk_seccion`, `fk_sistcalif`, `anio_lectivo`, `estado_aniolectivo`) VALUES
(1, 2, 1, '2017-2018', 'AB'),
(2, 3, 2, '2017-2018', 'AB'),
(3, 1, 3, '2017-2018', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_parcial` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `fj` int(2) DEFAULT NULL,
  `fi` int(2) DEFAULT NULL,
  `fa` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `fk_alumno`, `fk_profesor`, `fk_curso`, `fk_parcial`, `fk_anio`, `fj`, `fi`, `fa`) VALUES
(1, 37, 4, 3, 0001, 1, 2, 0, 0),
(2, 49, 4, 3, 0001, 1, 3, 0, 0),
(3, 40, 4, 3, 0001, 1, 4, 0, 0),
(4, 37, 4, 3, 0002, 1, 1, 1, 1),
(5, 49, 4, 3, 0002, 1, 2, 1, 0),
(6, 40, 4, 3, 0002, 1, 1, 0, 0),
(7, 37, 4, 3, 0003, 1, 1, 1, 1),
(8, 49, 4, 3, 0003, 1, 2, 2, 2),
(9, 40, 4, 3, 0003, 1, 1, 1, 1),
(10, 37, 4, 3, 0004, 1, 6, 2, 2),
(11, 49, 4, 3, 0004, 1, 1, 1, 1),
(12, 40, 4, 3, 0004, 1, 1, 1, 1),
(13, 37, 4, 3, 0005, 1, 1, 1, 1),
(14, 49, 4, 3, 0005, 1, 1, 0, 0),
(15, 40, 4, 3, 0005, 1, 1, 0, 0),
(16, 37, 4, 3, 0006, 1, 3, 1, 1),
(17, 49, 4, 3, 0006, 1, 2, 0, 0),
(18, 40, 4, 3, 0006, 1, 1, 1, 0),
(19, 66, 25, 1, 0001, 3, 3, 1, 2),
(20, 69, 25, 1, 0001, 3, 0, 0, 0),
(21, 74, 25, 1, 0001, 3, 5, 5, 5),
(22, 66, 25, 1, 0002, 3, 0, 0, 0),
(23, 69, 25, 1, 0002, 3, 0, 0, 0),
(24, 74, 25, 1, 0002, 3, 0, 0, 0),
(25, 66, 25, 1, 0003, 3, 0, 0, 0),
(26, 69, 25, 1, 0003, 3, 3, 2, 2),
(27, 74, 25, 1, 0003, 3, 0, 0, 0),
(28, 66, 25, 1, 0004, 3, 1, 0, 0),
(29, 69, 25, 1, 0004, 3, 1, 1, 1),
(30, 74, 25, 1, 0004, 3, 1, 1, 1),
(31, 66, 25, 1, 0005, 3, 1, 0, 0),
(32, 69, 25, 1, 0005, 3, 0, 1, 0),
(33, 74, 25, 1, 0005, 3, 0, 0, 1),
(34, 66, 25, 1, 0006, 3, 1, 0, 1),
(35, 69, 25, 1, 0006, 3, 1, 1, 1),
(36, 74, 25, 1, 0006, 3, 5, 5, 5),
(37, 76, 28, 2, 0001, 1, 1, 1, 1),
(38, 78, 28, 2, 0001, 1, 1, 1, 1),
(39, 81, 28, 2, 0001, 1, 1, 0, 0),
(40, 83, 28, 2, 0001, 1, 0, 0, 0),
(41, 104, 28, 2, 0001, 1, 0, 0, 0),
(42, 107, 28, 2, 0001, 1, 0, 1, 0),
(43, 117, 28, 2, 0001, 1, 0, 1, 0),
(44, 132, 28, 2, 0001, 1, 1, 0, 0),
(45, 138, 28, 2, 0001, 1, 0, 1, 0),
(46, 149, 28, 2, 0001, 1, 1, 0, 1),
(47, 152, 28, 2, 0001, 1, 1, 2, 0),
(48, 173, 28, 2, 0001, 1, 2, 2, 2),
(49, 216, 28, 2, 0001, 1, 3, 1, 1),
(50, 235, 28, 2, 0001, 1, 0, 0, 0),
(51, 303, 28, 2, 0001, 1, 0, 0, 0),
(52, 312, 28, 2, 0001, 1, 0, 0, 0),
(53, 327, 28, 2, 0001, 1, 5, 0, 0),
(54, 1000, 28, 2, 0001, 1, 0, 0, 5),
(55, 76, 28, 2, 0002, 1, 5, 5, 5),
(56, 78, 28, 2, 0002, 1, 1, 1, 1),
(57, 81, 28, 2, 0002, 1, 1, 0, 0),
(58, 83, 28, 2, 0002, 1, 1, 0, 0),
(59, 104, 28, 2, 0002, 1, 0, 1, 0),
(60, 107, 28, 2, 0002, 1, 0, 0, 1),
(61, 117, 28, 2, 0002, 1, 0, 0, 3),
(62, 132, 28, 2, 0002, 1, 0, 0, 8),
(63, 138, 28, 2, 0002, 1, 0, 4, 0),
(64, 149, 28, 2, 0002, 1, 0, 1, 0),
(65, 152, 28, 2, 0002, 1, 1, 0, 0),
(66, 173, 28, 2, 0002, 1, 0, 0, 0),
(67, 216, 28, 2, 0002, 1, 0, 0, 0),
(68, 235, 28, 2, 0002, 1, 0, 0, 0),
(69, 303, 28, 2, 0002, 1, 1, 0, 0),
(70, 312, 28, 2, 0002, 1, 0, 0, 1),
(71, 327, 28, 2, 0002, 1, 0, 1, 0),
(72, 1000, 28, 2, 0002, 1, 0, 1, 0),
(73, 76, 28, 2, 0003, 1, 0, 0, 0),
(74, 78, 28, 2, 0003, 1, 0, 0, 0),
(75, 81, 28, 2, 0003, 1, 0, 0, 0),
(76, 83, 28, 2, 0003, 1, 0, 0, 0),
(77, 104, 28, 2, 0003, 1, 0, 0, 0),
(78, 107, 28, 2, 0003, 1, 1, 1, 1),
(79, 117, 28, 2, 0003, 1, 0, 0, 0),
(80, 132, 28, 2, 0003, 1, 0, 0, 0),
(81, 138, 28, 2, 0003, 1, 1, 0, 0),
(82, 149, 28, 2, 0003, 1, 0, 0, 0),
(83, 152, 28, 2, 0003, 1, 0, 1, 0),
(84, 173, 28, 2, 0003, 1, 0, 0, 1),
(85, 216, 28, 2, 0003, 1, 0, 1, 0),
(86, 235, 28, 2, 0003, 1, 2, 0, 2),
(87, 303, 28, 2, 0003, 1, 0, 2, 0),
(88, 312, 28, 2, 0003, 1, 0, 1, 0),
(89, 327, 28, 2, 0003, 1, 2, 0, 0),
(90, 1000, 28, 2, 0003, 1, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comportamiento`
--

CREATE TABLE `comportamiento` (
  `id_conducta` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_parcial` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `nota` char(1) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `comportamiento`
--

INSERT INTO `comportamiento` (`id_conducta`, `fk_alumno`, `fk_profesor`, `fk_curso`, `fk_parcial`, `fk_anio`, `nota`) VALUES
(1, 37, 4, 3, 0001, 1, 'B'),
(2, 49, 4, 3, 0001, 1, 'A'),
(3, 40, 4, 3, 0001, 1, 'C'),
(4, 37, 4, 3, 0002, 1, 'A'),
(5, 49, 4, 3, 0002, 1, 'A'),
(6, 40, 4, 3, 0002, 1, 'A'),
(7, 37, 4, 3, 0003, 1, 'A'),
(8, 49, 4, 3, 0003, 1, 'D'),
(9, 40, 4, 3, 0003, 1, 'A'),
(10, 37, 4, 3, 0004, 1, 'A'),
(11, 49, 4, 3, 0004, 1, 'B'),
(12, 40, 4, 3, 0004, 1, 'A'),
(13, 37, 4, 3, 0005, 1, 'A'),
(14, 49, 4, 3, 0005, 1, 'A'),
(15, 40, 4, 3, 0005, 1, 'A'),
(16, 37, 4, 3, 0006, 1, 'A'),
(17, 49, 4, 3, 0006, 1, 'C'),
(18, 40, 4, 3, 0006, 1, 'A'),
(19, 66, 25, 1, 0001, 3, 'A'),
(20, 69, 25, 1, 0001, 3, 'B'),
(21, 74, 25, 1, 0001, 3, 'B'),
(22, 66, 25, 1, 0002, 3, 'B'),
(23, 69, 25, 1, 0002, 3, 'A'),
(24, 74, 25, 1, 0002, 3, 'B'),
(25, 66, 25, 1, 0003, 3, 'B'),
(26, 69, 25, 1, 0003, 3, 'A'),
(27, 74, 25, 1, 0003, 3, 'B'),
(28, 66, 25, 1, 0001, 3, 'A'),
(29, 69, 25, 1, 0001, 3, 'A'),
(30, 74, 25, 1, 0001, 3, 'A'),
(31, 66, 25, 1, 0005, 3, 'A'),
(32, 69, 25, 1, 0005, 3, 'A'),
(33, 74, 25, 1, 0005, 3, 'A'),
(34, 66, 25, 1, 0006, 3, 'A'),
(35, 69, 25, 1, 0006, 3, 'A'),
(36, 74, 25, 1, 0006, 3, 'A'),
(37, 66, 25, 1, 0004, 3, 'A'),
(38, 69, 25, 1, 0004, 3, 'A'),
(39, 74, 25, 1, 0004, 3, 'A'),
(40, 76, 28, 2, 0001, 1, 'A'),
(41, 78, 28, 2, 0001, 1, 'C'),
(42, 81, 28, 2, 0001, 1, 'A'),
(43, 83, 28, 2, 0001, 1, 'A'),
(44, 104, 28, 2, 0001, 1, 'A'),
(45, 107, 28, 2, 0001, 1, 'A'),
(46, 117, 28, 2, 0001, 1, 'A'),
(47, 132, 28, 2, 0001, 1, 'B'),
(48, 138, 28, 2, 0001, 1, 'A'),
(49, 149, 28, 2, 0001, 1, 'B'),
(50, 152, 28, 2, 0001, 1, 'A'),
(51, 173, 28, 2, 0001, 1, 'B'),
(52, 216, 28, 2, 0001, 1, 'A'),
(53, 235, 28, 2, 0001, 1, 'C'),
(54, 303, 28, 2, 0001, 1, 'A'),
(55, 312, 28, 2, 0001, 1, 'C'),
(56, 327, 28, 2, 0001, 1, 'A'),
(57, 1000, 28, 2, 0001, 1, 'A'),
(58, 76, 28, 2, 0002, 1, 'A'),
(59, 78, 28, 2, 0002, 1, 'A'),
(60, 81, 28, 2, 0002, 1, 'A'),
(61, 83, 28, 2, 0002, 1, 'A'),
(62, 104, 28, 2, 0002, 1, 'A'),
(63, 107, 28, 2, 0002, 1, 'A'),
(64, 117, 28, 2, 0002, 1, 'A'),
(65, 132, 28, 2, 0002, 1, 'A'),
(66, 138, 28, 2, 0002, 1, 'A'),
(67, 149, 28, 2, 0002, 1, 'A'),
(68, 152, 28, 2, 0002, 1, 'A'),
(69, 173, 28, 2, 0002, 1, 'A'),
(70, 216, 28, 2, 0002, 1, 'A'),
(71, 235, 28, 2, 0002, 1, 'A'),
(72, 303, 28, 2, 0002, 1, 'A'),
(73, 312, 28, 2, 0002, 1, 'A'),
(74, 327, 28, 2, 0002, 1, 'A'),
(75, 1000, 28, 2, 0002, 1, 'A'),
(76, 76, 28, 2, 0003, 1, 'B'),
(77, 78, 28, 2, 0003, 1, 'B'),
(78, 81, 28, 2, 0003, 1, 'B'),
(79, 83, 28, 2, 0003, 1, 'A'),
(80, 104, 28, 2, 0003, 1, 'A'),
(81, 107, 28, 2, 0003, 1, 'A'),
(82, 117, 28, 2, 0003, 1, 'A'),
(83, 132, 28, 2, 0003, 1, 'A'),
(84, 138, 28, 2, 0003, 1, 'A'),
(85, 149, 28, 2, 0003, 1, 'A'),
(86, 152, 28, 2, 0003, 1, 'A'),
(87, 173, 28, 2, 0003, 1, 'A'),
(88, 216, 28, 2, 0003, 1, 'A'),
(89, 235, 28, 2, 0003, 1, 'A'),
(90, 303, 28, 2, 0003, 1, 'A'),
(91, 312, 28, 2, 0003, 1, 'A'),
(92, 327, 28, 2, 0003, 1, 'A'),
(93, 1000, 28, 2, 0003, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nombre_Curso` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado_Curso` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`id_curso`, `nombre_Curso`, `estado_Curso`) VALUES
(1, 'Inicial 2', '1'),
(2, 'Primero de Básico', '1'),
(3, 'Segundo Básico', '1'),
(4, 'Tercero de Básico', '1');

-- --------------------------------------------------------

--
-- Table structure for table `curso_alumno`
--

CREATE TABLE `curso_alumno` (
  `id_curso_alumno` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_anio` smallint(6) NOT NULL,
  `estado` char(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curso_alumno`
--

INSERT INTO `curso_alumno` (`id_curso_alumno`, `fk_alumno`, `fk_curso`, `fk_seccion`, `fk_anio`, `estado`) VALUES
(1, 37, 3, 2, 1, 'A'),
(2, 49, 3, 2, 1, 'A'),
(3, 40, 3, 2, 1, 'A'),
(4, 66, 1, 1, 3, 'A'),
(5, 69, 1, 1, 3, 'A'),
(6, 74, 1, 1, 3, 'A'),
(7, 76, 2, 2, 1, 'A'),
(8, 78, 2, 2, 1, 'A'),
(10, 81, 2, 2, 1, 'A'),
(11, 83, 2, 2, 1, 'A'),
(12, 104, 2, 2, 1, 'A'),
(13, 107, 2, 2, 1, 'A'),
(15, 117, 2, 2, 1, 'A'),
(16, 132, 2, 2, 1, 'A'),
(17, 138, 2, 2, 1, 'A'),
(18, 149, 2, 2, 1, 'A'),
(19, 152, 2, 2, 1, 'A'),
(20, 173, 2, 2, 1, 'A'),
(21, 216, 2, 2, 1, 'A'),
(22, 235, 2, 2, 1, 'A'),
(23, 303, 2, 2, 1, 'A'),
(24, 312, 2, 2, 1, 'A'),
(25, 327, 2, 2, 1, 'A'),
(26, 1000, 2, 2, 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `datos_madre`
--

CREATE TABLE `datos_madre` (
  `id_datosmadre` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `nombre_madre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_madre` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion_madre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instruccion_madre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_madre` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `correo_madre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_madre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lugartra_madre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datos_madre`
--

INSERT INTO `datos_madre` (`id_datosmadre`, `fk_alumno`, `nombre_madre`, `cedula_madre`, `ocupacion_madre`, `instruccion_madre`, `telefono_madre`, `correo_madre`, `direccion_madre`, `lugartra_madre`) VALUES
(1, 117, 'Narcisa Leon Salazar						', '0917969586', 'Quehaceres Domesticos					', 'Primaria			', '042738139			', '0', 'San Geronimo 1 Mz 146 Sl 6							', '0'),
(2, 327, 'Andrea Ollague Alarcòn						', '0', 'Administradora					', 'Superior			', '0999424308			', 'aollague@younglivingacademy.edu.ec							', 'Lomas de Urdesa, Cdla. El Porton 							', 'Fundacion Rayo de Sol						'),
(3, 107, 'Maria Tumbaco Alvarado						', '0919894469', 'Enfermera					', 'Secundaria			', '0982788730			', '0', 'Chongon LA RENTA							', 'Clinica Spa Novavita S.A.						'),
(4, 37, 'Patricia Calle Moran', '0914811849', 'notas_parcialesQuehaceres Domesticos', 'Secundaria			', '0999166060			', '0', 'Valle Alto Etapa Paris Mz 1116 V 23							', '0'),
(5, 40, 'Gabriela  Pineda					', '0922401591', 'Empleada Privada					', 'Secundaria		', '0986669676			', '0', 'URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2							', '0'),
(6, 152, 'Veronica Vargas Martinez						', '2200433155', 'Comerciante					', 'Secundaria			', '*0980143533		', '0', 'Km 24 via a la Costa San Geronimo 2 							', '0'),
(7, 173, 'Cynthia Salazar Estrada						', '0925773822', 'Obrera					', 'Secundaria			', '0999683189			', '0', 'Chongon Av. Principal entre la 5ta y la 6ta 							', 'Nestle						'),
(8, 149, 'Marilyn Reyes Rodriguez						', '0915310312', 'Quehaceres Domesticos					', 'Primaria			', '0991766086			', '0', 'San Geronimo 2 Mz C-3 Sl. 8							', '0');

-- --------------------------------------------------------

--
-- Table structure for table `datos_padre`
--

CREATE TABLE `datos_padre` (
  `id_datospadre` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `nombre_padre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_padre` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion_padre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instruccion_padre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_padre` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `correo_padre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_padre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lugartra_padre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datos_padre`
--

INSERT INTO `datos_padre` (`id_datospadre`, `fk_alumno`, `nombre_padre`, `cedula_padre`, `ocupacion_padre`, `instruccion_padre`, `telefono_padre`, `correo_padre`, `direccion_padre`, `lugartra_padre`) VALUES
(1, 117, 'Edison Ayala Aguirre						', '0', 'Agente de Transito					', 'Secundaria			', '0', '0', 'San Geronimo 1 Mz 146 Sl 6							', 'ESTACION PROGRESO						'),
(2, 327, 'Luis Carlos Ayala						', '0916597388', '0', 'Superior			', '0', '0', 'Los Ceibos, Colinas de los Ceibos							', '0'),
(3, 107, 'Regulo Baidal Vega						', '0', 'Electromecanico					', 'Secundaria			', '0', '0', 'Chongon LA RENTA							', '0'),
(4, 37, 'Patricio Lapo Alama						', '1102976295', 'Empleado Eventual - Construccion					', 'Superior			', '0980131490			', '0', 'Valle Alto Etapa Paris Mz 1116 V 23							', '0'),
(5, 40, 'Victor Murillo					', '0919222273', '0', 'Superior			', '0986669676			', '0', 'URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2							', '0'),
(6, 152, 'Dario Barreiro Intriago						', '0923343362', 'Comerciante', 'Secundaria', '0969617091			', '0', 'Km 24 via a la Costa San Geronimo 2 	', '0'),
(7, 173, 'Julio Benavides Contreras						', '0', 'Empleado; Bananera					', 'Secundaria			', '0', '0', '0', '0'),
(8, 149, 'José Coronel Cirino						', '0915310312', 'Comerciante					', 'Secundaria			', '0992262226			', '0', 'San Geronimo 2 Mz C-3 Sl. 8							', 'Independiente						');

-- --------------------------------------------------------

--
-- Table structure for table `datos_representante`
--

CREATE TABLE `datos_representante` (
  `id_representante` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `nombre_representante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_representante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ocupacion_representante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lugar_trabajo_representante` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cedula_representante` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_representante` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email_representante` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `relacion_representante` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datos_representante`
--

INSERT INTO `datos_representante` (`id_representante`, `fk_alumno`, `nombre_representante`, `direccion_representante`, `ocupacion_representante`, `lugar_trabajo_representante`, `cedula_representante`, `telefono_representante`, `email_representante`, `relacion_representante`) VALUES
(2, 117, 'Narcisa Leon Salazar						', 'San Geronimo 1 Mz 146 Sl 6							', 'Quehaceres Domésticos					', 'Estacion Progreso						', '0917969586', '042738139	', '0', 'Madre'),
(3, 327, 'Luis Carlos Ayala						', 'Los Ceibos, Colinas de los Ceibos							', '0', '0', '0', '091659738-', '0', 'Padre'),
(4, 107, 'Maria Tumbaco Alvarado', 'Chongon LA RENTA		', 'Enfermera					', 'Clinica Spa Novavita S.A.', '0919894469', '0982788730', '0', 'Madre'),
(5, 152, 'Veronica Vargas Martinez', 'Km 24 via a la Costa San Geronimo 2 	', 'Comerciante					', '0', '220043315', '0980143533', '0', 'Madre'),
(6, 173, 'Cynthia Salazar Estrada						', 'Chongon Av. Principal entre la 5ta y la 6ta 							', 'Obrera		', 'Nestle						', '0925773822', '0999683189', '0', 'Madre'),
(7, 149, 'Marilyn Reyes Rodriguez			', 'San Geronimo 2 Mz C-3 Sl. 8							', 'Quehaceres Domesticos			', 'Independiente					', '0915310312', '0991766086', '0', 'Madre'),
(8, 1000, 'Pedro Correa Villao						', 'Chongon Av 1era y Calle 2da							', 'Chofer					', 'Cooperativa de Chongon						', '0', '0999493567', '0', 'Padre'),
(9, 69, 'Andrea Villa Marcillo						', 'Flor de verano Mz 102 Sl. 11							', 'Quehaceres Domesticos					', '0', '1311323347', '0967130821', '0', 'Madre'),
(10, 81, 'Roberto Leon Rosales						', 'Chongón Calle 4ta y Av 4ta Barrio la madre							', 'Chofer		', 'Taxista						', '0911074201', '0993935920', '0', 'Padre'),
(11, 49, 'Maria Guerrero Nuñez						', 'Chongon, La Renta MZ 11 Sl 8							', 'Quehaceres Domesticos					', '0', '0952739423', '0989594759', '0', 'Madre'),
(12, 83, 'Lady Morales Lavayen						', 'COLIBRI 2 MZ A SL 3', 'Estudiante					', 'FINCA BOTANICA						', '0925474876', '0990396403', 'lady.di.mo@hotmail.com							', 'Madre'),
(13, 76, 'Martha Pico Estrada						', 'San Geronimo 1 Mz 482 sl 52, atras del parque							', 'Auxiliar de Enfermeria					', 'Bio Medic						', '0926537879', '0967454747', 'm-janeth2010@hotmail.com							', 'Madre'),
(14, 104, 'Gisela Salazar Cirino						', 'Chongoncito La Cadena							', 'Quehaceres Domesticos					', '0', '0921053369', '0982928683', '0', 'Madre'),
(15, 78, 'Melissa Alvarado Macias						', 'Km 24 Via a la Costa San Geronimo 1 mz 39 Sl 5							', 'Quehaceres Domesticos					', '0', '0921431078', '0988522167', '0', 'Madre'),
(16, 138, 'Mariela Zambrano Andrade						', 'Km 24 Via a laCosta							', 'Quehaceres Domesticos					', '0', '0930854286', '0959472823', 'marielita_gt92@hotmail.com							', 'Madre'),
(17, 312, 'Margarita Mero Mero						', 'Chongon Av Principal Frente a Ciudad Olimpo. Diagonal a Contiagua							', 'Costurera					', '0', '0908193717', '		09900205', '0', 'Abuela'),
(18, 74, 'Yaritza Soriano Panchana						', 'Km 24 Via a la Costa Mz 6 Sl 1							', '0', '0', '0950221309', '0979780407', '\"yariedu.sorianop@gmail.com							\"							', 'Madre'),
(19, 66, 'Karem Gamarra Morante						', 'Ciudad Olimpo Mz 2558 V 20							', 'Quehaceres Domesticos					', '0', '0927504985', '0999643270', 'karen-198921@hotmail.com							', 'Madre'),
(20, 37, 'Patricia Calle Moran						', 'Valle Alto Etapa Paris Mz 1116 V 23							', 'Quehaceres Domesticos					', '0', '0914811849', '0999166060', '0', 'MADRE				'),
(21, 216, 'Danny Tagle Macias						', 'CHORRILLO							', 'Profesor de Ingles				', 'Young Living Academy', '0909325938', '0981633278', '0', 'Padre'),
(22, 40, '			VICTOR MURILLO									', 'URB. VILLAS DEL BOSQUE MZ 2731 VILLA 2							', '0	', '0', '	091922227', '0939744168', '0', 'PADRE				'),
(23, 132, 'ERICA ROMERO						', '0', 'ESTILISTA					', '0', '0928721612', '0981066585', '0', 'Madre'),
(24, 235, 'MARIANA PONCE FIGUEROA						', '32 Y GOMEZ RENDON							', 'PROFESORA				', 'YOUNG LIVING ACADEMY						', '0', '0', 'mari7_doll2014@hotmail.com							', 'Tia'),
(25, 303, 'MICHELLE TOMALA						', 'KM 17 VIA A LA COSTA PTO. HONDO							', 'QUEHACERES DOMESTICOS					', '0', '0919450130', '0986921148', 'mtomalacorrea@yahoo.com							', 'Madre');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_materia_inicial`
--

CREATE TABLE `detalle_materia_inicial` (
  `id_detalle_materia` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_materia` int(2) DEFAULT NULL,
  `actividad` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `estado` varchar(1) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `detalle_materia_inicial`
--

INSERT INTO `detalle_materia_inicial` (`id_detalle_materia`, `fk_materia`, `actividad`, `estado`) VALUES
(0001, 1, 'Actúa con independencia y responsabilidad', '1'),
(0002, 1, 'Se realaciona con facilidad', '1'),
(0003, 1, 'Se identifica con su entorno', '1'),
(0004, 1, 'Expresa sentimientos y es afectuoso', '1'),
(0005, 1, 'Conoce y utiliza las partes de su cuerpo', '1'),
(0006, 1, 'Adquiere hábitos de higiene', '1'),
(0007, 1, 'Le gusta la cultura física', '1'),
(0008, 1, 'Valora su medio ambiente', '1'),
(0009, 1, 'Logra la coordinadora motriz', '1'),
(0010, 2, 'Es córtez y respecta a sus compañeros', '1'),
(0011, 2, 'Comparte materiales', '1'),
(0012, 2, 'Actúa en clases', '1'),
(0013, 2, 'Participa en actividades cívicas', '1'),
(0014, 3, 'Agrupa objetos de acuerdo a su tamaño', '1'),
(0015, 3, 'Reconoce nociones cuantitativas y espacio', '1'),
(0016, 3, 'Identifica colores', '1'),
(0017, 3, 'Reconoce las figuras geometricas', '1'),
(0018, 3, 'Identifica,escribe numeros y simbolos', '1'),
(0019, 4, 'Disfruta de las actividades del jardin', '1'),
(0020, 4, 'Respecta y valora la familia', '1'),
(0021, 4, 'Reconoce las funciones de los sentidos', '1'),
(0022, 4, 'Demuestra respecto y amor hacia la naturaleza', '1'),
(0023, 4, 'Reconoce los simbolos patrios', '1'),
(0024, 5, 'Se expresa con claridad y sabe escuchar', '1'),
(0025, 5, 'Identifica y diferencia el sonido de los fonemas', '1'),
(0026, 5, 'Asocia dibujos y palabras', '1'),
(0027, 5, 'Escribe, lee y coge dictado de fonemas y palabras', '1'),
(0028, 5, 'Escucha cuentos cin atencion', '1'),
(0029, 6, 'Integra nuevas detreza a sud esarrollo motor', '1'),
(0030, 6, 'Realiza ejercicios cooporales de lateralidad', '1'),
(0031, 6, 'Tiene definida la lateralidad', '1'),
(0032, 6, 'Realiza movimientos imitativos', '1'),
(0033, 7, 'Respecta y participa en juegos libresy dirigidos', '1'),
(0034, 7, 'Resuelve laberintos y rompecabezas', '1'),
(0035, 7, 'Dramatiza y demuestra cortesia al jugar', '1'),
(0036, 8, 'Desarolla la perfeccion auditiva, ritmica y corporal ', '1'),
(0037, 8, 'Memoriza canciones y ejecuta baile', '1'),
(0038, 8, 'Intepreta canciones, poesias y trabalegua', '1'),
(0039, 9, 'Dibuja y pinta libremente', '1'),
(0040, 9, 'Moldea con plastilina', '1'),
(0041, 9, 'Recorta lineas y lamina', '1'),
(0042, 9, 'Aplica tecnica grafo-plásticas', '1'),
(0043, 9, 'Valora y respecta el trabajo propio y el de lo demas', '1'),
(0044, 10, 'Demuestra una actitud positiva frente al idioma', '1'),
(0045, 10, 'Identifica y expresa vocabulario: partes del cuerpo, juguetes, numeros(1-3) y colores', '1'),
(0046, 10, 'Reconoce y sigue instrucciones en íngles', '1');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_materia_preparatoria`
--

CREATE TABLE `detalle_materia_preparatoria` (
  `id_detalle_materia` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_materia` int(2) DEFAULT NULL,
  `actividad` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `estado` varchar(1) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `detalle_materia_preparatoria`
--

INSERT INTO `detalle_materia_preparatoria` (`id_detalle_materia`, `fk_materia`, `actividad`, `estado`) VALUES
(0001, 1, 'Expresa susa datos personales (nombre,apellido)', '1'),
(0002, 1, 'Reconoce que tiene una historia personal y familiar', '1'),
(0003, 1, 'Demuestra que forma parte de un núcleo familiar', '1'),
(0004, 1, 'Se identifica como parte de una comunidad', '1'),
(0005, 2, 'Practica normas de respeto consigo mismo', '1'),
(0006, 2, 'Practica normas de respetos con los demás', '1'),
(0007, 2, 'Respeta las diferencias individuales existentes', '1'),
(0008, 2, 'Respeta las diferencias de criterios y opiniones', '1'),
(0009, 2, 'Practica acuerdos establecidos en el grupo', '1'),
(0010, 3, 'Identifica las caracterìsticas (crecer, reproducirse, responder  a estìmulos)', '1'),
(0011, 3, 'Identifica necesidades (alimento, aire, agua)', '1'),
(0012, 3, 'Identifica hábitat e importancia de los seres vivos de su entorno inmediato.', '1'),
(0013, 3, 'Diferencia objetos inertes de seres vivos', '1'),
(0014, 3, 'Discrimina, desde su propia experiencia, la importancia de los animales y de las plantas.', '1'),
(0015, 4, 'Compara y distingue  objetos segùn su color', '1'),
(0016, 4, 'Compara y distingue objetos segùn su tamaño', '1'),
(0017, 4, 'Compara y distingue objetos segùn su longitud', '1'),
(0018, 4, 'Describe la ubicaciòn de los objetos del entorno', '1'),
(0019, 5, 'Registra, expresa y comunica ideas mediante sus propios còdigos.', '1'),
(0020, 5, 'Diferencia entre la imagen y texto escrito.', '1'),
(0021, 5, 'Desarrolla su gusto por la escucha de textos literarios.', '1'),
(0022, 5, 'Identifica elementos del texto como personajes, escenario y evento.', '1'),
(0023, 6, 'Explora y representa musicalmente sus emociones', '1'),
(0024, 6, 'Escucha melodìas musicales con atenciòn', '1'),
(0025, 6, 'Interpreta melodìas musicales en grupo', '1'),
(0026, 7, 'Realiza movimiento imitativos', '1'),
(0027, 7, 'Comunica mensajes utilizando diferentes recursos expresivos', '1'),
(0028, 8, 'Respeta y participa en juegos libres y dirigidos', '1'),
(0029, 8, 'Resuelve  rompecabezas', '1'),
(0030, 9, 'Manifiesta curiosidad e interès por los elementos del entorno: pintura, crayones, pincel, pinza dactilar', '1'),
(0031, 9, 'Reconoce elementos naturales y artificiales del entorno: hojas secas, ramas, pinturas, crayones làpices, etc.', '1'),
(0032, 10, 'Ajusta sus acciones motrices en funciòn de sus estados corporales, ritmos internos y objetivos de los juegos.', '1'),
(0033, 10, 'Comprende la necesidad de respetar reglas', '1'),
(0034, 10, 'Respeta roles y acuerdos grupales', '1'),
(0035, 11, 'Learners can understand family words, and simple instructions about their own surroundings.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_pensum_academico`
--

CREATE TABLE `detalle_pensum_academico` (
  `id_detalle_pensum` int(11) NOT NULL,
  `fk_pensum` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `estado` char(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detalle_pensum_academico`
--

INSERT INTO `detalle_pensum_academico` (`id_detalle_pensum`, `fk_pensum`, `fk_profesor`, `fk_materia`, `estado`) VALUES
(1, 0002, 20, 1, 'CR'),
(2, 0002, 20, 3, 'AB'),
(3, 0002, 20, 4, 'AB'),
(4, 0003, 4, 1, 'AB'),
(5, 0004, 25, 5, 'AB'),
(6, 0004, 25, 6, 'AB'),
(7, 0004, 25, 7, 'AB'),
(8, 0004, 25, 8, 'AB'),
(9, 0004, 25, 9, 'AB'),
(10, 0004, 25, 10, 'ES'),
(11, 0004, 25, 11, 'AB'),
(12, 0004, 25, 12, 'AB'),
(13, 0004, 25, 13, 'AB'),
(14, 0004, 25, 14, 'AB'),
(15, 0002, 20, 15, 'AB'),
(16, 0002, 20, 16, 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `examen`
--

CREATE TABLE `examen` (
  `id_examen` int(4) UNSIGNED ZEROFILL NOT NULL,
  `examen` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `fk_periodo` int(4) UNSIGNED ZEROFILL NOT NULL,
  `estado` char(1) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `examen`
--

INSERT INTO `examen` (`id_examen`, `examen`, `fk_periodo`, `estado`) VALUES
(0001, 'Exámen 1', 0001, '0'),
(0002, 'Examen 2', 0002, '1');

-- --------------------------------------------------------

--
-- Table structure for table `img_profesor`
--

CREATE TABLE `img_profesor` (
  `id_imagen` int(11) NOT NULL,
  `nombre` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ruta` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaSubida` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `img_profesor`
--

INSERT INTO `img_profesor` (`id_imagen`, `nombre`, `ruta`, `fechaSubida`) VALUES
(1, 'logo.png', '../../Imagenes/Profesores/logo.png', '2018-02-08'),
(2, 'logo.png', '../../Imagenes/Profesores/logo.png', '2018-02-08'),
(3, '3165.png', '../../Imagenes/Profesores/3165.png', '2018-02-08'),
(4, 'MPHH.jpg', '../../Imagenes/Profesores/MPHH.jpg', '2018-02-08'),
(5, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-08'),
(6, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-08'),
(7, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-08'),
(8, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-08'),
(9, '(90) Danny Tagle.mhtml', '../../Imagenes/Profesores/(90) Danny Tagle.mhtml', '2018-02-08'),
(10, '(90) Danny Tagle.mhtml', '../../Imagenes/Profesores/(90) Danny Tagle.mhtml', '2018-02-08'),
(11, '(90) Danny Tagle.mhtml', '../../Imagenes/Profesores/(90) Danny Tagle.mhtml', '2018-02-08'),
(12, 'foto 2.jpg', '../../Imagenes/Profesores/foto 2.jpg', '2018-02-08'),
(13, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-08'),
(14, 'anie.jpg', '../../Imagenes/Profesores/anie.jpg', '2018-02-08'),
(15, 'MARIELA FOTO.jpg', '../../Imagenes/Profesores/MARIELA FOTO.jpg', '2018-02-09'),
(16, 'Mariela Foto.jpg', '../../Imagenes/Profesores/Mariela Foto.jpg', '2018-02-09'),
(17, 'IMG_20170912_101117.jpg', '../../Imagenes/Profesores/IMG_20170912_101117.jpg', '2018-02-09'),
(18, 'IMG_20170912_101117.jpg', '../../Imagenes/Profesores/IMG_20170912_101117.jpg', '2018-02-09'),
(19, 'IMG_20170921_081441.jpg', '../../Imagenes/Profesores/IMG_20170921_081441.jpg', '2018-02-09'),
(20, 'IMG_20170912_101700.jpg', '../../Imagenes/Profesores/IMG_20170912_101700.jpg', '2018-02-09'),
(21, 'IMG_20170914_110235.jpg', '../../Imagenes/Profesores/IMG_20170914_110235.jpg', '2018-02-09'),
(22, 'IMG_20170914_110235.jpg', '../../Imagenes/Profesores/IMG_20170914_110235.jpg', '2018-02-09'),
(23, 'IMG_20170912_100151.jpg', '../../Imagenes/Profesores/IMG_20170912_100151.jpg', '2018-02-09'),
(24, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-14'),
(25, 'foto1.jpg', '../../Imagenes/Profesores/foto1.jpg', '2018-02-14'),
(26, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-14'),
(27, 'foto.jpg', '../../Imagenes/Profesores/foto.jpg', '2018-02-14'),
(28, 'susy.jpg', '../../Imagenes/Profesores/susy.jpg', '2018-02-14'),
(29, 'IMG_20170912_100151.jpg', '../../Imagenes/Profesores/IMG_20170912_100151.jpg', '2018-02-14'),
(30, 'IMG_20170912_101117.jpg', '../../Imagenes/Profesores/IMG_20170912_101117.jpg', '2018-02-14'),
(31, 'IMG_20170912_101117.jpg', '../../Imagenes/Profesores/IMG_20170912_101117.jpg', '2018-02-14'),
(32, 'IMG-0920.JPG', '../../Imagenes/Profesores/IMG-0920.JPG', '2018-02-14'),
(33, 'image01.jpg', '../../Imagenes/Profesores/image01.jpg', '2018-02-14'),
(34, 'IMG_1162.JPG', '../../Imagenes/Profesores/IMG_1162.JPG', '2018-02-14'),
(35, 'IMG_1162.JPG', '../../Imagenes/Profesores/IMG_1162.JPG', '2018-02-14'),
(36, 'DSC_9993.JPG', '../../Imagenes/Profesores/DSC_9993.JPG', '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado_materia` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`, `estado_materia`) VALUES
(1, 'Matemática', '1'),
(2, 'Literatura y Lenguaje', '1'),
(3, 'Música', '1'),
(4, 'Educación Física', '1'),
(5, 'Ámbito: Identidad Y Autonomía', '1'),
(6, 'Ambito: Convivencia', '1'),
(7, 'Ámbito: Realaciones Lógico Matemáticas', '1'),
(8, 'Ámbito: Relaciones con el medio Natural y Cultural', '1'),
(9, 'Ámbito: Compresión y Expresión del Lenguaje', '1'),
(10, 'Ámbito: Expresión Corporal', '1'),
(11, 'Área: Expresión Lúdica', '1'),
(12, 'Ámbito: Expresión Artística ', '1'),
(13, 'Ámbito: Motricidad', '1'),
(14, 'Área Ingles', '1'),
(15, 'Ciencia Naturales', '1'),
(16, 'Idioma Extrajero', '1');

-- --------------------------------------------------------

--
-- Table structure for table `materia_inicial2`
--

CREATE TABLE `materia_inicial2` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `estado_materia` char(1) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `materia_inicial2`
--

INSERT INTO `materia_inicial2` (`id_materia`, `nombre_materia`, `estado_materia`) VALUES
(1, 'Ámbito: Identidad y Autonomía', '1'),
(2, 'Ámbito: Convivencia', '1'),
(3, 'Ámbito: Relaciones Lógico Matematicas', '1'),
(4, 'Ámbito: Relaciones con el Medio Natural y Cultural', '1'),
(5, 'Ámbito: Compresión y Expresión del Lenguaje', '1'),
(6, 'Ámbito: Expresión Corporal', '1'),
(7, 'Área: Expresión Lúdica ', '1'),
(8, 'Ámbito: Expresión Artistica', '1'),
(9, 'Ámbito: Motricidad', '1'),
(10, 'Área Inglés', '1');

-- --------------------------------------------------------

--
-- Table structure for table `materia_preparatoria`
--

CREATE TABLE `materia_preparatoria` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `estado_materia` char(1) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `materia_preparatoria`
--

INSERT INTO `materia_preparatoria` (`id_materia`, `nombre_materia`, `estado_materia`) VALUES
(1, 'Ámbito de Identidad y Autonomia', '1'),
(2, 'Ámbito de Convivencia', '1'),
(3, 'Ámbito de Descubrimiento y Compresión del medio natural y cultural', '1'),
(4, 'Ámbito de Relaciones lógico-matemáticas', '1'),
(5, 'Ámbito de Compresión y Expresión oral y escrita', '1'),
(6, 'Ámbito de Compresión y Expresión Artistica (Música)', '1'),
(7, 'Ámbito de Expresión Corporal y Motricidad', '1'),
(8, 'Expresión Lúdica', '1'),
(9, 'Área de Educación Cultural y Artística (Arte)', '1'),
(10, 'Área de Educación Física', '1'),
(11, 'Área de Inglés', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
  `id_notas` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_parcial` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `nota` decimal(7,2) NOT NULL,
  `nota2` decimal(7,2) NOT NULL,
  `nota3` decimal(7,2) NOT NULL,
  `nota4` decimal(7,2) NOT NULL,
  `nota5` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id_notas`, `fk_alumno`, `fk_materia`, `fk_profesor`, `fk_curso`, `fk_parcial`, `fk_anio`, `nota`, `nota2`, `nota3`, `nota4`, `nota5`) VALUES
(1, 37, 1, 20, 3, 0001, 1, '5.00', '8.00', '9.00', '10.00', '5.00'),
(2, 49, 1, 20, 3, 0001, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(3, 40, 1, 20, 3, 0001, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(4, 37, 4, 20, 3, 0001, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(5, 49, 4, 20, 3, 0001, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(6, 40, 4, 20, 3, 0001, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(7, 37, 3, 20, 3, 0001, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(8, 49, 3, 20, 3, 0001, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(9, 40, 3, 20, 3, 0001, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(10, 37, 3, 20, 3, 0002, 1, '10.00', '10.00', '1.00', '8.00', '8.00'),
(11, 49, 3, 20, 3, 0002, 1, '8.00', '8.00', '8.00', '8.00', '8.00'),
(12, 40, 3, 20, 3, 0002, 1, '9.00', '9.00', '9.00', '9.00', '9.00'),
(13, 37, 1, 20, 3, 0002, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(14, 49, 1, 20, 3, 0002, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(15, 40, 1, 20, 3, 0002, 1, '5.00', '5.00', '6.00', '10.00', '10.00'),
(16, 37, 4, 20, 3, 0002, 1, '9.00', '9.00', '9.00', '9.00', '9.00'),
(17, 49, 4, 20, 3, 0002, 1, '9.00', '9.00', '9.00', '9.00', '9.00'),
(18, 40, 4, 20, 3, 0002, 1, '9.00', '9.00', '9.00', '9.00', '9.00'),
(19, 37, 3, 20, 3, 0003, 1, '8.00', '8.00', '8.00', '8.00', '8.00'),
(20, 49, 3, 20, 3, 0003, 1, '8.00', '8.00', '8.00', '8.00', '8.00'),
(21, 40, 3, 20, 3, 0003, 1, '9.00', '10.00', '10.00', '10.00', '10.00'),
(22, 37, 4, 20, 3, 0003, 1, '9.00', '9.00', '9.00', '7.88', '7.99'),
(23, 49, 4, 20, 3, 0003, 1, '10.00', '10.00', '9.55', '9.80', '10.00'),
(24, 40, 4, 20, 3, 0003, 1, '10.00', '10.00', '10.00', '9.80', '10.00'),
(28, 37, 1, 20, 3, 0003, 1, '10.00', '10.00', '10.00', '10.00', '9.00'),
(29, 49, 1, 20, 3, 0003, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(30, 40, 1, 20, 3, 0003, 1, '9.00', '9.00', '9.00', '10.00', '10.00'),
(31, 37, 1, 20, 3, 0004, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(32, 49, 1, 20, 3, 0004, 1, '8.00', '9.78', '9.55', '9.68', '10.00'),
(33, 40, 1, 20, 3, 0004, 1, '10.00', '9.68', '9.88', '10.00', '10.00'),
(34, 37, 3, 20, 3, 0004, 1, '9.68', '9.68', '10.00', '10.00', '10.00'),
(35, 49, 3, 20, 3, 0004, 1, '10.00', '10.00', '1.00', '10.00', '10.00'),
(36, 40, 3, 20, 3, 0004, 1, '8.00', '9.00', '10.00', '5.00', '6.00'),
(37, 37, 4, 20, 3, 0004, 1, '9.68', '6.78', '6.50', '8.68', '10.00'),
(38, 49, 4, 20, 3, 0004, 1, '9.00', '8.00', '9.00', '10.00', '5.00'),
(39, 40, 4, 20, 3, 0004, 1, '10.00', '10.00', '10.00', '8.00', '9.00'),
(40, 37, 1, 20, 3, 0005, 1, '9.00', '9.00', '9.00', '9.00', '9.00'),
(41, 49, 1, 20, 3, 0005, 1, '8.00', '9.00', '10.00', '5.00', '10.00'),
(42, 40, 1, 20, 3, 0005, 1, '10.00', '8.00', '9.00', '10.00', '10.00'),
(43, 37, 3, 20, 3, 0005, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(44, 49, 3, 20, 3, 0005, 1, '8.00', '9.00', '10.00', '10.00', '5.00'),
(45, 40, 3, 20, 3, 0005, 1, '6.00', '9.00', '10.00', '8.00', '9.00'),
(46, 37, 4, 20, 3, 0005, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(47, 49, 4, 20, 3, 0005, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(48, 40, 4, 20, 3, 0005, 1, '1.00', '1.00', '1.00', '1.00', '1.00'),
(49, 37, 3, 20, 3, 0006, 1, '5.00', '10.00', '10.00', '10.00', '10.00'),
(50, 49, 3, 20, 3, 0006, 1, '8.00', '9.00', '10.00', '10.00', '8.00'),
(51, 40, 3, 20, 3, 0006, 1, '10.00', '9.00', '10.00', '7.00', '10.00'),
(52, 37, 4, 20, 3, 0006, 1, '8.00', '9.00', '10.00', '10.00', '10.00'),
(53, 49, 4, 20, 3, 0006, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(54, 40, 4, 20, 3, 0006, 1, '8.00', '9.00', '10.00', '8.00', '9.00'),
(55, 37, 1, 20, 3, 0006, 1, '9.00', '10.00', '10.00', '10.00', '10.00'),
(56, 49, 1, 20, 3, 0006, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(57, 40, 1, 20, 3, 0006, 1, '10.00', '10.00', '10.00', '10.00', '10.00'),
(58, 37, 15, 20, 3, 0001, 1, '1.00', '9.00', '8.00', '7.00', '7.00'),
(59, 49, 15, 20, 3, 0001, 1, '1.00', '1.00', '3.00', '9.00', '1.00'),
(60, 40, 15, 20, 3, 0001, 1, '8.00', '2.00', '5.00', '2.00', '5.00'),
(61, 37, 16, 20, 3, 0001, 2017, '1.00', '6.00', '2.00', '1.00', '6.00'),
(62, 49, 16, 20, 3, 0001, 2017, '2.00', '4.00', '1.00', '2.00', '9.00'),
(63, 40, 16, 20, 3, 0001, 2017, '2.00', '2.00', '7.00', '10.00', '1.00'),
(64, 37, 16, 20, 3, 0003, 2017, '5.00', '5.00', '2.00', '4.00', '9.00'),
(65, 49, 16, 20, 3, 0003, 2017, '3.00', '4.00', '10.00', '9.00', '4.00'),
(66, 40, 16, 20, 3, 0003, 2017, '6.00', '7.00', '8.00', '1.00', '10.00'),
(67, 37, 15, 20, 3, 0003, 2017, '7.00', '4.00', '6.00', '4.00', '1.00'),
(68, 49, 15, 20, 3, 0003, 2017, '2.00', '6.00', '1.00', '7.00', '6.00'),
(69, 40, 15, 20, 3, 0003, 2017, '7.00', '1.00', '6.00', '9.00', '7.00'),
(70, 37, 16, 20, 3, 0002, 2017, '3.00', '2.00', '2.00', '2.00', '1.00'),
(71, 49, 16, 20, 3, 0002, 2017, '1.00', '5.00', '8.00', '1.00', '9.00'),
(72, 40, 16, 20, 3, 0002, 2017, '10.00', '3.00', '2.00', '1.00', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `notas_examen`
--

CREATE TABLE `notas_examen` (
  `id_examennota` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_examen` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `nota` decimal(7,2) NOT NULL,
  `observacion` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notas_examen`
--

INSERT INTO `notas_examen` (`id_examennota`, `fk_alumno`, `fk_materia`, `fk_profesor`, `fk_curso`, `fk_examen`, `fk_anio`, `nota`, `observacion`) VALUES
(1, 37, 1, 20, 3, 0001, 1, '8.78', ''),
(2, 49, 1, 20, 3, 0001, 1, '10.00', ''),
(3, 40, 1, 20, 3, 0001, 1, '9.00', ''),
(4, 37, 4, 20, 3, 0001, 1, '8.75', ''),
(5, 49, 4, 20, 3, 0001, 1, '6.88', ''),
(6, 40, 4, 20, 3, 0001, 1, '10.00', ''),
(7, 37, 3, 20, 3, 0001, 1, '10.00', ''),
(8, 49, 3, 20, 3, 0001, 1, '8.00', ''),
(9, 40, 3, 20, 3, 0001, 1, '9.78', ''),
(10, 37, 3, 20, 3, 0002, 1, '10.00', ''),
(11, 49, 3, 20, 3, 0002, 1, '10.00', ''),
(12, 40, 3, 20, 3, 0002, 1, '10.00', ''),
(13, 37, 1, 20, 3, 0002, 1, '8.00', ''),
(14, 49, 1, 20, 3, 0002, 1, '9.00', ''),
(15, 40, 1, 20, 3, 0002, 1, '7.00', ''),
(16, 37, 4, 20, 3, 0002, 1, '1.00', ''),
(17, 49, 4, 20, 3, 0002, 1, '1.00', ''),
(18, 40, 4, 20, 3, 0002, 1, '1.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `notas_inicial2`
--

CREATE TABLE `notas_inicial2` (
  `id_notas` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_submateria` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_periodo` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `parcial1` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `parcial2` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `parcial3` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `examen` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `promedio` char(4) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notas_inicial2`
--

INSERT INTO `notas_inicial2` (`id_notas`, `fk_alumno`, `fk_materia`, `fk_submateria`, `fk_profesor`, `fk_curso`, `fk_periodo`, `fk_anio`, `parcial1`, `parcial2`, `parcial3`, `examen`, `promedio`) VALUES
(1, 66, 1, 1, 25, 1, 0001, 3, 'I', 'I', 'I', 'I', 'I'),
(2, 66, 1, 2, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(3, 66, 1, 3, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(4, 66, 1, 4, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(5, 66, 1, 5, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(6, 66, 1, 6, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(7, 66, 1, 7, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(8, 66, 1, 8, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(9, 66, 1, 9, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(10, 66, 2, 10, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(11, 66, 2, 11, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(12, 66, 2, 12, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(13, 66, 2, 13, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(14, 66, 3, 14, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(15, 66, 3, 15, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(16, 66, 3, 16, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(17, 66, 3, 17, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(18, 66, 3, 18, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(19, 66, 4, 19, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(20, 66, 4, 20, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(21, 66, 4, 21, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(22, 66, 4, 22, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(23, 66, 4, 23, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(24, 66, 5, 24, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(25, 66, 5, 25, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(26, 66, 5, 26, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(27, 66, 5, 27, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(28, 66, 5, 28, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(29, 66, 6, 29, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(30, 66, 6, 30, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(31, 66, 6, 31, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(32, 66, 6, 32, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(33, 66, 7, 33, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(34, 66, 7, 34, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(35, 66, 7, 35, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(36, 66, 8, 36, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(37, 66, 8, 37, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(38, 66, 8, 38, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(39, 66, 9, 39, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(40, 66, 9, 40, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(41, 66, 9, 41, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(42, 66, 9, 42, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(43, 66, 9, 43, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(44, 66, 10, 44, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(45, 66, 10, 45, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(46, 66, 10, 46, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(47, 69, 1, 1, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(48, 69, 1, 2, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(49, 69, 1, 3, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(50, 69, 1, 4, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(51, 69, 1, 5, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(52, 69, 1, 6, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(53, 69, 1, 7, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(54, 69, 1, 8, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(55, 69, 1, 9, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(56, 69, 2, 10, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(57, 69, 2, 11, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(58, 69, 2, 12, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(59, 69, 2, 13, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(60, 69, 3, 14, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(61, 69, 3, 15, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(62, 69, 3, 16, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(63, 69, 3, 17, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(64, 69, 3, 18, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(65, 69, 4, 19, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(66, 69, 4, 20, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(67, 69, 4, 21, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(68, 69, 4, 22, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(69, 69, 4, 23, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(70, 69, 5, 24, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(71, 69, 5, 25, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(72, 69, 5, 26, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(73, 69, 5, 27, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(74, 69, 5, 28, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(75, 69, 6, 29, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(76, 69, 6, 30, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(77, 69, 6, 31, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(78, 69, 6, 32, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(79, 69, 7, 33, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(80, 69, 7, 34, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(81, 69, 7, 35, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(82, 69, 8, 36, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(83, 69, 8, 37, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(84, 69, 8, 38, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(85, 69, 9, 39, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(86, 69, 9, 40, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(87, 69, 9, 41, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(88, 69, 9, 42, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(89, 69, 9, 43, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(90, 69, 10, 44, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(91, 69, 10, 45, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A'),
(92, 69, 10, 46, 25, 1, 0001, 3, 'A', 'A', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `notas_preparatoria`
--

CREATE TABLE `notas_preparatoria` (
  `id_notas` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_submateria` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_periodo` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `parcial1` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `parcial2` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `parcial3` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `examen` char(4) COLLATE utf8mb4_bin DEFAULT NULL,
  `promedio` char(4) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notas_preparatoria`
--

INSERT INTO `notas_preparatoria` (`id_notas`, `fk_alumno`, `fk_materia`, `fk_submateria`, `fk_profesor`, `fk_curso`, `fk_periodo`, `fk_anio`, `parcial1`, `parcial2`, `parcial3`, `examen`, `promedio`) VALUES
(1, 76, 1, 1, 28, 2, 0001, 1, 'EP', 'A', 'A', 'A', 'A'),
(2, 76, 1, 2, 28, 2, 0001, 1, 'EP', 'EP', 'EP', 'A', 'A'),
(3, 76, 1, 3, 28, 2, 0001, 1, 'A', 'EP', 'A', 'A', 'EP'),
(4, 76, 1, 4, 28, 2, 0001, 1, 'A', 'EP', 'A', 'A', 'A'),
(5, 76, 2, 5, 28, 2, 0001, 1, 'EP', 'A', 'A', 'A', 'A'),
(6, 76, 2, 6, 28, 2, 0001, 1, 'A', 'EP', 'A', 'A', 'A'),
(7, 76, 2, 7, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(8, 76, 2, 8, 28, 2, 0001, 1, 'EP', 'EP', 'A', 'A', 'A'),
(9, 76, 2, 9, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(10, 76, 3, 10, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(11, 76, 3, 11, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(12, 76, 3, 12, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(13, 76, 3, 13, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(14, 76, 3, 14, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(15, 76, 4, 15, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(16, 76, 4, 16, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(17, 76, 4, 17, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(18, 76, 4, 18, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(19, 76, 5, 19, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(20, 76, 5, 20, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(21, 76, 5, 21, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(22, 76, 5, 22, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(23, 76, 6, 23, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(24, 76, 6, 24, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(25, 76, 6, 25, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(26, 76, 7, 26, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(27, 76, 7, 27, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(28, 76, 8, 28, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(29, 76, 8, 29, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(30, 76, 9, 30, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(31, 76, 9, 31, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(32, 76, 10, 32, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(33, 76, 10, 33, 28, 2, 0001, 1, 'A', 'N.E', 'N.E', 'A', 'N.E'),
(34, 76, 10, 34, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(35, 76, 11, 35, 28, 2, 0001, 1, 'EP', 'EP', 'A', 'A', 'A'),
(36, 78, 1, 1, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(37, 78, 1, 2, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(38, 78, 1, 3, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(39, 78, 1, 4, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(40, 78, 2, 5, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(41, 78, 2, 6, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(42, 78, 2, 7, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(43, 78, 2, 8, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(44, 78, 2, 9, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(45, 78, 3, 10, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(46, 78, 3, 11, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(47, 78, 3, 12, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(48, 78, 3, 13, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(49, 78, 3, 14, 28, 2, 0001, 1, 'EP', 'A', 'A', 'A', 'A'),
(50, 78, 4, 15, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(51, 78, 4, 16, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(52, 78, 4, 17, 28, 2, 0001, 1, 'A', 'A', 'A', 'N.E', 'A'),
(53, 78, 4, 18, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(54, 78, 5, 19, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(55, 78, 5, 20, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(56, 78, 5, 21, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(57, 78, 5, 22, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(58, 78, 6, 23, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(59, 78, 6, 24, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(60, 78, 6, 25, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(61, 78, 7, 26, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(62, 78, 7, 27, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(63, 78, 8, 28, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(64, 78, 8, 29, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(65, 78, 9, 30, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(66, 78, 9, 31, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(67, 78, 10, 32, 28, 2, 0001, 1, 'EP', 'A', 'A', 'A', 'A'),
(68, 78, 10, 33, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(69, 78, 10, 34, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A'),
(70, 78, 11, 35, 28, 2, 0001, 1, 'A', 'A', 'A', 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `notas_supletorio`
--

CREATE TABLE `notas_supletorio` (
  `id_supletorio` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_materia` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_examen` int(11) NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `nota` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `notas_supletorio`
--

INSERT INTO `notas_supletorio` (`id_supletorio`, `fk_alumno`, `fk_materia`, `fk_profesor`, `fk_curso`, `fk_examen`, `fk_anio`, `nota`) VALUES
(1, 49, 1, 20, 3, 1, 1, '8.00'),
(2, 37, 4, 20, 3, 1, 1, '9.00'),
(3, 40, 4, 20, 3, 1, 1, '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `parciales`
--

CREATE TABLE `parciales` (
  `codigo_parcial` int(4) UNSIGNED ZEROFILL NOT NULL,
  `parcial` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_periodo` int(4) UNSIGNED ZEROFILL NOT NULL,
  `estado` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parciales`
--

INSERT INTO `parciales` (`codigo_parcial`, `parcial`, `fk_periodo`, `estado`) VALUES
(0001, 'Primer Parcial', 0001, '0'),
(0002, 'Segundo Parcial', 0001, '1'),
(0003, 'Tercer Parcial', 0001, '0'),
(0004, 'Primer Parcial', 0002, '0'),
(0005, 'Segundo Parcial', 0002, '0'),
(0006, 'Tercer Parcial', 0002, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pensum_academico`
--

CREATE TABLE `pensum_academico` (
  `id_pensum` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` smallint(6) DEFAULT NULL,
  `fk_curso` int(11) NOT NULL,
  `fecha_registro` date DEFAULT NULL,
  `estado` char(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pensum_academico`
--

INSERT INTO `pensum_academico` (`id_pensum`, `fk_anio`, `fk_curso`, `fecha_registro`, `estado`) VALUES
(0001, 1, 2, '2018-02-16', 'AB'),
(0002, 1, 3, '2018-02-28', 'AB'),
(0003, 1, 4, '2018-03-01', 'AB'),
(0004, 3, 1, '2018-03-06', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `periodos`
--

CREATE TABLE `periodos` (
  `codigo_periodo` int(4) UNSIGNED ZEROFILL NOT NULL,
  `periodo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `periodos`
--

INSERT INTO `periodos` (`codigo_periodo`, `periodo`, `estado`) VALUES
(0001, 'Primer Periodo', '1'),
(0002, 'Segundo Periodo', '0');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `nombre_profesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion_profesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono_profesor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `celular_profesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_profesor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email_profesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fechanac_profesor` date DEFAULT NULL,
  `titulo_profesor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genero_profesor` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `imagen_profesor` int(11) NOT NULL,
  `fechareg_profesor` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre_profesor`, `direccion_profesor`, `telefono_profesor`, `celular_profesor`, `cedula_profesor`, `email_profesor`, `fechanac_profesor`, `titulo_profesor`, `genero_profesor`, `imagen_profesor`, `fechareg_profesor`) VALUES
(4, 'Maria Paulina Huayamave Hernandez', 'Urbanización Belo Horizonte Mz 20 Villa 7', '04-6018441', '09-85905708', '0912766425', 'phuayamave@younglivingacademy.edu.ec', '1981-02-06', 'Economista', 'F', 4, '2018-02-08'),
(8, 'Verónica Alexandra Piguave Ruiz', 'Urb. Portón de Beata Bloque 2 Villa8', '042995993', '0982869315', '0911605897', 'vpiguave@younglivingcademy.edu.ec', '1967-03-28', 'Docente', 'F', 8, '2018-02-08'),
(12, 'Greta Marjorie Ordoñez Santos', 'Alborada 7ma etapa mz 746 villa 3', '042238672', '0998146026', '0905847547', 'gordonez@younglivingcademy.edu.ec', '1957-03-03', 'Docente', 'F', 12, '2018-02-08'),
(14, 'ANA LUISA ILLICACHI PUCUNA', 'CALLE C ENTRE LA 37 Y LA 38AVA', '6059394', '0989199965', '0917843526', 'ailicachi@younglivingacadey.edu.ec', '1979-08-04', 'DOCENTE', 'F', 14, '2018-02-08'),
(16, 'Mariela Elizabeth Gaybor Vera', '11ava N° 316 entre Colón y Sucre', '0985283365', '0985283365', '0917234270', 'mgaybor@younglivingacademy.edu.ec', '1981-08-11', 'Licenciada', 'F', 16, '2018-02-09'),
(20, 'Jairo Josue Ariopaja Andrade', 'Acacias mz D2 villa 5', '3855177', '0960135484', '0925655003', 'jariopaja@younglivingacademy.edu.ec', '1993-11-09', 'Licenciado', 'M', 20, '2018-02-09'),
(21, 'Jose Francisco Herbas De la Torre', 'Pradera 1 C2 Villa 19', '042439570', '0988193612', '0903595544', 'jherbas@younglivingacademy.edu.ec', '1953-09-03', 'Docente', 'M', 21, '2018-02-09'),
(25, 'Yomaira Karina Torres Santana', 'Chongón ', '042738632', '0996323114', '0921052486', 'ytorres@younglivingacademy.edu.ec', '1983-07-04', 'Lcda. Parvularia ', 'F', 25, '2018-02-14'),
(28, 'Susana del Carmen Sarmiento Riera', 'Cdla. Las Acacias Bloque B2 Dpto. 01', '042340796', '0986101803', '0918468166', 'ssarmiento@younglivingacademy.edu.ec', '1977-07-24', 'Licenciada Parvularia', 'F', 28, '2018-02-14'),
(29, 'Andrea Elizabeth ', 'Cardenas Vaccaro', '042756679', '0960511218', '0924961949', 'aritat2006@hotmail.es', '1987-06-26', 'Docente', 'F', 29, '2018-02-14'),
(31, 'Saida Adriana Rivera Leon', 'El Recreo 3 Mz 352 V.16', '042670106', '09673328973', '0916885635', 'arivera@younglivingacademy.edu.ec', '1978-05-18', 'Licenciada en Educación Primaria ', 'F', 31, '2018-02-14'),
(32, 'Quinones Espinoza Andrea Estefania', 'Villa Club - Etapa Estelar Mz 14 Villa 3', '042165981', '0989909466', '0926276288', 'aeqe_89@hotmail.com', '1989-06-12', 'Comunicadora Social', 'F', 32, '2018-02-14'),
(33, 'Yenith Johana Castro Rios', 'Urbanización Nueva Panorama Mz A Villa 7', '3885343', '0982225791', '0960440345', 'ycastro@younglivingacademy.edu.ec', '1980-08-23', 'Licenciada en Educación Artística', 'F', 33, '2018-02-14'),
(34, 'Luis Manuel Santiana Alava', 'Durán, cdla Maldonado, Mz 5 solar 27', '042860128', '0988540956', '0917298242', 'lsantiana_1106@outlook.es', '1977-11-06', 'DOCENTE', 'M', 34, '2018-02-14'),
(36, 'Danny Tagle', 'Samanes 6 Manzana 944 Villa 85', '098-581-02', '098-581-0268', '090932593-', 'dtagle@YoungLivingAcademy.edu.ec', '1978-08-25', 'Docente', 'M', 36, '2018-02-14');

-- --------------------------------------------------------

--
-- Table structure for table `proyecto_escolar`
--

CREATE TABLE `proyecto_escolar` (
  `id_proyecto` int(11) NOT NULL,
  `fk_alumno` int(11) NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `fk_curso` int(11) NOT NULL,
  `fk_parcial` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_anio` int(11) NOT NULL,
  `nota` char(3) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `proyecto_escolar`
--

INSERT INTO `proyecto_escolar` (`id_proyecto`, `fk_alumno`, `fk_profesor`, `fk_curso`, `fk_parcial`, `fk_anio`, `nota`) VALUES
(1, 37, 4, 3, 0001, 1, 'MB'),
(2, 49, 4, 3, 0001, 1, 'B'),
(3, 40, 4, 3, 0001, 1, 'R'),
(4, 37, 4, 3, 0002, 1, 'EX'),
(5, 49, 4, 3, 0002, 1, 'MB'),
(6, 40, 4, 3, 0002, 1, 'R'),
(7, 37, 4, 3, 0003, 1, 'EX'),
(8, 49, 4, 3, 0003, 1, 'EX'),
(9, 40, 4, 3, 0003, 1, 'EX'),
(10, 37, 4, 3, 0004, 1, 'EX'),
(11, 49, 4, 3, 0004, 1, 'MB'),
(12, 40, 4, 3, 0004, 1, 'MB'),
(13, 37, 4, 3, 0005, 1, 'EX'),
(14, 49, 4, 3, 0005, 1, 'EX'),
(15, 40, 4, 3, 0005, 1, 'MB'),
(16, 37, 4, 3, 0006, 1, 'EX'),
(17, 49, 4, 3, 0006, 1, 'MB'),
(18, 40, 4, 3, 0006, 1, 'EX');

-- --------------------------------------------------------

--
-- Table structure for table `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `descripcion`) VALUES
(1, 'Inicial 2'),
(2, 'Primaria'),
(3, 'Secundaria'),
(4, 'Bachillerato');

-- --------------------------------------------------------

--
-- Table structure for table `sistemacalificaciones`
--

CREATE TABLE `sistemacalificaciones` (
  `id_sistcalif` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `nombre_sistcalif` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_sistcalif` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cant_perido_sistcalif` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `cant_parcial_sistcalif` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `nota_promocion_sistcalif` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `nota_rojo_sistcalif` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `estado_sistcalif` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sistemacalificaciones`
--

INSERT INTO `sistemacalificaciones` (`id_sistcalif`, `fk_seccion`, `nombre_sistcalif`, `descripcion_sistcalif`, `cant_perido_sistcalif`, `cant_parcial_sistcalif`, `nota_promocion_sistcalif`, `nota_rojo_sistcalif`, `estado_sistcalif`) VALUES
(1, 2, 'Quismetre', 'sistemas de calificacion por quismestre ', '2', '3', '7', '4', '1'),
(2, 3, 'Quimestral', 'Sistema de calificación quimestral', '2', '3', '7', '4', '1'),
(3, 1, 'Quimestral', 'Sistema de calificación por quimestre', '2', '3', '7', '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id_tutor` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_profesor` int(4) NOT NULL,
  `fk_curso` int(4) NOT NULL,
  `estado` char(1) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id_tutor`, `fk_profesor`, `fk_curso`, `estado`) VALUES
(0001, 28, 2, '1'),
(0002, 4, 3, '1'),
(0003, 25, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(4) UNSIGNED ZEROFILL NOT NULL,
  `fk_profesor` int(11) NOT NULL,
  `usuario` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `privilegio` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `fk_profesor`, `usuario`, `contrasena`, `privilegio`, `fecha_registro`) VALUES
(0001, 8, 'jaicaza', '7c222fb2927d828af22f592134e8932480637c0d', '1', '2018-02-14'),
(0002, 20, 'jairo123', '0953b7ed93a130af0984d81336a6def331e4c6cb', 'C', '2018-02-14'),
(0003, 4, 'maria', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', 'C', '2018-02-28'),
(0004, 16, 'mariela', '06300743b84744b6ddab09cce692b01e86c30094', 'C', '2018-03-02'),
(0005, 25, 'karina', '8964af7e7645a7c6c1e891f5e69d22e8adaafe70', 'I', '2018-03-06'),
(0006, 28, 'susana', 'f925d420627f3db470e17fc2a289a4dd103722f2', 'P', '2018-03-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indexes for table `alumnos_supletorio`
--
ALTER TABLE `alumnos_supletorio`
  ADD PRIMARY KEY (`id_supletorio`);

--
-- Indexes for table `aniolectivo`
--
ALTER TABLE `aniolectivo`
  ADD PRIMARY KEY (`id_aniolectivo`),
  ADD KEY `fk_seccion` (`fk_seccion`),
  ADD KEY `fk_sistcalif` (`fk_sistcalif`);

--
-- Indexes for table `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indexes for table `comportamiento`
--
ALTER TABLE `comportamiento`
  ADD PRIMARY KEY (`id_conducta`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `curso_alumno`
--
ALTER TABLE `curso_alumno`
  ADD PRIMARY KEY (`id_curso_alumno`),
  ADD KEY `fk_alumno` (`fk_alumno`),
  ADD KEY `fk_curso` (`fk_curso`),
  ADD KEY `fk_seccion` (`fk_seccion`),
  ADD KEY `fk_anio` (`fk_anio`);

--
-- Indexes for table `datos_madre`
--
ALTER TABLE `datos_madre`
  ADD PRIMARY KEY (`id_datosmadre`),
  ADD KEY `fk_alumno` (`fk_alumno`);

--
-- Indexes for table `datos_padre`
--
ALTER TABLE `datos_padre`
  ADD PRIMARY KEY (`id_datospadre`),
  ADD KEY `fk_alumno` (`fk_alumno`);

--
-- Indexes for table `datos_representante`
--
ALTER TABLE `datos_representante`
  ADD PRIMARY KEY (`id_representante`),
  ADD KEY `fk_alumno` (`fk_alumno`);

--
-- Indexes for table `detalle_materia_inicial`
--
ALTER TABLE `detalle_materia_inicial`
  ADD PRIMARY KEY (`id_detalle_materia`),
  ADD KEY `fk_materia` (`fk_materia`);

--
-- Indexes for table `detalle_materia_preparatoria`
--
ALTER TABLE `detalle_materia_preparatoria`
  ADD PRIMARY KEY (`id_detalle_materia`),
  ADD KEY `fk_materia` (`fk_materia`);

--
-- Indexes for table `detalle_pensum_academico`
--
ALTER TABLE `detalle_pensum_academico`
  ADD PRIMARY KEY (`id_detalle_pensum`),
  ADD KEY `fk_pensum` (`fk_pensum`),
  ADD KEY `fk_profesor` (`fk_profesor`),
  ADD KEY `fk_materia` (`fk_materia`);

--
-- Indexes for table `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_examen`),
  ADD KEY `fk_periodo` (`fk_periodo`);

--
-- Indexes for table `img_profesor`
--
ALTER TABLE `img_profesor`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `materia_inicial2`
--
ALTER TABLE `materia_inicial2`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `materia_preparatoria`
--
ALTER TABLE `materia_preparatoria`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indexes for table `notas_examen`
--
ALTER TABLE `notas_examen`
  ADD PRIMARY KEY (`id_examennota`),
  ADD KEY `fk_examen` (`fk_examen`);

--
-- Indexes for table `notas_inicial2`
--
ALTER TABLE `notas_inicial2`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indexes for table `notas_preparatoria`
--
ALTER TABLE `notas_preparatoria`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indexes for table `notas_supletorio`
--
ALTER TABLE `notas_supletorio`
  ADD PRIMARY KEY (`id_supletorio`);

--
-- Indexes for table `parciales`
--
ALTER TABLE `parciales`
  ADD PRIMARY KEY (`codigo_parcial`),
  ADD KEY `fk_periodo` (`fk_periodo`);

--
-- Indexes for table `pensum_academico`
--
ALTER TABLE `pensum_academico`
  ADD PRIMARY KEY (`id_pensum`),
  ADD KEY `fk_curso` (`fk_curso`),
  ADD KEY `fk_anio` (`fk_anio`);

--
-- Indexes for table `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`codigo_periodo`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indexes for table `proyecto_escolar`
--
ALTER TABLE `proyecto_escolar`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indexes for table `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indexes for table `sistemacalificaciones`
--
ALTER TABLE `sistemacalificaciones`
  ADD PRIMARY KEY (`id_sistcalif`),
  ADD KEY `fk_seccion` (`fk_seccion`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id_tutor`),
  ADD KEY `fk_profesor` (`fk_profesor`),
  ADD KEY `fk_curso` (`fk_curso`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_profesor` (`fk_profesor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos_supletorio`
--
ALTER TABLE `alumnos_supletorio`
  MODIFY `id_supletorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aniolectivo`
--
ALTER TABLE `aniolectivo`
  MODIFY `id_aniolectivo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `comportamiento`
--
ALTER TABLE `comportamiento`
  MODIFY `id_conducta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `curso_alumno`
--
ALTER TABLE `curso_alumno`
  MODIFY `id_curso_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `datos_madre`
--
ALTER TABLE `datos_madre`
  MODIFY `id_datosmadre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `datos_padre`
--
ALTER TABLE `datos_padre`
  MODIFY `id_datospadre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `datos_representante`
--
ALTER TABLE `datos_representante`
  MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `detalle_materia_inicial`
--
ALTER TABLE `detalle_materia_inicial`
  MODIFY `id_detalle_materia` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `detalle_materia_preparatoria`
--
ALTER TABLE `detalle_materia_preparatoria`
  MODIFY `id_detalle_materia` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `detalle_pensum_academico`
--
ALTER TABLE `detalle_pensum_academico`
  MODIFY `id_detalle_pensum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `examen`
--
ALTER TABLE `examen`
  MODIFY `id_examen` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `img_profesor`
--
ALTER TABLE `img_profesor`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `materia_inicial2`
--
ALTER TABLE `materia_inicial2`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `materia_preparatoria`
--
ALTER TABLE `materia_preparatoria`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `notas_examen`
--
ALTER TABLE `notas_examen`
  MODIFY `id_examennota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notas_inicial2`
--
ALTER TABLE `notas_inicial2`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `notas_preparatoria`
--
ALTER TABLE `notas_preparatoria`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `notas_supletorio`
--
ALTER TABLE `notas_supletorio`
  MODIFY `id_supletorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parciales`
--
ALTER TABLE `parciales`
  MODIFY `codigo_parcial` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pensum_academico`
--
ALTER TABLE `pensum_academico`
  MODIFY `id_pensum` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `periodos`
--
ALTER TABLE `periodos`
  MODIFY `codigo_periodo` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `proyecto_escolar`
--
ALTER TABLE `proyecto_escolar`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sistemacalificaciones`
--
ALTER TABLE `sistemacalificaciones`
  MODIFY `id_sistcalif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id_tutor` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aniolectivo`
--
ALTER TABLE `aniolectivo`
  ADD CONSTRAINT `aniolectivo_ibfk_1` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`),
  ADD CONSTRAINT `aniolectivo_ibfk_2` FOREIGN KEY (`fk_sistcalif`) REFERENCES `sistemacalificaciones` (`id_sistcalif`);

--
-- Constraints for table `curso_alumno`
--
ALTER TABLE `curso_alumno`
  ADD CONSTRAINT `curso_alumno_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `curso_alumno_ibfk_2` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `curso_alumno_ibfk_3` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`),
  ADD CONSTRAINT `curso_alumno_ibfk_4` FOREIGN KEY (`fk_anio`) REFERENCES `aniolectivo` (`id_aniolectivo`);

--
-- Constraints for table `datos_madre`
--
ALTER TABLE `datos_madre`
  ADD CONSTRAINT `datos_madre_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Constraints for table `datos_padre`
--
ALTER TABLE `datos_padre`
  ADD CONSTRAINT `datos_padre_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Constraints for table `datos_representante`
--
ALTER TABLE `datos_representante`
  ADD CONSTRAINT `datos_representante_ibfk_1` FOREIGN KEY (`fk_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Constraints for table `detalle_materia_inicial`
--
ALTER TABLE `detalle_materia_inicial`
  ADD CONSTRAINT `detalle_materia_inicial_ibfk_1` FOREIGN KEY (`fk_materia`) REFERENCES `materia_inicial2` (`id_materia`);

--
-- Constraints for table `detalle_materia_preparatoria`
--
ALTER TABLE `detalle_materia_preparatoria`
  ADD CONSTRAINT `detalle_materia_preparatoria_ibfk_1` FOREIGN KEY (`fk_materia`) REFERENCES `materia_preparatoria` (`id_materia`);

--
-- Constraints for table `detalle_pensum_academico`
--
ALTER TABLE `detalle_pensum_academico`
  ADD CONSTRAINT `detalle_pensum_academico_ibfk_1` FOREIGN KEY (`fk_pensum`) REFERENCES `pensum_academico` (`id_pensum`),
  ADD CONSTRAINT `detalle_pensum_academico_ibfk_2` FOREIGN KEY (`fk_profesor`) REFERENCES `profesor` (`id_profesor`),
  ADD CONSTRAINT `detalle_pensum_academico_ibfk_3` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id_materia`);

--
-- Constraints for table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`fk_periodo`) REFERENCES `periodos` (`codigo_periodo`);

--
-- Constraints for table `notas_examen`
--
ALTER TABLE `notas_examen`
  ADD CONSTRAINT `notas_examen_ibfk_1` FOREIGN KEY (`fk_examen`) REFERENCES `examen` (`id_examen`);

--
-- Constraints for table `parciales`
--
ALTER TABLE `parciales`
  ADD CONSTRAINT `parciales_ibfk_1` FOREIGN KEY (`fk_periodo`) REFERENCES `periodos` (`codigo_periodo`);

--
-- Constraints for table `pensum_academico`
--
ALTER TABLE `pensum_academico`
  ADD CONSTRAINT `pensum_academico_ibfk_1` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`),
  ADD CONSTRAINT `pensum_academico_ibfk_2` FOREIGN KEY (`fk_anio`) REFERENCES `aniolectivo` (`id_aniolectivo`);

--
-- Constraints for table `sistemacalificaciones`
--
ALTER TABLE `sistemacalificaciones`
  ADD CONSTRAINT `sistemaCalificaciones_ibfk_1` FOREIGN KEY (`fk_seccion`) REFERENCES `seccion` (`id_seccion`);

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`fk_profesor`) REFERENCES `profesor` (`id_profesor`),
  ADD CONSTRAINT `tutor_ibfk_2` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`fk_profesor`) REFERENCES `profesor` (`id_profesor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

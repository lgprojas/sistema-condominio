-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-04-2021 a las 13:35:50
-- Versión del servidor: 5.6.51
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `condominio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `Id_act` int(11) NOT NULL,
  `Nom_act` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`Id_act`, `Nom_act`) VALUES
(1, 'Ninguna'),
(2, 'Trabajador condominio'),
(3, 'Integrante comité'),
(4, 'Proveedor externo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_extra`
--

CREATE TABLE `act_extra` (
  `Id_actext` int(11) NOT NULL,
  `Nom_actext` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `act_extra`
--

INSERT INTO `act_extra` (`Id_actext`, `Nom_actext`) VALUES
(1, 'Visita amistad'),
(2, 'Visita familiar'),
(3, 'Trabajo particular vivienda'),
(4, 'Trabajador Condominio'),
(5, 'Proveedor Gas'),
(6, 'Proveedor Cable/internet'),
(7, 'Delivery');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calle_block`
--

CREATE TABLE `calle_block` (
  `Id_cb` int(11) NOT NULL,
  `Nom_cb` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `Id_cargo` int(11) NOT NULL,
  `Nom_cargo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `Id_ciu` int(11) NOT NULL,
  `Nom_ciu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`Id_ciu`, `Nom_ciu`) VALUES
(1, 'La Serena'),
(2, 'Coquimbo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominio`
--

CREATE TABLE `condominio` (
  `Id_cond` int(11) NOT NULL,
  `Nom_cond` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Dir_cond` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_inm` int(11) NOT NULL,
  `Id_ciu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `condominio`
--

INSERT INTO `condominio` (`Id_cond`, `Nom_cond`, `Dir_cond`, `Id_inm`, `Id_ciu`) VALUES
(1, 'Aires de La Florida', 'Avenida Arauco 5440', 1, 1),
(2, 'Marina 1', 'Regimiento Arica 301', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condominio_empleado`
--

CREATE TABLE `condominio_empleado` (
  `Id_cond` int(11) NOT NULL,
  `Id_emp` int(11) NOT NULL,
  `Fch_ini` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_cond`
--

CREATE TABLE `config_cond` (
  `Id_cc` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL,
  `Id_tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_emp` int(11) NOT NULL,
  `Rut_emp` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nom1_emp` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nom2_emp` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ape1_emp` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ape2_emp` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `Id_encu` int(11) NOT NULL,
  `Nom_encu` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Fchi_encu` date NOT NULL,
  `Fcht_encu` date DEFAULT NULL,
  `Id_cond` int(11) NOT NULL,
  `Id_estencu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `Id_esta` int(11) NOT NULL,
  `Nom_esta` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_encu`
--

CREATE TABLE `est_encu` (
  `Id_estencu` int(11) NOT NULL,
  `Nom_estencu` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `est_encu`
--

INSERT INTO `est_encu` (`Id_estencu`, `Nom_estencu`) VALUES
(1, 'Activada'),
(2, 'Desactivada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_multa`
--

CREATE TABLE `est_multa` (
  `Id_estmul` int(11) NOT NULL,
  `Nom_estmul` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `est_multa`
--

INSERT INTO `est_multa` (`Id_estmul`, `Nom_estmul`) VALUES
(1, 'En deuda'),
(2, 'Pagada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_resi`
--

CREATE TABLE `est_resi` (
  `Id_estre` int(11) NOT NULL,
  `Nom_estre` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Residencia en el condominio';

--
-- Volcado de datos para la tabla `est_resi`
--

INSERT INTO `est_resi` (`Id_estre`, `Nom_estre`) VALUES
(1, 'Residente'),
(2, 'No residente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_usu`
--

CREATE TABLE `est_usu` (
  `Id_estusu` int(11) NOT NULL,
  `Nom_estusu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `est_usu`
--

INSERT INTO `est_usu` (`Id_estusu`, `Nom_estusu`) VALUES
(1, 'Activado'),
(2, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestor_cond`
--

CREATE TABLE `gestor_cond` (
  `Id_acond` int(11) NOT NULL,
  `Id_usu` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_multa`
--

CREATE TABLE `his_multa` (
  `Id_hmul` int(11) NOT NULL,
  `Cod_hmul` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Fch_hmul` datetime NOT NULL,
  `Tipo_hmul` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_viv` int(11) NOT NULL,
  `Oldtotal_hmul` int(11) DEFAULT NULL,
  `Newtotal_hmul` int(11) DEFAULT NULL,
  `Oldest_hmul` int(11) DEFAULT NULL,
  `Newest_hmul` int(11) DEFAULT NULL,
  `Rut_usu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_obs`
--

CREATE TABLE `his_obs` (
  `Id_hobs` int(11) NOT NULL,
  `Id_obs` int(11) NOT NULL,
  `Fch_hobs` datetime NOT NULL,
  `Tipo_hobs` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Oldfchi_hobs` datetime NOT NULL,
  `Newfchi_hobs` datetime NOT NULL,
  `Oldtobs_hobs` int(11) NOT NULL,
  `Newtobs_hobs` int(11) NOT NULL,
  `Rut_usu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_per`
--

CREATE TABLE `his_per` (
  `Id_hper` int(11) NOT NULL,
  `Fch_hper` datetime NOT NULL,
  `Tipo_hper` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Rut_per` blob NOT NULL,
  `Nom1_per` blob NOT NULL,
  `Nom2_per` blob NOT NULL,
  `Ape1_per` blob NOT NULL,
  `Ape2_per` blob NOT NULL,
  `Fono_per` blob NOT NULL,
  `Id_estre` int(11) NOT NULL,
  `Id_act` int(11) NOT NULL,
  `Rut_usu` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cond` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_ses`
--

CREATE TABLE `his_ses` (
  `Id_hses` int(11) NOT NULL,
  `Fch_hses` datetime NOT NULL,
  `Cant_hses` smallint(6) NOT NULL,
  `Intentos_hses` tinyint(1) NOT NULL,
  `ContBloq_hses` tinyint(1) NOT NULL,
  `Est_hses` tinyint(1) NOT NULL,
  `Id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `his_ses`
--

INSERT INTO `his_ses` (`Id_hses`, `Fch_hses`, `Cant_hses`, `Intentos_hses`, `ContBloq_hses`, `Est_hses`, `Id_usu`) VALUES
(1, '2018-05-30 07:07:07', 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_usu`
--

CREATE TABLE `his_usu` (
  `Id_husu` int(11) NOT NULL,
  `Fch_husu` datetime NOT NULL,
  `Tipo_husu` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_usu` int(11) NOT NULL,
  `Nom_usu` blob NOT NULL,
  `Usu_usu` blob NOT NULL,
  `Pass_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Email_usu` blob NOT NULL,
  `Id_role` int(11) NOT NULL,
  `Id_estusu` int(11) NOT NULL,
  `Cod_usu` int(11) NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Rut_usu` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cond` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `his_viv`
--

CREATE TABLE `his_viv` (
  `Id_hviv` int(11) NOT NULL,
  `Fch_hviv` datetime NOT NULL,
  `Tipo_hviv` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_viv` int(11) NOT NULL,
  `Id_cb` int(11) NOT NULL,
  `Num_viv` int(11) NOT NULL,
  `Id_esta` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL,
  `Rut_usu` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `Id_info` int(11) NOT NULL,
  `Nom_info` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Desc_info` text COLLATE utf8_spanish_ci NOT NULL,
  `Fch_info` date NOT NULL,
  `Fch_cinfo` date DEFAULT NULL,
  `Fch_tinfo` date DEFAULT NULL,
  `Adj_info` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_usu` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmobiliaria`
--

CREATE TABLE `inmobiliaria` (
  `Id_inm` int(11) NOT NULL,
  `Cod_inm` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nom_inm` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmobiliaria`
--

INSERT INTO `inmobiliaria` (`Id_inm`, `Cod_inm`, `Nom_inm`) VALUES
(1, 'C0001', 'Habita'),
(2, 'C0002', 'Santa Beatriz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_encuesta`
--

CREATE TABLE `item_encuesta` (
  `Id_iencu` int(11) NOT NULL,
  `Nom_iencu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Adj_iencu` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_encu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_reunion`
--

CREATE TABLE `item_reunion` (
  `Id_ireu` int(11) NOT NULL,
  `Nom_ireu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_reu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `Id_marca` int(11) NOT NULL,
  `Nom_marca` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Id_marca`, `Nom_marca`) VALUES
(2, 'AGRALE'),
(3, 'ALFA ROMEO'),
(4, 'AUDI'),
(5, 'BMW'),
(6, 'CHERY'),
(7, 'CHEVROLET'),
(8, 'CHRYSLER'),
(9, 'CITROEN'),
(10, 'DACIA'),
(11, 'DAEWO'),
(12, 'DAIHATSU'),
(13, 'DODGE'),
(14, 'FERRARI'),
(15, 'FIAT'),
(16, 'FORD'),
(17, 'GALLOPER'),
(18, 'HEIBAO'),
(19, 'HONDA'),
(20, 'HYUNDAI'),
(21, 'ISUZU'),
(22, 'JAGUAR'),
(23, 'JEEP'),
(24, 'KIA'),
(25, 'LADA'),
(26, 'LAND ROVER'),
(27, 'LEXUS'),
(28, 'MASERATI'),
(29, 'MAZDA'),
(30, 'MERCEDES BENZ'),
(31, 'MG'),
(32, 'MINI'),
(33, 'MITSUBISHI'),
(34, 'NISSAN'),
(35, 'PEUGEOT'),
(36, 'PORSCHE'),
(37, 'RAM'),
(38, 'RENAULT'),
(39, 'ROVER'),
(40, 'SAAB'),
(41, 'SEAT'),
(42, 'SMART'),
(43, 'SSANGYONG'),
(44, 'SUBARU'),
(45, 'SUZUKI'),
(46, 'TATA'),
(47, 'TOYOTA'),
(48, 'VOLKSWAGEN'),
(49, 'VOLVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `Id_modelo` int(11) NOT NULL,
  `Nom_modelo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`Id_modelo`, `Nom_modelo`, `Id_marca`) VALUES
(2, 'MARRUA', 2),
(3, '147', 3),
(4, '156', 3),
(5, '159', 3),
(6, '166', 3),
(7, 'BRERA', 3),
(8, 'GIULIETTA', 3),
(9, 'GT', 3),
(10, 'GTV', 3),
(11, 'MITO', 3),
(12, 'SPIDER', 3),
(13, 'A1', 4),
(14, 'A3', 4),
(15, 'A4', 4),
(16, 'A5', 4),
(17, 'A6', 4),
(18, 'A7', 4),
(19, 'A8', 4),
(20, 'ALLROAD', 4),
(21, 'Q3', 4),
(22, 'Q5', 4),
(23, 'Q7', 4),
(24, 'R8', 4),
(25, 'TT', 4),
(26, 'SERIE1', 5),
(27, 'SERIE3', 5),
(28, 'SERIE5', 5),
(29, 'SERIE6', 5),
(30, 'SERIE7', 5),
(31, 'X1', 5),
(32, 'X3', 5),
(33, 'X5', 5),
(34, 'X6', 5),
(35, 'Z3', 5),
(36, 'Z4', 5),
(37, 'FACE', 6),
(38, 'FULWIN', 6),
(39, 'QQ', 6),
(40, 'SKIN', 6),
(41, 'TIGGO', 6),
(42, 'AGILE', 7),
(43, 'ASTRA', 7),
(44, 'ASTRA II', 7),
(45, 'AVALANCHE', 7),
(46, 'AVEO', 7),
(47, 'BLAZER', 7),
(48, 'CAMARO', 7),
(49, 'CAPTIVA', 7),
(50, 'CELTA', 7),
(51, 'CLASSIC', 7),
(52, 'COBALT', 7),
(53, 'CORSA', 7),
(54, 'CORSA CLASSIC', 7),
(55, 'CORSA II', 7),
(56, 'CORVETTE', 7),
(57, 'CRUZE', 7),
(58, 'MERIVA', 7),
(59, 'MONTANA', 7),
(60, 'ONIX', 7),
(61, 'PRISMA', 7),
(62, 'VECTRA', 7),
(63, 'S-10', 7),
(64, 'SILVERADO', 7),
(65, 'SONIC', 7),
(66, 'SPARK', 7),
(67, 'SPIN', 7),
(68, 'TRACKER', 7),
(69, 'TRAILBLAZER', 7),
(70, 'ZAFIRA', 7),
(71, '300', 8),
(72, 'CARAVAN', 8),
(73, 'TOWN & COUNTRY', 8),
(74, 'GRAND CARAVAN', 8),
(75, 'CROSSFIRE', 8),
(76, 'NEON', 8),
(77, 'PT CRUISER', 8),
(78, 'SEBRIG', 8),
(79, 'BERLINGO', 9),
(80, 'C3', 9),
(81, 'C3 AIRCROSS', 9),
(82, 'C3 PICASSO', 9),
(83, 'C4 AIRCROSS', 9),
(84, 'C4 LOUNGE', 9),
(85, 'C4 PICASSO', 9),
(86, 'C4 GRAND PICASSO', 9),
(87, 'C5', 9),
(88, 'C6', 9),
(89, 'DS3', 9),
(90, 'DS4', 9),
(91, 'C15', 9),
(92, 'JUMPER', 9),
(93, 'SAXO', 9),
(94, 'XSARA', 9),
(95, 'XSARA PICASSO', 9),
(96, 'PICK-UP', 10),
(97, 'LANOS', 11),
(98, 'LEGANZA', 11),
(99, 'NUBIRA', 11),
(100, 'MATIZ', 11),
(101, 'TACUMA', 11),
(102, 'DAMAS', 11),
(103, 'LABO', 11),
(104, 'MOVE', 12),
(105, 'ROCKY', 12),
(106, 'SIRION', 12),
(107, 'TERIOS', 12),
(108, 'MIRA', 12),
(109, 'JOURNEY', 13),
(110, 'RAM', 13),
(111, '360', 14),
(112, '430', 14),
(113, '456', 14),
(114, '575', 14),
(115, '599', 14),
(116, '612', 14),
(117, 'CALIFORNIA', 14),
(118, 'SUPERAMERICA', 14),
(119, '500', 15),
(120, 'BRAVA', 15),
(121, 'BRAVO', 15),
(122, 'DOBLO', 15),
(123, 'DUCATO', 15),
(124, 'FIORINO', 15),
(125, 'FIORINO QUBO', 15),
(126, 'IDEA', 15),
(127, 'LINEA', 15),
(128, 'MAREA', 15),
(129, 'PALIO', 15),
(130, 'PALIO ADVENTURE', 15),
(131, 'PUNTO', 15),
(132, 'QUBO', 15),
(133, 'SIENA', 15),
(134, 'GRAND SIENA', 15),
(135, 'STILO', 15),
(136, 'STRADA', 15),
(137, 'UNO', 15),
(138, 'UNO EVO', 15),
(139, 'COURIER', 16),
(140, 'ECOSPORT', 16),
(141, 'ECOSPORT KD', 16),
(142, 'ESCAPE', 16),
(143, 'F100', 16),
(144, 'FIESTA KD', 16),
(145, 'FIESTA', 16),
(146, 'FOCUS', 16),
(147, 'FOCUS III', 16),
(148, 'KA', 16),
(149, 'KUGA', 16),
(150, 'MONDEO', 16),
(151, 'RANGER', 16),
(152, 'S-MAX', 16),
(153, 'TRANSIT', 16),
(154, 'EXCEED', 17),
(155, 'HB', 18),
(156, 'ACCORD', 19),
(157, 'CITY', 19),
(158, 'CIVIC', 19),
(159, 'CRV', 19),
(160, 'FIT', 19),
(161, 'HRV', 19),
(162, 'LEGEND', 19),
(163, 'PILOT', 19),
(164, 'STREAM', 19),
(165, 'ACCENT', 20),
(166, 'ATOS PRIME', 20),
(167, 'COUPE', 20),
(168, 'ELANTRA', 20),
(169, 'I 10', 20),
(170, 'I 30', 20),
(171, 'MATRIX', 20),
(172, 'SANTA FE', 20),
(173, 'SONATA', 20),
(174, 'TERRACAN', 20),
(175, 'TRAJET', 20),
(176, 'TUCSON', 20),
(177, 'VELOSTER', 20),
(178, 'VERACRUZ', 20),
(179, 'AMIGO', 21),
(180, 'PICK-UP CABIAN SIMPLE', 21),
(181, 'PICK-UP SPACE CAB', 21),
(182, 'PICK-UP CABINA DOBLE', 21),
(183, 'TROOPER', 21),
(184, 'X-TYPE', 22),
(185, 'XF', 22),
(186, 'F-TYPE', 22),
(187, 'S-TYPE', 22),
(188, 'XJ', 22),
(189, 'XK', 22),
(190, 'CHEROKEE', 23),
(191, 'COMPASS', 23),
(192, 'GRAND CHEROKEE', 23),
(193, 'PATRIOT', 23),
(194, 'WRANGLER', 23),
(195, 'CARENS', 24),
(196, 'CARNIVAL', 24),
(197, 'CERATO', 24),
(198, 'MAGENTIS', 24),
(199, 'MOHAVE', 24),
(200, 'OPIRUS', 24),
(201, 'PICANTO', 24),
(202, 'RIO', 24),
(203, 'RONDO', 24),
(204, 'SPORTAGE', 24),
(205, 'GRAND SPORTAGE', 24),
(206, 'SORENTO', 24),
(207, 'SOUL', 24),
(208, 'PREGIO', 24),
(209, 'AFALINA', 25),
(210, 'SAMARA', 25),
(211, 'DEFENDER', 26),
(212, 'DISCOVERY', 26),
(213, 'FREELANDER', 26),
(214, 'RANGE ROVER', 26),
(215, 'LS', 27),
(216, 'GS', 27),
(217, 'IS', 27),
(218, 'QUATTROPORTE', 28),
(219, 'COUPE', 28),
(220, 'GRAND TURISMO', 28),
(221, 'SPYDER', 28),
(222, '323', 29),
(223, '626', 29),
(224, 'MPV', 29),
(225, 'B 2500', 29),
(226, 'B 2900', 29),
(227, 'AMG', 30),
(228, 'CLASE A', 30),
(229, 'CLASE B', 30),
(230, 'CLASE C', 30),
(231, 'CLASE CL', 30),
(232, 'CLASE CLA', 30),
(233, 'CLASE CLC', 30),
(234, 'CLASE CLK', 30),
(235, 'CLASE CLS', 30),
(236, 'CLASE E', 30),
(237, 'CLASE G', 30),
(238, 'CLASE GL', 30),
(239, 'CLASE ML', 30),
(240, 'CLASE S', 30),
(241, 'CLASE SL', 30),
(242, 'CLASE SLK', 30),
(243, 'VIANO', 30),
(244, 'MGF', 31),
(245, 'COOPER', 32),
(246, 'CANTER', 33),
(247, 'L-200', 33),
(248, 'LANCER', 33),
(249, 'MONTERO', 33),
(250, 'NATIVA', 33),
(251, 'OUTLANDER', 33),
(252, '350', 34),
(253, '370Z', 34),
(254, 'PATHFINDER', 34),
(255, 'FRONTIER', 34),
(256, 'MARCH', 34),
(257, 'MURANO', 34),
(258, 'NP300', 34),
(259, 'PICK-UP', 34),
(260, 'SENTRA', 34),
(261, 'TEANA', 34),
(262, 'TERRANO II', 34),
(263, 'TIIDA', 34),
(264, 'VERSA', 34),
(265, 'X-TERRA', 34),
(266, 'X-TRAIL', 34),
(267, '106', 35),
(268, '206', 35),
(269, '207', 35),
(270, '208', 35),
(271, '306', 35),
(272, '307', 35),
(273, '308', 35),
(274, '3008', 35),
(275, '405', 35),
(276, '406', 35),
(277, '407', 35),
(278, '408', 35),
(279, '4008', 35),
(280, '508', 35),
(281, '5008', 35),
(282, '607', 35),
(283, '806', 35),
(284, '807', 35),
(285, 'RCZ', 35),
(286, 'EXPERT', 35),
(287, 'HOGGAR', 35),
(288, 'PARTNER', 35),
(289, 'BOXER', 35),
(290, '911', 36),
(291, 'BOXSTER', 36),
(292, 'CAYENNE', 36),
(293, 'CAYMAN', 36),
(294, 'PANAMERA', 36),
(295, '1500', 37),
(296, '2500', 37),
(297, 'CLIO MIO', 38),
(298, 'CLIO L/NUEVA', 38),
(299, 'CLIO 2', 38),
(300, 'DUSTER', 38),
(301, 'FLUENCE', 38),
(302, 'KANGOO', 38),
(303, 'KANGOO FURGON', 38),
(304, 'KOLEOS', 38),
(305, 'LAGUNA', 38),
(306, 'LATITUDE', 38),
(307, 'LOGAN', 38),
(308, 'MEGANE', 38),
(309, 'MEGANE II', 38),
(310, 'MEGANE III', 38),
(311, 'SANDERO', 38),
(312, 'SANDERO STEPWAY', 38),
(313, 'SCENIC', 38),
(314, 'SYMBOL', 38),
(315, 'TWINGO', 38),
(316, 'TRAFIC', 38),
(317, 'MASTER', 38),
(318, 'LINEA 25', 39),
(319, 'LINEA 45', 39),
(320, 'LINEA 75', 39),
(321, 'LINEA 9.3', 39),
(322, 'LINEA 9.5', 39),
(323, 'ALHAMBRA', 40),
(324, 'ALTEA', 40),
(325, 'CORDOBA', 40),
(326, 'IBIZA', 40),
(327, 'INCA FURGON', 40),
(328, 'LEON', 40),
(329, 'TOLEDO', 40),
(330, 'FORTWO', 41),
(331, 'ACTYON', 42),
(332, 'KORANDO', 42),
(333, 'KYRON', 42),
(334, 'ISTANA', 42),
(335, 'MUSSO', 42),
(336, 'REXTON', 42),
(337, 'STAVIC', 42),
(338, 'IMPREZA', 43),
(339, 'LEGACY', 43),
(340, 'OUTBACK', 43),
(341, 'TRIBECA', 43),
(342, 'XV', 43),
(343, 'FORESTER', 43),
(344, 'FUN', 44),
(345, 'GRAND VITARA', 44),
(346, 'SWIFT', 44),
(347, 'JIMNY', 44),
(348, '207 TELCOLINE', 45),
(349, 'SUMO', 46),
(350, '86', 47),
(351, 'AVENSIS', 47),
(352, 'CAMRY', 47),
(353, 'COROLLA', 47),
(354, 'CORONA', 47),
(355, 'ETIOS', 47),
(356, 'ETIOS CROSS', 47),
(357, 'HILUX', 47),
(358, 'LAND CRUISER', 47),
(359, 'PRIUS', 47),
(360, 'RAV 4', 47),
(361, 'AMAROK', 48),
(362, 'BORA', 48),
(363, 'CADDY', 48),
(364, 'CROSSFOX', 48),
(365, 'FOX', 48),
(366, 'GOL', 48),
(367, 'GOL TREND', 48),
(368, 'GOLF', 48),
(369, 'MULTIVAN', 48),
(370, 'THE BEETLE', 48),
(371, 'NEW BEETLE', 48),
(372, 'PASSAT', 48),
(373, 'CC', 48),
(374, 'POLO', 48),
(375, 'SANTANA', 48),
(376, 'SAVEIRO', 48),
(377, 'SCIROCCO', 48),
(378, 'SHARAN', 48),
(379, 'SURAN', 48),
(380, 'TIGUAN', 48),
(381, 'TOUAREG', 48),
(382, 'TRANSPORTER', 48),
(383, 'UP', 48),
(384, 'VENTO', 48),
(385, 'VOYAGE', 48),
(386, 'C30', 49),
(387, 'C70', 49),
(388, 'S40', 49),
(389, 'S60', 49),
(390, 'S80', 49),
(391, 'V40', 49),
(392, 'V50', 49),
(393, 'V60', 49),
(394, 'V70', 49),
(395, 'XC60', 49),
(396, 'XC70', 49),
(397, 'XC90', 49),
(398, 'SPARK GT', 7),
(399, 'YARIS', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multa`
--

CREATE TABLE `multa` (
  `Id_multa` int(11) NOT NULL,
  `Cod_multa` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Fch_multa` datetime NOT NULL,
  `Fchi_multa` date NOT NULL,
  `Fchp_multa` date DEFAULT NULL,
  `Nota_multa` text COLLATE utf8_spanish_ci,
  `Total_multa` int(11) NOT NULL,
  `Id_usu` int(11) NOT NULL,
  `Id_viv` int(11) NOT NULL,
  `Id_tmul` int(11) NOT NULL,
  `Id_estmul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `multa`
--
DELIMITER $$
CREATE TRIGGER `his_create_multa` AFTER INSERT ON `multa` FOR EACH ROW BEGIN
INSERT INTO his_multa
   ( Id_hmul,
     Cod_hmul,
     Fch_hmul,
     Tipo_hmul,
     Id_viv,
     Oldtotal_hmul,
     Newtotal_hmul,
     Oldest_hmul,
     Newest_hmul,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NEW.Cod_multa,
     NOW(),     
     'Creación',
     NEW.Id_viv,
     NULL,
     NEW.Total_multa,
     NULL,
     NEW.Id_estmul,
     @urut,
   	 @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_delete_multa` BEFORE DELETE ON `multa` FOR EACH ROW BEGIN
INSERT INTO his_multa
   ( Id_hmul,
     Cod_hmul,
     Fch_hmul,
     Tipo_hmul,
     Id_viv,
     Oldtotal_hmul,
     Newtotal_hmul,
     Oldest_hmul,
     Newest_hmul,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     OLD.Cod_multa,
     NOW(),
     'Eliminación',
     OLD.Id_viv,
     OLD.Total_multa,
     NULL,
     OLD.Id_estmul,
     NULL,
     @urut,
     @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_update_multa` BEFORE UPDATE ON `multa` FOR EACH ROW BEGIN
INSERT INTO his_multa
   ( Id_hmul,
     Cod_hmul,
     Fch_hmul,
     Tipo_hmul,
     Id_viv,
     Oldtotal_hmul,
     Newtotal_hmul,
     Oldest_hmul,
     Newest_hmul,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NEW.Cod_multa,
     NOW(),
     'Edición',
     NEW.Id_viv,
     OLD.Total_multa,
     NEW.Total_multa,
     OLD.Id_estmul,
     NEW.Id_estmul,
     @urut,
     @cond);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `Id_obs` int(11) NOT NULL,
  `Fch_obs` datetime NOT NULL,
  `Fchi_obs` datetime NOT NULL,
  `Nota_obs` text COLLATE utf8_spanish_ci NOT NULL,
  `Id_tobs` int(11) NOT NULL,
  `Id_usu` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `observacion`
--
DELIMITER $$
CREATE TRIGGER `his_create_obs` AFTER INSERT ON `observacion` FOR EACH ROW BEGIN
INSERT INTO his_obs
   ( Id_hobs,
     Id_obs,
     Fch_hobs,
     Tipo_hobs,
     Oldfchi_hobs,
     Newfchi_hobs,
     Oldtobs_hobs,    
     Newtobs_hobs,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NEW.Id_obs,
     NOW(),     
     'Creación',
     NULL,
     NEW.Fchi_obs,
     NULL,
     NEW.Id_tobs,
     @urut,
   	 @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_delete_obs` BEFORE DELETE ON `observacion` FOR EACH ROW BEGIN
INSERT INTO his_obs
   ( Id_hobs,
     Id_obs,
     Fch_hobs,
     Tipo_hobs,
     Oldfchi_hobs,
     Newfchi_hobs,
     Oldtobs_hobs, 
     Newtobs_hobs,    
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     OLD.Id_obs,
     NOW(),     
     'Eliminación',
     OLD.Fchi_obs,
     NULL,
     OLD.Id_tobs,
     NULL,     
     @urut,
   	 @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_update_obs` BEFORE UPDATE ON `observacion` FOR EACH ROW BEGIN
INSERT INTO his_obs
   ( Id_hobs,
     Id_obs,
     Fch_hobs,
     Tipo_hobs,
     Oldfchi_hobs,
     Newfchi_hobs,
     Oldtobs_hobs,   
     Newtobs_hobs,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NEW.Id_obs,
     NOW(),     
     'Edición',
     OLD.Fchi_obs,
     NEW.Fchi_obs,
     OLD.Id_tobs,
     NEW.Id_tobs,
     @urut,
   	 @cond);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `Id_perm` int(11) NOT NULL,
  `Nom_perm` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Key_perm` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`Id_perm`, `Nom_perm`, `Key_perm`) VALUES
(1, '100 Ver lista usuarios', 'ver_usu'),
(2, '100 Crear usuario', 'crear_usu'),
(3, '100 Editar usuario', 'editar_usu'),
(4, '100 Editar permisos usuario', 'editar_perm_usu'),
(5, '2 Ver lista permisos', 'ver_perm'),
(6, '2 Crear permiso', 'crear_perm'),
(7, '2 Editar permiso', 'editar_perm'),
(8, '3 Ver lista roles', 'ver_roles'),
(9, '3 Crear role', 'crear_role'),
(10, '3 Editar role', 'editar_role'),
(11, '3 Editar permisos role', 'editar_perm_role'),
(12, '400 Ver lista inmobiliarias', 'ver_inm'),
(13, '400 Crear inmobiliaria', 'crear_inm'),
(14, '400 Editar inmobiliaria', 'editar_inm'),
(15, '400 Eliminar inmobiliaria', 'elim_inm'),
(16, '401 Ver lista condominios', 'ver_cond'),
(17, '401 Crear condominio', 'crear_cond'),
(18, '401 Editar condominio', 'editar_cond'),
(19, '401 Eliminar condominio', 'elim_cond'),
(20, '402 Ver lista calle/block', 'ver_cb'),
(21, '402 Crear calle/block', 'crear_cb'),
(22, '402 Editar calle/block', 'editar_cb'),
(23, '402 Eliminar calle/block', 'elim_cb'),
(24, '403 Ver lista marcas', 'ver_marca'),
(25, '403 Crear marca', 'crear_marca'),
(26, '403 Editar marca', 'editar_marca'),
(27, '403 Eliminar marca', 'elim_marca'),
(28, '404 Ver lista modelos', 'ver_modelo'),
(29, '404 Crear modelo', 'crear_modelo'),
(30, '404 Editar modelo', 'editar_modelo'),
(31, '404 Eliminar modelo', 'elim_modelo'),
(32, '500 Ver lista personas', 'ver_per'),
(33, '500 Crear persona', 'crear_per'),
(34, '500 Editar persona', 'editar_per'),
(35, '500 Eliminar persona', 'elim_per'),
(36, '501 Ver lista viviendas', 'ver_viv'),
(37, '501 Crear vivienda', 'crear_viv'),
(38, '501 Editar vivienda', 'editar_viv'),
(39, '501 Eliminar vivienda', 'elim_viv'),
(40, '502 Ver lista vehículos', 'ver_vehi'),
(41, '502 Crear vehículo', 'crear_vehi'),
(42, '502 Editar vehículo', 'editar_vehi'),
(43, '502 Eliminar vehículo', 'elim_vehi'),
(44, '600 Buscar por Patente', 'bus_pat'),
(45, '601 Buscar RUN', 'bus_run'),
(46, '602 Buscar vivienda', 'bus_viv'),
(47, '503 Ver lista encuestas', 'ver_encu'),
(48, '503 Crear encuesta', 'crear_encu'),
(49, '503 Editar encuesta', 'editar_encu'),
(50, '503 Eliminar encuesta', 'elim_encu'),
(51, '503 Editar estado encuesta', 'edit_est_encu'),
(52, '503 Ver votos encuesta', 'ver_votos_encu'),
(53, '503 Ver lista ítems encuesta', 'ver_items'),
(54, '503 Crear ítem encuesta', 'crear_item'),
(55, '503 Editar ítem', 'editar_item'),
(56, '503 Eliminar ítem', 'elim_item'),
(57, '700 Ver lista info', 'ver_infos'),
(58, '700 Crear informativo', 'crear_info'),
(59, '700 Editar informativo', 'editar_info'),
(60, '700 Eliminar informativo', 'elim_info'),
(61, '700 Ver informativo', 'ver_info'),
(62, '701 Ver lista encuestas mc', 'ver_encu_mc'),
(63, '701 Votar encuesta mc', 'votar_encu_mc'),
(64, '401 Editar Config Condominio', 'editar_conf_cond'),
(65, '500 Asociar viv a persona', 'asoc_viv_per'),
(66, '500 Asociar vehi a persona', 'asoc_vehi_per'),
(67, '800 Ver historial visita', 'hist_ver_visita'),
(68, '100 Eliminar Usuario', 'elim_usu'),
(69, '603 Buscar Avanzado', 'bus_avanz'),
(70, '101 Ver lista gestores', 'ver_gestores'),
(71, '101 Crear gestor', 'crear_gestor'),
(72, '101 Editar permisos gestor', 'editar_perm_gestor'),
(73, '101 Editar gestor', 'editar_gestor'),
(74, '101 Eliminar gestor', 'elim_gestor'),
(75, '101 Config cond gestor', 'config_cond_gestor'),
(76, '101 Eliminar cond gestor', 'elim_cond_gestor'),
(77, '900 Ver lista backup', 'ver_backup'),
(78, '900 Generar backup simple', 'backup_simple_bd'),
(79, '900 Generar y descargar backup', 'backup_download_bd'),
(80, '900 Generar y enviar backup', 'backup_sendmail_bd'),
(81, '801 Ver lista viv multa', 'ver_vivmulta'),
(82, '801 Ver lista multas viv', 'ver_lista_multas'),
(83, '801 Crear multa', 'crear_multa'),
(84, '801 Editar multa', 'editar_multa'),
(85, '801 Eliminar multa', 'elim_multa'),
(86, '802 Ver lista observación', 'ver_lista_obs'),
(87, '802 Crear observación', 'crear_obs'),
(88, '802 Editar observación', 'editar_obs'),
(89, '802 Eliminar observación', 'elim_obs'),
(90, '500 Desasociar viv de persona', 'desasoc_viv_per'),
(91, '500 Desasociar vehí de persona', 'desasoc_vehi_per'),
(92, '500 Ver viv asoc persona', 'ver_asoc_viv_per'),
(93, '500 Ver vehi asoc persona', 'ver_asoc_vehi_per');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Id_per` int(11) NOT NULL,
  `Rut_per` blob,
  `Nom1_per` blob,
  `Nom2_per` blob,
  `Ape1_per` blob,
  `Ape2_per` blob,
  `Fono_per` blob,
  `Fch_per` date DEFAULT NULL,
  `Id_estre` int(11) NOT NULL,
  `Id_cond` int(11) DEFAULT NULL,
  `Id_act` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id_per`, `Rut_per`, `Nom1_per`, `Nom2_per`, `Ape1_per`, `Ape2_per`, `Fono_per`, `Fch_per`, `Id_estre`, `Id_cond`, `Id_act`) VALUES
(1, 0xe54ebfef642ef3bca3d8eca093522086, 0x903f9f2ccbcaa2921e683ed0b0119a0d, 0xfddedb7e0ba9564dffd8db400514b5f6, 0x2f0ab369de69cccd19f96f89f53df694, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x1420a7cc5ba2decc1c4917ed4581b741, '2017-10-10', 1, 1, 1);

--
-- Disparadores `persona`
--
DELIMITER $$
CREATE TRIGGER `his_create_per` AFTER INSERT ON `persona` FOR EACH ROW BEGIN
INSERT INTO his_per
   ( Id_hper,
     Fch_hper,
     Tipo_hper,
     Id_per,
     Rut_per,
     Nom1_per,
     Nom2_per,
     Ape1_per,
     Ape2_per,
     Fono_per,
     Id_estre,
     Id_act,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NOW(),
     'Creación',
     NEW.Id_per,
     NEW.Rut_per,
     NEW.Nom1_per,
     NEW.Nom2_per,
     NEW.Ape1_per,
     NEW.Ape2_per,
     NEW.Fono_per,
     NEW.Id_estre,
     NEW.Id_act,
     @urut,
     @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_delete_per` BEFORE DELETE ON `persona` FOR EACH ROW BEGIN
INSERT INTO his_per
   ( Id_hper,
     Fch_hper,
     Tipo_hper,
     Id_per,
     Rut_per,
     Nom1_per,
     Nom2_per,
     Ape1_per,
     Ape2_per,
     Fono_per,
     Id_estre,
     Id_act,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NOW(),
     'Eliminación',
     OLD.Id_per,
     OLD.Rut_per,
     OLD.Nom1_per,
     OLD.Nom2_per,
     OLD.Ape1_per,
     OLD.Ape2_per,
     OLD.Fono_per,
     OLD.Id_estre,
     OLD.Id_act,
     @urut,
     @cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_edit_per` AFTER UPDATE ON `persona` FOR EACH ROW BEGIN
INSERT INTO his_per
   ( Id_hper,
     Fch_hper,
     Tipo_hper,
     Id_per,
     Rut_per,
     Nom1_per,
     Nom2_per,
     Ape1_per,
     Ape2_per,
     Fono_per,
     Id_estre,
     Id_act,
     Rut_usu,
     Id_cond
    )
   VALUES
   ( NULL,
     NOW(),
     'Edición',
     NEW.Id_per,
     NEW.Rut_per,
     NEW.Nom1_per,
     NEW.Nom2_per,
     NEW.Ape1_per,
     NEW.Ape2_per,
     NEW.Fono_per,
     NEW.Id_estre,
     NEW.Id_act,
     @urut,
     @cond);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_backup`
--

CREATE TABLE `reg_backup` (
  `Id_rb` int(11) NOT NULL,
  `Fch_rb` datetime NOT NULL,
  `Nomfile_rb` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_rb` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_visita`
--

CREATE TABLE `reg_visita` (
  `Id_regv` int(11) NOT NULL,
  `Fch_regv` datetime NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Id_viv` int(11) DEFAULT NULL,
  `Id_actext` int(11) DEFAULT NULL,
  `Id_usu` int(11) NOT NULL,
  `Cod_vehi` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Est_prop` int(11) DEFAULT NULL,
  `Est_visita` int(11) DEFAULT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunion`
--

CREATE TABLE `reunion` (
  `Id_reu` int(11) NOT NULL,
  `Asunto_reu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fch_reu` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Desc_reu` text COLLATE utf8_spanish_ci,
  `condominio_Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `Id_role` int(11) NOT NULL,
  `Nom_role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`Id_role`, `Nom_role`) VALUES
(1, 'Super Administrador'),
(2, 'Gestor'),
(3, 'Administrador'),
(4, 'Conserje'),
(5, 'Presidente'),
(6, 'Comitiva'),
(7, 'Propietario'),
(8, 'Arrendatario titular'),
(9, 'Otro titular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_permiso`
--

CREATE TABLE `role_permiso` (
  `Id_role` int(11) NOT NULL,
  `Id_perm` int(11) NOT NULL,
  `Valor_perm_role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `role_permiso`
--

INSERT INTO `role_permiso` (`Id_role`, `Id_perm`, `Valor_perm_role`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 1),
(1, 13, 1),
(1, 14, 1),
(1, 15, 1),
(1, 16, 1),
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(1, 22, 1),
(1, 23, 1),
(1, 24, 1),
(1, 25, 1),
(1, 26, 1),
(1, 27, 1),
(1, 28, 1),
(1, 29, 1),
(1, 30, 1),
(1, 31, 1),
(1, 32, 1),
(1, 33, 1),
(1, 34, 1),
(1, 35, 1),
(1, 36, 1),
(1, 37, 1),
(1, 38, 1),
(1, 39, 1),
(1, 40, 1),
(1, 41, 1),
(1, 42, 1),
(1, 43, 1),
(1, 44, 1),
(1, 45, 1),
(1, 46, 1),
(1, 47, 1),
(1, 48, 1),
(1, 49, 1),
(1, 50, 1),
(1, 51, 1),
(1, 52, 1),
(1, 53, 1),
(1, 54, 1),
(1, 55, 1),
(1, 56, 1),
(1, 57, 1),
(1, 58, 1),
(1, 59, 1),
(1, 60, 1),
(1, 61, 1),
(1, 62, 1),
(1, 63, 1),
(1, 64, 1),
(1, 65, 1),
(1, 66, 1),
(1, 67, 1),
(1, 68, 1),
(1, 69, 1),
(1, 70, 1),
(1, 71, 1),
(1, 72, 1),
(1, 73, 1),
(1, 74, 1),
(1, 75, 1),
(1, 76, 1),
(1, 77, 1),
(1, 78, 1),
(1, 79, 1),
(1, 80, 1),
(1, 81, 1),
(1, 82, 1),
(1, 83, 1),
(1, 84, 1),
(1, 85, 1),
(1, 86, 1),
(1, 87, 1),
(1, 88, 1),
(1, 89, 1),
(1, 90, 1),
(1, 91, 1),
(1, 92, 1),
(1, 93, 1),
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 1),
(2, 21, 1),
(2, 22, 1),
(2, 23, 1),
(2, 24, 1),
(2, 25, 1),
(2, 26, 1),
(2, 27, 1),
(2, 28, 1),
(2, 29, 1),
(2, 30, 1),
(2, 31, 1),
(2, 32, 1),
(2, 33, 1),
(2, 34, 1),
(2, 35, 1),
(2, 36, 1),
(2, 37, 1),
(2, 38, 1),
(2, 39, 1),
(2, 40, 1),
(2, 41, 1),
(2, 42, 1),
(2, 43, 1),
(2, 44, 1),
(2, 45, 1),
(2, 46, 1),
(2, 47, 1),
(2, 48, 1),
(2, 49, 1),
(2, 50, 1),
(2, 53, 1),
(2, 57, 1),
(2, 58, 1),
(2, 59, 1),
(2, 60, 1),
(2, 61, 1),
(2, 64, 0),
(2, 65, 1),
(2, 66, 1),
(2, 67, 1),
(2, 68, 1),
(2, 69, 1),
(2, 81, 1),
(2, 82, 1),
(2, 83, 1),
(2, 84, 1),
(2, 85, 1),
(2, 86, 1),
(2, 87, 1),
(2, 88, 1),
(2, 89, 1),
(2, 90, 1),
(2, 91, 1),
(2, 92, 1),
(2, 93, 1),
(3, 20, 1),
(3, 21, 1),
(3, 22, 1),
(3, 23, 1),
(3, 24, 1),
(3, 25, 0),
(3, 26, 0),
(3, 27, 0),
(3, 28, 1),
(3, 29, 0),
(3, 30, 0),
(3, 31, 0),
(3, 32, 1),
(3, 36, 1),
(3, 37, 1),
(3, 38, 1),
(3, 39, 1),
(3, 40, 1),
(3, 41, 1),
(3, 42, 1),
(3, 43, 1),
(3, 44, 1),
(3, 45, 1),
(3, 46, 1),
(3, 57, 1),
(3, 58, 1),
(3, 59, 1),
(3, 61, 1),
(3, 67, 1),
(3, 81, 1),
(3, 82, 1),
(3, 83, 1),
(3, 84, 1),
(3, 85, 1),
(3, 92, 1),
(3, 93, 1),
(4, 20, 1),
(4, 24, 1),
(4, 25, 1),
(4, 26, 1),
(4, 27, 1),
(4, 28, 1),
(4, 29, 1),
(4, 30, 1),
(4, 31, 1),
(4, 32, 1),
(4, 33, 1),
(4, 34, 1),
(4, 35, 1),
(4, 36, 1),
(4, 37, 1),
(4, 38, 1),
(4, 39, 1),
(4, 40, 1),
(4, 41, 1),
(4, 42, 1),
(4, 43, 1),
(4, 44, 1),
(4, 45, 1),
(4, 46, 1),
(4, 57, 1),
(4, 61, 1),
(4, 62, 1),
(4, 65, 1),
(4, 66, 1),
(4, 67, 1),
(4, 69, 1),
(4, 81, 1),
(4, 82, 1),
(4, 83, 1),
(4, 84, 1),
(4, 85, 1),
(4, 90, 1),
(4, 91, 1),
(4, 92, 1),
(4, 93, 1),
(5, 20, 1),
(5, 21, 1),
(5, 22, 1),
(5, 23, 0),
(5, 24, 0),
(5, 25, 0),
(5, 26, 0),
(5, 27, 0),
(5, 28, 0),
(5, 29, 0),
(5, 30, 0),
(5, 31, 0),
(5, 32, 1),
(5, 36, 1),
(5, 37, 1),
(5, 38, 1),
(5, 39, 1),
(5, 40, 1),
(5, 41, 1),
(5, 42, 1),
(5, 43, 1),
(5, 44, 1),
(5, 45, 1),
(5, 46, 1),
(5, 47, 1),
(5, 48, 1),
(5, 49, 1),
(5, 50, 1),
(5, 51, 1),
(5, 52, 1),
(5, 53, 1),
(5, 54, 1),
(5, 55, 1),
(5, 56, 1),
(5, 57, 1),
(5, 58, 1),
(5, 59, 1),
(5, 60, 1),
(5, 61, 1),
(5, 62, 1),
(5, 63, 1),
(5, 81, 1),
(5, 82, 1),
(5, 83, 1),
(5, 84, 1),
(5, 85, 1),
(5, 92, 1),
(5, 93, 1),
(6, 20, 1),
(6, 21, 1),
(6, 22, 1),
(6, 23, 0),
(6, 24, 1),
(6, 25, 1),
(6, 26, 1),
(6, 27, 0),
(6, 28, 1),
(6, 29, 1),
(6, 30, 1),
(6, 31, 0),
(6, 32, 1),
(6, 36, 1),
(6, 37, 1),
(6, 38, 1),
(6, 39, 0),
(6, 40, 1),
(6, 41, 1),
(6, 42, 1),
(6, 43, 0),
(6, 44, 1),
(6, 45, 1),
(6, 46, 1),
(6, 47, 1),
(6, 53, 1),
(6, 57, 1),
(6, 61, 1),
(6, 92, 1),
(6, 93, 1),
(7, 57, 1),
(7, 61, 1),
(7, 62, 1),
(7, 63, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_multa`
--

CREATE TABLE `tipo_multa` (
  `Id_tmul` int(11) NOT NULL,
  `Nom_tmul` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_multa`
--

INSERT INTO `tipo_multa` (`Id_tmul`, `Nom_tmul`) VALUES
(1, 'Ruidos Molestos'),
(2, 'Mal uso estacionamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_obs`
--

CREATE TABLE `tipo_obs` (
  `Id_tobs` int(11) NOT NULL,
  `Nom_tobs` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_obs`
--

INSERT INTO `tipo_obs` (`Id_tobs`, `Nom_tobs`) VALUES
(1, 'Daño área común'),
(2, 'Situación control acceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rel`
--

CREATE TABLE `tipo_rel` (
  `Id_trel` int(11) NOT NULL,
  `Nom_trel` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_rel`
--

INSERT INTO `tipo_rel` (`Id_trel`, `Nom_trel`) VALUES
(1, 'Propietario'),
(2, 'Conviviente propietario'),
(3, 'Arrendatario titular'),
(4, 'Conviviente arrendatario'),
(5, 'Cuidador titular'),
(6, 'Conviviente cuidador'),
(7, 'Visita familiar'),
(8, 'Visita amistad'),
(9, 'Visita otro'),
(10, 'Prohibido el acceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_relvehi`
--

CREATE TABLE `tipo_relvehi` (
  `Id_trelv` int(11) NOT NULL,
  `Nom_trelv` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_relvehi`
--

INSERT INTO `tipo_relvehi` (`Id_trelv`, `Nom_trelv`) VALUES
(1, 'Propietario'),
(2, 'No propietario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vot`
--

CREATE TABLE `tipo_vot` (
  `Id_tv` int(11) NOT NULL,
  `Nom_tv` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_vot`
--

INSERT INTO `tipo_vot` (`Id_tv`, `Nom_tv`) VALUES
(1, 'Propietario'),
(2, 'Propietario y Arrend. Tit.'),
(3, 'Propietario, Arrend. Tit. y Cuidador Tit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usu` int(11) NOT NULL,
  `Rut_usu` blob NOT NULL,
  `Nom_usu` blob,
  `Usu_usu` blob NOT NULL,
  `Pass_usu` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email_usu` blob NOT NULL,
  `Id_role` int(11) NOT NULL,
  `Id_estusu` int(11) NOT NULL,
  `Fch_usu` datetime NOT NULL,
  `Cod_usu` int(10) NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Id_cond` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usu`, `Rut_usu`, `Nom_usu`, `Usu_usu`, `Pass_usu`, `Email_usu`, `Id_role`, `Id_estusu`, `Fch_usu`, `Cod_usu`, `Id_per`, `Id_cond`) VALUES
(1, 0xe54ebfef642ef3bca3d8eca093522086, 0xb9d56bf66ab55b0078d62aa880d084f2b8b9e7dadcac1224719f7391f8843699, 0xe54ebfef642ef3bca3d8eca093522086, 'b30a5e4378704ddb5172af982b5d1e00a801e3dc', 0xd80159977cf40a8b8b08a391b2b03cc218dac1c9e5f70ed2bb8ba6ece74dfaf0, 1, 1, '2017-10-10 01:47:41', 1624660626, 1, 1);

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `his_create_usu` AFTER INSERT ON `usuario` FOR EACH ROW BEGIN
INSERT INTO his_usu
   ( Id_husu,
Fch_husu,
Tipo_husu,
Id_usu,
Nom_usu,
Usu_usu,
Pass_usu,
Email_usu,
Id_role,
Id_estusu,
Cod_usu,
Id_per,
Rut_usu,
Id_cond
    )
   VALUES
   ( NULL,
NOW(),
'Creación',
NEW.Id_usu,
NEW.Nom_usu,
NEW.Usu_usu,
NEW.Pass_usu,
NEW.Email_usu,
NEW.Id_role,
NEW.Id_estusu,
NEW.Cod_usu,
NEW.Id_per,
@urut,
NEW.Id_cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_delete_usu` BEFORE DELETE ON `usuario` FOR EACH ROW BEGIN
INSERT INTO his_usu
   ( Id_husu,
Fch_husu,
Tipo_husu,
Id_usu,
Nom_usu,
Usu_usu,
Pass_usu,
Email_usu,
Id_role,
Id_estusu,
Cod_usu,
Id_per,
Rut_usu,
Id_cond
    )
   VALUES
   ( NULL,
NOW(),
'Eliminación',
OLD.Id_usu,
OLD.Nom_usu,
OLD.Usu_usu,
OLD.Pass_usu,
OLD.Email_usu,
OLD.Id_role,
OLD.Id_estusu,
OLD.Cod_usu,
OLD.Id_per,
@urut,
OLD.Id_cond);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_edit_usu` AFTER UPDATE ON `usuario` FOR EACH ROW BEGIN
INSERT INTO his_usu
   ( Id_husu,
Fch_husu,
Tipo_husu,
Id_usu,
Nom_usu,
Usu_usu,
Pass_usu,
Email_usu,
Id_role,
Id_estusu,
Cod_usu,
Id_per,
Rut_usu,
Id_cond
    )
   VALUES
   ( NULL,
NOW(),
'Edición',
NEW.Id_usu,
NEW.Nom_usu,
NEW.Usu_usu,
NEW.Pass_usu,
NEW.Email_usu,
NEW.Id_role,
NEW.Id_estusu,
NEW.Cod_usu,
NEW.Id_per,
@urut,
NEW.Id_cond);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `Id_usu` int(11) NOT NULL,
  `Id_perm` int(11) NOT NULL,
  `Valor_perm_usu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `Id_vehi` int(11) NOT NULL,
  `Cod_vehi` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Desc_vehi` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_modelo` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_persona`
--

CREATE TABLE `vehiculo_persona` (
  `Id_vehiper` int(11) NOT NULL,
  `Id_vehi` int(11) NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Id_trelv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `Id_viv` int(11) NOT NULL,
  `Num_viv` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cb` int(11) NOT NULL,
  `Id_esta` int(3) DEFAULT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `vivienda`
--
DELIMITER $$
CREATE TRIGGER `his_create_viv` AFTER INSERT ON `vivienda` FOR EACH ROW BEGIN
INSERT INTO his_viv
   ( Id_hviv,
     Fch_hviv,
     Tipo_hviv,
     Id_viv,
     Id_cb,
     Num_viv,
     Id_esta,
     Id_cond,
     Rut_usu
    )
   VALUES
   ( NULL,
     NOW(),
     'Creación',
     NEW.Id_viv,
     NEW.Id_cb,
     NEW.Num_viv,
     NEW.Id_esta,
     @cond,
     @urut);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_delete_viv` BEFORE DELETE ON `vivienda` FOR EACH ROW BEGIN
INSERT INTO his_viv
   ( Id_hviv,
     Fch_hviv,
     Tipo_hviv,
     Id_viv,
     Id_cb,
     Num_viv,
     Id_esta,
     Id_cond,
     Rut_usu
    )
   VALUES
   ( NULL,
     NOW(),
     'Eliminación',
     OLD.Id_viv,
     OLD.Id_cb,
     OLD.Num_viv,
     OLD.Id_esta,
     OLD.Id_cond,
     @urut);

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `his_update_viv` AFTER UPDATE ON `vivienda` FOR EACH ROW BEGIN
INSERT INTO his_viv
   ( Id_hviv,
     Fch_hviv,
     Tipo_hviv,
     Id_viv,
     Id_cb,
     Num_viv,
     Id_esta,
     Id_cond,
     Rut_usu
    )
   VALUES
   ( NULL,
     NOW(),
     'Edición',
     NEW.Id_viv,
     NEW.Id_cb,
     NEW.Num_viv,
     NEW.Id_esta,
     @cond,
     @urut);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda_persona`
--

CREATE TABLE `vivienda_persona` (
  `Id_vper` int(11) NOT NULL,
  `Id_viv` int(11) NOT NULL,
  `Id_per` int(11) NOT NULL,
  `Id_trel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion_encuesta`
--

CREATE TABLE `votacion_encuesta` (
  `Id_ve` int(11) NOT NULL,
  `Fch_ve` datetime NOT NULL,
  `Id_usu` int(11) NOT NULL,
  `Id_encu` int(11) NOT NULL,
  `Id_iencu` int(11) NOT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Id_act`);

--
-- Indices de la tabla `act_extra`
--
ALTER TABLE `act_extra`
  ADD PRIMARY KEY (`Id_actext`);

--
-- Indices de la tabla `calle_block`
--
ALTER TABLE `calle_block`
  ADD PRIMARY KEY (`Id_cb`),
  ADD KEY `Id_cond` (`Id_cond`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`Id_cargo`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`Id_ciu`);

--
-- Indices de la tabla `condominio`
--
ALTER TABLE `condominio`
  ADD PRIMARY KEY (`Id_cond`),
  ADD KEY `fk_condominio_inmobiliaria1_idx` (`Id_inm`),
  ADD KEY `fk_condominio_ciudad1_idx` (`Id_ciu`);

--
-- Indices de la tabla `condominio_empleado`
--
ALTER TABLE `condominio_empleado`
  ADD PRIMARY KEY (`Id_cond`,`Id_emp`),
  ADD KEY `fk_condominio_has_empleado_empleado1_idx` (`Id_emp`),
  ADD KEY `fk_condominio_has_empleado_condominio1_idx` (`Id_cond`),
  ADD KEY `fk_condominio_empleado_cargo1_idx` (`Id_cargo`);

--
-- Indices de la tabla `config_cond`
--
ALTER TABLE `config_cond`
  ADD PRIMARY KEY (`Id_cc`),
  ADD KEY `Id_cond` (`Id_cond`,`Id_tv`),
  ADD KEY `Id_tv` (`Id_tv`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_emp`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`Id_encu`),
  ADD KEY `fk_encuesta_condominio1_idx` (`Id_cond`),
  ADD KEY `Id_estencu` (`Id_estencu`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`Id_esta`);

--
-- Indices de la tabla `est_encu`
--
ALTER TABLE `est_encu`
  ADD PRIMARY KEY (`Id_estencu`);

--
-- Indices de la tabla `est_multa`
--
ALTER TABLE `est_multa`
  ADD PRIMARY KEY (`Id_estmul`);

--
-- Indices de la tabla `est_resi`
--
ALTER TABLE `est_resi`
  ADD PRIMARY KEY (`Id_estre`);

--
-- Indices de la tabla `est_usu`
--
ALTER TABLE `est_usu`
  ADD PRIMARY KEY (`Id_estusu`);

--
-- Indices de la tabla `gestor_cond`
--
ALTER TABLE `gestor_cond`
  ADD PRIMARY KEY (`Id_acond`),
  ADD KEY `Id_usu` (`Id_usu`,`Id_cond`),
  ADD KEY `Id_cond` (`Id_cond`);

--
-- Indices de la tabla `his_multa`
--
ALTER TABLE `his_multa`
  ADD PRIMARY KEY (`Id_hmul`);

--
-- Indices de la tabla `his_obs`
--
ALTER TABLE `his_obs`
  ADD PRIMARY KEY (`Id_hobs`);

--
-- Indices de la tabla `his_per`
--
ALTER TABLE `his_per`
  ADD PRIMARY KEY (`Id_hper`);

--
-- Indices de la tabla `his_ses`
--
ALTER TABLE `his_ses`
  ADD PRIMARY KEY (`Id_hses`),
  ADD KEY `Id_usu` (`Id_usu`);

--
-- Indices de la tabla `his_usu`
--
ALTER TABLE `his_usu`
  ADD PRIMARY KEY (`Id_husu`);

--
-- Indices de la tabla `his_viv`
--
ALTER TABLE `his_viv`
  ADD PRIMARY KEY (`Id_hviv`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`Id_info`);

--
-- Indices de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
  ADD PRIMARY KEY (`Id_inm`);

--
-- Indices de la tabla `item_encuesta`
--
ALTER TABLE `item_encuesta`
  ADD PRIMARY KEY (`Id_iencu`),
  ADD KEY `fk_item_encuesta_encuesta1_idx` (`Id_encu`);

--
-- Indices de la tabla `item_reunion`
--
ALTER TABLE `item_reunion`
  ADD PRIMARY KEY (`Id_ireu`),
  ADD KEY `fk_item_reunion_reunion1_idx` (`Id_reu`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Id_marca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`Id_modelo`),
  ADD KEY `Id_marca` (`Id_marca`),
  ADD KEY `Id_marca_2` (`Id_marca`);

--
-- Indices de la tabla `multa`
--
ALTER TABLE `multa`
  ADD PRIMARY KEY (`Id_multa`),
  ADD UNIQUE KEY `Cod_multa` (`Cod_multa`),
  ADD KEY `Id_usu` (`Id_usu`),
  ADD KEY `Id_viv` (`Id_viv`),
  ADD KEY `Id_tmul` (`Id_tmul`),
  ADD KEY `Id_estmul` (`Id_estmul`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`Id_obs`),
  ADD KEY `Id_tobs_2` (`Id_tobs`),
  ADD KEY `Id_cond` (`Id_cond`),
  ADD KEY `Id_tobs` (`Id_tobs`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`Id_perm`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`Id_per`),
  ADD KEY `fk_persona_tipo_per1_idx` (`Id_estre`),
  ADD KEY `Id_cond` (`Id_cond`),
  ADD KEY `Id_act` (`Id_act`),
  ADD KEY `Id_act_2` (`Id_act`);

--
-- Indices de la tabla `reg_backup`
--
ALTER TABLE `reg_backup`
  ADD PRIMARY KEY (`Id_rb`),
  ADD KEY `Id_usu` (`Id_usu`);

--
-- Indices de la tabla `reg_visita`
--
ALTER TABLE `reg_visita`
  ADD PRIMARY KEY (`Id_regv`),
  ADD KEY `Id_per` (`Id_per`,`Id_viv`,`Id_cond`),
  ADD KEY `Id_viv` (`Id_viv`),
  ADD KEY `Id_cond` (`Id_cond`),
  ADD KEY `Id_usu` (`Id_usu`),
  ADD KEY `Id_actext` (`Id_actext`);

--
-- Indices de la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`Id_reu`),
  ADD KEY `fk_reunion_condominio1_idx` (`condominio_Id_cond`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id_role`);

--
-- Indices de la tabla `role_permiso`
--
ALTER TABLE `role_permiso`
  ADD PRIMARY KEY (`Id_role`,`Id_perm`),
  ADD KEY `Id_perm` (`Id_perm`);

--
-- Indices de la tabla `tipo_multa`
--
ALTER TABLE `tipo_multa`
  ADD PRIMARY KEY (`Id_tmul`);

--
-- Indices de la tabla `tipo_obs`
--
ALTER TABLE `tipo_obs`
  ADD PRIMARY KEY (`Id_tobs`);

--
-- Indices de la tabla `tipo_rel`
--
ALTER TABLE `tipo_rel`
  ADD PRIMARY KEY (`Id_trel`);

--
-- Indices de la tabla `tipo_relvehi`
--
ALTER TABLE `tipo_relvehi`
  ADD PRIMARY KEY (`Id_trelv`);

--
-- Indices de la tabla `tipo_vot`
--
ALTER TABLE `tipo_vot`
  ADD PRIMARY KEY (`Id_tv`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usu`),
  ADD KEY `Id_role` (`Id_role`,`Id_estusu`),
  ADD KEY `Id_eusu` (`Id_estusu`),
  ADD KEY `Id_per` (`Id_per`),
  ADD KEY `Id_cond` (`Id_cond`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD UNIQUE KEY `Id_usu` (`Id_usu`,`Id_perm`),
  ADD KEY `Id_perm` (`Id_perm`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Id_vehi`),
  ADD KEY `Id_modelo` (`Id_modelo`),
  ADD KEY `Id_cond` (`Id_cond`),
  ADD KEY `Id_modelo_2` (`Id_modelo`);

--
-- Indices de la tabla `vehiculo_persona`
--
ALTER TABLE `vehiculo_persona`
  ADD PRIMARY KEY (`Id_vehiper`),
  ADD KEY `Id_vehi` (`Id_vehi`,`Id_per`,`Id_trelv`),
  ADD KEY `Id_per` (`Id_per`),
  ADD KEY `Id_trelv` (`Id_trelv`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`Id_viv`),
  ADD KEY `fk_vivienda_condominio1_idx` (`Id_cond`),
  ADD KEY `Id_cb` (`Id_cb`);

--
-- Indices de la tabla `vivienda_persona`
--
ALTER TABLE `vivienda_persona`
  ADD PRIMARY KEY (`Id_vper`),
  ADD KEY `fk_vivienda_persona_vivienda1_idx` (`Id_viv`),
  ADD KEY `fk_vivienda_persona_persona1_idx` (`Id_per`),
  ADD KEY `fk_vivienda_persona_est_usu1_idx` (`Id_trel`);

--
-- Indices de la tabla `votacion_encuesta`
--
ALTER TABLE `votacion_encuesta`
  ADD PRIMARY KEY (`Id_ve`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `Id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `act_extra`
--
ALTER TABLE `act_extra`
  MODIFY `Id_actext` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `calle_block`
--
ALTER TABLE `calle_block`
  MODIFY `Id_cb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `Id_cargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `Id_ciu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `condominio`
--
ALTER TABLE `condominio`
  MODIFY `Id_cond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `config_cond`
--
ALTER TABLE `config_cond`
  MODIFY `Id_cc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `Id_encu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `Id_esta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `est_encu`
--
ALTER TABLE `est_encu`
  MODIFY `Id_estencu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `est_multa`
--
ALTER TABLE `est_multa`
  MODIFY `Id_estmul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `est_resi`
--
ALTER TABLE `est_resi`
  MODIFY `Id_estre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `est_usu`
--
ALTER TABLE `est_usu`
  MODIFY `Id_estusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gestor_cond`
--
ALTER TABLE `gestor_cond`
  MODIFY `Id_acond` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_multa`
--
ALTER TABLE `his_multa`
  MODIFY `Id_hmul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_obs`
--
ALTER TABLE `his_obs`
  MODIFY `Id_hobs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_per`
--
ALTER TABLE `his_per`
  MODIFY `Id_hper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_ses`
--
ALTER TABLE `his_ses`
  MODIFY `Id_hses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `his_usu`
--
ALTER TABLE `his_usu`
  MODIFY `Id_husu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_viv`
--
ALTER TABLE `his_viv`
  MODIFY `Id_hviv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `Id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
  MODIFY `Id_inm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `item_encuesta`
--
ALTER TABLE `item_encuesta`
  MODIFY `Id_iencu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_reunion`
--
ALTER TABLE `item_reunion`
  MODIFY `Id_ireu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `Id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `Id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT de la tabla `multa`
--
ALTER TABLE `multa`
  MODIFY `Id_multa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `Id_obs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `Id_perm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reg_backup`
--
ALTER TABLE `reg_backup`
  MODIFY `Id_rb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reg_visita`
--
ALTER TABLE `reg_visita`
  MODIFY `Id_regv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reunion`
--
ALTER TABLE `reunion`
  MODIFY `Id_reu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `Id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_multa`
--
ALTER TABLE `tipo_multa`
  MODIFY `Id_tmul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_obs`
--
ALTER TABLE `tipo_obs`
  MODIFY `Id_tobs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_rel`
--
ALTER TABLE `tipo_rel`
  MODIFY `Id_trel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipo_relvehi`
--
ALTER TABLE `tipo_relvehi`
  MODIFY `Id_trelv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_vot`
--
ALTER TABLE `tipo_vot`
  MODIFY `Id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `Id_vehi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculo_persona`
--
ALTER TABLE `vehiculo_persona`
  MODIFY `Id_vehiper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `Id_viv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vivienda_persona`
--
ALTER TABLE `vivienda_persona`
  MODIFY `Id_vper` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `votacion_encuesta`
--
ALTER TABLE `votacion_encuesta`
  MODIFY `Id_ve` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calle_block`
--
ALTER TABLE `calle_block`
  ADD CONSTRAINT `calle_block_ibfk_1` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `condominio`
--
ALTER TABLE `condominio`
  ADD CONSTRAINT `fk_condominio_ciudad1` FOREIGN KEY (`Id_ciu`) REFERENCES `ciudad` (`Id_ciu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_condominio_inmobiliaria1` FOREIGN KEY (`Id_inm`) REFERENCES `inmobiliaria` (`Id_inm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `condominio_empleado`
--
ALTER TABLE `condominio_empleado`
  ADD CONSTRAINT `fk_condominio_empleado_cargo1` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`Id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_condominio_has_empleado_condominio1` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_condominio_has_empleado_empleado1` FOREIGN KEY (`Id_emp`) REFERENCES `empleado` (`Id_emp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `encuesta_ibfk_2` FOREIGN KEY (`Id_estencu`) REFERENCES `est_encu` (`Id_estencu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gestor_cond`
--
ALTER TABLE `gestor_cond`
  ADD CONSTRAINT `gestor_cond_ibfk_1` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gestor_cond_ibfk_2` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `his_ses`
--
ALTER TABLE `his_ses`
  ADD CONSTRAINT `his_ses_ibfk_1` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `item_encuesta`
--
ALTER TABLE `item_encuesta`
  ADD CONSTRAINT `fk_item_encuesta_encuesta1` FOREIGN KEY (`Id_encu`) REFERENCES `encuesta` (`Id_encu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `item_reunion`
--
ALTER TABLE `item_reunion`
  ADD CONSTRAINT `fk_item_reunion_reunion1` FOREIGN KEY (`Id_reu`) REFERENCES `reunion` (`Id_reu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_ibfk_1` FOREIGN KEY (`Id_marca`) REFERENCES `marca` (`Id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `multa`
--
ALTER TABLE `multa`
  ADD CONSTRAINT `multa_ibfk_1` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multa_ibfk_2` FOREIGN KEY (`Id_viv`) REFERENCES `vivienda` (`Id_viv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multa_ibfk_3` FOREIGN KEY (`Id_tmul`) REFERENCES `tipo_multa` (`Id_tmul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multa_ibfk_4` FOREIGN KEY (`Id_estmul`) REFERENCES `est_multa` (`Id_estmul`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD CONSTRAINT `observacion_ibfk_1` FOREIGN KEY (`Id_tobs`) REFERENCES `tipo_obs` (`Id_tobs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `observacion_ibfk_2` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`Id_act`) REFERENCES `actividad` (`Id_act`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`Id_estre`) REFERENCES `est_resi` (`Id_estre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reg_backup`
--
ALTER TABLE `reg_backup`
  ADD CONSTRAINT `reg_backup_ibfk_1` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reg_visita`
--
ALTER TABLE `reg_visita`
  ADD CONSTRAINT `reg_visita_ibfk_1` FOREIGN KEY (`Id_per`) REFERENCES `persona` (`Id_per`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reg_visita_ibfk_2` FOREIGN KEY (`Id_viv`) REFERENCES `vivienda` (`Id_viv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reg_visita_ibfk_3` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reg_visita_ibfk_4` FOREIGN KEY (`Id_usu`) REFERENCES `usuario` (`Id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reg_visita_ibfk_5` FOREIGN KEY (`Id_actext`) REFERENCES `act_extra` (`Id_actext`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `fk_reunion_condominio1` FOREIGN KEY (`condominio_Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `role_permiso`
--
ALTER TABLE `role_permiso`
  ADD CONSTRAINT `role_permiso_ibfk_1` FOREIGN KEY (`Id_role`) REFERENCES `role` (`Id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `role_permiso_ibfk_2` FOREIGN KEY (`Id_perm`) REFERENCES `permiso` (`Id_perm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_role`) REFERENCES `role` (`Id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`Id_per`) REFERENCES `persona` (`Id_per`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`Id_estusu`) REFERENCES `est_usu` (`Id_estusu`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`Id_modelo`) REFERENCES `modelo` (`Id_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculo_persona`
--
ALTER TABLE `vehiculo_persona`
  ADD CONSTRAINT `vehiculo_persona_ibfk_1` FOREIGN KEY (`Id_vehi`) REFERENCES `vehiculo` (`Id_vehi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehiculo_persona_ibfk_2` FOREIGN KEY (`Id_per`) REFERENCES `persona` (`Id_per`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehiculo_persona_ibfk_3` FOREIGN KEY (`Id_trelv`) REFERENCES `tipo_relvehi` (`Id_trelv`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `fk_vivienda_condominio1` FOREIGN KEY (`Id_cond`) REFERENCES `condominio` (`Id_cond`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`Id_cb`) REFERENCES `calle_block` (`Id_cb`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vivienda_persona`
--
ALTER TABLE `vivienda_persona`
  ADD CONSTRAINT `fk_vivienda_persona_persona1` FOREIGN KEY (`Id_per`) REFERENCES `persona` (`Id_per`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vivienda_persona_vivienda1` FOREIGN KEY (`Id_viv`) REFERENCES `vivienda` (`Id_viv`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vivienda_persona_ibfk_1` FOREIGN KEY (`Id_trel`) REFERENCES `tipo_rel` (`Id_trel`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

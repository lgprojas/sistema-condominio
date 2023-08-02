-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-04-2021 a las 12:05:22
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

--
-- Volcado de datos para la tabla `calle_block`
--

INSERT INTO `calle_block` (`Id_cb`, `Nom_cb`, `Id_cond`) VALUES
(1, 'Torre A', 1),
(2, 'Torre B', 1),
(3, 'Torre C', 1),
(4, 'Torre D', 1),
(5, 'Torre E', 1),
(6, 'Torre F', 1),
(7, 'Torre G', 1),
(8, 'Torre H', 1),
(9, 'Torre I', 1),
(10, 'Bloque 1', 2),
(11, 'Bloque 2', 2),
(12, 'Bloque 3', 2);

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

--
-- Volcado de datos para la tabla `config_cond`
--

INSERT INTO `config_cond` (`Id_cc`, `Id_cond`, `Id_tv`) VALUES
(1, 1, 2),
(2, 2, 2);

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

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`Id_encu`, `Nom_encu`, `Fchi_encu`, `Fcht_encu`, `Id_cond`, `Id_estencu`) VALUES
(1, '¿Desea cicletero?', '2018-02-08', '2018-02-12', 1, 1),
(2, '¿Desea contratar jardinero?', '2018-02-08', '2018-02-15', 2, 2),
(3, '¿Desea quincho?', '2018-02-08', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `Id_esta` int(11) NOT NULL,
  `Nom_esta` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estacionamiento`
--

INSERT INTO `estacionamiento` (`Id_esta`, `Nom_esta`) VALUES
(1, '01'),
(2, '02'),
(3, '03'),
(4, '04'),
(5, '05'),
(6, '06'),
(7, '07'),
(8, '08'),
(9, '09'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14');

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

--
-- Volcado de datos para la tabla `gestor_cond`
--

INSERT INTO `gestor_cond` (`Id_acond`, `Id_usu`, `Id_cond`) VALUES
(2, 22, 1),
(3, 23, 2);

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

--
-- Volcado de datos para la tabla `his_multa`
--

INSERT INTO `his_multa` (`Id_hmul`, `Cod_hmul`, `Fch_hmul`, `Tipo_hmul`, `Id_viv`, `Oldtotal_hmul`, `Newtotal_hmul`, `Oldest_hmul`, `Newest_hmul`, `Rut_usu`, `Id_cond`) VALUES
(4, '88888', '2018-05-20 01:59:38', 'Creación', 1, NULL, 78000, NULL, 1, '15028679-4', 1),
(5, '88888', '2018-05-20 02:00:45', 'Edición', 1, 78000, 79000, 1, 2, '15028679-4', 1),
(6, '88888', '2018-05-20 02:01:23', 'Eliminación', 1, 79000, NULL, 2, NULL, '15028679-4', 1),
(7, '55555', '2018-05-21 00:40:30', 'Creación', 2, NULL, 780000, NULL, 1, '15028679-4', 1),
(8, '55555', '2018-05-21 00:51:27', 'Edición', 1, 780000, 780000, 1, 1, NULL, 0),
(9, '44444', '2018-05-21 00:52:39', 'Creación', 1, NULL, 45000, NULL, 1, '15028679-4', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `his_ses`
--

INSERT INTO `his_ses` (`Id_hses`, `Fch_hses`, `Cant_hses`, `Intentos_hses`, `ContBloq_hses`, `Est_hses`, `Id_usu`) VALUES
(1, '2018-05-30 00:52:36', 3, 0, 0, 1, 15),
(2, '2018-12-03 16:49:50', 5, 0, 0, 1, 12);

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

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`Id_info`, `Nom_info`, `Desc_info`, `Fch_info`, `Fch_cinfo`, `Fch_tinfo`, `Adj_info`, `Id_usu`, `Id_cond`) VALUES
(1, 'Se cita a reunión al condominio 20-03-20188', 'Estimad@s\\\\r\\\\n\\\\r\\\\nEste correo electrónico tiene como objetivo informar a usted de las propuestas de cambio de administración, las cuales fueron seleccionadas por el comité y se ajustan de mejor manera a los requerimientos de nuestro condominio.\\\\r\\\\n\\\\r\\\\nDentro de los criterios que se consideraron para su selección se encuentran:\\\\r\\\\n\\\\r\\\\n    Experiencia\\\\r\\\\n    Precio\\\\r\\\\n    Capacidad de resolución de imprevistos \\\\r\\\\n    Apoyo en la búsqueda de reemplazos de conserjes en caso de algún inconveniente.\\\\r\\\\n\\\\r\\\\nCabe destacar que esta información es enviada para que usted pueda tomar una decisión y luego firmar su elección en el respectivo registro. Durante el presente fin de semana, se realizará un puerta a puerta, solicitando su votación, donde debe presentar su carnet para hacer valida su elección.\\\\r\\\\n\\\\r\\\\n*Las cotizaciones que se presentan, incluyen el pago del servicio de electricidad adeudado durante el año 2017 dividido en 10 cuotas para los propietarios que se encuentran al día en el pago de los gastos comunes.\\\\r\\\\n* Los valores indicados, son propuestas aproximadas.\\\\r\\\\n\\\\r\\\\n\\\\r\\\\nIMPORTANTE:\\\\r\\\\n\\\\r\\\\n¿Quiénes podrán votar?\\\\r\\\\n\\\\r\\\\nEstarán habilitadas para votar exclusivamente las personas que se encuentren al día en el pago de los gastos comunes hasta el día 18 de Marzo, 2018.\\\\r\\\\n\\\\r\\\\nEn caso de no encontrarse el propietario, podrá dejar un poder simple con la copia del carnet  autorizando a la persona.', '2018-03-15', '2018-03-17', '2018-03-31', NULL, 1, 2),
(2, 'Dañó motor portón acceso condominio', 'Estimad@ \\\\r\\\\n\\\\r\\\\nEste correo electrónico tiene como objetivo informar a usted de las propuestas de cambio de administración, las cuales fueron seleccionadas por el comité y se ajustan de mejor manera a los requerimientos de nuestro condominio.\\\\r\\\\n\\\\r\\\\nDentro de los criterios que se consideraron para su selección se encuentran:', '2018-03-15', '2018-03-15', '2018-03-30', NULL, 13, 1),
(4, 'Informativo', 'Descripción', '2018-03-17', '2018-03-17', '2018-03-31', 'info_Validar-StartUML_20180318060423.pdf', 13, 2),
(5, 'Ejemplo1', 'hola\r\ndesde\r\n\r\nun ejemplo', '2018-04-10', '2018-04-10', '2018-04-18', NULL, 12, 1),
(6, 'Primer informativo', 'Se solicita a reunión a los copropietarios para el día 28 de Mayo del presente año 2018. Favor confirmar asistencia.', '2018-05-16', '2018-05-16', '2018-05-28', NULL, 22, 1);

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

--
-- Volcado de datos para la tabla `item_encuesta`
--

INSERT INTO `item_encuesta` (`Id_iencu`, `Nom_iencu`, `Adj_iencu`, `Id_encu`) VALUES
(2, 'No', NULL, 1),
(3, 'Sí', NULL, 1),
(4, 'Sí', 'ejemplo-examen.pdf', 2),
(5, 'No', 'ejemplo.pdf', 2),
(7, 'Ninguno', NULL, 1);

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
-- Volcado de datos para la tabla `multa`
--

INSERT INTO `multa` (`Id_multa`, `Cod_multa`, `Fch_multa`, `Fchi_multa`, `Fchp_multa`, `Nota_multa`, `Total_multa`, `Id_usu`, `Id_viv`, `Id_tmul`, `Id_estmul`) VALUES
(4, '123', '2018-05-19 16:01:00', '2018-05-19', '2018-05-20', 'Mal estacionado.', 99999, 12, 1, 2, 1),
(5, '1234', '2018-05-19 16:05:29', '2018-05-19', '2018-05-20', 'Mal estacionado otra vez', 99999, 12, 1, 2, 1),
(6, '12345', '2018-05-19 16:10:04', '2018-05-19', '2018-05-20', 'Otra vez mal estacionado por tercera vez.', 99999, 12, 1, 2, 1),
(7, '123456', '2018-05-19 16:16:55', '2018-05-19', '2018-05-20', 'Otra vez mal estacionado por tercera vez, otra vez.', 99998, 12, 1, 2, 1),
(8, '13526', '2018-05-19 16:18:12', '2018-05-19', '2018-05-20', 'Estacionado mal', 989898, 12, 1, 2, 1),
(10, '76346743', '2018-05-19 16:43:06', '2018-05-19', '2018-05-20', 'Ejemplo Modal', 989898, 12, 1, 2, 1),
(11, '23123', '2018-05-19 17:02:55', '2018-05-22', '2018-05-23', '3123213', 123213231, 12, 1, 1, 1),
(12, '213213', '2018-05-19 17:06:49', '2018-05-18', '2018-05-19', '1232111', 321231, 12, 1, 2, 2),
(13, '777', '2018-05-20 01:21:27', '2018-05-20', '2018-05-21', 'Mal estacionado dep. A101', 23000, 12, 2, 1, 1),
(14, '77777', '2018-05-20 01:23:38', '2018-05-20', '2018-05-22', 'Ruidos molestos3', 89070, 12, 1, 2, 2),
(19, '55555', '2018-05-21 00:40:30', '2018-05-21', '2018-05-28', 'Chocó portón', 780000, 12, 1, 1, 1),
(20, '44444', '2018-05-21 00:52:39', '2018-05-21', '2018-05-21', 'Pelea en área común', 45000, 12, 1, 1, 1);

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
-- Volcado de datos para la tabla `observacion`
--

INSERT INTO `observacion` (`Id_obs`, `Fch_obs`, `Fchi_obs`, `Nota_obs`, `Id_tobs`, `Id_usu`, `Id_cond`) VALUES
(1, '2018-05-20 16:49:04', '2018-05-20 23:48:44', 'Agresión a conserje1', 1, 12, 1),
(2, '2018-05-20 17:44:37', '2018-05-20 00:00:00', 'Agresión a conserje', 2, 12, 1),
(3, '2018-05-20 19:01:04', '0000-00-00 00:00:00', 'Robo en estacionamiento', 2, 12, 1),
(4, '2018-05-20 21:17:12', '2018-05-20 21:16:00', 'Golpea portón visita', 2, 12, 1),
(5, '2018-05-20 22:48:38', '2018-05-20 22:48:00', 'Robo camioneta, estacionamiento, sector sur', 2, 12, 2);

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
(94, '500 Desasociar viv de persona', 'desasoc_viv_per'),
(95, '500 Desasociar vehí de persona', 'desasoc_vehi_per'),
(96, '500 Ver viv asoc persona', 'ver_asoc_viv_per'),
(97, '500 Ver vehi asoc persona', 'ver_asoc_vehi_per');

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
(1, 0xe54ebfef642ef3bca3d8eca093522086, 0x903f9f2ccbcaa2921e683ed0b0119a0d, 0xfddedb7e0ba9564dffd8db400514b5f6, 0x2f0ab369de69cccd19f96f89f53df694, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x1420a7cc5ba2decc1c4917ed4581b741, '2017-10-10', 1, 1, 1),
(3, 0x0235fc7c95a12b9101be1914414da471, 0xa50393d4977997efa9942ee0f248fcca, 0x7ad8738fb6e98ad49e3dd75c505ca252, 0x463ad8b57f0720425938717449a8cd90, 0xdc45737cb163c5b4a0eb412fbb467e3a, 0x8e7a5e34e74a3328f6cb091a45d4c724, '2017-10-17', 1, 1, 2),
(10, 0x7cae22ec6d4ad4ba9555d4cedb0e0e0d, 0x32b231b3c2d5a460981d349412dea504, 0x719371fac6de63f6854ffec578e9f4b6, 0xdbf056226e90b4dc381c2860bb4400b9, 0xf7c4e4daf075ee0d378ece8b6f2eb37f, 0xc60a9ae67750bd493cbbfad21b0c56af, '2017-11-09', 1, 1, 1),
(11, 0xca47c131b851a5092a7f635ac9363bd6, 0x31775279e0686a217a46f9676ded293d, 0x9b4bd85f93f3a01456ef5f429db35d7f, 0x197458719b60e5f7873880222a74674c, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x361977f5fef95b3d544e2b2562d7e381, '2017-11-22', 1, 1, 1),
(12, 0x14e5231b7511a88c993def1f5e49f7b0, 0x8d68f2e101d67d851ae48f88de3bae97, 0x47902b5baf65b173756f139baa73e6b4, 0x70321a99ba21ce7f5acda0cc40cfc1cf, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x044b31142f1f77cadf1703f559194050, '2017-12-10', 1, 2, 1),
(13, 0x0e9e144dfb66ba1c7797e668abac3004, 0x2631b7db31d5e94b746483984066994f, 0x98b709f7000c7ff1cc720d731f9e4c18, 0xb7c1b7d09aa7932476f9f7be5ecab5d4, 0xf7c4e4daf075ee0d378ece8b6f2eb37f, 0x1b7aa3c51a00ebdbd6ab537b2055e691, '2018-03-18', 1, 1, 3),
(14, 0x01781f09077ab201460365c1d3a88ad4, 0x7c0c9d0540ed11e3e59fc6e45fa02ec0, 0xa8eb8b548081148b47b192ba043905ba, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x86c31f2fd2593eabf231d3b89c690469, 0x1b64e40a07c98ed2cf36ac2d58e40de0, '2018-03-19', 1, 2, 3),
(15, 0x694f34025e7520b64077108663c09bfb, 0xfa3515f5276902ffb5455062c5277397, 0x0d8c104c3d8d7194bf7713d2d03e4364, 0x70321a99ba21ce7f5acda0cc40cfc1cf, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0xd189645b2cda61cb74d8328807c7e7c9, '2018-03-21', 1, 1, 2),
(16, 0x00592ca23ce667c1e75b58c01cc5c626, 0xf9ec37dac3ef738544445e24f783ac99, 0xd5731add9de427d7eb2378526d6a32ae, 0xb186b944373223506a893f9e5ff6d11c, 0xbcb992f47fe15fa99260a9efbbe5445f, 0x63f70bf641f3bb385145c7f03cee9734, '2018-03-21', 2, 1, 2),
(17, 0xf2d82f2d6eec043abbfd05b8674e1243, 0x76a2b37220eb8d8b4e74a44c3a951bda, 0x76e9bfaaebd73c20ffa522ea3eeb5a40, 0x70321a99ba21ce7f5acda0cc40cfc1cf, 0xe6f15efdf7ebf61e1afcb88d034b2843, 0x465c2cae9b3611fb93a40f4b2defe42d, '2018-03-28', 1, 1, 2),
(18, 0x4cdf0e1c2e5fe19dd10baf21e8a34d9a, 0xcd53d529db4848fa4e545ef216e6b49f, 0x4fb664b4182acf2fd05ed274f4d27671, 0x66cc0a6353c7c2b69b1689a4195faa59, 0x62d925c382494bd182dda459b1e0e38e, 0xcaf150564062d1143baccb1c19fc8535, '2018-04-02', 1, 1, 2),
(19, 0x3dcf8b878544c77dbfd04dcbd2f020c1, 0x508879feb181df7f7afa746f60792bb8, 0x4723dce357e410b1a05053a10504ad2f, 0x24160c59c9836d009c256fcdf6d21150, 0xaef4ced49b8c3f796f4b66918c2d25b3, 0xe47ed7a4b89895250a3a33d49998d66a, '2018-05-13', 2, NULL, 2),
(21, 0xe68bdc585e7a63f81b60dee0398208ac, 0x431d66cca665784ee2d91624c8dce9f3, 0x4a5fb9bfe51671e02eaea5c91ea07453, 0xf3a2061bf451ba39ba7afcf69c7b2356, 0xf3a2061bf451ba39ba7afcf69c7b2356, 0xa24f5a7a658467b8316cc26baad1d73d, '2018-05-22', 2, NULL, 2),
(22, 0x839379fb5179ff5ba1d041b20c97faa6, 0x86a7e7d46e8e0a95f5cd026fff4c2b8e, 0xe96713782af626a0b654e766295a476c, 0x7bb757caf7e3232285f95d2e5a85897f, 0xf3a2061bf451ba39ba7afcf69c7b2356, 0x94eb0911f5c1317edbd89f0f279013db, '2018-05-22', 1, 2, 3);

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

--
-- Volcado de datos para la tabla `reg_backup`
--

INSERT INTO `reg_backup` (`Id_rb`, `Fch_rb`, `Nomfile_rb`, `Tipo_rb`, `Id_usu`) VALUES
(1, '2018-05-18 02:02:35', 'covecino_20180518-030233.sql', 'simpleSave', 12),
(2, '2018-05-18 02:02:58', 'covecino_20180518-030258.sql', 'save&download', 12),
(3, '2018-05-18 02:09:50', 'covecino_20180518-030950.sql', 'save&download', 12),
(4, '2018-05-18 02:10:54', 'covecino_20180518-031054.sql', 'save&download', 12),
(5, '2018-05-18 02:11:33', 'covecino_20180518-031133.sql', 'save&download', 12),
(6, '2018-05-18 02:14:08', 'covecino_20180518-031408.sql', 'save&download', 12),
(7, '2018-05-18 02:24:49', 'covecino_20180518-032449.sql', 'save&download', 12),
(8, '2018-05-18 02:26:16', 'covecino_20180518-032616.sql', 'save&download', 12),
(9, '2018-05-18 02:26:25', 'covecino_20180518-032625.sql', 'save&download', 12),
(10, '2018-05-18 02:30:56', 'covecino_20180518-033056.sql', 'save&download', 12),
(11, '2018-05-18 02:35:40', 'covecino_20180518-033540.sql', 'save&download', 12),
(12, '2018-05-18 02:44:31', 'covecino_20180518-034429.sql', 'save&download', 12),
(13, '2018-05-18 02:55:53', 'covecino_20180518-035551.sql', 'save&download', 12),
(14, '2018-05-18 02:57:26', 'covecino_20180518-035723.sql', 'save&download', 12),
(15, '2018-05-19 11:30:56', 'covecino_20180519-123052.sql', 'save&download', 12),
(16, '2018-05-21 23:23:12', 'covecino_20180521-232312.sql', 'email', 12),
(17, '2018-05-21 23:31:08', 'covecino_20180521-233108.sql', 'email', 12),
(18, '2018-05-21 23:40:25', 'covecino_20180521-234024.sql', 'email', 12),
(19, '2018-05-22 11:48:55', 'covecino_20180522-114855.sql', 'email', 12),
(20, '2018-05-22 12:33:29', 'covecino_20180522-123329.sql', 'email', 12),
(21, '2018-05-22 12:36:21', 'covecino_20180522-123621.sql', 'simpleSave', 12),
(22, '2018-05-22 12:37:22', 'covecino_20180522-123722.sql', 'save&download', 12),
(23, '2018-05-22 12:42:39', 'covecino_20180522-124239.sql', 'save&download', 12);

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

--
-- Volcado de datos para la tabla `reg_visita`
--

INSERT INTO `reg_visita` (`Id_regv`, `Fch_regv`, `Id_per`, `Id_viv`, `Id_actext`, `Id_usu`, `Cod_vehi`, `Est_prop`, `Est_visita`, `Id_cond`) VALUES
(1, '2018-04-11 15:18:25', 16, NULL, NULL, 20, NULL, NULL, NULL, 1),
(2, '2018-04-16 01:32:51', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(4, '2018-04-16 01:34:27', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(5, '2018-04-16 01:34:59', 10, 1, NULL, 20, NULL, NULL, 1, 1),
(6, '2018-04-16 01:35:34', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(7, '2018-04-16 01:36:01', 10, 1, NULL, 20, NULL, NULL, 1, 1),
(8, '2018-04-16 12:09:08', 10, 1, NULL, 20, NULL, NULL, 1, 1),
(9, '2018-04-16 12:31:16', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(10, '2018-04-16 12:33:21', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(11, '2018-04-16 12:35:27', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(12, '2018-04-16 12:49:53', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(13, '2018-04-16 12:52:06', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(14, '2018-04-16 12:54:50', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(15, '2018-04-16 12:55:12', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(16, '2018-04-16 12:59:15', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(17, '2018-04-16 13:06:38', 10, NULL, NULL, 20, NULL, NULL, NULL, 1),
(18, '2018-04-16 13:07:12', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(19, '2018-04-16 13:08:44', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(20, '2018-04-16 13:11:08', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(21, '2018-04-16 13:12:56', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(22, '2018-04-16 13:13:29', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(23, '2018-04-16 13:15:17', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(24, '2018-04-16 13:15:51', 10, 1, NULL, 20, NULL, 1, NULL, 1),
(25, '2018-04-16 13:18:06', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(26, '2018-04-16 13:19:17', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(27, '2018-04-25 15:16:16', 10, 2, NULL, 20, NULL, 1, NULL, 1),
(28, '2018-04-27 16:34:59', 10, 2, 3, 20, NULL, 1, NULL, 1),
(29, '2018-04-27 16:36:43', 10, 2, 3, 20, NULL, 1, NULL, 1),
(30, '2018-04-27 16:38:47', 10, 2, 3, 20, NULL, 1, NULL, 1),
(31, '2018-04-27 16:40:20', 10, 2, 3, 20, NULL, 1, NULL, 1),
(32, '2018-04-27 16:41:58', 10, 2, 3, 20, 'RSDR09', 1, NULL, 1),
(33, '2018-04-27 16:44:25', 10, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(34, '2018-04-27 16:45:10', 10, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(35, '2018-04-27 17:17:52', 10, 3, 2, 20, 'RSDR09', 1, NULL, 1),
(36, '2018-04-27 17:21:34', 10, 3, 2, 20, 'RSDR09', 1, NULL, 1),
(37, '2018-04-27 17:22:06', 10, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(38, '2018-04-27 17:24:26', 10, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(39, '2018-04-27 17:24:50', 3, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(40, '2018-04-27 17:25:24', 3, 2, 3, 20, 'RSDR09', 1, NULL, 1),
(41, '2018-04-27 17:26:10', 10, 3, 3, 20, 'RSDR09', 1, NULL, 1),
(42, '2018-04-27 17:26:39', 10, 3, 3, 20, 'RSDR09', 1, NULL, 1),
(43, '2018-04-27 17:28:27', 3, 1, 2, 20, 'RSDR09', NULL, 1, 1),
(44, '2018-04-30 22:51:34', 3, 2, 2, 20, 'RSDR09', 1, NULL, 1),
(45, '2018-04-30 22:58:49', 3, 2, 1, 20, 'RSDR09', 1, NULL, 1),
(46, '2018-05-01 00:06:32', 3, 3, 1, 20, 'RSDR09', 1, NULL, 1),
(47, '2018-05-01 00:21:24', 3, 6, 3, 20, 'RSDR09', NULL, NULL, 1),
(48, '2018-05-01 00:25:19', 3, 2, 2, 20, 'RSDR09', NULL, NULL, 1),
(49, '2018-05-07 13:36:06', 16, 1, 1, 12, 'undefined', NULL, 1, 1),
(50, '2018-05-07 13:50:15', 16, 1, 2, 12, 'undefined', NULL, 1, 1),
(51, '2018-05-07 13:58:12', 16, 1, 2, 12, 'undefined', NULL, 1, 1),
(52, '2018-05-07 13:58:41', 16, 1, 3, 12, 'undefined', NULL, 1, 1),
(53, '2018-05-07 14:12:41', 16, 1, 3, 12, 'WRDS34', NULL, 1, 1),
(54, '2018-05-07 14:14:21', 16, 1, 3, 12, 'WRDS34', 1, NULL, 1),
(55, '2018-05-08 02:01:05', 11, 1, 7, 12, 'FWDR34', 1, NULL, 1),
(56, '2018-05-09 12:47:50', 3, 1, 1, 12, 'RSDR09', 1, NULL, 1),
(57, '2018-05-09 12:49:30', 3, 2, 2, 12, 'RSDR09', 1, NULL, 1),
(58, '2018-05-09 12:55:24', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1),
(59, '2018-05-09 12:59:48', 3, 3, 1, 12, 'RSDR09', 1, NULL, 1),
(60, '2018-05-09 13:03:06', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1),
(61, '2018-05-09 13:05:51', 3, 6, 4, 12, 'RSDR09', 1, NULL, 1),
(62, '2018-05-09 16:51:36', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1),
(63, '2018-05-09 16:59:31', 3, 1, 1, 12, 'RSDR09', 1, NULL, 1),
(64, '2018-05-09 17:05:19', 3, 2, 2, 12, 'RSDR09', 1, NULL, 1),
(65, '2018-05-09 17:12:45', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(66, '2018-05-09 17:14:56', 3, 3, 5, 12, 'RSDR09', 1, NULL, 1),
(67, '2018-05-09 17:16:25', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(68, '2018-05-09 17:18:57', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(69, '2018-05-09 17:24:03', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(70, '2018-05-09 17:34:17', 3, 2, 1, 12, 'RSDR09', 1, NULL, 1),
(71, '2018-05-09 17:43:30', 3, 2, 3, 12, 'RSDR09', 1, NULL, 1),
(72, '2018-05-09 17:48:20', 3, 2, 2, 12, 'RSDR09', 1, NULL, 1),
(73, '2018-05-09 17:50:45', 3, 2, 1, 12, 'RSDR09', 1, NULL, 1),
(74, '2018-05-09 17:52:06', 3, 2, 3, 12, 'RSDR09', 1, NULL, 1),
(75, '2018-05-09 17:57:13', 3, 2, 1, 12, 'RSDR09', 1, NULL, 1),
(76, '2018-05-09 18:00:20', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1),
(77, '2018-05-09 18:01:06', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(78, '2018-05-09 18:03:49', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(79, '2018-05-09 18:04:46', 3, 6, 1, 12, 'RSDR09', 1, NULL, 1),
(80, '2018-05-09 18:12:23', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1),
(81, '2018-05-09 18:14:47', 3, 2, 1, 12, 'RSDR09', 1, NULL, 1),
(82, '2018-05-09 18:15:30', 3, 1, 1, 12, 'RSDR09', 1, NULL, 1),
(83, '2018-05-09 18:16:08', 3, 2, 2, 12, 'RSDR09', 1, NULL, 1),
(84, '2018-05-09 18:16:36', 3, 2, 2, 12, 'RSDR09', 1, NULL, 1),
(85, '2018-05-09 18:19:22', 3, 2, 1, 12, 'RSDR09', 1, NULL, 1),
(86, '2018-05-09 18:23:38', 3, 1, 5, 12, 'RSDR09', 1, NULL, 1),
(87, '2018-05-09 18:24:09', 3, 2, 4, 12, 'RSDR09', 1, NULL, 1),
(88, '2018-05-09 18:24:39', 3, 1, 5, 12, 'RSDR09', 1, NULL, 1),
(89, '2018-05-09 18:25:08', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(90, '2018-05-09 18:25:47', 3, 2, 7, 12, 'RSDR09', NULL, 1, 1),
(91, '2018-05-09 18:26:17', 3, 2, 7, 12, 'RSDR09', NULL, 1, 1),
(92, '2018-05-09 18:28:39', 3, 1, 5, 12, 'RSDR09', 1, NULL, 1),
(93, '2018-05-09 18:29:34', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(94, '2018-05-09 18:36:07', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(95, '2018-05-09 18:36:36', 3, 2, 3, 12, 'RSDR09', NULL, 1, 1),
(96, '2018-05-09 18:39:28', 3, 2, 5, 12, 'RSDR09', 1, NULL, 1),
(97, '2018-05-09 18:40:47', 3, 1, 5, 12, 'RSDR09', 1, NULL, 1),
(98, '2018-05-09 18:41:26', 3, 2, 7, 12, 'RSDR09', 1, NULL, 1),
(99, '2018-05-09 19:11:06', 3, 6, 5, 12, 'RSDR09', NULL, 1, 1),
(101, '2018-05-09 19:19:16', 3, 3, 2, 12, 'RSDR09', 1, NULL, 1);

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
(1, 94, 1),
(1, 95, 1),
(1, 96, 1),
(1, 97, 1),
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
(2, 94, 1),
(2, 95, 1),
(2, 96, 1),
(2, 97, 1),
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
(3, 96, 1),
(3, 97, 1),
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
(4, 94, 1),
(4, 95, 1),
(4, 96, 1),
(4, 97, 1),
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
(5, 96, 1),
(5, 97, 1),
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
(6, 40, 1),
(6, 44, 1),
(6, 45, 1),
(6, 46, 1),
(6, 47, 1),
(6, 52, 1),
(6, 53, 1),
(6, 57, 1),
(6, 61, 1),
(6, 96, 1),
(6, 97, 1),
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
  `Pass_usu` varchar(40) CHARACTER SET utf8 NOT NULL,
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
(12, 0xe54ebfef642ef3bca3d8eca093522086, 0xb9d56bf66ab55b0078d62aa880d084f2b8b9e7dadcac1224719f7391f8843699, 0xe54ebfef642ef3bca3d8eca093522086, 'b30a5e4378704ddb5172af982b5d1e00a801e3dc', 0xd80159977cf40a8b8b08a391b2b03cc218dac1c9e5f70ed2bb8ba6ece74dfaf0, 1, 1, '2017-10-10 01:47:41', 1624660626, 1, 1),
(13, 0x7cae22ec6d4ad4ba9555d4cedb0e0e0d, 0x0a168feb68b6f493321dbf252f722f4f, 0x7cae22ec6d4ad4ba9555d4cedb0e0e0d, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x5e4f84a9a7fc2fbcb7713470e0a2ea86, 8, 1, '2017-12-08 00:18:33', 1648927720, 10, 1),
(14, 0xca47c131b851a5092a7f635ac9363bd6, 0xec1e1a40a50ef1798fc67c0fc0c71dba, 0xca47c131b851a5092a7f635ac9363bd6, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x11f8abad929a1e40a6fe746ec36aeab2, 3, 1, '2017-12-09 16:24:14', 1645303190, 11, 1),
(15, 0x0235fc7c95a12b9101be1914414da471, 0xdef934fa7d4ace424fdd3e821666dacd, 0x0235fc7c95a12b9101be1914414da471, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x70bab136f643d47ff87ecdb7d2be25c1, 7, 1, '2017-12-09 17:42:23', 1746122669, 3, 1),
(16, 0x0e9e144dfb66ba1c7797e668abac3004, 0x5bc9ec54a08f97eb60a8c65965b41ad7f7c4e4daf075ee0d378ece8b6f2eb37f, 0x0e9e144dfb66ba1c7797e668abac3004, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x528a5ba633036df95272d38486e9bb3d, 5, 1, '2018-03-18 20:12:21', 1649618107, 13, 1),
(17, 0x01781f09077ab201460365c1d3a88ad4, 0x0d4e18636a23edce57cc15e2a19833fa929cd231c4d28540a7f35c3c9eb327b4, 0x01781f09077ab201460365c1d3a88ad4, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x528a5ba633036df95272d38486e9bb3d, 5, 1, '2018-03-19 22:55:49', 1764843657, 14, 2),
(18, 0x14e5231b7511a88c993def1f5e49f7b0, 0xaffea31cd2dc97812eccf0ee290656e268a7e09af0512e87e194c4a2b10fdefa, 0x14e5231b7511a88c993def1f5e49f7b0, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x77da34f6c540442c2938aac6e6846000, 6, 1, '2018-03-21 00:36:47', 1537476285, 12, 2),
(19, 0x694f34025e7520b64077108663c09bfb, 0x9612adc3917e87fec57a900d4d67b748dc71c78ff1317bd014f58cfb418cc31f, 0x694f34025e7520b64077108663c09bfb, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x4e24a66a0f2fea3d57a363ad63affdad, 4, 1, '2018-03-21 01:33:57', 1716861777, 15, 1),
(20, 0x00592ca23ce667c1e75b58c01cc5c626, 0x37e2efc082df23cf08b4f9aa93c5c85cbcb992f47fe15fa99260a9efbbe5445f, 0x00592ca23ce667c1e75b58c01cc5c626, '551950400ac0cfc637545841fbc1626b25f5eb36', 0x051ed0f8cd85cf3c81944db4f0cb80f2, 4, 1, '2018-03-21 15:44:03', 1434965358, 16, 1),
(21, 0xf2d82f2d6eec043abbfd05b8674e1243, 0xde184591f0f722ebb22fc134bf621025dc71c78ff1317bd014f58cfb418cc31f, 0xf2d82f2d6eec043abbfd05b8674e1243, '551950400ac0cfc637545841fbc1626b25f5eb36', 0xbe33e182c532677f955142f6d8f2f54c, 8, 1, '2018-03-28 19:27:03', 1447426839, 17, 1),
(22, 0x8015b7cca75a0b6a0943c34894a63f6e, 0xdab500de8c90cb449fc80948fc1f1ce8b8b9e7dadcac1224719f7391f8843699, 0x8015b7cca75a0b6a0943c34894a63f6e, '929d8ceddfd56e7cbb352260c6aa905c6c9c65ee', 0x0e767d804d2ed967471ee724fd1371aa1afe345d07827ee315af4e487bafbe2a, 2, 1, '2018-05-13 12:05:01', 1587966569, 19, NULL),
(23, 0xe68bdc585e7a63f81b60dee0398208ac, 0x9d54f1c48883ccde9187dc36d827a88eb8b9e7dadcac1224719f7391f8843699, 0xe68bdc585e7a63f81b60dee0398208ac, '2cfcef063d2700d98f6006efa6fb9afdaf095fe9', 0xe476caadab2861009beb083594cf1a52, 2, 1, '2018-05-22 15:17:38', 2147483647, 21, NULL);

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

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`Id_vehi`, `Cod_vehi`, `Desc_vehi`, `Id_modelo`, `Id_cond`) VALUES
(1, 'FWDR34', 'Verde', 7, 1),
(3, 'WRDS34', 'Amarillo 2017', 2, 1),
(4, 'UYTR45', 'Rojo claro', 3, 2),
(5, 'RSDR09', 'Amarillo', 7, 1),
(6, 'RSDR09', 'Verde claro', 2, 2),
(7, 'YTRE32', 'Blanco Sedan', 399, 1),
(9, 'TREW67', 'Rojo', 111, 2),
(10, 'UYTR89', 'dos puertas', 97, 2);

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

--
-- Volcado de datos para la tabla `vehiculo_persona`
--

INSERT INTO `vehiculo_persona` (`Id_vehiper`, `Id_vehi`, `Id_per`, `Id_trelv`) VALUES
(15, 1, 16, 2),
(4, 3, 3, 2),
(14, 3, 11, 2),
(12, 3, 16, 1),
(13, 3, 16, 2),
(22, 5, 3, 2),
(21, 5, 10, 2),
(9, 5, 11, 2),
(3, 5, 12, 1),
(7, 5, 13, 1),
(16, 5, 16, 2),
(11, 7, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `Id_viv` int(11) NOT NULL,
  `Num_viv` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Id_cb` int(11) NOT NULL,
  `Id_esta` int(11) DEFAULT NULL,
  `Id_cond` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`Id_viv`, `Num_viv`, `Id_cb`, `Id_esta`, `Id_cond`) VALUES
(1, '101', 1, 1, 1),
(2, '102', 1, 2, 1),
(3, '103', 1, 3, 1),
(4, '101', 10, 1, 2),
(5, '102', 10, 2, 2),
(6, '104', 1, 4, 1),
(7, '101', 2, 12, 1),
(8, '103', 10, 3, 2);

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

--
-- Volcado de datos para la tabla `vivienda_persona`
--

INSERT INTO `vivienda_persona` (`Id_vper`, `Id_viv`, `Id_per`, `Id_trel`) VALUES
(1, 2, 11, 5),
(2, 2, 10, 3),
(3, 4, 12, 1),
(4, 1, 3, 1),
(6, 5, 14, 1),
(7, 6, 15, 3),
(10, 3, 13, 1),
(12, 1, 13, 5),
(13, 1, 1, 8),
(14, 2, 1, 7),
(16, 2, 3, 8),
(17, 3, 3, 8),
(18, 6, 3, 9),
(19, 1, 16, 2),
(21, 3, 16, 1),
(22, 2, 16, 8),
(23, 3, 11, 2),
(28, 8, 22, 3);

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
-- Volcado de datos para la tabla `votacion_encuesta`
--

INSERT INTO `votacion_encuesta` (`Id_ve`, `Fch_ve`, `Id_usu`, `Id_encu`, `Id_iencu`, `Id_cond`) VALUES
(1, '2018-02-22 01:17:33', 12, 2, 4, 2),
(2, '2018-02-22 01:43:08', 13, 1, 7, 1),
(3, '2018-02-22 13:53:04', 15, 2, 5, 2);

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
-- Indices de la tabla `his_ses`
--
ALTER TABLE `his_ses`
  ADD PRIMARY KEY (`Id_hses`),
  ADD KEY `Id_usu` (`Id_usu`);

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
  MODIFY `Id_cb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `Id_cc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `Id_encu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `Id_esta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `Id_acond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `his_multa`
--
ALTER TABLE `his_multa`
  MODIFY `Id_hmul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `his_obs`
--
ALTER TABLE `his_obs`
  MODIFY `Id_hobs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `his_ses`
--
ALTER TABLE `his_ses`
  MODIFY `Id_hses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `Id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
  MODIFY `Id_inm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `item_encuesta`
--
ALTER TABLE `item_encuesta`
  MODIFY `Id_iencu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `Id_multa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `Id_obs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `Id_perm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `Id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `reg_backup`
--
ALTER TABLE `reg_backup`
  MODIFY `Id_rb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `reg_visita`
--
ALTER TABLE `reg_visita`
  MODIFY `Id_regv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

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
  MODIFY `Id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `Id_vehi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vehiculo_persona`
--
ALTER TABLE `vehiculo_persona`
  MODIFY `Id_vehiper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `Id_viv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `vivienda_persona`
--
ALTER TABLE `vivienda_persona`
  MODIFY `Id_vper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `votacion_encuesta`
--
ALTER TABLE `votacion_encuesta`
  MODIFY `Id_ve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `fk_item_encuesta_encuesta1` FOREIGN KEY (`Id_encu`) REFERENCES `encuesta` (`Id_encu`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

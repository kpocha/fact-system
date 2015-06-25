-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2015 a las 23:11:10
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fact-system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `personas_id` int(5) NOT NULL,
  `razon_social` varchar(30) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `cuit` varchar(15) NOT NULL,
  `iva_tipo` enum('Responsable Inscripto','Exento','Monotributo Social','Monotributo Eventual','Responsable Monotributo','Consumidor Final') NOT NULL,
  `email` varchar(30) NOT NULL,
  `tipo_persona` enum('Proveedor','Cliente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `personas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `cod_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  `unidad_medida` float NOT NULL,
  `precio_unit` float NOT NULL,
  `porc_bonif` float NOT NULL,
  `alicuota_iva` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`cod_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `stock`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

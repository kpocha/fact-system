-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2015 a las 19:19:10
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fact_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`personas_id` int(5) NOT NULL,
  `razon_social` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `localidad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cuit` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iva_tipo` enum('Responsable Inscripto','Exento','Monotributo Social','Monotributo Eventual','Responsable Monotributo','Consumidor Final') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo_persona` enum('Proveedor','Cliente') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
`cod_articulo` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `unidad_medida` float NOT NULL,
  `precio_unit` float NOT NULL,
  `porc_bonif` float NOT NULL,
  `alicuota_iva` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`personas_id`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
 ADD PRIMARY KEY (`cod_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `personas_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
MODIFY `cod_articulo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

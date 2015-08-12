-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2015 a las 04:32:30
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hpc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`id`, `nombre`) VALUES
(1, 'apli1'),
(2, 'apli2'),
(3, 'apli3'),
(4, 'apli4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versiones`
--

CREATE TABLE IF NOT EXISTS `versiones` (
  `id` int(11) NOT NULL,
  `version` double NOT NULL,
  `claveVer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `versiones`
--

INSERT INTO `versiones` (`id`, `version`, `claveVer`) VALUES
(1, 1.1, 1),
(1, 1.2, 2),
(1, 1.3, 3),
(2, 2.1, 1),
(2, 2.2, 2),
(2, 2.3, 3),
(3, 3.1, 1),
(3, 3.2, 2),
(4, 4.1, 1),
(4, 4.2, 2),
(4, 4.3, 3),
(4, 4.4, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aplicaciones`
--
ALTER TABLE `aplicaciones`
 ADD PRIMARY KEY (`id`,`nombre`);

--
-- Indices de la tabla `versiones`
--
ALTER TABLE `versiones`
 ADD PRIMARY KEY (`id`,`version`,`claveVer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

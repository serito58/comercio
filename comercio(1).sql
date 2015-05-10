-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-05-2015 a las 00:59:24
-- Versión del servidor: 5.5.37-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(250) NOT NULL,
  `marcas` varchar(255) NOT NULL,
  `viajante` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `proveedor`, `marcas`, `viajante`, `direccion`, `cp`, `telefono`, `correo`) VALUES
(67, 'FBD', 'FBD', 'Luciano Bertoya', 'Alem', '8000', '1455', 'asdagmail.com'),
(68, 'Sis Distribuidora', 'asdfs', 'asdfsd', 'asds', 'asdvs', '5354', 'dfdsv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajante`
--

CREATE TABLE IF NOT EXISTS `viajante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(255) NOT NULL,
  `pedido` varchar(255) NOT NULL,
  `fpagado` varchar(255) NOT NULL,
  `importe` int(11) NOT NULL,
  `cheques` varchar(255) NOT NULL,
  `frecibido` varchar(255) NOT NULL,
  `obs` text NOT NULL,
  `proveedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Volcado de datos para la tabla `viajante`
--

INSERT INTO `viajante` (`id`, `fecha`, `pedido`, `fpagado`, `importe`, `cheques`, `frecibido`, `obs`, `proveedor_id`) VALUES
(166, '10-05-2015', 'receta', '11-02-2015', 12546, '11222', '10-05-2015', 'dsdc', 67),
(167, '2015', 'ascs', 'scs', 651321, '131', '313', '313', 68);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

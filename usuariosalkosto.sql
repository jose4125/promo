-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2012 a las 00:29:03
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuariosalkosto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DATOS`
--

CREATE TABLE IF NOT EXISTS `DATOS` (
  `consecutivo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` int(11) NOT NULL DEFAULT '0',
  `nombres` varchar(200) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `aceptaT` char(1) DEFAULT NULL,
  `ofertas` char(1) DEFAULT NULL,
  `fan` varchar(140) DEFAULT NULL,
  `frase` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`consecutivo`,`cedula`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `DATOS`
--

INSERT INTO `DATOS` (`consecutivo`, `cedula`, `nombres`, `ciudad`, `email`, `telefono`, `aceptaT`, `ofertas`, `fan`, `frase`) VALUES
(1, 80134371, 'jose david lombana', 'bogota', 'jose4125@gmail.com', '1234567', 'N', 'N', NULL, NULL);

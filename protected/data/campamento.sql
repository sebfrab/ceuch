-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2014 a las 13:34:30
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ceuchnew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campamento`
--

CREATE TABLE IF NOT EXISTS `campamento` (
  `idcampamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` datetime NOT NULL,
  `img` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`idcampamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `campamento`
--

INSERT INTO `campamento` (`idcampamento`, `titulo`, `cuerpo`, `fecha`, `img`) VALUES
(9, 'Prueba 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, ', '2014-01-09 08:32:45', 'ceuchCampamento8118-Escuela_12.jpg'),
(10, 'Titulo de Evento n° 2', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas.\r\n\r\n Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuación dominan a los textos simulados; una vida, se puede decir', '2014-01-08 10:30:44', ''),
(11, 'NIños jugando', 'la calor la carlore', '2014-01-08 10:37:00', ''),
(12, 'Calorrr!!!', '35°, eso si es mucho', '2014-01-08 10:37:57', 'ceuchCampamento9444-Picaflor y Colliguay 008.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

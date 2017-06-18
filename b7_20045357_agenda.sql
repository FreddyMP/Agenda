-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql308.byethost7.com
-- Tiempo de generación: 18-06-2017 a las 11:06:42
-- Versión del servidor: 5.6.35-81.0
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `b7_20045357_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Tarea` varchar(300) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `otro` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `Tarea`, `estado`, `otro`) VALUES
(9, 'ir a al super', 'realizado', ''),
(11, 'ir a la escuela', 'realizado', ''),
(12, 'ir al cine', '', ''),
(13, 'ir al joder', '', ''),
(14, 'Ir a donde anthony', '', ''),
(15, 'Entregar trabajo', '', ''),
(16, 'ir al gym', '', ''),
(17, 'Ir al super', '', ''),
(18, 'entregar otro tra', '', ''),
(19, 'ees', '', ''),
(20, 'es', '', ''),
(21, 'real', '', ''),
(22, 'ushio', 'realizado', ''),
(23, 'ir al gym', 'eliminado', ''),
(24, 'Ir al super', 'eliminado', ''),
(25, 'Ir al super', 'realizado', ''),
(26, 'ir donde anthony', 'eliminado', ''),
(27, 'ir a la escuela', 'eliminado', ''),
(28, 'ir a gym', 'eliminado', ''),
(29, 'ir  de compras', 'eliminado', ''),
(30, 'ir  a programar', 'eliminado', ''),
(32, 'ir donde la abuela', 'eliminado', ''),
(33, 'ir donde la maestra', 'eliminado', ''),
(34, 'Continuo probando', 'eliminado', ''),
(35, 'ir donde anthony', 'eliminado', ''),
(36, 'ir donde anthony', 'realizado', ''),
(37, 'ir donde anthony', 'eliminado', ''),
(38, 'Quiero trabajar con ustedes', 'eliminado', ''),
(39, 'Ir al super', 'eliminado', ''),
(40, 'sasdasd', 'eliminado', ''),
(41, 'sasdasd', 'eliminado', ''),
(42, 'sasdasdasasda', 'realizado', ''),
(43, 'ir a la escuela', 'realizado', ''),
(44, '', 'eliminado', ''),
(45, '', 'eliminado', ''),
(46, 'ir donde anthony', 'eliminado', ''),
(47, 'Dispongo de poco net perdon', 'eliminado', ''),
(48, 'Ir al super', 'eliminado', ''),
(49, 'Visitar a tia', 'eliminado', ''),
(50, 'Curso laravel', 'pendiente', ''),
(51, 'Jugar lol', 'eliminado', ''),
(52, 'Estudiar codeigniter', 'pendiente', ''),
(53, 'Framework MVC Falcon', 'pendiente', ''),
(54, 'Aqui aparece todo', 'eliminado', ''),
(55, 'jugar lol', 'realizado', ''),
(56, 'Aprender github', 'pendiente', ''),
(57, 'El campo no puede estar vacio', 'realizado', ''),
(58, 'agregamos uno nuevo', 'eliminado', ''),
(59, 'Agregamos otro', 'eliminado', ''),
(60, 'de nuevo jugar lol', 'eliminado', ''),
(61, 'de nuevo jugar lol', 'eliminado', ''),
(62, 'Continuo mejorandolo', 'pendiente', ''),
(63, 'Curso angular.Js', 'pendiente', ''),
(64, 'Insertar tarea', 'pendiente', ''),
(65, 'insertar tarea', 'pendiente', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

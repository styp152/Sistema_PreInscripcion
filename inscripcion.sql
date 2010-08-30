-- phpMyAdmin SQL Dump
-- version 3.2.2.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2010 a las 19:01:24
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_academicos`
--

CREATE TABLE IF NOT EXISTS `datos_academicos` (
  `codigo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `institucion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tipoplantel` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `regimen` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fechaexpe` date NOT NULL,
  `promocion` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `tituloregistrado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `datos_academicos`
--

INSERT INTO `datos_academicos` (`codigo`, `institucion`, `tipoplantel`, `regimen`, `titulo`, `fechaexpe`, `promocion`, `tituloregistrado`) VALUES
('123456', 'UCV', 'PÃºblic', 'Diurno', 'T.S.U.', '0000-00-00', 'XI', 'SÃ'),
('15897463', 'Liceo Ejido', 'PÃºblic', 'Diurno', 'T.S.U.', '2010-08-03', 'XI', 'SÃ'),
('18964136', 'ejido', '', 'Diurno', 'T.S.U.', '0000-00-00', 'II', 'Sí'),
('222332233', 'asdasdasdsad', '', '-', '-', '0000-00-00', '-', '-'),
('324343242', 'adsadasdasd', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'II', 'SÃ'),
('342342343', 'sadasdasdasd', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'II', 'SÃ'),
('343232432', 'adsasdasd', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'II', 'SÃ'),
('3432432', 'sesdasdasdasd', '-', '-', '-', '0000-00-00', '-', '-'),
('454354354', 'asdasdsa', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'II', 'SÃ'),
('56', 'adasdsadasd', 'Publica', 'Diurno', 'T.S.U.', '0000-00-00', 'I', 'Si'),
('65', 'adasdsadasd', 'Publica', 'Diurno', 'T.S.U.', '0000-00-00', 'I', 'Si'),
('765765765', 'adasdsadasd', 'Publica', 'Diurno', 'Bachiller', '0000-00-00', 'I', 'Si'),
('7854456', 'sdfsdfsdfsdf', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'I', 'SÃ'),
('789456321', 'Liceo Ejido', 'PÃºblic', 'Diurno', 'T.S.U.', '2010-08-03', 'XI', 'SÃ'),
('8044725', 'Libertador', '', 'Diurno', 'Bachiller', '0000-00-00', 'I', 'SÃ'),
('856858658', 'ihgiygiyhghgvujh', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'II', 'Si'),
('87687687', 'sdfsdfsdfd', 'PÃºblic', 'Diurno', 'Bachiller', '0000-00-00', 'I', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_institucion`
--

CREATE TABLE IF NOT EXISTS `datos_institucion` (
  `codigo` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pnf` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `modalidad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lapsoacad` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaingreso` date NOT NULL,
  `nucleo` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcar la base de datos para la tabla `datos_institucion`
--

INSERT INTO `datos_institucion` (`codigo`, `pnf`, `modalidad`, `lapsoacad`, `fechaingreso`, `nucleo`) VALUES
('123456', 'IngenierÃ­a en ConstrucciÃ³n C', 'Fundayacucho', '2010-I', '0000-00-00', 'Elorza'),
('15897463', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '2010-08-17', 'Mantecal'),
('18964136', 'Ingeniería en Agroalimentación', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('222332233', 'Ingeniería en Agroalimentación', 'Otro', '-', '0000-00-00', 'Mantecal'),
('324343242', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '0000-00-00', 'Mantecal'),
('342342343', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '0000-00-00', 'Mantecal'),
('343232432', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '0000-00-00', 'Mantecal'),
('3432432', 'IngenierÃ­a en ConstrucciÃ³n C', 'Fundayacucho', '2010-I', '2010-08-11', 'Mantecal'),
('454354354', 'IngenierÃ­a en AgroalimentaciÃ', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('56', 'Ingenieria en Agroalimentacion', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('65', 'Ingenieria en Agroalimentacion', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('765765765', 'Ingenieria en Agroalimentacion', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('7854456', 'IngenierÃ­a en AgroalimentaciÃ', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('789456321', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '2010-08-17', 'Mantecal'),
('8044725', 'IngenierÃ­a en AgroalimentaciÃ', 'Fundayacucho', '2010-I', '0000-00-00', 'Mantecal'),
('856858658', 'Ingenieria en Agroalimentacion', 'Otro', '2010-I', '0000-00-00', 'Mantecal'),
('87687687', 'IngenierÃ­a en AgroalimentaciÃ', 'Otro', '2010-I', '0000-00-00', 'Mantecal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechanac` date NOT NULL,
  `lugarnac` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(1) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estadocivil` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefonohab` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefonoref` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trabaja` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `condicion` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Volcar la base de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`codigo`, `cedula`, `apellidos`, `nombres`, `fechanac`, `lugarnac`, `sexo`, `estadocivil`, `direccion`, `ciudad`, `estado`, `municipio`, `telefonohab`, `celular`, `telefonoref`, `trabaja`, `condicion`, `cargo`) VALUES
(8, '18964136', 'sanchez', 'typson', '0000-00-00', '', '0', 'Soltero', 'cbcvbggh', '', '', 'hgfhgf', '45454', '', '', 'Sí', 'Fijo', 'docente'),
(10, '8044725', 'Meza', 'Typson', '0000-00-00', '', '1', 'Soltero', 'Hoyada de Milla', '', '', 'Libertador', '2446426', '', '', 'SÃ', 'Exporadico', 'Utilitu'),
(11, '7854456', 'dcfgdfgdfg', 'fgfdgfdgd', '0000-00-00', '', '0', 'Casado', 'sfsdfsdfsdfsdf', '', '', 'sdfsdfsf', '3333', '', '', 'SÃ', 'Fijo', 'sdfsdfsdfsfd'),
(12, '324343242', 'swfsdfsdfdsf', 'assdasdasd', '0000-00-00', '', '0', 'Soltero', 'asdasdasd', '', '', 'asdsadasd', '22222', '', '', 'SÃ', 'Fijo', 'asdasdasdasdasd'),
(13, '324343242', 'swfsdfsdfdsf', 'assdasdasd', '0000-00-00', '', '0', 'Soltero', 'asdasdasd', '', '', 'asdsadasd', '22222', '', '', 'SÃ', 'Fijo', 'asdasdasdasdasd'),
(14, '342342343', 'sddsfsdf', 'dsafsfsdfsdf', '0000-00-00', '', '0', 'Casado', 'sdfsdfsdfsdf', '', '', 'sdfsdfsdfsdf', '3333333', '', '', 'SÃ', 'Fijo', 'asdasdasdasd'),
(15, '343232432', 'sadfsadasdas', 'asdasdasdasd', '0000-00-00', '', '0', 'Soltero', 'sadsadasdasd', '', '', 'sadasdsad', '2141242', '', '', 'No', 'Contratado', 'asasdsad'),
(16, '454354354', 'dsfgdfgfdgq', 'sdfsdfsdfsd', '0000-00-00', '', '0', 'Soltero', 'sdfsdfsdfsdf', '', '', 'sdfsdfsdfsdf', '432324', '', '', 'SÃ', 'Fijo', 'sadasdasd'),
(17, '123456', 'Alvarez', 'Pablo', '0000-00-00', '', '0', 'Divorciado', 'Macaracuay', '', '', 'libertador', '45879', '', '', 'SÃ', 'Fijo', 'Gerente'),
(18, '789456321', 'Perez', 'Nelsom', '2010-08-03', '', '1', 'Soltero', 'La vega de san antonio', '', '', 'Libertador', '2446426', '', '', 'No', 'Fijo', 'docente'),
(19, '15897463', 'Perez', 'Nelsom', '2010-08-03', 'Merida', '1', 'Soltero', 'La vega de san antonio', '', '', 'Libertador', '2446426', '', '', 'No', 'Fijo', 'docente'),
(22, '3432432', 'sadfsdfsf', 'sdsfsdf', '0000-00-00', '', '0', '-', '', '', '-', '', '2131', '1232558', '2131312', '-', '-', ''),
(23, '856858658', 'gfjhfjhgfjhgcvjh', 'hgvjhgvjhgvgv', '0000-00-00', 'hgvhgvhgvhgvjhgv', '0', 'Casado', 'mhvjhvjhvjhv', 'jjvvjhvjhvjv', 'ANZOATEGUI', 'jhgjhgjhgjh', '8778', '5766191', '8768768', 'Si', 'Fijo', 'kjhkjhkjhkjhj'),
(24, '87687687', 'jhgbjhgjgjh', 'jhgjhgjhgjhgjh', '0000-00-00', 'jhgjhgjhgjhgjh', '1', 'Viudo', 'ihikghghiugiug', 'iughiughigiugiu', 'APURE', 'kjhghjghg', '7887', '7888214', '8788787', 'Si', 'Fijo', 'sdfsdfsdf'),
(25, '222332233', '', '', '0000-00-00', '', '', '-', '', '', '', '', '0', '', '', '-', '-', ''),
(26, '765765765', 'jhgjhgjygjhg', 'jgjhgjhgjhgj', '0000-00-00', '', '0', '-', '', '', '-', '', '0', '0', '0', '-', '-', ''),
(27, '56', 'jhgjhgjygjhgdsfdsffds', 'sdfsdf', '0000-00-00', '', '0', '-', '', '', '-', '', '0', '0', '0', '-', '-', ''),
(28, '65', 'jhgjhgjygjhgdsfdsffds', 'sdfsdf', '0000-00-00', '', '0', '-', '', '', '-', '', '0', '0', '0', '-', '-', '');

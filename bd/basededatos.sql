-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2016 a las 22:50:34
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `dni` varchar(50) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `nacimiento` date NOT NULL,
  `tipo_admin` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficios`
--

CREATE TABLE `oficios` (
  `dni` varchar(50) NOT NULL,
  `oficio` varchar(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `direccion` varchar(220) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `experiencia` int(11) NOT NULL,
  `apellidos` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oficios`
--

INSERT INTO `oficios` (`dni`, `oficio`, `nombre`, `lugar`, `direccion`, `foto`, `experiencia`, `apellidos`) VALUES
('10', 'albañil', 'Abel', 'lima', 'jgh:es 256', 'foto', 3, ''),
('40', 'albañil', 'jose', 'lima', 'sdad', 'sadasd', 2, 'ajj jjjc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `dni` varchar(50) NOT NULL,
  `sugerencia` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(5) NOT NULL,
  `encargado` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `dni` varchar(150) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellidos` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `contrasenia` varchar(300) NOT NULL,
  `ciudad` varchar(300) DEFAULT NULL,
  `direccion` varchar(800) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `cont_mensaje` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`dni`, `nombre`, `apellidos`, `email`, `contrasenia`, `ciudad`, `direccion`, `telefono`, `celular`, `nacimiento`, `foto`, `cont_mensaje`) VALUES
('70241454', 'Abel', 'Ricra Sanchez', 'abel@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('7024146', 'juan', 'Ricra Sanchez', 'juan@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('70241455', 'pedro', 'Ricra Sanchez', 'pedro@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('70241457', 'mariano', 'Ricra Sanchez', 'mariano@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('70245454', 'Abelardo', 'Ricra Sanchez', 'abelardo@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('702419654', 'Andre', 'Ricra Sanchez', 'adre@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0),
('123456', 'manuel', 'maucaylle noise', 'jjs@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('15', 'manuel', 'maucaylle noise', 'jjk565s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('1455', 'aded', 'maucaylle noise', 'jjks45@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('1555', 'manuhel', 'maucaylle noise', 'jj556ks@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('185', 'loe', 'maucaylle noise', 'jjk45s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('15585', 'mafenuel', 'maucaylle noise', 'jj5ks@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0),
('14575', 'forlan', 'maucaylle noise', 'jjk4s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `nombre` varchar(300) NOT NULL,
  `rubro` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`nombre`, `rubro`, `descripcion`, `fecha`, `lugar`) VALUES
('Abel', 'mecanico', 'se necesita mecani en lima huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('Abel', 'mecanico', 'se necesita mecani en lima aras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('Jose', 'mecanico', 'se necesita mecani en lima ', '2016-10-12', 'Lima'),
('Iberotec', 'mecanico', 'se necesita mecani en lince huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('MUNICIPALIDAD DE LIMA', 'mecanico', 'se necesita mecani en comas huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('KJ', 'mecanico', 'se necesita mecani en liefma huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('JORGE', 'mecanico', 'se necesita mecani por skken lima huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('EDA', 'mecanico', 'se necesita mecaniade en lima huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima'),
('Juan', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'la victoria'),
('Juan', 'Albañil', 'Necesito albañil urgente parjj jj jj a nose cuado', '2016-10-11', 'lima'),
('pedro', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('justino', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'apurimac'),
('luliano', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefani', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefano', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juan', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('pedrito', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juana', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('pedro', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('justino', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'apurimac'),
('luliano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefani', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juan', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('pedrito', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('justino', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'apurimac'),
('luliano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefani', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('estefano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juan', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('pedrito', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin'),
('Juan', 'Albañil', 'Necesito albañil urgente parjj jj jj a nose cuado', '2016-10-11', 'lima'),
('pedro', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('justino', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('luliano', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefani', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefano', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juan', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('pedrito', 'Albañil', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juana', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('pedro', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('justino', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('luliano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefani', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juan', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('pedrito', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('justino', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('luliano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefani', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('estefano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juan', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('pedrito', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima'),
('Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

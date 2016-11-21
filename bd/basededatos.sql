-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2016 a las 10:45:01
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
-- Estructura de tabla para la tabla `oficios`
--

CREATE TABLE `oficios` (
  `dni` varchar(150) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellidos` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `oficio` varchar(50) NOT NULL,
  `ciudad` varchar(300) DEFAULT NULL,
  `direccion` varchar(800) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `experiencia` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oficios`
--

INSERT INTO `oficios` (`dni`, `nombre`, `apellidos`, `email`, `oficio`, `ciudad`, `direccion`, `telefono`, `celular`, `foto`, `experiencia`) VALUES
('7024146', 'juan', 'Ricra Sanchez', 'juan@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', 'kk', 0),
('70241455', 'pedro', 'Ricra Sanchez', 'pedro@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', 'kk', 0),
('70241457', 'mariano', 'Ricra Sanchez', 'mariano@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', 'kk', 0),
('70245454', 'Abelardo', 'Ricra Sanchez', 'abelardo@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', 'kk', 0),
('702419654', 'Andre', 'Ricra Sanchez', 'adre@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', 'kk', 0),
('123456', 'manuel', 'maucaylle noise', 'jjs@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('15', 'manuel', 'maucaylle noise', 'jjk565s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('1455', 'aded', 'maucaylle noise', 'jjks45@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('1555', 'manuhel', 'maucaylle noise', 'jj556ks@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('185', 'loe', 'maucaylle noise', 'jjk45s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('15585', 'mafenuel', 'maucaylle noise', 'jj5ks@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('14575', 'forlan', 'maucaylle noise', 'jjk4s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '45', 0),
('70241454', 'Abel', 'Ricra Sanchez', 'abel@gmail.com', 'albañil', 'magallanes', 'jh', 'kjh', 'kjh', 'perfil.jpg', 2),
('70241454', 'Abel', 'Ricra Sanchez', 'abel@gmail.com', 'panadero', 'lima', 'jn', '987698385', '988', 'doo', 5);

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
  `cont_mensaje` int(11) NOT NULL,
  `perfil` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`dni`, `nombre`, `apellidos`, `email`, `contrasenia`, `ciudad`, `direccion`, `telefono`, `celular`, `nacimiento`, `foto`, `cont_mensaje`, `perfil`) VALUES
('70241454', 'Abel', 'Ricra Sanchez', 'abel@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'perfil.jpg', 0, 'En definitiva, cada uno de nosotros deberá decidir qué le conviene más destacar: nuestros puntos fuertes, conocimientos, competencias, habilidades o nuestros intereses y motivaciones profesionales'),
('7024146', 'juan', 'Ricra Sanchez', 'juan@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0, ''),
('70241455', 'pedro', 'Ricra Sanchez', 'pedro@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0, ''),
('70241457', 'mariano', 'Ricra Sanchez', 'mariano@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0, ''),
('70245454', 'Abelardo', 'Ricra Sanchez', 'abelardo@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0, ''),
('702419654', 'Andre', 'Ricra Sanchez', 'adre@gmail.com', '123', 'magallanes', 'jh', 'kjh', 'kjh', '2016-10-12', 'kk', 0, ''),
('123456', 'manuel', 'maucaylle noise', 'jjs@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('15', 'manuel', 'maucaylle noise', 'jjk565s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('1455', 'aded', 'maucaylle noise', 'jjks45@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('1555', 'manuhel', 'maucaylle noise', 'jj556ks@hhs', 'coma', 'Piura', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('185', 'loe', 'maucaylle noise', 'jjk45s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('15585', 'mafenuel', 'maucaylle noise', 'jj5ks@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('14575', 'forlan', 'maucaylle noise', 'jjk4s@hhs', 'coma', 'Amazonas', 'jjdd', 'dsfsdf', 'sdfsdfs', '2016-10-19', '45', 0, ''),
('1010', 'eduardo', 'abc', '101@h.o', '123', 'vacio', 'vacio', 'vacio', 'vacio', '0001-01-01', 'fotostrabaja/admin.jpg', 0, ''),
('4545454545', 'pi', 'sd', 'sdsad@kk.bod', '123', 'vacio', 'vacio', 'vacio', 'vacio', '0001-01-01', 'fotostrabaja/admin.jpg', 0, 'contenido'),
('1012', 'Abel', 'papel lapiz', '1012@gma.xom', '123', 'vacio', 'vacio', 'vacio', 'vacio', '0001-01-01', 'fotostrabaja/admin.jpg', 0, 'contenido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `rubro` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id`, `nombre`, `rubro`, `descripcion`, `fecha`, `lugar`, `email`, `estado`) VALUES
(1, 'Abel', 'mecanico', 'se necesita mecani en lima huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima', '', '0'),
(2, 'Abel', 'mecanico', 'se necesita mecani en lima aras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima', '', '1'),
(3, 'Jose', 'mecanico', 'se necesita mecani en lima ', '2016-10-12', 'Lima', '', '0'),
(4, 'Iberotec', 'mecanico', 'se necesita mecani en lince huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima', '', '0'),
(5, 'MUNICIPALIDAD DE LIMA', 'mecanico', 'se necesita mecani en comas huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima', '', '1'),
(6, 'KJ', 'mecanico', 'se necesita mecani en liefma huaras jhjhksdsdfjkfkfj', '2016-10-12', 'Lima', '', '1'),
(26, 'Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(27, 'justino', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'apurimac', '', ''),
(28, 'luliano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(29, 'estefani', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(30, 'estefano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(31, 'Juan', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(32, 'pedrito', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(33, 'Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'junin', '', ''),
(34, '', 'Albañil', 'alba', '2016-11-09', 'Junín', '', ''),
(35, '', 'Albañil', 'alba', '2016-11-09', 'Junín', '', ''),
(36, 'hjhgj', 'Gasfitero', 'abelillo', '2016-11-08', 'Piura', '', ''),
(37, 'hjhgj', 'Gasfitero', 'abelillo', '2016-11-08', 'Piura', '', ''),
(38, 'iberptec', 'Albañil', 'sfdaef', '2016-02-02', 'Moquegua', '', '1'),
(39, 'sanzpedria', 'Albañil', 'sdajsdasdad', '2016-02-02', 'Amazonas', '', ''),
(40, 'marl', 'Gasfitero', 'piedra', '2016-02-02', 'Amazonas', '', ''),
(41, 'sanzmar', 'Albañil', 'necesito programador', '2016-02-02', 'Amazonas', '', ''),
(42, 'jj', 'Chofer', 'dfsdfsd', '2016-02-02', 'Loreto', '', ''),
(43, 'Juana', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-10', 'lima', '', '1'),
(44, 'pedro', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(45, 'justino', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(46, 'luliano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-07', 'lima', '', '1'),
(47, 'estefani', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(48, 'estefano', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(49, 'Juan', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(50, 'pedrito', 'mecanico', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(51, 'Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(52, 'justino', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(53, 'luliano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(54, 'estefani', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(55, 'estefano', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(56, 'Juan', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(57, 'pedrito', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(58, 'Juana', 'gasfitero', 'Necesito albañil urgente para nose cuado', '2016-10-11', 'lima', '', ''),
(59, 'ghnhg', 'Mecanico', 'asas', '2016-11-09', 'La Libertad', '', ''),
(60, 'ghnhg', 'Mecanico', 'asas', '2016-11-09', 'La Libertad', '', ''),
(61, 'Abel', 'Mecanico', 'kkk', '2016-11-09', 'Amazonas', '', ''),
(62, 'Abel', 'Mecanico', 'pppp', '2016-11-09', 'Amazonas', '', ''),
(63, 'Abel', '---', '', '2016-11-09', 'Amazonas', '', ''),
(64, 'Abel', '---', '', '2016-11-09', 'Amazonas', '', ''),
(65, 'Abel', '---', '', '2016-11-09', 'Amazonas', '', ''),
(66, 'Abel', '---', '', '2016-11-09', 'Amazonas', '', ''),
(67, 'Abel', 'Albañil', '1', '2016-11-09', 'Amazonas', '', ''),
(68, 'Abel', '---', '2', '2016-11-09', 'Amazonas', '', ''),
(69, 'Abel', '---', '2', '2016-11-09', 'Amazonas', '', ''),
(70, 'Abel', '---', '3', '2016-11-09', 'Amazonas', '', ''),
(71, 'Abel', '---', '4', '2016-11-09', 'Amazonas', '', ''),
(72, 'Abel', '---', '1l', '2016-11-09', 'Amazonas', '', ''),
(73, 'Abel', '---', '1l', '2016-11-09', 'Amazonas', '', ''),
(74, '', '---', 'fg', '2016-11-09', 'Amazonas', '', ''),
(75, '', '---', 'fg', '2016-11-09', 'Amazonas', '', ''),
(76, 'Abel', '---', '', '2016-11-09', 'Amazonas', '', ''),
(77, 'Abel', 'Albañil', 'ss', '2016-11-09', 'Amazonas', '', ''),
(78, 'Abel', 'mecanico', 'se necesita mecanico tiempo compleo', '2016-11-16', 'liiia', 'abelricrasanchez@gmail.com', ''),
(79, 'Abel', 'mecanico', 'se necesita mecanico tiempo compleo', '2016-11-16', 'lima', 'abelricrasanchez@gmail.com', ''),
(80, 'marlith', 'mecanico', 'se necesita mecanico tiempo compleo', '2016-11-16', 'lima', 'yhamilethmaite97@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`dni`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

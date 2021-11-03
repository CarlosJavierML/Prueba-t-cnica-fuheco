-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 02:35:18
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_programador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickers`
--

CREATE TABLE `tickers` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `IdDocumento` int(11) NOT NULL,
  `NDocumento` int(10) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `FNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tickers`
--

INSERT INTO `tickers` (`Id`, `Nombre`, `IdDocumento`, `NDocumento`, `Direccion`, `FNacimiento`) VALUES
(1, 'Carlos Javier Moya Largacha', 3, 1193080179, 'Carrera 69 #73a-89', '2002-08-16'),
(2, 'Stefania Largacha', 2, 112345677, 'Calle 21', '2007-02-06'),
(4, 'Juan Jose Bitar', 2, 2147483647, 'Calle 26', '2016-06-30'),
(6, 'Sofia Moya', 1, 1234567, 'Calle 26', '2016-10-02'),
(7, 'María Moya', 3, 18367848, 'Carrera 96', '2021-11-12'),
(10, 'Pedro', 2, 2147483647, 'Carrera 96', '2021-10-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `IdDocumento` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`IdDocumento`, `Nombre`) VALUES
(1, 'Registro Civil'),
(2, 'Tarjeta de Identidad'),
(3, 'Cédula de Ciudadanía');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tickers`
--
ALTER TABLE `tickers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdDocumento` (`IdDocumento`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`IdDocumento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tickers`
--
ALTER TABLE `tickers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `IdDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tickers`
--
ALTER TABLE `tickers`
  ADD CONSTRAINT `tickers_ibfk_1` FOREIGN KEY (`IdDocumento`) REFERENCES `tipodocumento` (`IdDocumento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

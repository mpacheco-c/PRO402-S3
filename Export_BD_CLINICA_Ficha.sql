-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2021 a las 06:01:50
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ficha`
--

DROP TABLE IF EXISTS `Ficha`;
CREATE TABLE IF NOT EXISTS `Ficha` (
  `RUT` varchar(12) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Apellido` varchar(80) NOT NULL,
  `Direccion` varchar(80) NOT NULL,
  `Ciudad` varchar(80) NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `FNac` varchar(10) NOT NULL,
  `Ecivil` varchar(10) NOT NULL,
  `Comentarios` varchar(200) DEFAULT NULL,
  UNIQUE KEY `RUT` (`RUT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Ficha`
--

INSERT INTO `Ficha` (`RUT`, `Nombre`, `Apellido`, `Direccion`, `Ciudad`, `Telefono`, `Email`, `FNac`, `Ecivil`, `Comentarios`) VALUES
('12368121-5', 'Carla', 'Riquelme', 'Calle 3', 'Concepción', '29997788', 'correo3@gmail.com', '08/10/1970', 'Viudo(a)', 'Registro 3'),
('13.556.259-9', 'Andres', 'Muñoz', 'Calle 1', 'Santiago', '22225588 ', 'correo1@gmail.com ', '22/08/1979', 'Soltero(a)', 'Chile'),
('16424963-8', 'Miguel', 'Soto', 'Calle 2', 'Rancagua', '29998877', 'correo2@gmail.com', '01/02/1985', 'Casado(a)', ''),
('55879-99', '125487', '4269Lara', '6689Calle76', '89032¡', '3308', 'correo4@prueba.com', '32/06/1800', 'Casado(a)', 'NO VALIDA DATOS AL INGRESARLOS / NO GRABA DATOS SI CORREO NO OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

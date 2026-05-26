-- phpMyAdmin SQL Dump
-- Simulacro Certamen Front End — IT1025B · 2026-1
--
-- Servidor: localhost:8889 (MAMP)  o  localhost:3306 (XAMPP)
-- Usuario: root  ·  Contraseña: root (MAMP) o vacía (XAMPP)
-- ---------------------------------------------------------

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------
-- Base de datos: `videoclub`
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `videoclub` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `videoclub`;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `peliculas`
-- --------------------------------------------------------
DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `director` varchar(100) NOT NULL,
  `anio` int(4) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Datos iniciales para la tabla `peliculas`
-- --------------------------------------------------------
INSERT INTO `peliculas` (`id`, `titulo`, `director`, `anio`, `genero`) VALUES
(1, 'El Padrino', 'Francis Ford Coppola', 1972, 'Drama'),
(2, 'Pulp Fiction', 'Quentin Tarantino', 1994, 'Crimen'),
(3, 'Interestelar', 'Christopher Nolan', 2014, 'Ciencia Ficción'),
(4, 'Parásitos', 'Bong Joon-ho', 2019, 'Suspenso'),
(5, 'La La Land', 'Damien Chazelle', 2016, 'Musical'),
(6, 'Mad Max: Fury Road', 'George Miller', 2015, 'Acción');

-- --------------------------------------------------------
-- Índices y AUTO_INCREMENT
-- --------------------------------------------------------
ALTER TABLE `peliculas` ADD PRIMARY KEY (`id`);
ALTER TABLE `peliculas` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;

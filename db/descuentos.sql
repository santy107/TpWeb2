-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2024 a las 23:46:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `Id_producto` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `mercado` varchar(50) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`Id_producto`, `producto`, `precio`, `mercado`, `categoria`, `imagen`) VALUES
(1, 'medialuna', 300, 'Monarca', 'panaderia', 'medialuna.jpg'),
(2, 'vacio', 5000, 'carrefour', 'carniceria', 'vacio.jpg'),
(3, 'bola de lomo', 3500, 'vea', 'carniceria', 'bolalomo.jpg'),
(5, 'tomate', 1400, 'monarca', 'verduleria', 'tomate.jpg'),
(6, 'carne picada', 4900, 'monarca', 'carniceria', 'carnepicada.jpg'),
(7, 'pan frances', 1400, 'vea', 'panaderia', 'pan frances.jpg'),
(8, 'cuadrada', 4000, 'carrefour', 'carniceria', 'cuadrada.jpg'),
(9, 'manzana', 2000, 'vea', 'verduleria', 'manzana.jpg'),
(10, 'naranja', 3000, 'vea', 'verduleria', 'naranja.jpg'),
(12, 'masitas', 1200, 'monarca', 'panaderia', 'masitas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`Id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

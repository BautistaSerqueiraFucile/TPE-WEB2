-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2023 a las 18:49:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pcshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gama`
--

CREATE TABLE `gama` (
  `id_gama` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description_gama` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gama`
--

INSERT INTO `gama` (`id_gama`, `name`, `description_gama`) VALUES
(1, 'gama 1', 'descripcion gama 1'),
(2, 'gama 2', 'descripcion gama 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `id_pc` int(11) NOT NULL,
  `motherboard` varchar(40) NOT NULL,
  `processor` varchar(40) NOT NULL,
  `video` varchar(40) NOT NULL,
  `description_pc` varchar(400) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `id_gama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`id_pc`, `motherboard`, `processor`, `video`, `description_pc`, `RAM`, `id_gama`) VALUES
(1, 'm1', 'p1', 'v1', 'adsa', '16 gb', 1),
(2, 'm2', 'm2', 'm2', 'descripcion m2 ', '8 gb', 2),
(3, 'm3', 'm3', 'm3', 'descripcion m23', '8 gb', 2),
(4, 'm4', 'm4', 'm4', 'descripcion m4', '8 gb', 2),
(6, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(7, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(8, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(9, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(10, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(11, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(12, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(13, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(14, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2),
(15, 'ab-350', 'Intel', 'Nvidia', 'Computador diseñada para gaming', '32 gb', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gama`
--
ALTER TABLE `gama`
  ADD PRIMARY KEY (`id_gama`);

--
-- Indices de la tabla `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id_pc`),
  ADD KEY `id_gama` (`id_gama`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gama`
--
ALTER TABLE `gama`
  MODIFY `id_gama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `id_gama` FOREIGN KEY (`id_gama`) REFERENCES `gama` (`id_gama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

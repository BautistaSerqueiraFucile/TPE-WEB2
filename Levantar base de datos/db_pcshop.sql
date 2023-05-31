-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 20:46:57
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
  `name_gama` varchar(40) NOT NULL,
  `description_gama` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gama`
--

INSERT INTO `gama` (`id_gama`, `name_gama`, `description_gama`) VALUES
(8, 'Gama alta', 'Pc de alto rendimiento, la mejor calidad'),
(9, 'Gama media', 'Pc con un buen rendimiento'),
(10, 'Gama baja', 'Pc con poco rendimiento para usos específicos y sencillos');

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
(25, 'ab-250', 'Intel i7', 'Nvidia 9310', 'Pc con muy buen diseño y rendimiento', '16 GB', 8),
(26, 'ac-201', 'Ryzen 2103', 'Rtx 3020', 'Pc gama media con rendimiento moderado', '8 GB', 9),
(27, 'pz-910', 'Intel i3 2000', 'Intel graphics', 'Pc gama baja para usos específicos y poco exigentes ', '4 GB', 10);

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
  MODIFY `id_gama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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

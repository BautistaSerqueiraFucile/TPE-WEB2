-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2023 a las 23:37:12
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gama`
--

INSERT INTO `gama` (`id_gama`, `name_gama`, `description_gama`) VALUES
(28, 'Gama baja', 'La gama baja o de entrada, como se suele nombrar, es donde se encuentran las computadoras con los requisitos mínimos modernos para considerarse gamers. Estas suelen incluir procesadores recientes como la serie 3000 de AMD o los i3 de novena generación de Intel, así como 8 gigabytes de memoria RAM.'),
(29, 'Gama media', 'La gama media es donde se ubican la gran mayoría de computadoras y componentes, debido a que su espectro de capacidades es muy amplio.'),
(32, 'Gama alta', 'Las computadoras de alta gama se destacan por tener procesadores más rápidos, pantallas con resolución alta y mayor rendimiento.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc`
--

CREATE TABLE `pc` (
  `id_pc` int(11) NOT NULL,
  `motherboard` varchar(40) NOT NULL,
  `processor` varchar(40) NOT NULL,
  `disco` varchar(400) NOT NULL,
  `video` varchar(40) NOT NULL,
  `description_pc` varchar(400) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `id_gama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pc`
--

INSERT INTO `pc` (`id_pc`, `motherboard`, `processor`, `disco`, `video`, `description_pc`, `RAM`, `id_gama`) VALUES
(44, '22222', '22222', '222222', '22222', '222222222', '22222', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `user_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `user_password`) VALUES
(11, '1', '$2y$10$oliH.mcxyVKzMLHBQPLvTOIDsqXKiM5424q9G.G0399Dy3lIOjB7G'),
(12, '2', '$2y$10$VN/VGjb4Tt4EqpaXbVUlQudgHW6EjXi8xk03OOc7qJ1ksSQq7XaQ6'),
(13, 'mati', '$2y$10$.SyRzLn78xQE.dQACT83ZONxLd.F/m.EUaJaif4afRAC354jDV7eW'),
(14, 'german', '$2y$10$3wui9aigvQi7bDR8FthOtOvPz4ckjdw5tVA.iJQ0eG.MIFyRRSGN6'),
(15, 'victor', '$2y$10$1K4D8vd5ZVAbIv6bar2v1OTdZMnfuUOvQzOGMDj9ayk3.VQ6Yad6e'),
(16, '222', '$2y$10$x1/bsdp1CL/95h4AkF6sYuBFv8LahNRfY9PTNxws6jyRPgcrcSDL.'),
(17, '2222', '$2y$10$Aozn/g79KaBjRLMo2sMi0OMGJRqSBrkkCoUiTFfN94i3dKU498h..'),
(18, '2212', '$2y$10$CpbvkInX.BW4dg7lnQ5Hf.YimJUDPx5Jf0cgcAMOEJyfzQAMPDNKa'),
(19, '1', '$2y$10$B1mz7BZA/ZpucYSAmiqBqeBZwiMn0UfoQmEM.1NAk7C1klXM.5OTq'),
(20, '5', '$2y$10$qlV1jiRkKAJuewgOBpJnY.i2GJeR3.nuNb/udttS23hft3uJ7tlyu'),
(21, '55', '$2y$10$unf0.4ogp/rCMQ99CgfHiOli74fakm4IKnCMNu51oopO9rDbHeQ7m');

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
  MODIFY `id_gama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `pc`
--
ALTER TABLE `pc`
  MODIFY `id_pc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pc`
--
ALTER TABLE `pc`
  ADD CONSTRAINT `id_gama` FOREIGN KEY (`id_gama`) REFERENCES `gama` (`id_gama`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

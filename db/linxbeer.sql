-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2019 a las 22:04:32
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `linxbeer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id_cerveza` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cont_alc` double NOT NULL,
  `ibu` double NOT NULL,
  `o_g` int(11) NOT NULL,
  `id_estilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `cont_alc`, `ibu`, `o_g`, `id_estilo`) VALUES
(11, 'Quilmes', 1, 5, 10, 2),
(21, 'Porter', 3, 3, 5, 3),
(22, 'Palermo', 7, 7, 4, 2),
(23, 'Ipa', 2, 3, 4, 13),
(28, 'Corona', 1, 1, 1, 2),
(29, 'Kolsh', 5, 4, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_cerveza` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `texto` text NOT NULL,
  `puntaje` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_cerveza`, `id_usuario`, `texto`, `puntaje`, `fecha`) VALUES
(223, 22, 22, 'Rica!', 4, '2019-11-27 06:16:25'),
(224, 22, 22, 'Espumosa!', 4, '2019-11-27 06:16:48'),
(225, 22, 87, 'No me gusto!', 1, '2019-11-27 06:17:19'),
(226, 29, 87, 'Excelente!!!!!', 5, '2019-11-27 06:17:30'),
(227, 11, 21, 'Buenarda!', 5, '2019-11-27 06:18:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo`
--

CREATE TABLE `estilo` (
  `id_estilo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estilo`
--

INSERT INTO `estilo` (`id_estilo`, `nombre`) VALUES
(2, 'Rubias'),
(3, 'Negras'),
(13, 'Rojas'),
(15, 'Morenas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagenes` int(11) NOT NULL,
  `id_cerveza` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `respuesta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `usuario`, `contraseña`, `admin`, `respuesta`) VALUES
(88, 'admin', '$2y$10$ZDgi/s3pgPwVIbvUWXreIeRZv1.KYt65ojP/FkgGu/C3QXDdJildG', 1, '$2y$10$ZXLu6kqSuQzcCPX2pRxoruE3hK9lkV/M4GFNVs1pwwoxDKu1SZzVW'),
(89, 'user', '$2y$10$l/RsmouZFRUZnLEpocJpDeVLW5HSEmoYjrMWoZNNxLouKC37Erhne', 0, '$2y$10$Xn9fVM7ZVGwJ7AsAPKRf6.NoZD1Pb6RHDDpsWwRessW532ZENRBaW'),
(91, 'facu', '$2y$10$HjlLHvfimsErysI3I/Fg2uDXW5dVq5JIlNPuOy.D6ouSqQPVzpf9C', 0, '$2y$10$56o1o5GL5b2G1fnsVt2wOeSVkanSn8.VUOqQKHRJIhxd.XOnrFqJ6'),
(92, 'pablo', '$2y$10$nxhRcAvtWh8eUq47ltL8y.DbAm7j62yGT7OxJSDIirwIOrn.PK1zK', 0, '$2y$10$wrCW/GGIhntZ/V9lQssxze5QGJa99xTC/dcRfk1Utsmz4X8GMQZ82');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id_cerveza`),
  ADD KEY `id_estilo` (`id_estilo`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_cerveza` (`id_cerveza`);

--
-- Indices de la tabla `estilo`
--
ALTER TABLE `estilo`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagenes`),
  ADD KEY `id_cerveza` (`id_cerveza`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT de la tabla `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD CONSTRAINT `cerveza_ibfk_1` FOREIGN KEY (`id_estilo`) REFERENCES `estilo` (`id_estilo`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_cerveza`) REFERENCES `cerveza` (`id_cerveza`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_cerveza`) REFERENCES `cerveza` (`id_cerveza`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

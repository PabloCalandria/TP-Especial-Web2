-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2019 a las 20:43:13
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

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
  `id_estilo` int(11) NOT NULL,
  `imagenes_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `cont_alc`, `ibu`, `o_g`, `id_estilo`, `imagenes_url`) VALUES
(11, 'Quilmes', 10, 5, 10, 2, ''),
(21, 'Porter', 3, 3, 5, 3, ''),
(22, 'palermo', 0, 0, 0, 2, ''),
(23, 'Ipa', 2, 3, 4, 13, ''),
(26, 'triki', 2, 2, 2, 2, 'img/cervezas/5dc714c5e2592.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_cerveza` int(11) NOT NULL,
  `texto` text NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'rubias'),
(3, 'negras'),
(13, 'rojas'),
(15, 'morena');

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
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `usuario`, `contraseña`, `admin`) VALUES
(21, 'pablo', '$2y$10$LrXsN89MLtGgZOxVT.qHROahrmU9pnCRIn4Wvfu9/Qpyr34RV7W1a', 1),
(22, 'carlos', '$2y$10$.MTqk9yODGLckXFex8PkDeEwSmkAJGoVpvXqAYk5UVhpbOJE.yytq', 0),
(23, 'facu', '$2y$10$KuYZ3s7Ehf7b3DgOzliyS.uAkOo4WqyturdnkWR2gbjFGTpSutnne', 0),
(28, 'triki', '$2y$10$/oHnVxi0JUg.MfLN9ZV8P.DKosiW4u0/TZZknnNPqjhaRkJ3kUs.y', 0),
(46, 'nuevo', '$2y$10$wVcvatYlerMG2QRcyU8GEOOXZ7WXiw6RZYICIpiVzkRcTmyGOOIh6', 0),
(47, 'andres', '$2y$10$klxMhuSO.AGyukMqu6ltv.lhuBt8QRUAhLbBXmhGKmx4AoKfk8dZq', 0);

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
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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

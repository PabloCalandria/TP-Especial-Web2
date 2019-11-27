-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 18:35:09
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
  `id_estilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id_cerveza`, `nombre`, `cont_alc`, `ibu`, `o_g`, `id_estilo`) VALUES
(11, 'Quilmes', 1, 5, 10, 2),
(21, 'Porter', 3, 3, 5, 3),
(22, 'palermo', 0, 0, 0, 2),
(23, 'Ipa', 2, 3, 4, 13),
(28, 'Corona', 1, 1, 1, 2),
(29, 'Kolsh', 5, 4, 3, 2),
(30, 'test', 4, 4, 4, 13),
(31, 'test', 3, 4, 8, 15);

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
(227, 11, 21, 'ADMIN: NUEVO PRODUCTO!', 5, '2019-11-27 06:18:09');

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

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `id_cerveza`, `url`) VALUES
(27, 29, 'images/cervezas/5dd41e9f43f15.jpg'),
(28, 28, 'images/cervezas/5dd82f299a5ea.jpg'),
(30, 28, 'images/cervezas/5dd82f508cd88.jpeg'),
(31, 22, 'images/cervezas/5dde7f9a01c30.jpg'),
(32, 22, 'images/cervezas/5dde7fa2086e4.jpg');

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
(21, 'pablo', '$2y$10$LrXsN89MLtGgZOxVT.qHROahrmU9pnCRIn4Wvfu9/Qpyr34RV7W1a', 1, ''),
(22, 'carlos', '$2y$10$.MTqk9yODGLckXFex8PkDeEwSmkAJGoVpvXqAYk5UVhpbOJE.yytq', 0, ''),
(23, 'facu', '$2y$10$KuYZ3s7Ehf7b3DgOzliyS.uAkOo4WqyturdnkWR2gbjFGTpSutnne', 0, ''),
(28, 'triki', '$2y$10$/oHnVxi0JUg.MfLN9ZV8P.DKosiW4u0/TZZknnNPqjhaRkJ3kUs.y', 0, ''),
(47, 'andres', '$2y$10$klxMhuSO.AGyukMqu6ltv.lhuBt8QRUAhLbBXmhGKmx4AoKfk8dZq', 0, ''),
(86, 'test', '$2y$10$HF..ef8SZ9A9bQEl2uJgROVaNPyx5eoSl6L7kNpnH4Y..F5jWW.6.', 0, '$2y$10$Zkw5BK1LNMxAewM0wjqJu.4TFHnDde2I1lBdg6bCupkGNQtCaOA3e'),
(87, 'Ariel', '$2y$10$dRR.UxTLLQpmDG/5Sw2yOOvwy9542so0QQfn0TmiHkdiolfrZV8Z2', 0, '$2y$10$X0dwUX5bgXfsFYrukiVZ3eohlhjOolfTFNrMI3pZRvMEisMfMpsCG');

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
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `estilo`
--
ALTER TABLE `estilo`
  MODIFY `id_estilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

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

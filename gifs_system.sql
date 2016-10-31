-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2016 a las 05:37:37
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gifs_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gifs`
--

CREATE TABLE `gifs` (
  `id` int(7) UNSIGNED NOT NULL,
  `source` text,
  `active` tinyint(1) DEFAULT NULL,
  `id_user` int(7) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gifs`
--

INSERT INTO `gifs` (`id`, `source`, `active`, `id_user`) VALUES
(90, 'ping-pong.gif', 1, 23),
(89, 'patineta.gif', 1, 23),
(88, 'musica.gif', 1, 23),
(87, 'trenes.gif', 1, 23),
(81, 'tetera.gif', 0, 16),
(82, 'cuento.gif', 1, 23),
(83, 'bicicleta.gif', 1, 23),
(84, 'perro.gif', 1, 23),
(85, 'calendar.gif', 1, 23),
(86, 'lluvia.gif', 1, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(7) UNSIGNED NOT NULL COMMENT 'id of the user',
  `nickname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nickname`, `email`, `password`) VALUES
(16, 'Suhkha', 'suhkha92@gmail.com', '$2y$10$Rdk.GDRl9WKPeaKwfIuU0OHUyfE0LJ/JQSjDSgDlQ8YVGN3zXeLNa'),
(23, 'Jess', 'jvilla@mail.com', '$2y$10$V/TgnL9plFj3k5ow9ezQJuEArBrlGJtDCT/Uu9rEqQi6Q15/iRHTq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gifs`
--
ALTER TABLE `gifs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gifs`
--
ALTER TABLE `gifs`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id of the user', AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 04-01-2023 a las 17:31:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('admin', 'admin'),
('capaspuel1', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `marca`, `foto`) VALUES
(27, 'producto1', '10', 'DELL', 'foto1'),
(28, 'producto2', '200', 'SONY', 'Foto 4'),
(29, 'Juan', '100', 'Toshiba', 'Foto 4'),
(30, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '$2y$10$L8UA0AUQ.3/2JgFk9yaqjuHaOjmzPITo2OVNxq3QTBBOa4Fqc8aWu'),
(7, 'asadasda', '$2y$10$txuFuAk9A5FJ9SZLynYoSewwHWkhnzUT5sHdcyQQhD.G4dfCvCH86'),
(8, 'oswaldo', '$2y$10$q13rNJ7W6iJl0cgLww80UObQJ6ipDlqtIacbJmzQBw6v8oA0U5nb2'),
(9, 'oswaldo', '$2y$10$G/D6XaJbaG7sXtF0qlLaW.PmK4PVdCjgyUKvVV8tykKJimtKRB6IG'),
(10, 'oswaldo', '$2y$10$F3JWo/sQrq.Zyn0DGv933OlwRJMJqWd3ZB5bRwBC6DWCq6JZ4GnKC'),
(11, 'pepe', '$2y$10$HAWUZ8/s4U4OfNqQOudvK.INLyxBdSOy4w5O1WqycCFwWr8FmEuxq'),
(12, 'luis', '$2y$10$7Zjuf3orpAJOPKc/BJaWguq4mW3gIWlGCI1GNfrif0.nheJnrNpFa'),
(13, 'oswaldo', '$2y$10$0/IGsLP6hZRm0TptTZ7Jdetn134Ioge06l5xKJ98bxoaxjxB/EAci'),
(14, 'oswaldo', '$2y$10$CA4z5cniAXXvSF4v0UBVtesjvleYIOP2Jjppg2ciIGftlsYrs8Axi'),
(15, 'oswaldo', '$2y$10$iw.iC93utCQf.f.xr.6cSOvJCwHxwgYwLbSdk8DZh9YWJQk9U9Eca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

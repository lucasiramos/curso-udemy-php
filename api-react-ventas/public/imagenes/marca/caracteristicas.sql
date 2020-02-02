-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2020 a las 01:20:46
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas_react`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `nombre`, `descripcion`, `idproducto`) VALUES
(1, 'Nombre', 'Camiseta adidas Boca Juniors Oficial 2020', 1),
(2, 'Género', 'Masculino', 1),
(3, 'Adecuado para', 'Juego, Uso Diario', 1),
(4, 'Liga', 'Argentina', 1),
(5, 'Equipo', 'Boca Juniors', 1),
(6, 'Material Principal', 'Poliéster', 1),
(7, 'Tipo', 'Entrenamiento, Paseo / Viajes, Juego', 1),
(8, 'Manga', 'Corta', 1),
(9, 'Composición', 'Poliéster', 1),
(10, 'Garantía del Fabricante', 'Contra defecto de fabricación', 1),
(11, 'Origen', 'Nacional', 1),
(12, 'Marca', 'Adidas', 1),
(13, 'Nombre', 'Camiseta adidas Boca Juniors Alternativa 2020', 2),
(14, 'Género', 'Masculino', 2),
(15, 'Adecuado para', 'Competencia, Juego, Uso Diario', 2),
(16, 'Liga', 'Argentina', 2),
(17, 'Equipo', 'Boca Juniors', 2),
(18, 'Material Principal', 'Poliéster', 2),
(19, 'Tipo', 'Entrenamiento, Paseo / Viajes, Juego', 2),
(20, 'Manga', 'Corta', 2),
(21, 'Composición', 'Poliéster', 2),
(22, 'Garantía del Fabricante', 'Contra defecto de fabricación', 2),
(23, 'Origen', 'Nacional', 2),
(24, 'Marca', 'Adidas', 2),
(25, 'Nombre', 'Camiseta adidas River Plate 70 años', 3),
(26, 'Género', 'Masculino', 3),
(27, 'Adecuado para', 'Juego, Uso Diario', 3),
(28, 'Liga', 'Argentina', 3),
(29, 'Equipo', 'River Plate', 3),
(30, 'Material Principal', 'Poliéster', 3),
(31, 'Tipo', 'Entrenamiento, Paseo / Viajes, Juego', 3),
(32, 'Manga', 'Corta', 3),
(33, 'Composición', 'Poliéster', 3),
(34, 'Garantía del Fabricante', 'Contra defecto de fabricación', 3),
(35, 'Origen', 'Nacional', 3),
(36, 'Marca', 'Adidas', 3),
(37, 'Nombre', 'Pelota Lotto FB 1000 I', 4),
(38, 'Género', 'Unissex', 4),
(39, 'Adecuado para', 'Competencia, Juego', 4),
(40, 'Garantía del Fabricante', 'contra defecto de fabricación', 4),
(41, 'Origen', 'Extranjero', 4),
(42, 'Marca', 'Lotto', 4),
(43, 'Nombre', 'Zapatillas Puma Ignite Flash Evokni', 5),
(44, 'Género', 'Masculino', 5),
(45, 'Adecuado para', 'Uso Diario', 5),
(46, 'Composición', 'Parte superior textil ajustada. Suela de goma para el agarre. Construcción Slip-on', 5),
(47, 'Importante', 'el peso del calzado puede variar según el número solicitado. Los talles corresponden a numeración de Argentina', 5),
(48, 'Garantía del Fabricante', 'contra defecto de fabricación', 5),
(49, 'Origen', 'Extranjero', 5),
(50, 'Marca', 'Puma', 5),
(51, 'Nombre', 'Zapatillas Puma Nrgy Dynamo Futuro ADP', 6),
(52, 'Género', 'Masculino', 6),
(53, 'Adecuado para', 'Competencia, Running', 6),
(54, 'Material Principal', 'Malla', 6),
(55, 'Beneficios', 'Ligereza, Flexibilidad, Estabilidad', 6),
(56, 'Composición', 'capellada: mesh / suela: goma+caucho', 6),
(57, 'Importante', 'el peso del calzado puede variar según el número solicitado. Los talles corresponden a numeración de Argentina', 6),
(58, 'Garantía del Fabricante', 'contra defecto de fabricación', 6),
(59, 'Origen', 'Extranjero', 6),
(60, 'Marca', 'Puma', 6),
(61, 'Nombre', 'Zapatillas Puma ST Runner V2', 7),
(62, 'Género', 'Unissex', 7),
(63, 'Adecuado para', 'Uso Diario', 7),
(64, 'Estilo de la pieza', 'Con Logo', 7),
(65, 'Material Principal', 'Gamuza', 7),
(66, 'Caña', 'Baja', 7),
(67, 'Ajuste', 'Con Cordones', 7),
(68, 'Composición', 'capellada: gamuza con detalles en cuero / suela: goma', 7),
(69, 'Importante', 'el peso del calzado puede variar según el número solicitado. Los talles corresponden a numeración de Argentina', 7),
(70, 'Garantía del Fabricante', 'contra defecto de fabricación', 7),
(71, 'Origen', 'Nacional', 7),
(72, 'Marca', 'Puma', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

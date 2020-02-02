-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2020 a las 01:20:19
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `promocion` tinyint(1) NOT NULL,
  `precio` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `idcategoria`, `idmarca`, `promocion`, `precio`) VALUES
(1, 'Camiseta Adidas Boca Juniors Oficial 2020 - Azul y Amarillo', 'Conocé la nueva Camiseta adidas Boca Juniors Oficial 2020, confeccionada en materiales que aportan la mayor comodidad. Para que alientes dentro y fuera de la cancha.', 'camiseta-boca-titular.jpg', 1, 1, 0, 4599.00),
(2, 'Camiseta Adidas Boca Juniors Alternativa 2020 - Blanco y Azul', 'Les presentamos la nueva Camiseta adidas Boca Juniors Alternativa 2020, su diseño retro es ideal para lucir en todas partes con una comodidad única.', 'camiseta-boca-suplente.jpg', 1, 1, 0, 4599.00),
(3, 'Camiseta adidas River Plate 70 años - Gris y Blanco', 'Te presentamos la nueva Camiseta adidas River Plate 70 años, lleva los colores del más grande y es ideal para que alientes al club dentro y fuera de la cancha.', 'camiseta-river-70.jpg', 1, 1, 1, 3990.00),
(4, 'Pelota Lotto FB 1000 I - Blanco y Verde', 'Con la Pelota Lotto FB 1000 IV, vas a poder disfrutar dentro y fuera de la cancha. Está confeccionada con los mejores materiales.', 'pelota-lotto-fb.jpg', 2, 2, 0, 1199.00),
(5, 'Zapatillas Puma Ignite Flash Evokni - Negro y Blanco', 'Disfrutá de las nuevas Zapatillas Puma Ignite Flash Evoknit confeccionadas para proporcionarte amortiguación y estabilidad.', 'puma-ignite-flash-evokni.jpg', 3, 4, 1, 3369.00),
(6, 'Zapatillas Puma Nrgy Dynamo Futuro ADP - Negro y Blanco', 'Pensadas para los corredores más exigentes, las nuevas Zapatillas Puma Nrgy Dynamo Futuro ADP cuentan con un diseño que favorece la evaporación del sudor para una mayor frescura y comodidad.', 'puma-nrgy-dynamo.jpg', 3, 4, 0, 3689.00),
(7, 'Zapatillas Puma ST Runner V2 - Azul-Marino', 'Las nuevas Zapatillas Puma ST Runner V2 son ideales para que recorras la ciudad bien a la moda, con un look casual, deportivo y urbano.', 'puma-st-runner-v2.jpg', 3, 4, 0, 4599.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

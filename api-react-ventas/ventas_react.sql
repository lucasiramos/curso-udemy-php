-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2020 a las 03:52:40
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Camisetas'),
(2, 'Pelotas'),
(3, 'Zapatillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`, `imagen`) VALUES
(1, 'Adidas', 'adidas.png'),
(2, 'Lotto', 'lotto.png'),
(3, 'Nike', 'nike.png'),
(4, 'Puma', 'puma.png'),
(5, 'Salomon', 'salomon.png'),
(6, 'Topper', 'topper.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_01_152711_create_sucursales_table', 1),
(4, '2020_02_01_152822_create_ventas_table', 1),
(5, '2020_02_01_152848_create_productos_table', 1),
(6, '2020_02_01_153254_create_productosventas_table', 1),
(7, '2020_02_01_154320_create_clientes_table', 1),
(8, '2020_02_01_154706_create_vendedores_table', 1),
(9, '2020_02_01_205553_create_categorias_table', 1),
(10, '2020_02_01_205734_create_caracteristicas_table', 1),
(11, '2020_02_01_215745_create_marcas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ventas`
--

CREATE TABLE `productos_ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idventa` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` double(11,8) NOT NULL,
  `longitud` double(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `latitud`, `longitud`) VALUES
(1, 'Santa Rosa', -36.62027800, -64.29055600),
(2, 'Buenos Aires', -34.59972200, -58.38194400),
(3, 'Córdoba', -31.41666700, -64.18333300),
(4, 'La Plata', -34.93333300, -57.95000000),
(5, 'Mendoza', -32.88333300, -68.83333300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `descripcion`, `admin`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Primero', 'Primer usuario que sería el quinto creo', '0', 'primero@gmail.com', '$2y$10$WXyi2hTlqqXfJ0nvqXYI.OL/k7TEbsVQCGOyNRzhqwaxlNt..XBj6', NULL, '2020-02-03 00:03:31', '2020-02-03 00:03:31'),
(6, 'Segundo', 'Segundo sexto', '0', 'segundo@gmail.com', '$2y$10$U9rgOX5Mj8OQrG2wxWSO4u9UFxNAtNBMVBh6bITTltY7CbMzVSgq2', NULL, '2020-02-03 00:07:47', '2020-02-03 00:07:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `idusuario` int(11) NOT NULL,
  `CUIL` int(11) NOT NULL,
  `idsucursal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idvendedor` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idsucursal` int(11) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos_ventas`
--
ALTER TABLE `productos_ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

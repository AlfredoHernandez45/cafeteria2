
--
-- Base de datos: `ventas_dos`
--

CREATE DATABASE IF NOT EXISTS `ventas_dos`;
USE `ventas_dos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `cveArticulo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`cveArticulo`, `nombre`, `precio`) VALUES
('01', 'Capuchino', 32),
('2', 'TacoBirria', 28),
('3', 'Prueba3', 656),
('8', 'Taco sencillo', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id_compra` int(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `cveArticulo` varchar(50) NOT NULL,
  `cantidadProducto` int(7) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_compra`, `correo`, `cveArticulo`, `cantidadProducto`, `precio`, `subtotal`) VALUES
(3, NULL, '01', 1, 10, 0),
(4, NULL, '3', 1, 656, 0),
(5, NULL, '3', 1, 656, 0),
(6, NULL, '3', 1, 656, 0),
(7, NULL, '01', 1, 32, 0),
(8, NULL, '8', 1, 10, 0),
(9, NULL, '8', 7, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `claveDetalle` int(50) NOT NULL,
  `claveVenta` int(50) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `cantidadProducto` int(50) NOT NULL,
  `opcionPago` varchar(50) NOT NULL,
  `subtotal` double NOT NULL,
  `iva` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `clavePago` int(50) NOT NULL,
  `opcionPago` varchar(50) NOT NULL,
  `cuentaBancaria` varchar(50) NOT NULL,
  `fechaVencimiento` varchar(50) NOT NULL,
  `cvv` int(50) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo`, `contrasena`, `nombre`) VALUES
('2@gmail.com', '1', ''),
('3@gmail.com', '1', ''),
('4@gmail.com', '1', ''),
('jose@gmail.com', '321', 'Jose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `claveVenta` int(50) NOT NULL,
  `cveArticulo` varchar(50) NOT NULL,
  `cantidadProducto` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`cveArticulo`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD UNIQUE KEY `id_compra` (`id_compra`),
  ADD KEY `correo` (`correo`),
  ADD KEY `cveArticulo` (`cveArticulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`claveVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_compra` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `claveVenta` int(50) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`cveArticulo`) REFERENCES `articulos` (`cveArticulo`) ON DELETE CASCADE ON UPDATE CASCADE;


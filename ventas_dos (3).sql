
-- Validar si la base de datos existe y borrarla si es necesario
DROP DATABASE IF EXISTS `ventas_dos`;

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS `ventas_dos`;
USE `ventas_dos`;

-- Validar y borrar la tabla `articulos`
DROP TABLE IF EXISTS `articulos`;

-- Crear la tabla `articulos`
CREATE TABLE `articulos` (
  `cveArticulo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `articulos`
INSERT INTO `articulos` (`cveArticulo`, `nombre`, `precio`) VALUES
('01', 'Capuchino', 32),
('2', 'TacoBirria', 28),
('3', 'Prueba3', 656),
('8', 'Taco sencillo', 10);

-- Validar y borrar la tabla `carrito`
DROP TABLE IF EXISTS `carrito`;

-- Crear la tabla `carrito`
CREATE TABLE `carrito` (
  `id_compra` int(50) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `cveArticulo` varchar(50) NOT NULL,
  `cantidadProducto` int(7) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `carrito`
INSERT INTO `carrito` (`id_compra`, `correo`, `cveArticulo`, `cantidadProducto`, `precio`, `subtotal`) VALUES
(3, NULL, '01', 1, 10, 0),
(4, NULL, '3', 1, 656, 0),
(5, NULL, '3', 1, 656, 0),
(6, NULL, '3', 1, 656, 0),
(7, NULL, '01', 1, 32, 0),
(8, NULL, '8', 1, 10, 0),
(9, NULL, '8', 7, 10, 0),
(10, NULL, '01', 1, 32, 0),
(11, NULL, '2', 3, 28, 0),
(12, NULL, '01', 1, 32, 0),
(13, NULL, '01', 1, 32, 0),
(14, 'jose@gmail.com', '8', 4, 10, 0),
(15, 'jose@gmail.com', '01', 3, 32, 96),
(16, 'alfredo@gmail.com', '01', 3, 32, 96),
(17, 'alfredo@gmail.com', '8', 5, 10, 50),
(18, 'jose@gmail.com', '01', 2, 32, 64),
(19, '4@gmail.com', '2', 5, 28, 140),
(20, NULL, '01', 1, 32, 32),
(21, 'lulu@gmail.com', '01', 2, 32, 64),
(22, 'lulu@gmail.com', '2', 3, 28, 84),
(23, 'lulu@gmail.com', '8', 5, 10, 50);

-- Validar y borrar la tabla `detalleventa`
DROP TABLE IF EXISTS `detalleventa`;

-- Crear la tabla `detalleventa`
CREATE TABLE `detalleventa` (
  `claveDetalle` int(50) NOT NULL,
  `claveVenta` int(50) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `cantidadProducto` int(50) NOT NULL,
  `opcionPago` varchar(50) NOT NULL,
  `subtotal` double NOT NULL,
  `iva` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Validar y borrar la tabla `pago`
DROP TABLE IF EXISTS `pago`;

-- Crear la tabla `pago`
CREATE TABLE `pago` (
  `clavePago` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `numerotarjeta` varchar(30) DEFAULT NULL,
  `fechaexpiracion` varchar(30) DEFAULT NULL,
  `cvv` varchar(30) DEFAULT NULL,
  `importe` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Validar y borrar la tabla `usuarios`
DROP TABLE IF EXISTS `usuarios`;

-- Crear la tabla `usuarios`
CREATE TABLE `usuarios` (
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `usuarios`
INSERT INTO `usuarios` (`correo`, `contrasena`, `nombre`) VALUES
('2@gmail.com', '1', ''),
('3@gmail.com', '1', ''),
('4@gmail.com', '1', ''),
('admin@gmail.com', 'admin', 'administrador'),
('alfredo@gmail.com', 'jose', ''),
('jose@gmail.com', '321', 'Jose'),
('lulu@gmail.com', 'lulu', 'lulu'),
('mian@gmail.com', 'mian', 'mian'),
('sandra@gmail.com', 'sandra', 'sandra'),
('tommy@gmail.com', 'tommy', 'tommy'),
('wolf@gmail.com', 'wolf', 'wolf');

-- Validar y borrar la tabla `venta`
DROP TABLE IF EXISTS `venta`;

-- Crear la tabla `venta`
CREATE TABLE `venta` (
  `claveVenta` int(50) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcado de datos para la tabla `venta`
INSERT INTO `venta` (`claveVenta`, `usuario`, `cantidadProducto`, `total`) VALUES
(1, 'jose@gmail.com', 9, 232),
(6, 'lulu@gmail.com', 10, 229.68),
(7, 'lulu@gmail.com', 10, 229.68),
(8, 'lulu@gmail.com', 10, NULL);

-- Índices para tablas volcadas

-- Indices de la tabla `articulos`
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`cveArticulo`);

-- Indices de la tabla `carrito`
ALTER TABLE `carrito`
  ADD UNIQUE KEY `id_compra` (`id_compra`),
  ADD KEY `correo` (`correo`),
  ADD KEY `cveArticulo` (`cveArticulo`);

-- Indices de la tabla `detalleventa`
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`claveDetalle`);

-- Indices de la tabla `pago`
ALTER TABLE `pago`
  ADD PRIMARY KEY (`clavePago`);

-- Indices de la tabla `usuarios`
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

-- Indices de la tabla `venta`
ALTER TABLE `venta`
  ADD PRIMARY KEY (`claveVenta`);

-- AUTO_INCREMENT de las tablas articulos
ALTER TABLE `articulos`
  MODIFY `cveArticulo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

-- AUTO_INCREMENT de la tabla `carrito`
ALTER TABLE `carrito`
  MODIFY `id_compra` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

-- AUTO_INCREMENT de la tabla `detalleventa`
ALTER TABLE `detalleventa`
  MODIFY `claveDetalle` int(50) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT de la tabla `pago`
ALTER TABLE `pago`
  MODIFY `clavePago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

-- AUTO_INCREMENT de la tabla `venta`
ALTER TABLE `venta`
  MODIFY `claveVenta` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

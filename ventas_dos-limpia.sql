
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

-- Validar y borrar la tabla `venta`
DROP TABLE IF EXISTS `venta`;

-- Crear la tabla `venta`
CREATE TABLE `venta` (
  `claveVenta` int(50) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

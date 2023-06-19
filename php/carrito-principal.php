<!-- Inicia Conexion con la base de datos -->
<?php

session_start(); // Reanudar la sesion

// Incluye la clase crud-carrito.php y el archivo crud.php
require_once('crud-carrito.php');
require_once('carrito.php');
require_once('crud.php');

$crudCarrito = new CrudCarrito();
$crudArticulo = new crudArticulo();

$listaArticulos = $crudCarrito->obtenerCarrito($_SESSION['correo']);
$subtotal = 0;
$cantidadCafe = 0;

?>
<!-- Termina Conexion con la base de datos -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compra del Carrito</title>

	<!-- Estilos css -->
	<link rel="stylesheet" href="ste.css">
	<link rel="stylesheet" href="mainstyle-blog.php">


</head>

<body class="main_carrito">

	<!-- INICIO - Aquí se encuentra la estructura del encabezado -->
	<header>
		<a href="#" class="logo">
			<img src="im/login.png" alt="">
		</a>
		<i class='bx bx-menu' id="menu-icon"></i>
		<ul class="navbar">
			<li><a href="mostrar.usuario.php#home">Inicio</a></li>
			<li><a href="mostrar.usuario.php#products">Productos</a></li> <!-- Vinculos del menu a direccionar -->
			<li><a href="mostrar.usuario.php#direccion">Dirección y Contacto</a></li>
			<?php
			// Si no ha iniciado sesion 
			if (empty($_SESSION['correo'])) {
				echo '<li><a href="sesion.php">Iniciar Sesion</a></li>';
			} else {
				echo '<li><a href="cerrar-sesion.php">Cerra Sesión</a></li>';
			}
			?>
		</ul>

		<div class="header-icon">
			<!-- <a href="carrito-principal.php"><img src="im/lCarrito.png" width="70" height="70"></a> -->
			<!-- <a href="mostrar-carrito.php"><img src="im/lCarrito.png" width="70" height="70"></a> -->
		</div>
	</header>
	<!-- FINAL - Aquí se encuentra la estructura del encabezado -->

	<!-- Inicia Cuerpo del carrito -->
	<div class="carrito">
		<div class="content">
			<div class="body_carrito">
				<!-- Inicia formulario -->
				<div class="catalago_productos">
					<h2>Mi Carrito</h2>
					<?php foreach ($listaArticulos as $carrito): ?>
						<div class="item_productos">

							<div class="producto">
								<div class="image_producto">
									<img src="./im/capucciono.png" alt="cafe moka" loading="lazy">
								</div>
								<div class="descripcion_producto">
									<!-- Obtener el nombre del artículo utilizando la función obtenerArticulo -->
									<?php
									$articulo = $crudArticulo->obtenerArticulo($carrito->getCveArticulo()); // busca el articulo por su clave 
									$nombreArticulo = $articulo->getNombre(); // obtiene el nombre del articulo
									?>
									<!-- Muestra el nombre del producto -->
									<h3>
										<?php echo $nombreArticulo; ?>
									</h3>
								</div>
								<div class="cantidad_producto">
									<p>
										<?php
										$cantidadCafe += $carrito->getCantidadProducto();
										echo $carrito->getCantidadProducto();
										?>
									</p>
								</div>
								<div class="precio_producto">
									<!-- Calcular el precio del articulo por la cantidad -->
									<?php
									$total = $carrito->getCantidadProducto() * $carrito->getPrecio();
									$subtotal += $total;
									?>
									<p>$
										<?php echo $total ?>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="catalago_precios">
					<h2>Resumen Pedido</h2>
					<div class="sub_total">
						<label>Subtotal:</label>
						<p>
							<?php echo $subtotal ?>
						</p>

						<label>IVA:</label>
						<p>0.16%</p>

						<label>Envio:</label>
						<p>GRATIS</p>
					</div>
					<div class="total_precio">
						<label>Total:</label>
						<!-- Calculand el total con IVA -->
						<?php
						$totalFinal = $subtotal + ($subtotal * 0.16);
						?>
						<!-- Muestra el resultado -->
						<p>
							<?php echo $totalFinal; ?>
						</p>
						<!-- <h3>Pureba 9</h3> -->
					</div>

					<div class="fin_compra">
						<form action="agregar_venta.php" method="post">

							<input type="hidden" name="usuario" value="<?php echo $_SESSION['correo'] ?>">
							<!-- <input type="text" name="cveArticulo" value="<?php //echo $carrito->getCveArticulo(); ?>"> -->
							<input type="hidden" name="cantidadProducto" value="<?php echo $cantidadCafe; ?>">
							<!-- <input type="text" name="subtotal" value="<?php //echo $subtotal; ?>"> -->
							<?php $_SESSION['importe'] = $totalFinal; ?>
							<!-- <input type="hidden" name="total" value="<?php //echo $_SESSION['importe'] = $totalFinal; ?>"> -->

							<?php
							if (!empty($_SESSION['correo'])) {
								echo '<button type="submit" name="agregarCarrito">Realizar Pago</button>';
							}
							if ($totalFinal == 0) {
								echo '<script>alert("No se ha agregado nada al carrito"); window.history.back();</script>';
							}
							?>

							<!-- <button><a href="../pago/pago_targeta.php">Realizar Pago</a></button> -->
						</form>
					</div>
				</div>
				<!-- Termina formulario -->
			</div>
		</div>
	</div>
	<!-- Termina Cuerpo del carrito -->
</body>

</html>
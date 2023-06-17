<?php
// Incluye la clase CRUD y Articulo
require_once('crud.php');
require_once('articulo.php');
require_once('usuario.php');
require_once('crud-usuarios.php');
$crud = new crudArticulo();
$articulo = new Articulos();
$crudUsuario = new crudUsuario();
$usuario = new Usuario();
// Obtiene todos los articulos usando el método mostrar de la clase CRUD
$listaArticulos = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cafeteria</title>
	
	 <!-- Aquí se incluyen los enlaces de las hojas de estilo -->
	<link rel="stylesheet" href="ste.css">
    <!--<link rel="stylesheet" href="mainstyle.css">-->
</head>

<body>

	<!-- INICIO - Aquí se encuentra la estructura del encabezado -->
	<header>
		<a href="#" class="logo">
			<img src="im/login.png" alt="">
		</a>
		<i class='bx bx-menu' id="menu-icon"></i>
		<ul class="navbar">
			<li><a href="#home">Inicio</a></li>
			<li><a href="#products">Productos</a></li> <!-- Vinculos del menu a direccionar -->
			<li><a href="#direccion">Dirección y Contacto</a></li>
			<li><a href="../index/index.html">Cerra Sesión</a></li> <!-- iniciar sesion -->
		</ul>

		<div class="header-icon">
			<a href="carrito-principal.php"><img src="im/lCarrito.png" width="70" height="70"></a>
			<!-- <a href="mostrar-carrito.php"><img src="im/lCarrito.png" width="70" height="70"></a> -->
		</div>
	</header>
	<!-- FINAL - Aquí se encuentra la estructura del encabezado -->

	<!-- INICIO - Aquí se encuentra la sección de inicio -->
	<section class="home" id="home">
		<div class="home-text">
			<h1>¿Listo para despertar?</h1>
			<p>Bienvenido seas a nuestra cafeteria, contamos con gran variedad de sabores.</p>
		</div>

		<div class="home-img"><!-- Imagen de inicio-->
			<img src="im/main.png" alt="">
		</div>
	</section>
	<!-- FINAL - Aquí se encuentra la sección de inicio -->

	<!-- INICIO - Aquí se encuentran los productos -->
	<center>
		<!-- <a name="producttos"></a> Vinculos del menu a direccionar Productos -->
		<section class="products" id="products">

			 <!-- Aquí se muestra el título de la sección de productos -->
			<div class="heading">
				<h2>Productos</h2>
			</div>

			<!-- Comienza el bucle foreach para recorrer la lista de artículos -->
			<?php foreach ($listaArticulos as $articulo) { ?>
				<div class="products-container">
					<div class="box">

						 <!-- Se muestra la imagen del producto -->
						<img src="im/comida1.jpg" alt="cafe">

						<!-- Se muestra el nombre del producto -->
						<h3><?php echo $articulo->getNombre(); ?></h3>						
						<div class="content">

							<!-- Se muestra el precio del producto -->
							<span>$<?php echo $articulo->getPrecio(); ?> Mx</span>

							<!-- Se agrega el formulario para agregar al carrito -->
							<form action="agregar_al_carrito.php" method="post">
								<!-- Se agrega un campo oculto con el correo del usuario -->
								<input type="hidden" name="correo" value="<?php echo $usuario->getCorreo(); ?>">

								<!-- Se agrega un campo oculto con el nombre del artículo -->
								<input type="hidden" name="nombre" value="<?php echo $articulo->getNombre(); ?>">

								<!-- Se agrega un campo oculto con el identificador del artículo -->
								<input type="hidden" name="cveArticulo" value="<?php echo $articulo->getCveArticulo(); ?>">

								<!-- Se agrega un campo oculto con el precio del artículo -->
								<input type="hidden" name="precio" value="<?php echo $articulo->getPrecio(); ?>">

								<!-- Se agrega un campo para ingresar la cantidad deseada -->
								<P>Cantidad: <input type="number" name="cantidad" value="1"></P>

								<!-- Se agrega un botón para enviar el formulario -->
								<button type="submit" name="agregarCarrito">Agregar al carrito</button>
							</form>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- Finaliza el bucle foreach -->
			<br>
		</section>
	</center>
	<!-- FINAL - Aquí se encuentran los productos -->
	
 	<!-- INICIO - Aquí se encuentra el pie de página -->
	<a name="direccion"></a> <!-- Vinculos del menu a direccionar Productos -->
	<div class="footer">
		<p>
			<h3> Contacto: 9831234567 <br> Dirección: Av. Andres Quintana Roo entre Insurgentes y Juan José Siorda!
				https://goo.gl/maps/ik7cVLSPsWrWVMNT9</h3>
		</p>
	</div>
	<!-- FINAL - Aquí se encuentra el pie de página -->

</body>

</html>


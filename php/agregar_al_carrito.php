<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');
$conn=Db::conectar();

// Inicia sesion
session_start();

// Valida si existe una sesion iniciada
if (empty($_SESSION['correo'])) {
	echo "<script> alert('Iniciar Sesion Por favor'); window.location='sesion.php' </script>";
} else {
	// verificar si se recibió el formulario con la información del artículo
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$correo = $_SESSION['correo']; // obtiene el correo de la sesion 
		$cveArticulo = $_POST['cveArticulo']; // obtiene la clase del articulo
		$cantidad = $_POST['cantidad']; // obtiene la cantidad de los articulos
		$precio = $_POST['precio']; // obtiene el precio del articulo
		$subTotal = $cantidad * $precio; // calcula el subtotal multiplicando la cantidad por el precio

		$sql = "INSERT INTO carrito (correo, cveArticulo, cantidadProducto, precio, subtotal) VALUES ('$correo','$cveArticulo', '$cantidad', '$precio', '$subTotal')";
		if ($conn && $conn->query($sql)) {
			// echo 'Artículo agregado al carrito con éxito';
			header('Location: mostrar.usuario.php');
		} else {
			// echo 'Error al agregar el artículo al carrito: ' ;
			echo '<script>alert(Error al agregar el artículo al carrito");</script>';
		}
	}
}

?>

<?php
session_start();
$usuario = $_SESSION['correo']; // obtener el usuario

require_once('crud-ventas.php');
require_once('ventas.php');
require_once('crud-carrito.php');
require_once('carrito.php');
// require_once('crud-usuarios.php');
// Crear las instancias
$crudVenta = new CrudVenta();
$venta = new Venta();
$crudCarrito = new CrudCarrito();
// $listaArticulos = $crudCarrito->obtenerCarrito($usuario); // obtener todos los articulos del usuario
// $carrito = new Carrito();
// $usuarios = new crudUsuario; // inicia el cru de usuario

$crudCarrito->eliminar($usuario);

// foreach ($listaArticulos as $carrito): {

// }


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // $correo = $_SESSION['correo']; // obtiene el correo de la sesion 

    // $cveArticulo = $_POST['cveArticulo']; // obtiene la clase del articulo
    // $cantidad = $_POST['cantidad']; // obtiene la cantidad de los articulos
    // $precio = $_POST['precio']; // obtiene el precio del articulo
    // $subTotal = $cantidad * $precio; // calcula el subtotal multiplicando la cantidad por el precio

    // $sql = "INSERT INTO carrito (correo, cveArticulo, cantidadProducto, precio, subtotal) VALUES ('$correo','$cveArticulo', '$cantidad', '$precio', '$subTotal')";
    // if ($conn && $conn->query($sql)) {
    //     // echo 'Artículo agregado al carrito con éxito';
    //     header('Location: mostrar.usuario.php');
    // } else {
    //     // echo 'Error al agregar el artículo al carrito: ' ;
    //     echo '<script>alert(Error al agregar el artículo al carrito");</script>';
    // }
// }

?>
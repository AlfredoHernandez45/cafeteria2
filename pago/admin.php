<?php
// incluir archivos de configuración de la base de datos
// require_once('../php/conexion.php');
require_once('articulo.php');
require_once('crud.php');
require_once('../php/crud-carrito.php');
session_start();

// verificar si se recibió el formulario con la información del artículo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre']; 
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $numerotarjeta = $_POST['numerotarjeta'];
    $fechaexpiracion = $_POST['fechaexpiracion'];
    $cvv = $_POST['cvv'];
    $importe = $_POST['importe'];

    // Crear objeto articulo con los valores recibidos del formulario
    $miArticulo = new Articulos();
    $miArticulo->setNombre($nombre);
    $miArticulo->setEmail($email);
    $miArticulo->setTelefono($telefono);
    $miArticulo->setNumerotarjeta($numerotarjeta);
    $miArticulo->setFechaexpiracion($fechaexpiracion);
    $miArticulo->setCvv($cvv);
    $miArticulo->setImporte($importe);

    // Crear instancia de la clase crudArticulo
    $crud = new crudArticulo();

    // Llamar a la función insertar y pasar el objeto articulo como parámetro
    $crud->insertar($miArticulo);

    $crudCarrito = new CrudCarrito();

    $crudCarrito->eliminar($_SESSION['correo']);
    // Redirigir a la página mostrar-pago.php después de insertar
    header('Location: mostrar-pago-usuario.php');
} else {
    echo 'No se recibió la información del artículo';
}
    
?>
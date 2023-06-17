<?php
// incluir archivos de configuración de la base de datos
require_once('conexion.php');
$conn=Db::conectar();

// verificar si se recibió el formulario con la información del artículo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['nombre']; 
    $cveArticulo = $_POST['cveArticulo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql = "INSERT INTO carrito (cveArticulo, cantidadProducto, precio) VALUES ('$cveArticulo', '$cantidad', '$precio')";
    if ($conn && $conn->query($sql)) {
        // echo 'Artículo agregado al carrito con éxito';
        header('Location: mostrar.usuario.php');
    } else {
        // echo 'Error al agregar el artículo al carrito: ' ;
        echo '<script>alert(Error al agregar el artículo al carrito");</script>';
    }
} //else {
    // echo 'No se recibió la información del artículo';
// }
?>

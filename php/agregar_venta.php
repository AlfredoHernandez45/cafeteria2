<?php
require_once('crud-ventas.php');
require_once('ventas.php');

// Crear las instancias
$crudVenta = new CrudVenta();
$venta = new Venta();

// Verifica si se ha envidado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $cantidad = $_POST['cantidadProducto'];
    $total = $_POST['total'];

    $venta->setUsuario($usuario);
    $venta->setCantidadProducto($cantidad);
    $venta->setTotal($total);

    $crudVenta->insertar($venta);
    
    header("Location: ../pago/pago_targeta.php");
}
?>
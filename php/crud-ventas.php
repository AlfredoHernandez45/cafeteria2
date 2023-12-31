<?php
require_once('conexion.php');
require_once('ventas.php');

class CrudVenta {
    public function __construct(){}

    public function insertar($venta) {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO venta (usuario, cantidadProducto, total) VALUES (:usuario, :cantidadProducto, :total)');
        $insert->bindValue('usuario', $venta->getUsuario());
        $insert->bindValue('cantidadProducto', $venta->getCantidadProducto());
        $insert->bindValue('total', $venta->getTotal());
        $insert->execute();
    }

    public function mostrar() {
        $db = Db::conectar();
        $listaVentas = [];
        $select = $db->query('SELECT * FROM ventas');

        foreach ($select->fetchAll() as $venta) {
            $myVenta = new Venta();
            $myVenta->setUsuario($venta['usuario']);
            $myVenta->setCantidadProducto($venta['cantidad_producto']);
            $myVenta->setTotal($venta['total']);
            $listaVentas[] = $myVenta;
        }

        return $listaVentas;
    }

    public function eliminar($idVenta) {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM ventas WHERE id_venta = :idVenta');
        $eliminar->bindValue('idVenta', $idVenta);
        $eliminar->execute();
    }

    public function obtenerVenta($usuario) {
        $db = Db::conectar();

        $select = $db->prepare('SELECT * FROM venta WHERE usuario = :usuario');
        $select->bindValue('usuario', $usuario);

        $select->execute();

        $venta = $select->fetch();

        $myVenta = new Venta();
        $myVenta->setUsuario($venta['usuario']);
        $myVenta->setCantidadProducto($venta['cantidadProducto']);
        $myVenta->setTotal($venta['total']);

        // return $ventas;
        return $myVenta;
    }

    public function actualizar($venta) {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE ventas SET usuario = :usuario, cantidad_producto = :cantidadProducto, total = :total WHERE id_venta = :idVenta');
        $actualizar->bindValue('idVenta', $venta->getIdVenta());
        $actualizar->bindValue('usuario', $venta->getUsuario());
        $actualizar->bindValue('cantidadProducto', $venta->getCantidadProducto());
        $actualizar->bindValue('total', $venta->getTotal());
        $actualizar->execute();
    }
}
?>
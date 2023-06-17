<?php
require_once('conexion.php');

class crudUsuario {
    public function __construct() {}

    public function insertar($usuario) {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO usuarios (id_compra, correo, cveArticulo, cantidadProducto, totalPago) VALUES (:idCompra, :correo, :cveArticulo, :cantidadProducto, :totalPago)');
        $insert->bindValue('idCompra', $usuario->getIdCompra());
        $insert->bindValue('correo', $usuario->getCorreo());
        $insert->bindValue('cveArticulo', $usuario->getCveArticulo());
        $insert->bindValue('cantidadProducto', $usuario->getCantidadProducto());
        $insert->bindValue('totalPago', $usuario->getTotalPago());
        $insert->execute();
    }

    public function mostrar() {
        $db = Db::conectar();
        $listaUsuarios = [];
        $select = $db->query('SELECT * FROM usuarios');

        foreach ($select->fetchAll() as $usuario) {
            $myUsuario = new Usuario();
            $myUsuario->setIdCompra($usuario['id_compra']);
            $myUsuario->setCorreo($usuario['correo']);
            $myUsuario->setCveArticulo($usuario['cveArticulo']);
            $myUsuario->setCantidadProducto($usuario['cantidadProducto']);
            $myUsuario->setTotalPago($usuario['totalPago']);
            $listaUsuarios[] = $myUsuario;
        }

        return $listaUsuarios;
    }

    public function eliminar($idCompra) {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM usuarios WHERE id_compra = :idCompra');
        $eliminar->bindValue('idCompra', $idCompra);
        $eliminar->execute();
    }

    public function obtenerUsuario($idCompra) {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM usuarios WHERE id_compra = :idCompra');
        $select->bindValue('idCompra', $idCompra);
        $select->execute();

        $usuario = $select->fetch();
        $myUsuario = new Usuario();
        $myUsuario->setIdCompra($usuario['id_compra']);
        $myUsuario->setCorreo($usuario['correo']);
        $myUsuario->setCveArticulo($usuario['cveArticulo']);
        $myUsuario->setCantidadProducto($usuario['cantidadProducto']);
        $myUsuario->setTotalPago($usuario['totalPago']);

        return $myUsuario;
    }

    public function actualizar($usuario) {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE usuarios SET correo = :correo, cveArticulo = :cveArticulo, cantidadProducto = :cantidadProducto, totalPago = :totalPago WHERE id_compra = :idCompra');
        $actualizar->bindValue('idCompra', $usuario->getIdCompra());
        $actualizar->bindValue('correo', $usuario->getCorreo());
        $actualizar->bindValue('cveArticulo', $usuario->getCveArticulo());
        $actualizar->bindValue('cantidadProducto', $usuario->getCantidadProducto());
        $actualizar->bindValue('totalPago', $usuario->getTotalPago());
        $actualizar->execute();
    }
}

?>

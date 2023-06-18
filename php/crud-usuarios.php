<?php
require_once('conexion.php');
require_once('usuario.php');

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

    public function obtenerUsuario($correo) {
        $db = Db::conectar(); // Conexión a la base de datos utilizando la clase Db

        // Preparar la consulta SQL para obtener un usuario con el correo especificado
        $select = $db->prepare('SELECT * FROM usuarios WHERE correo = :correo');
        $select->bindValue('correo', $correo); // Asignar el valor del parámetro :correo con el valor recibido

        $select->execute(); // Ejecutar la consulta SQL

        $usuario = $select->fetch(); // Obtener la fila de resultados como un arreglo asociativo

        $myUsuario = new Usuario(); // Crear una instancia de la clase Usuario para almacenar los datos obtenidos

        // Asignar los valores obtenidos de la consulta a las propiedades de la instancia de Usuario
        $myUsuario->setCorreo($usuario['correo']);
        $myUsuario->setPassword($usuario['contrasena']);
        $myUsuario->setNombre($usuario['nombre']);

        return $myUsuario; // Devolver la instancia de Usuario con los datos del usuario encontrado
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

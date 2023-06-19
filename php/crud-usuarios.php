<?php
require_once('conexion.php');
require_once('usuario.php');

class crudUsuario {
    public function __construct() {}

    public function insertar($usuario) {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO usuarios (correo, contrasena, nombre) VALUES (:correo, :contrasena, :nombre)');
        $insert->bindValue('correo', $usuario->getCorreo());
        $insert->bindValue('contrasena', $usuario->getPassword());
        $insert->bindValue('nombre', $usuario->getNombre());
        $insert->execute();
    }

    public function mostrar() {
        $db = Db::conectar();
        $listaUsuarios = [];
        $select = $db->query('SELECT * FROM usuarios');

        foreach ($select->fetchAll() as $usuario) {
            $myUsuario = new Usuario();
            $myUsuario->setCorreo($usuario['correo']);
            $myUsuario->setPassword($usuario['contrasena']);
            $myUsuario->setNombre($usuario['nombre']);
            $listaUsuarios[] = $myUsuario;
        }

        return $listaUsuarios;
    }

    public function eliminar($correo) {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM usuarios WHERE correo = :correo');
        $eliminar->bindValue('correo', $correo);
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

    // public function actualizar($usuario) {
    //     $db = Db::conectar();
    //     $actualizar = $db->prepare('UPDATE usuarios SET correo = :correo, contrasena = :contrasena, nombre = :nombre WHERE id_compra = :idCompra');
    //     $actualizar->bindValue(':idCompra', $usuario->getIdCompra());
    //     $actualizar->bindValue(':correo', $usuario->getCorreo());
    //     $actualizar->bindValue(':contrasena', $usuario->getContrasena());
    //     $actualizar->bindValue(':nombre', $usuario->getNombre());
    //     $actualizar->execute();
    // }
}

?>
<?php
require_once('crud-usuarios.php');
require_once('usuario.php');

// Crear una instancia del objeto Usuario
$usuario = new Usuario();
// Crear una instancia del objeto CrudUsuario
$crudUsuario = new CrudUsuario();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los valores del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['usuario'];
  $password = $_POST['contrasena'];

  // busca si existe el correo en la base de datos
  $usuarioExist = $crudUsuario->obtenerUsuario($email);

  // Si no existe se realiza un nuevo registro
  if ($usuarioExist->getCorreo() == null) {
    
    $usuario->setCorreo($email);
    $usuario->setPassword($password);
    $usuario->setNombre($nombre);

    // Llamar a la función insertar del objeto CrudUsuario
    $crudUsuario->insertar($usuario);

    // Regresa al inicio 
    echo "<script> window.location='mostrar.usuario.php' </script>";

  } else {
    echo "<script> alert('Este correo ya existe, Ingrese uno nuevo'); window.history.back(); </script>";
  }

}
?>

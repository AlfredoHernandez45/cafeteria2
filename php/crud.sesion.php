<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'ventas_dos';
$user = 'root';
$password = '';

require_once('crud-usuarios.php');
$usuarios = new crudUsuario; // inicia el cru de usuario

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
  die('Error de conexión: ' . $conn->connect_error);
}

/**
 * Se recibe una solicitud HTTP POST y se obtienen el correo y la contraseña del usuario 
 * desde los parámetros del formulario ($_POST['usuario'] y $_POST['contrasena'] respectivamente).
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['usuario'];
  $password = $_POST['contrasena'];

  /** 
   * se realiza una consulta SQL para verificar las credenciales del usuario en la base de datos. 
   * La consulta busca un registro en la tabla "usuarios" donde el correo coincida con el correo 
   * ingresado y la contraseña coincida con la contraseña ingresada.
  */
  $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$password'";
  $result = $conn->query($sql); // El resultado de la consulta se almacena en la variable $result.
  // var_dump($result);
  // var_dump($result->num_rows);

  /**
   * A continuación, se utiliza el if ($result->num_rows > 0) para verificar si el número de filas 
   * devuelto por la consulta es mayor que cero. En otras palabras, se está comprobando si se encontró 
   * algún registro en la base de datos que coincida con las credenciales ingresadas.
   */
  if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    //echo '¡Inicio de sesión exitoso!';
    session_start(); // inicia sesion 
    $usuario = $usuarios->obtenerUsuario($email); // manda a buscar el usuario que ingreso 
    $_SESSION['correo'] = $usuario->getCorreo(); // se guarda el correo del usuario en la variable de sesión.
    $_SESSION['nombre'] = $usuario->getNombre(); // se guarda el correo del usuario en la variable de sesión.
    if($_SESSION['nombre'] = "administrador"){
      echo "<script> alert('Bienvenido de nuevo Admin'); window.location='mostrar.php' </script>";
    }
    // echo $_SESSION['usuario'];
    // var_dump($usuario);
    // echo "<script> alert('Bienvenido de de nuevo'); window.location='mostrar.php' </script>";  
    echo "<script> alert('Bienvenido de de nuevo'); window.history.go(-2); </script>";

  } else {
    // Credenciales inválidas
    //echo 'Nombre de usuario o contraseña incorrectos.';
    echo "<script> alert('Nombre de usuario o contraseña incorrectos... Intente de nuevo :)'); window.location='sesion.php' </script>";
  }
}
// Cerrar la conexión
$conn->close();
?>
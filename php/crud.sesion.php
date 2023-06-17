<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'ventas_dos';
$user = 'root';
$password = '';

require_once('crud.php');

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
  die('Error de conexión: ' . $conn->connect_error);
}

// Procesar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['usuario'];
  $password = $_POST['contrasena'];

  // Consulta para verificar las credenciales del usuario
  $sql = "SELECT * FROM usuarios WHERE correo = '$email' AND contrasena = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Usuario autenticado correctamente
    //echo '¡Inicio de sesión exitoso!';
    session_start();
    $_SESSION['usuario'] = 'Pedro';
    echo "<script> alert('Bienvenido de de nuevo'); window.location='mostrar.php' </script>";

  } else {
    // Credenciales inválidas
    //echo 'Nombre de usuario o contraseña incorrectos.';
    echo "<script> alert('Nombre de usuario o contraseña incorrectos... Intente de nuevo :)'); window.location='sesion.php' </script>";
  }
}
// Cerrar la conexión
$conn->close();
?>
<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'ventas_dos';
$user = 'root';
$password = '';

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
  die('Error de conexión: ' . $conn->connect_error);
}

// Procesar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['usuario'];
    $password = $_POST['contrasena'];
  
  // Consulta para verificar si el usuario ya existe
  $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // El usuario ya existe
    echo 'El nombre de usuario ya está en uso. Por favor, elige otro nombre de usuario.';
  } else {
    // Insertar el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuarios (correo, contrasena) VALUES ('$email','$password')";

    if ($conn->query($sql) === TRUE) {
      // Registro exitoso
      echo '¡Registro exitoso! Ahora puedes iniciar sesión con tu nuevo usuario.';
    } else {
      // Error al insertar el usuario
      echo 'Error al registrar el usuario: ' . $conn->error;
    }
  }
}

// Cerrar la conexión
$conn->close();
?>

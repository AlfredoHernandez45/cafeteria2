<?php
// Configuración de la conexión a la base de datos
$servername = "nombre_servidor";
$username = "nombre_usuario";
$password = "contraseña";
$dbname = "nombre_base_de_datos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los registros de los pagos
$sql = "SELECT NombreCliente, NumeroTarjeta, ImportePago FROM Pagos";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Mostrar los datos de cada pago
    while ($row = $result->fetch_assoc()) {
        $nombreCliente = $row["NombreCliente"];
        $numeroTarjeta = $row["NumeroTarjeta"];
        $importePago = $row["ImportePago"];

        echo "Nombre del Cliente: " . $nombreCliente . "<br>";
        echo "Número de Tarjeta: " . $numeroTarjeta . "<br>";
        echo "Importe Pagado: " . $importePago . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron registros de pagos.";
}

// Cerrar la conexión
$conn->close();
?>







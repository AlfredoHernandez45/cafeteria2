<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Aquí puedes realizar las validaciones y procesamiento del formulario

  // Mostrar mensaje de pago exitoso
  echo "<script>alert('Pago Exitoso!');</script>";
}
?>

<html>
<head>
  <title>Formulario de Pago</title>
</head>
<body>
  <div class="container">
    <h1>CARGO UNICO</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <label for="img"> 
        <img src="img/Logo1.png" height="30" width="100">
        <img src="img/Logo2.png" height="50" width="100">
        <img src="img/Logo3.png" height="30" width="100">
      </label>
      <label><p>DATOS DEL CLIENTE</p></label>
      <label for="nombre">Nombre del Cliente:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
      <label for="E-mail">E-mail:</label>
      <input type="text" id="E-mail" name="E-mail" placeholder="E-mail" required>
      <label for="telefono">Telefono:</label>
      <input type="text" id="telefono" name="telefono" placeholder="Telefono" required>
      <label><p>DATOS DE LA TARJETA</p></label>
      <label for="numero-tarjeta">Número de tarjeta:</label>
      <input type="text" id="numero-tarjeta" name="numero-tarjeta" placeholder="Numero-Tarjeta" required>
      <label for="fecha-expiracion">Fecha de expiración:</label>
      <input type="text" id="fecha-expiracion" name="fecha-expiracion" placeholder="MM/AA" required>
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
      <label for="Importe">Importe a Pagar:</label>
      <input type="text" id="Importe" name="Importe" placeholder="Importe">
      <input type="submit" value="Pagar" href="../php/carrito-principal.php">
      <button><a type="submit" a href="../php/carrito-principal.php">Regresar</a></button>
    </form>
  </div>
</body>
</html>

<style>
.container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
}

form {
  display: grid;
  gap: 10px;
}

label {
  font-weight: bold;
}

p {
  text-align: center;
}

input[type="text"],
input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius:
}
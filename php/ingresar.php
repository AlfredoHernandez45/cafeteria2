<html>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url("/cafeteria/public/img/bg.png");}
form {border: 3px solid #f1f1f1; width: 400px; height: 380px; background-color:#FFFFFF; border-radius: 25px 25px 25px 25px;} /*Tamaño del contenedor del registro*/

input[type=text], input[type=cveArticulo] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit], input[type=Guardar] {
  background-color: DarkSalmon;
  color: #000000;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  border-radius: 25px 25px 25px 25px;
}

h1{
  background-color: DarkSalmon;
  color: #000000;
  padding: 14px 3px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 29%;
  border-radius: 25px 25px 25px 25px;
  font-size: 15px
}
</style>

<center>
<form action='admin_articulo.php' method='post'>
  <br>
  Ingresa Los Datos De Los Nuevos Articulos
  <br>
  <br>
	<table>
		<tr>
			<td>Id Articulo:</td>
			<td> <input type='text' name='cveArticulo'></td>
		</tr>
		<tr>
			<td>Nombre:</td>
			<td><input type='text' name='nombre' ></td>
		</tr>

		<tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' ></td>
		</tr>

		<input type='hidden' name='insertar' value='insertar'>
	</table>

  <script type="text/javascript">
    function redireccionar() {
      window.location.href = "ventas1/mostrar.php";
    }
  </script>

  <input type='submit' value='Guardar' onclick='redireccionar()'>
	<h1><a href="mostrar.php">Volver</a></h1>
</form>
</center>
</html>

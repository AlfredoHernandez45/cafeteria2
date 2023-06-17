<?php
//incluye la clase articulos y Crud
	require_once('crud.php');
	require_once('articulo.php');
	$crud= new crudArticulo();
	$articulo=new Articulos();
	//busca el producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$articulo=$crud->obtenerArticulo($_GET['cveArticulo']);
?>
<html>
<head>
	<title>Actualizar articulo</title>
</head>
<body>
	<form action='admin_articulo.php' method='post'>
	<table>
		<tr>
			
			<input type='hidden' name='cveArticulo' value='<?php echo $articulo->getCveArticulo()?>'>

			<td>nombre: </td>
			<td> <input type='text' name='nombre' value='<?php echo $articulo->getNombre()?>'></td>
		</tr>
		<tr>
			<td>precio: </td>
			<td><input type='text' name='precio' value='<?php echo $articulo->getPrecio() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="admin.php">Volver</a>
</form>
</body>
</html>

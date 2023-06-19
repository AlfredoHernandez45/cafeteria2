<?php
//incluye la clase Libro y CrudLibro
require_once('crud.php');
require_once('articulo.php');
$crud=new crudArticulo();
$articulo= new Articulos();
//obtiene todos los libros con el método mostrar de la clase crud
$listaArticulos=$crud->mostrar();
?>

<html>
<head>
	<title>Mostrar articulos</title>
</head>
<body>
	<table border=1>
		<head>
			<td>NOMBRE</td>
			<td>E-MAIL</td>
			<td>Telefono</td>
			<td>NUMERO-TARGETA</td>
			<td>FECHA-EXPIRACION</td>
            <td>CVV</td>
            <td>Importe<td>
		</head>
		<body>
			<?php foreach ($listaArticulos as $articulo) {?>
			<tr>
				<td><?php echo $articulo->getNombre() ?></td>
				<td><?php echo $articulo->getEmail() ?></td>
				<td><?php echo $articulo->getTelefono() ?></td>
				<td><?php echo $articulo->getNumerotarjeta() ?></td>
				<td><?php echo $articulo->getFechaexpiracion() ?></td>
                <td><?php echo $articulo->getCvv() ?></td>
                <td><?php echo $articulo->getImporte() ?></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="../php/index.php">Volver al inicio</a>
</body>
</html>




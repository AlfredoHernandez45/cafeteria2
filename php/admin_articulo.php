<?php
//incluye la
require_once('crud.php');
require_once('articulo.php');

$crud = new crudArticulo();
$articulo= new Articulos();

	// si el elemento insertar no viene nulo llama al crud e inserta un producto
	if (isset($_POST['insertar'])) {
		$articulo->setCveArticulo($_POST['cveArticulo']);
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		//llama a la función insertar definida en el crud
		$crud->insertar($articulo);
		header('Location: mostrar.php');

	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$articulo->setCveArticulo($_POST['cveArticulo']);
		$articulo->setNombre($_POST['nombre']);
		$articulo->setPrecio($_POST['precio']);
		//$articulo->actualizar($libro);
		$crud->actualizar($articulo);
		header('Location: mostrar.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un articulo
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['cveArticulo']);
		header('Location: mostrar.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>

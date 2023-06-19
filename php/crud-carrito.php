<?php
require_once('conexion.php');
require_once('carrito.php');

class CrudCarrito {
	public function __construct() {}

	// public function insertar($carrito) {
	// 	$db = Db::conectar();
	// 	$insert = $db->prepare('INSERT INTO carrito (id_compra, cveArticulo, cantidadProducto, precio, subtotal) VALUES (:idCompra, :cveArticulo, :cantidadProducto, :precio, :subtotal)');
	// 	$insert->bindValue('idCompra', $carrito->getIdCompra());
	// 	$insert->bindValue('cveArticulo', $carrito->getCveArticulo());
	// 	$insert->bindValue('cantidadProducto', $carrito->getCantidadProducto());
	// 	$insert->bindValue('precio', $carrito->getPrecio()); // Obtener el precio del carrito
	// 	$insert->bindValue('subtotal', $carrito->getSubtotal()); // Obtener el subtotal del carrito
	// 	$insert->execute();
	// }

	public function mostrar() {
		$db = Db::conectar();
		$listaCarrito = [];
		$select = $db->query('SELECT * FROM carrito');

		foreach ($select->fetchAll() as $carrito) {
			$myCarrito = new Carrito();
			$myCarrito->setIdCompra($carrito['id_compra']);
			$myCarrito->setCveArticulo($carrito['cveArticulo']);
			$myCarrito->setCantidadProducto($carrito['cantidadProducto']);
			$myCarrito->setPrecio($carrito['precio']); // Establecer el precio del carrito
			$myCarrito->setSubtotal($carrito['subtotal']); // Establecer el subtotal del carrito
			$listaCarrito[] = $myCarrito;
		}

		return $listaCarrito;
	}

	public function eliminar($correo) {
		$db = Db::conectar();
		$eliminar = $db->prepare('DELETE FROM carrito WHERE correo = :correo');
		$eliminar->bindValue('correo', $correo);
		$eliminar->execute();
	}

	/**
	 * Funcion para obtener los productos del carrito del usuario que inicio sesion
	 *  */ 
	public function obtenerCarrito($correo) {
		$db = Db::conectar();
		// codio ejemplo SQL::  SELECT * FROM `carrito` WHERE `correo` = 'jose@gmail.com';
		$select = $db->prepare('SELECT * FROM carrito WHERE correo = :correo');
		$select->bindValue('correo', $correo);
		$select->execute();

		// Obtener todas las filas de resultados
		$filas = $select->fetchAll();
		// Crear un arreglo para almacenar los carritos
		$carritos = [];

		foreach ($filas as $fila) {
			$myCarrito = new Carrito();
			$myCarrito->setCveArticulo($fila['cveArticulo']);
			$myCarrito->setCantidadProducto($fila['cantidadProducto']);
			$myCarrito->setPrecio($fila['precio']); // Establecer el precio del carrito
			$myCarrito->setSubtotal($fila['subtotal']); // Establecer el subtotal del carrito

			$carritos[] = $myCarrito;
		}

		return $carritos;
	}

	public function actualizar($carrito) {
		$db = Db::conectar();
		$actualizar = $db->prepare('UPDATE carrito SET id_compra = :idCompra, cveArticulo = :cveArticulo, cantidadProducto = :cantidadProducto, precio = :precio, subtotal = :subtotal WHERE idCarrito = :idCarrito');
		$actualizar->bindValue('idCarrito', $carrito->getIdCarrito());
		$actualizar->bindValue('idCompra', $carrito->getIdCompra());
		$actualizar->bindValue('cveArticulo', $carrito->getCveArticulo());
		$actualizar->bindValue('cantidadProducto', $carrito->getCantidadProducto());
		$actualizar->bindValue('precio', $carrito->getPrecio()); // Obtener el precio del carrito
		$actualizar->bindValue('subtotal', $carrito->getSubtotal()); // Obtener el subtotal del carrito
		$actualizar->execute();
	}
}
?>
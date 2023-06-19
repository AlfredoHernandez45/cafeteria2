<?php
// incluye la clase Db
require_once('../php/conexion.php');
require_once('articulo.php');

	class crudArticulo{
		// constructor de la clase
		public function __construct(){}

		// Create
		public function insertar($articulo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO pago (nombre, email, telefono, numerotarjeta,	fechaexpiracion, 
            cvv, importe) values(:nombre, :email, :telefono, :numerotarjeta,	:fechaexpiracion, :cvv, :importe)');
			$insert->bindValue('nombre',$articulo->getNombre());
			$insert->bindValue('email',$articulo->getEmail());
			$insert->bindValue('telefono',$articulo->getTelefono());
			$insert->bindValue('numerotarjeta',$articulo->getNumerotarjeta());
			$insert->bindValue('fechaexpiracion',$articulo->getFechaexpiracion());
            $insert->bindValue('cvv',$articulo->getCvv());
            $insert->bindValue('importe',$articulo->getImporte());
			$insert->execute();

		}

		// Read
		public function mostrar(){
			$db=Db::conectar();
			$listaArticulos=[];
			$select=$db->query('SELECT * FROM pago');

			foreach($select->fetchAll() as $articulo){
				$myArticulo= new Articulos();
				$myArticulo->setNombre($articulo['nombre']);
				$myArticulo->setEmail($articulo['email']);
                $myArticulo->setTelefono($articulo['telefono']);
                $myArticulo->setNumerotarjeta($articulo['numerotarjeta']);
                $myArticulo->setFechaexpiracion($articulo['fechaexpiracion']);
				$myArticulo->setCvv($articulo['cvv']);
				$myArticulo->setImporte($articulo['importe']);
				$listaArticulos[]=$myArticulo;
			}
			return $listaArticulos;
		}

		// Delate eliminar datos
		// public function eliminar($cveArticulo){
		// 	$db=Db::conectar();
		// 	$eliminar=$db->prepare('DELETE FROM pago WHERE nombre=:nombre');
		// 	$eliminar->bindValue('nombre',$nombre);
		// 	$eliminar->execute();

		// 	//Delate de las funciones ¿
		// 	$eliminar=$db->prepare('DELETE FROM Venta WHERE nombre=:nombre');
		// 	$eliminar->bindValue('nombre',$nombre);
		// 	$eliminar->execute();
		// }

		// Search Busqueda espesifica
		public function obtenerArticulo($correo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM pago WHERE correo = :correo');
			$select->bindValue('correo',$correo);
			$select->execute();

			$filas=$select->fetchAll();

			$ventas = [];

			foreach($filas as $fila){
				$venta = new Venta();
				$venta->setNombre($fila['nombre']);
				$venta->setEmail($fila['email']);
				$venta->setTelefono($fila['telefono']);
				$venta->setNumerotarjeta($fila['numerotarjeta']);
				$venta->setFechaexpiracion($fila['fechaexpiracion']);
				$venta->setCvv($fila['cvv']);
				$venta->setImporte($fila['importe']);

				$ventas[] = $venta;
			}

			// $myArticulo->setNombre($articulo['nombre']);
			// $myArticulo->setEmail($articulo['email']);
			// $myArticulo->setTelefono($articulo['telefono']);
			// $myArticulo->setNumerotarjeta($articulo['numerotarjeta']);
			// $myArticulo->setFechaexpiracion($articulo['fechaexpiracion']);
			// $myArticulo->setCvv($articulo['cvv']);
			// $myArticulo->setImporte($articulo['importe']);
			// return $myArticulo;
			return $ventas;
		}

		// Update
		// public function actualizar($articulo){
		// 	$db=Db::conectar();
		// 	$actualizar=$db->prepare('UPDATE pago SET email=:email, telefono=:telefono, numerotarjeta=:numerotarjeta, fechaexpiracion=:fechaexpiracion, cvv=:cvv, importe=:importe WHERE nombre=:nombre');
		// 	$myArticulo->setNombre($articulo['nombre']);
		// 	$myArticulo->setEmail($articulo['email']);
		// 	$myArticulo->setTelefono($articulo['telefono']);
		// 	$myArticulo->setNumerotarjeta($articulo['numerotarjeta']);
		// 	$myArticulo->setFechaexpiracion($articulo['fechaexpiracion']);
		// 	$myArticulo->setCvv($articulo['cvv']);
		// 	$myArticulo->setImporte($articulo['importe']);
		// 	$actualizar->execute();
		// }
	}
?>


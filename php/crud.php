<?php
// incluye la clase Db
require_once('conexion.php');
require_once('articulo.php');

	class crudArticulo{
		// constructor de la clase
		public function __construct(){}
		// Crear
		public function insertar($articulo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO Articulos values(:cveArticulo,:nombre,:precio)');
			$insert->bindValue('cveArticulo',$articulo->getCveArticulo());
			$insert->bindValue('nombre',$articulo->getNombre());
			$insert->bindValue('precio',$articulo->getPrecio());
			$insert->execute();
		}

		// Leer
		public function mostrar(){
			$db=Db::conectar();
			$listaArticulos=[];
			$select=$db->query('SELECT * FROM Articulos');

			foreach($select->fetchAll() as $articulo){
				$myArticulo= new Articulos();
				$myArticulo->setCveArticulo($articulo['cveArticulo']);
				$myArticulo->setNombre($articulo['nombre']);
				$myArticulo->setPrecio($articulo['precio']);
				$listaArticulos[]=$myArticulo;
			}
			return $listaArticulos;
		}

		// eliminar datos
		public function eliminar($cveArticulo){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM Articulos WHERE cveArticulo=:cveArticulo');
			$eliminar->bindValue('cveArticulo',$cveArticulo);
			$eliminar->execute();

			//Delate de las funciones
			$eliminar=$db->prepare('DELETE FROM Existencias WHERE cveArticulo=:cveArticulo');
			$eliminar->bindValue('cveArticulo',$cveArticulo);
			$eliminar->execute();
		}

		// Search Busqueda espesifica
		public function obtenerArticulo($cveArticulo){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM Articulos WHERE cveArticulo=:cveArticulo');
			$select->bindValue('cveArticulo',$cveArticulo);
			$select->execute();

			$articulo=$select->fetch();
			$myArticulo= new Articulos();
			$myArticulo->setCveArticulo($articulo['cveArticulo']);
			$myArticulo->setNombre($articulo['nombre']);
			$myArticulo->setPrecio($articulo['precio']);
			return $myArticulo;
		}

		// A c t u a l i z a r
		public function actualizar($articulo){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE Articulos SET nombre=:nombre, precio=:precio  WHERE cveArticulo=:cveArticulo');
			$actualizar->bindValue('cveArticulo',$articulo->getCveArticulo());
			$actualizar->bindValue('nombre',$articulo->getNombre());
			$actualizar->bindValue('precio',$articulo->getPrecio());
			$actualizar->execute();
		}
	}
?>

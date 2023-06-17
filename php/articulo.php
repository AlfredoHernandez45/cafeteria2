<?php
	class Articulos{
		private $cveArticulo;
		private $nombre;
		private $precio;
		//Constructor
		function __construct(){}

		//Funciones CveArticulo
		public function getCveArticulo(){
			return $this->cveArticulo;
		}
		public function setCveArticulo($cveArticulo){
			$this->cveArticulo = $cveArticulo;
		}

		//Funciones NOMBRE
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		//Funciones PRECIO
		public function getPrecio(){
			return $this->precio;
		}
		public function setPrecio($precio){
			$this->precio = $precio;
		}
	}
?>

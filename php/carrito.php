<?php
class Carrito {
    private $idCompra;
    private $cveArticulo;
    private $cantidadProducto;
    private $precio;
    private $subtotal;
    //Constructor
    public function __construct() {}

    //Funciones idCompra
    public function getIdCompra() {
        return $this->idCompra;
    }

    public function setIdCompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    //Funciones cveArticulo
    public function getCveArticulo() {
        return $this->cveArticulo;
    }

    public function setCveArticulo($cveArticulo) {
        $this->cveArticulo = $cveArticulo;
    }

    //Funciones cantidadProducto
    public function getCantidadProducto() {
        return $this->cantidadProducto;
    }

    public function setCantidadProducto($cantidadProducto) {
        $this->cantidadProducto = $cantidadProducto;
    }

    //Funciones precio
    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    //Funciones subtotal
    public function getSubtotal() {
        return $this->subtotal;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }
}
?>
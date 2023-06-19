<?php
class Usuario {
    // private $idCompra;
    private $usuario;
    private $cantidadProducto;
    private $total;
    // private $totalPago;
    
    public function __construct() {}

    // Correo
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    // Cantidad de productos vendidos
    public function getCantidadProducto() {
        return $this->cantidadProducto;
    }

    public function setCantidadProducto($cantidadProducto) {
        $this->cantidadProducto = $cantidadProducto;
    }

    // Total pagado
    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
}
?>
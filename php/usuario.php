<?php
class Usuario {
    private $idCompra;
    private $correo;
    private $cveArticulo;
    private $cantidadProducto;
    private $totalPago;
    
    public function __construct() {}

    public function getIdCompra() {
        return $this->idCompra;
    }

    public function setIdCompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getCveArticulo() {
        return $this->cveArticulo;
    }

    public function setCveArticulo($cveArticulo) {
        $this->cveArticulo = $cveArticulo;
    }

    public function getCantidadProducto() {
        return $this->cantidadProducto;
    }

    public function setCantidadProducto($cantidadProducto) {
        $this->cantidadProducto = $cantidadProducto;
    }

    public function getTotalPago() {
        return $this->totalPago;
    }

    public function setTotalPago($totalPago) {
        $this->totalPago = $totalPago;
    }
}
?>
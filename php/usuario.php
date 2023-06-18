<?php
class Usuario {
    // private $idCompra;
    private $correo;
    private $password;
    private $nombre;
    // private $totalPago;
    
    // public function __construct() {}

    // public function getIdCompra() {
    //     return $this->idCompra;
    // }

    // public function setIdCompra($idCompra) {
    //     $this->idCompra = $idCompra;
    // }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // public function getTotalPago() {
    //     return $this->totalPago;
    // }

    // public function setTotalPago($totalPago) {
    //     $this->totalPago = $totalPago;
    // }
}
?>
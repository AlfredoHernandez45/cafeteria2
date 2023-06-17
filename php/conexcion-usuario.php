<?php
class Usuario {
    // private $idCompra;
    private $correo;
    private $password;
    private $nombre;
    // private $totalPago;
    
    public function __construct() {}

    // Correo
    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    // contrasenia
    public function getPassword() {
        return $this->cveArticulo;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
?>
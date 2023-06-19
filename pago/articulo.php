<?php

class Articulos
{
	private $nombre;
	private $email;
	private $telefono;
	private $numerotarjeta;
	private $fechaexpiracion;
	private $cvv;
	private $importe;

	function __construct() {}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getEmail()
	{
		return $this->Email;
	}

	public function setEmail($email)
	{
		$this->Email = $email;
	}

	public function getTelefono()
	{
		return $this->telefono;
	}

	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	public function getNumerotarjeta()
	{
		return $this->numerotarjeta;
	}

	public function setNumerotarjeta($numerotarjeta)
	{
		$this->numerotarjeta = $numerotarjeta;
	}

	public function getFechaexpiracion()
	{
		return $this->fechaexpiracion;
	}

	public function setFechaexpiracion($fechaexpiracion)
	{
		$this->fechaexpiracion = $fechaexpiracion;
	}

	public function getCvv()
	{
		return $this->cvv;
	}

	public function setCvv($cvv)
	{
		$this->cvv = $cvv;
	}

	public function getImporte()
	{
		return $this->importe;
	}

	public function setImporte($importe)
	{
		$this->importe = $importe;
	}



}

?>
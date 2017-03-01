<?php

	class Sucursal{

		private $numeroSucursal;
		private $direccion;
		private $telefono;

		public function __construct($numeroSucursal,
					$direccion,
					$telefono){
			$this->numeroSucursal = $numeroSucursal;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
		}
		public function getNumeroSucursal(){
			return $this->numeroSucursal;
		}
		public function setNumeroSucursal($numeroSucursal){
			$this->numeroSucursal = $numeroSucursal;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function toString(){
			return "NumeroSucursal: " . $this->numeroSucursal . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono;
		}
	}
?>
<?php

	class Cliente extends Persona{

		private $telefono;
		private $direccion;
		private $membresia;

		public function __construct(
					$nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$telefono,
					$direccion,
					$membresia){
			parent::__construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad);
			$this->telefono = $telefono;
			$this->direccion = $direccion;
			$this->membresia = $membresia;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getMembresia(){
			return $this->membresia;
		}
		public function setMembresia($membresia){
			$this->membresia = $membresia;
		}
		public function toString(){
			return parent::toString() . " Telefono: " . $this->telefono . 
				" Direccion: " . $this->direccion . 
				" Membresia: " . $this->membresia;
		}
	}
?>
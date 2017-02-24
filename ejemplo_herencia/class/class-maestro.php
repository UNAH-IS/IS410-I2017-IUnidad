<?php

	class Maestro extends Persona{

		private $numeroEmpleado;
		private $sueldo;

		public function __construct(
					$nombre,
					$apellido,
					$edad,
					$fechaNacimiento,
					$identidad,
					$genero,
					$carrera,
					$direccion,
					$telefono,
					$correo,
					$lugarNacimiento,
					$numeroEmpleado,
					$sueldo){
			parent::__construct(
					$nombre,
					$apellido,
					$edad,
					$fechaNacimiento,
					$identidad,
					$genero,
					$carrera,
					$direccion,
					$telefono,
					$correo,
					$lugarNacimiento
				);
			$this->numeroEmpleado = $numeroEmpleado;
			$this->sueldo = $sueldo;
		}
		public function getNumeroEmpleado(){
			return $this->numeroEmpleado;
		}
		public function setNumeroEmpleado($numeroEmpleado){
			$this->numeroEmpleado = $numeroEmpleado;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function __toString(){
			return parent::__toString()." NumeroEmpleado: " . $this->numeroEmpleado . 
				" Sueldo: " . $this->sueldo;
		}

		public function metodoAbstracto(){
			echo "Este es un metodo abstracto sobreescrito en la clase Maestro";
		}
	}
?>
<?php

	class Alumno extends Persona{

		private $cuenta;

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
					$cuenta){
			parent::__construct($nombre,
					$apellido,
					$edad,
					$fechaNacimiento,
					$identidad,
					$genero,
					$carrera,
					$direccion,
					$telefono,
					$correo,
					$lugarNacimiento);
			$this->cuenta = $cuenta;
		}
		public function getCuenta(){
			return $this->cuenta;
		}
		public function setCuenta($cuenta){
			$this->cuenta = $cuenta;
		}
		public function __toString(){
			return parent::__toString() . "Cuenta: " . $this->cuenta;
		}

		public function imprimirNombre(){
			echo $this->nombre;
		}


		public function metodoAbstracto(){
			echo "Este es un metodo abstracto sobreescrito en la clase Alumno";
		}
	}
?>
<?php

	class Mecanico extends Persona{

		private $especializacion;
		private $sueldo;
		private $codigoEmpleado;
		private $sucursal;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$especializacion,
					$sueldo,
					$codigoEmpleado,
					$sucursal){
			parent::__construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad);
			$this->especializacion = $especializacion;
			$this->sueldo = $sueldo;
			$this->codigoEmpleado = $codigoEmpleado;
			$this->sucursal = $sucursal;
		}
		public function getEspecializacion(){
			return $this->especializacion;
		}
		public function setEspecializacion($especializacion){
			$this->especializacion = $especializacion;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function getCodigoEmpleado(){
			return $this->codigoEmpleado;
		}
		public function setCodigoEmpleado($codigoEmpleado){
			$this->codigoEmpleado = $codigoEmpleado;
		}
		public function toString(){
			return parent::toString()." Especializacion: " . $this->especializacion . 
				" Sueldo: " . $this->sueldo . 
				" CodigoEmpleado: " . $this->codigoEmpleado.
				" Sucursal: ". $this->sucursal->toString();
		}
	}
?>
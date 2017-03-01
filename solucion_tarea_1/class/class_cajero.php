<?php

	class Cajero extends Persona{

		private $numeroCajero;
		private $horario;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$numeroCajero,
					$horario){
			parent::__construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad);
			$this->numeroCajero = $numeroCajero;
			$this->horario = $horario;
		}
		public function getNumeroCajero(){
			return $this->numeroCajero;
		}
		public function setNumeroCajero($numeroCajero){
			$this->numeroCajero = $numeroCajero;
		}
		public function getHorario(){
			return $this->horario;
		}
		public function setHorario($horario){
			$this->horario = $horario;
		}
		public function toString(){
			return parent::toString() . " NumeroCajero: " . $this->numeroCajero . 
				" Horario: " . $this->horario;
		}
	}
?>
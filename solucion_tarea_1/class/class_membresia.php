<?php

	class Membresia{

		private $numeroMembresia;
		private $fechaVencimiento;
		private $puntosDisponibles;

		public function __construct($numeroMembresia,
					$fechaVencimiento,
					$puntosDisponibles){
			$this->numeroMembresia = $numeroMembresia;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->puntosDisponibles = $puntosDisponibles;
		}
		public function getNumeroMembresia(){
			return $this->numeroMembresia;
		}
		public function setNumeroMembresia($numeroMembresia){
			$this->numeroMembresia = $numeroMembresia;
		}
		public function getFechaVencimiento(){
			return $this->fechaVencimiento;
		}
		public function setFechaVencimiento($fechaVencimiento){
			$this->fechaVencimiento = $fechaVencimiento;
		}
		public function getPuntosDisponibles(){
			return $this->puntosDisponibles;
		}
		public function setPuntosDisponibles($puntosDisponibles){
			$this->puntosDisponibles = $puntosDisponibles;
		}
		public function toString(){
			return "NumeroMembresia: " . $this->numeroMembresia . 
				" FechaVencimiento: " . $this->fechaVencimiento . 
				" PuntosDisponibles: " . $this->puntosDisponibles;
		}
	}
?>
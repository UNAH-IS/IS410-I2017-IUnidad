<?php

	class Repuesto{

		private $codigoRepuesto;
		private $nombreRepuesto;
		private $costo;

		public function __construct($codigoRepuesto,
					$nombreRepuesto,
					$costo){
			$this->codigoRepuesto = $codigoRepuesto;
			$this->nombreRepuesto = $nombreRepuesto;
			$this->costo = $costo;
		}
		public function getCodigoRepuesto(){
			return $this->codigoRepuesto;
		}
		public function setCodigoRepuesto($codigoRepuesto){
			$this->codigoRepuesto = $codigoRepuesto;
		}
		public function getNombreRepuesto(){
			return $this->nombreRepuesto;
		}
		public function setNombreRepuesto($nombreRepuesto){
			$this->nombreRepuesto = $nombreRepuesto;
		}
		public function getCosto(){
			return $this->costo;
		}
		public function setCosto($costo){
			$this->costo = $costo;
		}
		public function toString(){
			return "CodigoRepuesto: " . $this->codigoRepuesto . 
				" NombreRepuesto: " . $this->nombreRepuesto . 
				" Costo: " . $this->costo;
		}
	}
?>
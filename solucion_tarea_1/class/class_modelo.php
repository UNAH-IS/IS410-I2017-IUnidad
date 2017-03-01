<?php

	class Modelo{

		private $codigoModelo;
		private $nombreModelo;
		private $marca;
		private $anio;

		public function __construct($codigoModelo,
					$nombreModelo,
					$marca,
					$anio){
			$this->codigoModelo = $codigoModelo;
			$this->nombreModelo = $nombreModelo;
			$this->marca = $marca;
			$this->anio = $anio;
		}

		public function getCodigoModelo(){
			return $this->codigoModelo;
		}
		public function setCodigoModelo($codigoModelo){
			$this->codigoModelo = $codigoModelo;
		}
		public function getNombreModelo(){
			return $this->nombreModelo;
		}
		public function setNombreModelo($nombreModelo){
			$this->nombreModelo = $nombreModelo;
		}
		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}
		public function getAnio(){
			return $this->anio;
		}
		public function setAnio($anio){
			$this->anio = $anio;
		}
		public function toString(){
			return "CodigoModelo: " . $this->codigoModelo . 
				" NombreModelo: " . $this->nombreModelo . 
				" Marca: " . $this->marca->toString() . 
				" Anio: " . $this->anio;
		}
	}
?>
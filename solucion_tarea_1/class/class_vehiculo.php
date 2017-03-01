<?php

	class Vehiculo{

		private $placa;
		private $modelo;
		private $color;
		private $chasis;

		public function __construct($placa,
					$modelo,
					$color,
					$chasis){
			$this->placa = $placa;
			$this->modelo = $modelo;
			$this->color = $color;
			$this->chasis = $chasis;
		}
		public function getPlaca(){
			return $this->placa;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
		public function getColor(){
			return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
		}
		public function getChasis(){
			return $this->chasis;
		}
		public function setChasis($chasis){
			$this->chasis = $chasis;
		}
		public function toString(){
			return "Placa: " . $this->placa . 
				" Modelo: " . $this->modelo . 
				" Color: " . $this->color . 
				" Chasis: " . $this->chasis;
		}
	}
?>
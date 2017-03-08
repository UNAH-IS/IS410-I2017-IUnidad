<?php

	class Pais{

		private $codigoPais;
		private $nombrePais;

		public function __construct($codigoPais,
					$nombrePais){
			$this->codigoPais = $codigoPais;
			$this->nombrePais = $nombrePais;
		}
		public function getCodigoPais(){
			return $this->codigoPais;
		}
		public function setCodigoPais($codigoPais){
			$this->codigoPais = $codigoPais;
		}
		public function getNombrePais(){
			return $this->nombrePais;
		}
		public function setNombrePais($nombrePais){
			$this->nombrePais = $nombrePais;
		}
		public function __toString(){
			return "CodigoPais: " . $this->codigoPais . 
				" NombrePais: " . $this->nombrePais;
		}
	}
?>
<?php

	class Marca{

		private $codigoMarca;
		private $nombreMarca;
		private $pais;

		public function __construct($codigoMarca,
					$nombreMarca,
					$pais){
			$this->codigoMarca = $codigoMarca;
			$this->nombreMarca = $nombreMarca;
			$this->pais = $pais;
		}
		public function getCodigoMarca(){
			return $this->codigoMarca;
		}
		public function setCodigoMarca($codigoMarca){
			$this->codigoMarca = $codigoMarca;
		}
		public function getNombreMarca(){
			return $this->nombreMarca;
		}
		public function setNombreMarca($nombreMarca){
			$this->nombreMarca = $nombreMarca;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function toString(){
			return "CodigoMarca: " . $this->codigoMarca . 
				" NombreMarca: " . $this->nombreMarca . 
				" Pais: " . $this->pais;
		}
	}
?>
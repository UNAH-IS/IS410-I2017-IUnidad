<?php

	class Gusto{

		private $codigoGusto;
		private $nombreGusto;

		public function __construct($codigoGusto,
					$nombreGusto){
			$this->codigoGusto = $codigoGusto;
			$this->nombreGusto = $nombreGusto;
		}
		public function getCodigoGusto(){
			return $this->codigoGusto;
		}
		public function setCodigoGusto($codigoGusto){
			$this->codigoGusto = $codigoGusto;
		}
		public function getNombreGusto(){
			return $this->nombreGusto;
		}
		public function setNombreGusto($nombreGusto){
			$this->nombreGusto = $nombreGusto;
		}
		public function toString(){
			return "CodigoGusto: " . $this->codigoGusto . 
				" NombreGusto: " . $this->nombreGusto;
		}
	}
?>
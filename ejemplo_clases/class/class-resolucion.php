<?php

	class Resolucion{

		private $ancho;
		private $alto;

		public function __construct($ancho,
					$alto){
			$this->ancho = $ancho;
			$this->alto = $alto;
		}
		public function getAncho(){
			return $this->ancho;
		}
		public function setAncho($ancho){
			$this->ancho = $ancho;
		}
		public function getAlto(){
			return $this->alto;
		}
		public function setAlto($alto){
			$this->alto = $alto;
		}
		public function __toString(){
			return "Resolucion: " . $this->ancho . 
				"x" . $this->alto;
		}
	}
?>
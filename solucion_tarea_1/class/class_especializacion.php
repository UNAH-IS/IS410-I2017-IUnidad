<?php

	class Especializacion{

		private $nombreEspecializacion;
		private $aniosExperiencia;

		public function __construct($nombreEspecializacion,
					$aniosExperiencia){
			$this->nombreEspecializacion = $nombreEspecializacion;
			$this->aniosExperiencia = $aniosExperiencia;
		}
		public function getNombreEspecializacion(){
			return $this->nombreEspecializacion;
		}
		public function setNombreEspecializacion($nombreEspecializacion){
			$this->nombreEspecializacion = $nombreEspecializacion;
		}
		public function getAniosExperiencia(){
			return $this->aniosExperiencia;
		}
		public function setAniosExperiencia($aniosExperiencia){
			$this->aniosExperiencia = $aniosExperiencia;
		}
		public function toString(){
			return "NombreEspecializacion: " . $this->nombreEspecializacion . 
				" AniosExperiencia: " . $this->aniosExperiencia;
		}
	}
?>
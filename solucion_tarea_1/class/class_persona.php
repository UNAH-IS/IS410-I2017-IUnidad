<?php

	abstract class  Persona{

		protected $nombre;
		protected $apellido;
		protected $edad;
		protected $genero;
		protected $identidad;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->genero = $genero;
			$this->identidad = $identidad;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getIdentidad(){
			return $this->identidad;
		}
		public function setIdentidad($identidad){
			$this->identidad = $identidad;
		}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Edad: " . $this->edad . 
				" Genero: " . $this->genero . 
				" Identidad: " . $this->identidad;
		}
	}
?>
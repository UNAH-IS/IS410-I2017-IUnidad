<?php

	abstract class Persona{
		protected $nombre;
		protected $apellido;
		protected $edad;
		protected $fechaNacimiento;
		protected $identidad;
		protected $genero;
		protected $carrera;
		protected $direccion;
		protected $telefono;
		protected $correo;
		protected $lugarNacimiento;

		public function __construct($nombre,
					$apellido,
					$edad,
					$fechaNacimiento,
					$identidad,
					$genero,
					$carrera,
					$direccion,
					$telefono,
					$correo,
					$lugarNacimiento){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->identidad = $identidad;
			$this->genero = $genero;
			$this->carrera = $carrera;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
			$this->correo = $correo;
			$this->lugarNacimiento = $lugarNacimiento;
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
		public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}
		public function getIdentidad(){
			return $this->identidad;
		}
		public function setIdentidad($identidad){
			$this->identidad = $identidad;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getCarrera(){
			return $this->carrera;
		}
		public function setCarrera($carrera){
			$this->carrera = $carrera;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getLugarNacimiento(){
			return $this->lugarNacimiento;
		}
		public function setLugarNacimiento($lugarNacimiento){
			$this->lugarNacimiento = $lugarNacimiento;
		}
		public function __toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Edad: " . $this->edad . 
				" FechaNacimiento: " . $this->fechaNacimiento . 
				" Identidad: " . $this->identidad . 
				" Genero: " . $this->genero . 
				" Carrera: " . $this->carrera . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono . 
				" Correo: " . $this->correo . 
				" LugarNacimiento: " . $this->lugarNacimiento;
		}

		public abstract function metodoAbstracto();
	}
?>
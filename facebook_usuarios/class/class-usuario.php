<?php

	class Usuario{

		private $nombre;
		private $apellido;
		private $correElectronico;
		private $telefono;
		private $contrasena;
		private $fechaNacimiento;
		private $genero;
		private $pais;
		private $gustos;
		private $foto;

		public function __construct($nombre,
					$apellido,
					$correElectronico,
					$telefono,
					$contrasena,
					$fechaNacimiento,
					$genero,
					$pais,
					$gustos,
					$foto){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correElectronico = $correElectronico;
			$this->telefono = $telefono;
			$this->contrasena = $contrasena;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->genero = $genero;
			$this->pais = $pais;
			$this->gustos = $gustos;
			$this->foto = $foto;
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
		public function getCorreElectronico(){
			return $this->correElectronico;
		}
		public function setCorreElectronico($correElectronico){
			$this->correElectronico = $correElectronico;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getPais(){
			return $this->pais;
		}
		public function setPais($pais){
			$this->pais = $pais;
		}
		public function getGustos(){
			return $this->gustos;
		}
		public function setGustos($gustos){
			$this->gustos = $gustos;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
		}
		public function __toString(){
			$gustos="";
			for ($i=0; $i <sizeof($this->gustos); $i++) { 
				$gustos.=$this->gustos[$i]."|";
			}
			return $this->nombre . ",".
				 $this->apellido . ",".
				 $this->correElectronico . ",".
				 $this->telefono . ",".
				 $this->contrasena . ",".
				 $this->fechaNacimiento . ",".
				 $this->genero . ",".
				 $this->pais . ",".
				 $gustos . ",".
				 $this->foto;
		}

		public function guardarRegistro(){
			$archivo = fopen("data/usuarios.csv","a+");
			fwrite($archivo, $this->__toString() .PHP_EOL);
			fclose($archivo);
		}
	}
?>
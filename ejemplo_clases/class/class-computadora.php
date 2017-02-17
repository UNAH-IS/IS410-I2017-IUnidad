<?php

	class Computadora{
		private $marca;
		private $capacidadProcesador;
		private $capacidadMemoria;
		private $modelo;
		private $color;
		private $objResolucion;
		private $capacidadVideo;
		private $velocidadLectorOptico;
		private $capacidadAlmacenamiento;
		private $tipoComputadora;
		public static $atributoEstatico = 'Este es el valor de un atributo estatico';
		//define('VALOR_MAXIMO',55)

		public function __construct(
					$marca,
					$capacidadProcesador,
					$capacidadMemoria,
					$modelo,
					$color,
					$resolucion,
					$capacidadVideo,
					$velocidadLectorOptico,
					$capacidadAlmacenamiento,
					$tipoComputadora
			){
			$this->marca=$marca;
			$this->capacidadProcesador=$capacidadProcesador;
			$this->capacidadMemoria=$capacidadMemoria;
			$this->modelo=$modelo;
			$this->color=$color;
			$this->resolucion=$resolucion;
			$this->capacidadVideo=$capacidadVideo;
			$this->velocidadLectorOptico=$velocidadLectorOptico;
			$this->capacidadAlmacenamiento=$capacidadAlmacenamiento;
			$this->tipoComputadora=$tipoComputadora;
			//echo VALOR_MAXIMO;
		}

		public static function funcionEstatica(){
			echo self::$atributoEstatico; //Para acceder a un atributo estatico desde la propia clase se usa self::$nombreAtributoEstatico
		}

		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}
		public function getCapacidadProcesador(){
			return $this->capacidadProcesador;
		}
		public function setCapacidadProcesador($capacidadProcesador){
			$this->capacidadProcesador = $capacidadProcesador;
		}
		public function getCapacidadMemoria(){
			return $this->capacidadMemoria;
		}
		public function setCapacidadMemoria($capacidadMemoria){
			$this->capacidadMemoria = $capacidadMemoria;
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
		public function getResolucion(){
			return $this->resolucion;
		}
		public function setResolucion($resolucion){
			$this->resolucion = $resolucion;
		}
		public function getCapacidadVideo(){
			return $this->capacidadVideo;
		}
		public function setCapacidadVideo($capacidadVideo){
			$this->capacidadVideo = $capacidadVideo;
		}
		public function getVelocidadLectorOptico(){
			return $this->velocidadLectorOptico;
		}
		public function setVelocidadLectorOptico($velocidadLectorOptico){
			$this->velocidadLectorOptico = $velocidadLectorOptico;
		}
		public function getCapacidadAlmacenamiento(){
			return $this->capacidadAlmacenamiento;
		}
		public function setCapacidadAlmacenamiento($capacidadAlmacenamiento){
			$this->capacidadAlmacenamiento = $capacidadAlmacenamiento;
		}
		public function getTipoComputadora(){
			return $this->tipoComputadora;
		}
		public function setTipoComputadora($tipoComputadora){
			$this->tipoComputadora = $tipoComputadora;
		}
		function encender(){
			echo "Encendiendo";
		}
		function apagar(){
			echo "Apagando";
		}
		function explotar(){
			echo "Explotando";
		}
		function procesar(){
			echo "Procesando";
		}

		public function __toString(){
			return 	$this->marca.','.
					$this->capacidadProcesador.','.
					$this->capacidadMemoria.','.
					$this->modelo.','.
					$this->color.','.
					$this->resolucion.','.
					$this->capacidadVideo.','.
					$this->velocidadLectorOptico.','.
					$this->capacidadAlmacenamiento.','.
					$this->tipoComputadora;
		}
	}
?>
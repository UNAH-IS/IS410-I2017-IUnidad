<?php

	class Factura{

		private $cliente;
		private $cajero;
		private $mecanico;
		private $vehiculo;
		private $numeroFactura;
		private $kilometraje;
		private $fechaIngreso;
		private $repuestos;
		private $total;

		public function __construct($cliente,
					$cajero,
					$mecanico,
					$vehiculo,
					$numeroFactura,
					$kilometraje,
					$fechaIngreso,
					$repuestos,
					$total){
			$this->cliente = $cliente;
			$this->cajero = $cajero;
			$this->mecanico = $mecanico;
			$this->vehiculo = $vehiculo;
			$this->numeroFactura = $numeroFactura;
			$this->kilometraje = $kilometraje;
			$this->fechaIngreso = $fechaIngreso;
			$this->repuestos = $repuestos;
			$this->total = $total;
		}
		public function getCliente(){
			return $this->cliente;
		}
		public function setCliente($cliente){
			$this->cliente = $cliente;
		}
		public function getCajero(){
			return $this->cajero;
		}
		public function setCajero($cajero){
			$this->cajero = $cajero;
		}
		public function getMecanico(){
			return $this->mecanico;
		}
		public function setMecanico($mecanico){
			$this->mecanico = $mecanico;
		}
		public function getVehiculo(){
			return $this->vehiculo;
		}
		public function setVehiculo($vehiculo){
			$this->vehiculo = $vehiculo;
		}
		public function getNumeroFactura(){
			return $this->numeroFactura;
		}
		public function setNumeroFactura($numeroFactura){
			$this->numeroFactura = $numeroFactura;
		}
		public function getKilometraje(){
			return $this->kilometraje;
		}
		public function setKilometraje($kilometraje){
			$this->kilometraje = $kilometraje;
		}
		public function getFechaIngreso(){
			return $this->fechaIngreso;
		}
		public function setFechaIngreso($fechaIngreso){
			$this->fechaIngreso = $fechaIngreso;
		}
		public function getRepuestos(){
			return $this->repuestos;
		}
		public function setRepuestos($repuestos){
			$this->repuestos = $repuestos;
		}
		public function getTotal(){
			return $this->total;
		}
		public function setTotal($total){
			$this->total = $total;
		}
		public function toString(){
			return "Cliente: " . $this->cliente->toString() . 
				" Cajero: " . $this->cajero->toString() . 
				" Mecanico: " . $this->mecanico->toString() . 
				" Vehiculo: " . $this->vehiculo->toString() . 
				" NumeroFactura: " . $this->numeroFactura . 
				" Kilometraje: " . $this->kilometraje . 
				" FechaIngreso: " . $this->fechaIngreso . 
				//" Repuestos: " . $this->repuestos . 
				" Total: " . $this->total;
		}
		public function  obtenerRepuestos(){
			$cadenaRespuestos = "";
			for($i=0;$i<count($this->repuestos);$i++)
				$cadenaRespuestos.=$this->repuestos[$i]->getNombreRepuesto().",";
			return rtrim($cadenaRespuestos,",");
		}
}


?>

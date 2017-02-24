<?php 
	interface Humano extends SerVivo{
		const CANTIDAD_DEDOS = 20; //Investigar

		public function caminar();
		public function correr();
		public function dormir();
		public function perrear();
	}
?>

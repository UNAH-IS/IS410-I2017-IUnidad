<?php
	include("class/class-computadora.php");
	include("class/class-resolucion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo Clases</title>
</head>
<body>
	<?php
		//Java:
		//Clase objeto = new Clase(parametrosConstructor);
		//int variable = valor;

		//PHP:
		//$objeto = new Clase(parametrosConstructor);
		//$variable = valor;
		echo "Atributo estatico: " . Computadora::$atributoEstatico ."<br>";

		Computadora::$atributoEstatico = "NUEVO VALOR!!!!!";
		$c1 = new Computadora("Dell",123.45,456456,"Optiplex","Rojo",new Resolucion(1900,1200),12345.123,123.12,1321321,"Escritorio");

		$c2 = new Computadora("Compaq",123.45,456456,"Incendio","Verde",new Resolucion(1900,1200),12345.123,123.12,1321321,"Escritorio");

		//Asignar valor a un atributo publico en Java:
		//objeto.atributoPublico = valor;

		//Asignar valor a un atributo publico en PHP:
		//$objeto->atributoPublic = "valor";
		/*$c1->setMarca("China");
		$c1->setModelo("ABC123");*/

		echo "Marca de la computadora c1: ".$c1->getMarca();
		echo "<br>Modelo de la computadora c1: ".$c1->getModelo();
		echo "<br>";
		echo $c1; 	
		echo '<br>El tipo de dato de c1 es: ' . gettype($c1)."<br>";
		echo $c1::$atributoEstatico."<br>";
		echo $c2::$atributoEstatico."<br>";
		Computadora::funcionEstatica();
		$c1->explotar();
	?>
</body>
</html>
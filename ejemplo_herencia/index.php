<?php
	include_once("class/class-persona.php");
	include_once("class/class-alumno.php");
	include_once("class/class-maestro.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo herencia</title>
</head>
<body>
	<?php
	
		$a1 = new Alumno("ElBrayan1","Perez",25,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy","9999999","elbrayan@gmail.com","La Paz","20011111111");
		$a2 = new Alumno("ElBrayan2","Perez",25,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy","9999999","elbrayan@gmail.com","La Paz","20011111111");
		$a3 = new Alumno("ElBrayan3","Perez",25,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy","9999999","elbrayan@gmail.com","La Paz","20011111111");

		$m1 = new Maestro("Juan1","Rodriguez",60,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz",2342,34535.34534);
		$m2 = new Maestro("Juan2","Rodriguez",60,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz",2342,34535.34534);
		$m3 = new Maestro("Juan3","Rodriguez",60,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz",2342,34535.34534);

		$p1 = new Persona("Maria1","Lainez",50,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz");
		$p2 = new Persona("Maria2","Lainez",50,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz");
		$p3 = new Persona("Maria3","Lainez",50,"12-12-2012","10125454545","M","Ing en Sistemas","Col Kennedy",
			"9999999","juan@gmail.com","La Paz");

		//$a->setNombre("ElBrayan");
		//echo "Cuenta: " . $a->getCuenta();
		$personas = array();
		$personas[]=$a1;
		$personas[]=$m1;
		$personas[]=$p3;
		$personas[]=$a2;
		$personas[]=$a3;
		$personas[]=$p1;
		$personas[]=$m2;
		$personas[]=$m3;
		$personas[]=$p2;
		

		echo "<h1>Maestros</h1>";
		for ($i=0; $i<sizeof($personas);$i++){
			if ($personas[$i] instanceof Maestro)
				echo "<strong>".$personas[$i] . "</strong><hr>";
		}

		echo "<h1>Alumnos</h1>";
		for ($i=0; $i<sizeof($personas);$i++){
			if ($personas[$i] instanceof Alumno)
				echo "<strong>".$personas[$i] . "</strong><hr>";
		}

		echo "<h1>Personas</h1>";
		for ($i=0; $i<sizeof($personas);$i++){
			if (!$personas[$i] instanceof Alumno && !$personas[$i] instanceof Maestro)
				echo "<strong>".$personas[$i] . "</strong><hr>";
		}
		/*echo $a."<br>";
		echo "<hr>";
		echo $m;
		echo "<hr>";
		echo $p;*/
		//$a->imprimirNombre();
	?>
</body>
</html>
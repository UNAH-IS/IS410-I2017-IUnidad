<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "Correo ingresado: ".$_POST["input-email"] . "<br>";
		echo "Contraseña ingresada: ".$_POST["input-password"];

		$archivo = fopen("usuarios.txt","a+");
		fwrite($archivo, $_POST["input-email"] . "," . $_POST["input-password"]."\n");
		fclose($archivo);
	?>
</body>
</html>
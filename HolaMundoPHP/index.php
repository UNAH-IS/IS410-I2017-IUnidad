<?php
	$nombre = "Juan";	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hola mundo PHP</title>
	<style type="text/css">
		/* Comentario CSS */
	</style>
</head>
<body>
	<!-- -->

	<?php
		//Comentario de una linea
		/*Comentario de 
		varias lineas*/
		//PHP es un lenguaje debilmente tipado, es decir una varible puede ser de cualquier tipo, estas comienzando con $

		for($i=0;$i<10;$i++){
			echo "<strong>Hola ".$nombre."</strong><br>\n";
		}

		/*
			<table>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>

		*/
		echo '<table border="1">';
		for($i=0;$i<10;$i++){
			echo "<tr><td>".$i."</td><td>Hola</td></tr>";
		}
		echo "</table>";

		/*
			<select>
				<option value="valor">Valor a mostrar</option>
				<option value="valor">Valor a mostrar</option>
				<option value="valor">Valor a mostrar</option>
				<option value="valor">Valor a mostrar</option>
				<option value="valor">Valor a mostrar</option>
			</select>
		*/	
		echo '<br><br><br><br><select>';
		//$valores = array();
		$valores[]="Honduras";
		$valores[]="Guatemala";
		$valores[]="Paraguay";
		$valores[]="Colombia";
		$valores[]="Brazil";
		$valores[]="Costarica";

		//Para saber la cantidad de elementos de un arreglo puede utilizar la funcion sizeof o count
		for($i=0;$i<count($valores);$i++){
			echo '<option value="'.$i.'">'.$valores[$i].'</option>'."\n";
		}
		echo '</select>';
	?>
</body>
</html>

<?php 

?>
<?php
	include_once("class/class_persona.php");
	include_once("class/class_cajero.php");
	include_once("class/class_mecanico.php");
	include_once("class/class_cliente.php");
	include_once("class/class_marca.php");
	include_once("class/class_modelo.php");
	include_once("class/class_membresia.php");
	include_once("class/class_repuesto.php");
	include_once("class/class_sucursal.php");
	include_once("class/class_especializacion.php");
	include_once("class/class_vehiculo.php");
	include_once("class/class_factura.php");


	$clientes[] = new Cliente("Juan","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan1","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan2","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan3","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan4","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan5","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));
	$clientes[] = new Cliente("Juan6","Rodriguez",34,
				"M" ,"546546546","95041344","Col. Humuya",
				new Membresia(4654,"12/12/2012",4545));


	$mecanicos[] = new Mecanico("Pedro","Rodriguez",34,
					"M" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));
	$mecanicos[] = new Mecanico("Pedro1","Rodriguez",34,
					"M" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));
	$mecanicos[] = new Mecanico("Pedro2","Rodriguez",34,
					"M" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));
	$mecanicos[] = new Mecanico("Pedro3","Rodriguez",34,
					"M" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));
	$mecanicos[] = new Mecanico("Pedro4","Rodriguez",34,
					"M" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));
	$mecanicos[] = new Mecanico("Pedra","Rodriguez",34,
					"F" ,"546546546",
					new Especializacion("Motores 1",1),
					1111,2222, new Sucursal(1,"La Kenide","6245456"));

	$cajeros[] = new Cajero("Luis","Martinez",34,
					"M" ,"546546546",1,"Todo el dia");
	$cajeros[] = new Cajero("Luis1","Martinez",34,
					"M" ,"546546546",1,"Todo el dia");
	$cajeros[] = new Cajero("Luis2","Martinez",34,
					"M" ,"546546546",1,"Todo el dia");
	$cajeros[] = new Cajero("Luis3","Martinez",34,
					"M" ,"546546546",1,"Todo el dia");
	$cajeros[] = new Cajero("Luis4","Martinez",34,
					"M" ,"546546546",1,"Todo el dia");

	$modelos[] = new Modelo(123,"Modelo 1",new Marca(1,"Marca1","China"),"2016");
	$modelos[] = new Modelo(123,"Modelo 2",new Marca(1,"Marca2","China"),"2016");
	$modelos[] = new Modelo(123,"Modelo 3",new Marca(1,"Marca3","China"),"2016");
	$modelos[] = new Modelo(123,"Modelo 4",new Marca(1,"Marca4","China"),"2016");
	$modelos[] = new Modelo(123,"Modelo 5",new Marca(1,"Marca5","China"),"2016");


	$repuestos[] = new Repuesto(1,"Llantas",123);
	$repuestos[] = new Repuesto(2,"Rines",123);
	$repuestos[] = new Repuesto(3,"Motor",123);
	$repuestos[] = new Repuesto(4,"Amortiguadores",123);
	$repuestos[] = new Repuesto(5,"Bomper",123);
	$repuestos[] = new Repuesto(6,"Bateria",123);




	$facturas[] = new Factura(
					$clientes[0],
					$cajeros[0],
					$mecanicos[0],
					new Vehiculo(
							"PDD234",
							$modelos[0],"Fluorescente",
							"SDFSD3453453"
					),
					12312, 3453453,
					"12/12/2012", $repuestos,
					"1000002"
	);

	$facturas[] = new Factura(
					$clientes[1],
					$cajeros[1],
					$mecanicos[1],
					new Vehiculo(
							"PDD234",
							$modelos[1],"Fluorescente",
							"SDFSD3453453"
					),
					12312, 3453453,
					"12/12/2012", $repuestos,
					"1000002"
	);

	$facturas[] = new Factura(
					$clientes[2],
					$cajeros[2],
					$mecanicos[2],
					new Vehiculo(
							"PDD234",
							$modelos[2],"Fluorescente",
							"SDFSD3453453"
					),
					12312, 3453453,
					"12/12/2012", $repuestos,
					"1000002"
	);

	

	


	function listaPersonas($arreglo,$nombreItem){//Se envia el nombre del item para poder evaluarlo
		for($i=0;$i<count($arreglo);$i++){
			echo '<option value= "'.$arreglo[$i]->getNombre().'"'; //imprime <option value="valor"
			if (isset($_GET[$nombreItem]))
				if ($_GET[$nombreItem]==$arreglo[$i]->getNombre()) /*Verificar si el valor que viene en el arreglo GET es el mismo item $i del arreglo, en caso de ser asi, seleccionarlo*/
					echo ' selected="selected" ';
			echo '>'.$arreglo[$i]->getNombre().'</option>'; //imprime >Nombre</option>
			

		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="alert alert-success" role="alert">
		<?php
			if(isset($_GET["btn-guardar"])){
				
				/*
				&txt-fecha-ingreso=werwe&repuestos%5B%5D=on&repuestos%5B%5D=on&repuestos%5B%5D=on&btn-guardar=Guardar
				*/
				if (isset($_GET["slc-cliente"]))
					echo "Cliente: ". $_GET["slc-cliente"]."<br>";
				else 
					echo "No hay cliente<br>";
				if (isset($_GET["slc-mecanico"]))
					echo "Mecanico: ". $_GET["slc-mecanico"]."<br>";
				else 
					echo "No hay mecanico<br>";
				
				if (isset($_GET["slc-cajero"]))
					echo "Cajero: ". $_GET["slc-cajero"]."<br>";
				else 
					echo "No hay cajero<br>";
				
				if (isset($_GET["slc-modelo"]))
					echo "Modelo: ". $_GET["slc-modelo"]."<br>";
				else 
					echo "No hay modelo<br>";
				
				if (isset($_GET["txt-placa"]))
					echo "Placa: ". $_GET["txt-placa"]."<br>";
				else 
					echo "No hay placa<br>";
				
				if (isset($_GET["txt-kilometraje"]))
					echo "Kilometraje: ". $_GET["txt-kilometraje"]."<br>";
				else 
					echo "No hay kilometraje<br>";

				if (isset($_GET["txt-fecha-ingreso"]))
					echo "Fecha ingreso: ". $_GET["txt-fecha-ingreso"]."<br>";
				else 
					echo "No hay fecha de ingreso<br>";

				if (isset($_GET["repuestos"]))
					echo "Repuestos: ". var_dump($_GET["repuestos"])."<br>";
				else 
					echo "No hay kilometraje<br>";

				if (isset($_GET["txt-total"]))
					echo "Total: ". $_GET["txt-total"]."<br>";
				else 
					echo "No hay total<br>";

				//echo "Si hay datos, le dio click al boton guardar";
			}			
		?>
	</div>
	<form action="index.php" method="GET">
		<table class = "table table-striped table-hover" style="width:600px">
			<tr>
				<td>Cliente: </td>
				<td>
					<select name="slc-cliente" id ="slc-cliente" class="form-control">
						<?php 
							/*for($i=0;$i<count($clientes);$i++)
								echo '<option value= "'.$clientes[$i]->getNombre().'">'.$clientes[$i]->getNombre().'</option>';*/

							listaPersonas($clientes,"slc-cliente");
						?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>Mecanico: </td>
				<td>
					<select name="slc-mecanico" id ="slc-mecanico" class="form-control">
					<?php listaPersonas($mecanicos,"slc-mecanico"); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Cajero: </td>
				<td>
					<select name="slc-cajero" id ="slc-cajero" class="form-control">
						<?php listaPersonas($cajeros,"slc-cajero"); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Modelo Vehiculo:</td>
				<td>
					<select name="slc-modelo" id ="slc-modelo" class="form-control">
					<?php
						for($i=0;$i<count($modelos);$i++){
							echo '<option value= "'.$modelos[$i]->getNombreModelo().'"';
							if (isset($_GET["slc-modelo"]))
								if ($_GET["slc-modelo"]==$modelos[$i]->getNombreModelo())
									echo ' selected="selected" ';
							
							echo '>'.$modelos[$i]->getNombreModelo().", ".
									$modelos[$i]->getMarca()->getNombreMarca().'</option>';
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Placa: </td>
				<td>
					<input type="text" name="txt-placa" id="txt-placa" class="form-control" 
						<?php if(isset($_GET["txt-placa"])) echo 'value="'.$_GET["txt-placa"].'"';?>
					>
				</td>
			</tr>
			<tr>
				<td>Kilometraje</td>
				<td>
					<input type="text" name="txt-kilometraje" id="txt-kilometraje" class="form-control"
						<?php if(isset($_GET["txt-kilometraje"])) echo 'value="'.$_GET["txt-kilometraje"].'"';?>
					>
				</td>
			</tr>
			<tr>
				<td>Fecha Ingreso:</td>
				<td>
					<input type="text" name="txt-fecha-ingreso" id="txt-fecha-ingreso" class="form-control"
						<?php if(isset($_GET["txt-fecha-ingreso"])) echo 'value="'.$_GET["txt-fecha-ingreso"].'"';?>
					>
				</td>
			</tr>
			<tr>
				<td>Repuestos:</td>
				<td>
					<?php
						for($i=0;$i<count($repuestos);$i++){
							echo '<label><input type="checkbox" name="repuestos[]" id="repuestos[]" value="'.$repuestos[$i]->getCodigoRepuesto().'"';
							if (isset($_GET["repuestos"])) 
								if (in_array($repuestos[$i]->getCodigoRepuesto(),$_GET["repuestos"]))
									echo ' checked="checked" ';
							echo '>'.$repuestos[$i]->getNombreRepuesto().'</label><br>';
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Total:</td>
				<td><input disabled="disabled" type="text" name="txt-kilometraje" id="txt-kilometraje" class="form-control"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btn-guardar" 
					value="Guardar" class="btn btn-primary">
					<input type="reset" name="btn-limpiar" 
					value="Limpiar" class="btn btn-warning">
				</td>
			</tr>
		</table>
	</form>
	<br><br>
	<hr>
	<table class="table table-striped table-hover">
		<tr>
			<th>Cliente</th>
			<th>Mecanico</th>
			<th>Cajero</th>
			<th>Modelo Vehiculo</th>
			<th>Placa</th>
			<th>Kilometraje</th>
			<th>Fecha Ingreso</th>
			<th>Repuestos</th>
			<th>Total</th>
		<tr>
		<?php 
			for ($i=0;$i<count($facturas);$i++){
		?>
		<tr>
			<td>
				<?php echo $facturas[$i]->getCliente()->getNombre() . " " . $facturas[$i]->getCliente()->getApellido(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getCajero()->getNombre() . " " . $facturas[$i]->getCajero()->getApellido(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getMecanico()->getNombre() . " " . $facturas[$i]->getMecanico()->getApellido(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getVehiculo()->getModelo()->getNombreModelo() . ", " . $facturas[$i]->getVehiculo()->getModelo()->getMarca()->getNombreMarca(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getVehiculo()->getPlaca(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getKilometraje(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getFechaIngreso(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->obtenerRepuestos(); ?>
			</td>
			<td>
				<?php echo $facturas[$i]->getTotal(); ?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
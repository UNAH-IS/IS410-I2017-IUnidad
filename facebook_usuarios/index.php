<?php
  $nombre="";
  $apellido="";
  $correo="";
  $contrasena="";
  $confirmacionContrasena="";
  $telefono="";
  $fechaNacimiento="";
  $genero="";
  $pais="";
  $arregloGustos=array();

  if (isset($_GET["txt-nombre"]))
    $nombre = $_GET["txt-nombre"];

  if (isset($_GET["txt-apellido"]))
    $apellido = $_GET["txt-apellido"];

  if (isset($_GET["txt-correo"]))
    $correo = $_GET["txt-correo"];

  if (isset($_GET["txt-contrasena"]))
    $contrasena = $_GET["txt-contrasena"];

  if (isset($_GET["txt-confirmacion-contrasena"]))
    $confirmacionContrasena = $_GET["txt-confirmacion-contrasena"];

  if (isset($_GET["txt-fecha-nacimiento"]))
    $fechaNacimiento = $_GET["txt-fecha-nacimiento"];

  if (isset($_GET["txt-telefono"]))
    $telefono = $_GET["txt-telefono"];

  if (isset($_GET["slc-pais"]))
    $pais = $_GET["slc-pais"];

  if (isset($_GET["rbt-genero"]))
    $genero = $_GET["rbt-genero"];

  if (isset($_GET["chk-gustos"]))
     $arregloGustos = $_GET["chk-gustos"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Facebook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Facebook!</h1>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 col-sm-6 col-md-6 col-lg-6">
          <h2>Usuario reciente</h2>
          <p></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2>Crea una cuenta</h2>
          <h4>Es gratis y lo sera siempre</h4>
          <form action="index.php" method="GET">
              <table class="formulario">
                  <tr>
                    <td <?php if ($nombre=="") echo 'class="has-error"'; ?> ><input type="text" name="txt-nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre; ?>"></td>
                    <td <?php if ($apellido=="") echo 'class="has-error"'; ?>><input type="text" name="txt-apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido; ?>"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" name="txt-correo" class="form-control" placeholder="Correo electronico" value="<?php echo $correo; ?>"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="text" name="txt-telefono" class="form-control" placeholder="Numero telefonico" value="<?php echo $telefono; ?>"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="password" name="txt-contrasena" class="form-control" placeholder="Contraseña"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="password" name="txt-confirmacion-contrasena" class="form-control" placeholder="Confirmar contraseña"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label for="txt-fecha-nacimiento">Fecha nacimiento:</label> <input type="date" name="txt-fecha-nacimiento" class="form-control" placeholder="Fecha nacimiento" value="<?php echo $fechaNacimiento; ?>"></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    <!--Para seleccionar por defecto un checkbox o radioboton utiliza la propiedad checked-->
                    <!--En el caso de los select utiliza la propiedad selected-->
                        <label>Genero:</label> 
                        <label><input type="radio" name="rbt-genero" value="Femenino" <?php if ($genero =="Femenino") echo "checked"; ?>>Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="radio" name="rbt-genero" value="Masculino" <?php if ($genero =="Masculino") echo "checked"; ?>>Masculino</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <select name="slc-pais" class="form-control">
                          <option>--País--</option>
                          <option value="1" <?php if ($pais==1) echo "selected"; ?>>Honduras</option>
                          <option value="2" <?php if ($pais==2) echo "selected"; ?>>Nicaragua</option>
                          <option value="3" <?php if ($pais==3) echo "selected"; ?>>El Salvador</option>
                          <option value="4" <?php if ($pais==4) echo "selected"; ?>>Costarica</option>
                      </select>  
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <label>Gustos:</label>
                      <label><input type="checkbox" value="1" name="chk-gustos[]" <?php if (in_array("1",$arregloGustos)) echo "checked";?> >Arroz chino</label>
                      <label><input type="checkbox" value="2" name="chk-gustos[]" <?php if (in_array("2",$arregloGustos)) echo "checked";?> >Chicas</label>
                      <label><input type="checkbox" value="3" name="chk-gustos[]" <?php if (in_array("3",$arregloGustos)) echo "checked";?> >Chicos</label>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="submit" name="btn-registrar" value="Crear cuenta" class="btn btn-primary">
                    </td>
                  </tr>
              </table>            
          </form>
       </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

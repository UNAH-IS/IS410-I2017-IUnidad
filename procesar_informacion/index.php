<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

       <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    
  </head>

  <body>
    <?php
        $email="";
        $password="";
        if(isset($_POST["input-email"])){
          $email =  $_POST["input-email"];
        }
        if(isset($_POST["input-password"])){
          $password =  $_POST["input-password"];
        }

        if (isset($_POST["input-email"]) && isset($_POST["input-password"])){
          $archivo = fopen("usuarios.txt","a+");
          fwrite($archivo, $_POST["input-email"] . "," . $_POST["input-password"]."\n");
          fclose($archivo);
        }
     ?>
    <div class="container">

      <form class="form-signin" action="index.php" method="POST"> <!-- GET POST -->
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="input-email" name="input-email" class="form-control" placeholder="Email address" required autofocus value="<?php echo $email; ?>">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="input-password" name="input-password" class="form-control" placeholder="Password" required value="<?php echo $password;?>">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <!--button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button-->
        <input type= "submit" class="btn btn-lg btn-primary btn-block" value="Ingresar">
      </form>

    </div> <!-- /container -->
  </body>
</html>

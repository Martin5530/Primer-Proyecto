<?php
include('Php/Validacion.php'); // Includes Login Script
 if(isset($_SESSION['login_user_sys'])){
header("location: Php/Pagina Inicio.php");
}
?>
<!--Holis -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="stylesheet" href="Css/estilos_sesion.css">
</head>
<body>
  <center>
   <header>
    <img src="Imagenes/Logo.png" alt="" class="Logo">
    <br/>
    <label for="" class="Area">Gestión Organizacional</label>
    <br><br>
    </header>
    <form action="#" method="post">
    <article>
     <label for="" class="TituloInicio">Inicio de Sesión</label><br>
     <hr>
      <img src="Imagenes/sesion.png" alt="" class="Sesion">
      <br>
      <label for="" name="" class="nota"><?php echo $error; ?></label><br>
      <label for="usuario">Usuario:</label><br>
      <input type="text" name="usuario" id="usuario" placeholder="Restringido.." required autofocus><br>
      <label for="contra">Contraseña:</label><br>
      <input type="password" name="contra" id="contra" placeholder="*******" required><br>
      <a href="#">Olvide mi Contraseña...</a>  <br>
      <input type="submit" value="Iniciar Sesión" class="btnEnviar" name="submit">
    </article>
    </form>
    </center>
</body>
</html>

<?php
include('session.php');
include('../Html/Header.html');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
       <link rel="stylesheet" href="../Css/estilos_inicio.css">
       <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="Flat Login Form Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="stylesheet" href="Css/estilos_sesion.css">
    <title>Principal</title>
<body>
    <div class="body" id="body">
       <label for="chee" class="txtMenu"><img src="../Imagenes/Iconos/Maximizar.png" alt="" width="20"></label>
       <input type="checkbox" id="chee" name="Chee" checked>
        <div class="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="Pruebas2.php" target="Contenido"><i class="fas fa-home" ></i>Inicio</a></li>
            <li><a href="../Html/Pruebas.php" target="Contenido"><i class="fas fa-user"></i>Direcciones</a></li>
            <li><a href="../html/carga_de_puestos.html" target="Contenido"><i class="fas fa-address-card"></i>Carga de Descrpciones</a></li>
            <li><a href="#"><i class="fas fa-clipboard-list"></i>Tabla de Control</a></li>
            <li><a href="#"><i class="fas fa-file-contract"></i>Generar Reportes</a></li>
            <li><a href="CtrlUsuarios.php" target="Contenido"><i class="fas fa-users-cog"></i>Control de Usuarios</a></li>
            <li><a href="Glosario.php" target="Contenido"><i class="fas fa-book"></i>Glosario</a></li>
            <li><a href="#"><i class="fas fa-history"></i>Historicos</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
        </div>
        <div class="contenido">
           <iframe src="Pruebas2.php" style="width: 100%; height: 100%" name="Contenido" frameBorder="0"></iframe>
        </div>
    </div>
</body>
</html>
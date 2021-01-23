<?php
// Estableciendo la conexion a la base de datos
include("Conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Iniciando Sesion
// Guardando la sesion
$user_check=$_SESSION['login_user_sys'];
//$user_check="Administrador";
// SQL Query para completar la informacion del usuario
$ses_sql=mysqli_query($connection, "select nombre_Usu from usuarios where nombre_Usu= '$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['nombre_Usu'];
if(!isset($login_session)){
mysqli_close($connection); // Cerrando la conexion
header('Location: ../Index.php'); // Redirecciona a la pagina de inicio
}
?>
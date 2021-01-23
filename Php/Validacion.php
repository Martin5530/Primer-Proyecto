<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) {
if (empty($_POST['usuario']) || empty($_POST['contra'])) {
$error = "Usuario o Contraseña es invalida";
}
else
{
// Define $username y $password
$username=$_POST['usuario'];
$password=$_POST['contra'];
// Estableciendo la conexion a la base de datos
//include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("Conexion.php");//Contiene de conexion a la base de datos
 
// Para proteger de Inyecciones SQL 
$username    = mysqli_real_escape_string($connection,(strip_tags($username,ENT_QUOTES)));
$password =  sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php
 
$sql = "SELECT nombre_Usu, contrasena_Usu FROM usuarios WHERE nombre_Usu = '" . $username . "' and contrasena_Usu='".$password."';";
$query=mysqli_query($connection,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Iniciando la sesion
		header("location: Php /Pagina Inicio.php"); // Redireccionando a la pagina profile.php
	//$error="Bienvenido ".$username;
	
} else {
$error = "El Usuario y/o contraseña es Incorrecta.";
}
}
}
?>

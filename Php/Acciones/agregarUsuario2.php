<?php 
include ('../Conexion.php');
$num_Expe=$_POST['numExpe'];
$nom_Usu=$_POST['nomUsu'];
$apellidoP_Usu=$_POST['apellidoPUsu'];
$apellidoM_Usu=$_POST['apellidoMUsu'];
$area_Usu=$_POST['areaUsu'];
$puesto_Usu=$_POST['puestoUsu'];
$tipo_Usu=$_POST['tipoUsu'];
$numTel_Usu=$_POST['numTelUsu'];
$contra_Usu=$_POST['contraUsu'];
$repContra_Usu=$_POST['repContraUsu'];

$sql="INSERT INTO usuarios VALUES(null,'$num_Expe','$nom_Usu','$apellidoP_Usu','$apellidoM_Usu','$area_Usu','$puesto_Usu','$tipo_Usu','$numTel_Usu',SHA1('$contra_Usu'))";

if (mysqli_query($connection,$sql)) {
	echo "Insertado";
}
else{
	echo "no insertado";
	}
 ?>


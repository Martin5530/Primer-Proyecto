<?php 
$id=$_GET[''];
$num_Exp_Usu="";
function BuscarUsuario()
{
	include ('Conexion.php');
	$sql="SELECT num_Exp_Usu,nombre_Usu FROM usuarios";
	if($result=mysqli_query($connection,$sql)){
	while ($row=mysqli_fetch_assoc($result)) {
		echo $row["num_Exp_Usu"];
		echo $row["nombre_Usu"];
		$num_Exp_Usu=(int)$row["num_Exp_Usu"];
			}
}
else {
	echo "Error de coneccion";
}

}

 ?>

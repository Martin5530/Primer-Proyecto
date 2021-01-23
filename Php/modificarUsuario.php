<?php
include('session.php');
$id=$_GET['id'];

	include ('Conexion.php');
	$sql="SELECT * FROM usuarios WHERE id_Usu='$id'";
	if($result=mysqli_query($connection,$sql)){
	$row=mysqli_fetch_assoc($result);
		echo $row["area_Usu"];
}
else {
	echo "Error de coneccion";
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Css/bt/bootstrap.min.css">
	<title>Modificar Usuario</title>
</head>
<body>
	<h1 class="text-center">Editar Usuario</h1>
	<div class="container">	
		<form action="" method="POST" name="formAgregarUsu">
			<div class="form-group row">
				<div class="col-md-3">
				<label for="" class="control-label offset-md-3">No. Expediente:</label>
				<input type="number" class="form-control" id="" name="numExpe" placeholder=""
				value="<?php echo (int)$row['num_Exp_Usu']; ?>">
				</div>
				<div class="col-md-3">
				<label for="" class="control-label offset-md-3">Nombre:</label>
				<input type="text" class="form-control" id="" name="nomUsu" placeholder=""value="<?php echo $row['nombre_Usu']; ?>">
				</div>
				<div class="col-md-3">
				<label for="" class="control-label offset-md-3">Apellido Paterno:</label>
				<input type="text" class="form-control" id="" name="apellidoPUsu" placeholder="" required="" value="<?php echo $row['apellido_P_Usu']; ?>">
				</div>
				<div class="col-md-3">
				<label for="" class="control-label offset-md-3">Apellido Materno:</label>
				<input type="text" class="form-control" id="" name="apellidoMUsu" placeholder="" required=""value="<?php echo $row['apellido_M_Usu']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Area Perteneciente:</label>
				<input type="text" class="form-control" id="" name="areaUsu" placeholder="" required=""value="<?php print $row['area_Usu']; ?>">
				</div>
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Puesto Perteneciente:</label>
				<input type="text" class="form-control" id="" name="puestoUsu" placeholder="" required=""value="<?php echo $row['puesto_Usu']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Tipo Usuario: </label>
				<select class="form-control" name="tipoUsu" id="">
					<option value="Administrador">Administrador</option>
					<option value="Direccion">Dirección</option>
					<option value="Subdireccion">Subdirección</option>
					<option value="Gerente">Gerente</option>
					<option value="RH">RH</option>
				</select>
				</div>
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Numero de Telefono:</label>
				<input type="number" class="form-control" id="" name="numTelUsu" placeholder=""value="<?php echo (int)$row['telefono_Usu']; ?>">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Contraseña:</label>
				<input type="password" class="form-control" id="txtPassword" name="contraUsu" placeholder="" required=""value="<?php echo $row['contrasena_Usu']; ?>">
				</div>
				<div class="col-md-6">
				<label for="" class="control-label offset-md-4">Repetir Contraseña:</label>
				<input type="password" class="form-control" id="" name="repContraUsu" placeholder="" onkeyup="comprobarClave()" required=""value="<?php echo $row['contrasena_Usu']; ?>">
				</div>  
			</div>
			<p id="alert"></p>
				<div class="form-group text-center">
				<input type="submit" value="Actualizar Usuario" class="btn btn-primary" id="btnAgregar" >
				<a href="CtrlUsuarios.php" class="btn btn-danger">Cancelar</a>
				</div>
		</form>
	</div>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="../Js/jquery-3.5.1.min.js"></script>
	<script src="../Js/bt/bootstrap.min.js"></script>
</body>
</html>
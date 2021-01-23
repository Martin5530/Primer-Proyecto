<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Css/bt/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<h1 class="text-center">Agregar Usuario</h1>
	<div class="container">	
		<form action="Acciones/agregarUsuario2.php" method="POST" name="formAgregarUsu">
			<div class="form-group row">
				<div class="col-md-3">
				<label for="">No. Expediente:</label>
				<input type="number" class="form-control" id="" name="numExpe" placeholder="">
				</div>
				<div class="col-md-3">
				<label for="">Nombre:</label>
				<input type="text" class="form-control" id="" name="nomUsu" placeholder="" required="">
				</div>
				<div class="col-md-3">
				<label for="">Apellido Paterno:</label>
				<input type="text" class="form-control" id="" name="apellidoPUsu" placeholder="" required="">
				</div>
				<div class="col-md-3">
				<label for="">Apellido Materno:</label>
				<input type="text" class="form-control" id="" name="apellidoMUsu" placeholder="" required="">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="">Area Pereneciente:</label>
				<input type="text" class="form-control" id="" name="areaUsu" placeholder="" required="">
				</div>
				<div class="col-md-6">
				<label for="">Puesto Perteneciente:</label>
				<input type="text" class="form-control" id="" name="puestoUsu" placeholder="" required="">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="">Tipo Usuario: </label>
				<select class="form-control" name="tipoUsu" id="">
					<option value="Administrador">Administrador</option>
					<option value="Direccion">Dirección</option>
					<option value="Subdireccion">Subdirección</option>
					<option value="Gerente">Gerente</option>
					<option value="RH">RH</option>
				</select>
				</div>
				<div class="col-md-6">
				<label for="">Numero de Telefono:</label>
				<input type="number" class="form-control" id="" name="numTelUsu" placeholder="">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-md-6">
				<label for="">Contraseña:</label>
				<input type="password" class="form-control" id="txtPassword" name="contraUsu" placeholder="" required="">
				</div>
				<div class="col-md-6">
				<label for="">Repetir Contraseña:</label>
				<input type="password" class="form-control" id="" name="repContraUsu" placeholder="" onkeyup="comprobarClave()" required="">
				</div>  
			</div>
			<p id="alert"></p>
				<div class="form-group text-center">
				<input type="submit" value="Agregar Usuario" class="btn btn-primary" id="btnAgregar" >
				<a href="CtrlUsuarios.php" class="btn btn-danger">Cancelar</a>
				</div>
		</form>
		
	<script>
function comprobarClave(){
    clave1 = document.formAgregarUsu.contraUsu.value
    clave2 = document.formAgregarUsu.repContraUsu.value
	 
    if (clave1 == clave2){
       document.getElementById('alert').innerHTML = '<div class="alert alert-success"> <a href="" class="close" data-dismiss="alert">&times;</a> Las contraseñas si Coinciden </div>';
       document.getElementById('btnAgregar').disabled=false;
    }
    else{
 		
       document.getElementById('alert').innerHTML = '<div class="alert alert-danger"> <a href="" class="close" data-dismiss="alert">&times;</a> Las contraseñas no Coinciden </div>';
       document.getElementById('btnAgregar').disabled=true;
    }}
</script>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="../Js/jquery-3.5.1.min.js"></script>
	<script src="../Js/bt/bootstrap.min.js"></script>
</body>
</html>
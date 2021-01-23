<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../Css/bt/bootstrap.min.css">
	<link rel="stylesheet" href="../Css/estilos_user.css">
	<title>Document</title>
</head>
<body>
	<div class="container">
	<h1 class="text-center">Control de Usuarios</h1>	
		<img src="../Imagenes/img_sesion.png" class="mx-auto d-block" width="120" alt="">
		
	<form action="#" method="POST">
		<label for="buscarUser" class="control-label">Buscar:</label>
  <div class="form-group row">
  	<div class="col-md-6">
    <input type="text" class="form-control" placeholder="Buscar por Nombre o Apellido" id="buscarUser" name="txtBuscar">
    </div>
    	<div class="col-md-2">
      <button class="btn btn-default" type="submit">
        <i class="fas fa-search"></i>
      </button>
  		</div>
      <div class="col-md-4"><input type="submit" class="btn btn-info" value="Agregar Usuario" formaction="agregarUsuario.php"></div>
    </div>
  </div>
</form>
	<div class="container-fluid">   
		  <?php  
		//tomamos los datos del archivo conexion.php  
		include("../Php/Conexion.php");   
		//se envia la consulta  
		$consulta = "SELECT id_Usu, num_Exp_Usu, nombre_Usu,apellido_M_Usu FROM usuarios ORDER by id_Usu";

		if ($resultado = mysqli_query($connection, $consulta)) {

		  

		  /* obtener array asociativo */
		    
		    
		//se despliega el resultado  
		echo "<div class='table-responsive'>";
		echo "<table class='table table-bordered table-hover  text-center'>"; 
		echo "<thead>"; 
		echo "<tr>";  
		echo "<th class='align-text-bottom'>Numero Expediente</th>";  
		echo "<th class='align-text-bottom'>Nombre</th>";  
		echo "<th class='align-text-bottom'>Apellido Paterno</th>";  
		echo "<th class='align-text-bottom'>Apellido Materno</th>";
		echo "<th class='align-text-bottom'>Area Perteneciente</th>";
		echo "<th class='align-text-bottom'>Puesto</th>";
		echo "<th class='align-text-bottom'>Tipo de Usuario</th>";
		echo "<th class='align-text-bottom'>Numero Telefono</th>";
		echo "<th class='align-text-bottom'>Opciones</th>";
		echo "</tr>";  
		echo "</thead>"; 
		while ($row = mysqli_fetch_assoc($resultado)) {
		     
			 
		    echo "<tr>";  
		    echo "<td>".$row['id_Usu']."</td>";
		    echo "<td>Martin</td>";
		    echo "<td>Vergara</td>";
		    echo "<td>".$row['apellido_M_Usu']."</td>";
		    echo "<td>Gestion Organizacional</td>";
		    echo "<td>Recidente</td>";
		    echo "<td>Administrador</td>";
		    echo "<td>5573808314</td>";   
		    echo '<td><a href="modificarUsuario.php?id='.$row['id_Usu'].'"><img src="../Imagenes/Iconos/Modificar_Usu.png" alt=""width="15"> </a> <a href=""> <img src="../Imagenes/Iconos/eliminar_usuario.png" alt="" width="15"></a></td>';  

		    echo "</tr>"; 
		      
		}  
		echo "</table>";
		echo"</div>";
		    /* liberar el conjunto de resultados */
		    mysqli_free_result($resultado);
		}  
		?> 
	</div>
</tbody>
</table>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="../Js/jquery-3.5.1.min.js"></script>
	<script src="../Js/bt/bootstrap.min.js"></script>
</body>
</html>
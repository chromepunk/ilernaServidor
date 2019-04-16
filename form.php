<?php
	$host="localhost";
	$user="joan";
	$pass="joan";
	$bd="conferencia";

	//crea la conexion a la base de datos
	//
	/*
	$sentencia = "insert...";
	if(mysqli_query($con, $sentencia) == true){
		echo "registro";
	}
	nos devuelve un true si hay registro
	 */
	$con = new mysqli($host, $user, $pass, $bd);

	//
	// Control de errores de la conexion 
	if ($con-> connect_errno){
		echo " la conexion ha fallado";
		exit();
	}

	//idioma de la base de datos
	$con->set_charset("UTF8");

	//////////////hasta aqui conexion///////

	include "consultas.php";
	if(isset($_POST['nombre'])){
	//	insertar($con, $_POST['nombre'],$_POST['apellido1'],$_POST['org_id'],$_POST['email'],$_POST['username'],$_POST['passw']);
//	buscar($con, $_POST['username']);	
	login($con, $_POST['username'], $_POST['passw']);	
	
	
	}

?>
<html>
<body>
	<form method="post">
		<label>nombre</label>
		<input type = "text" name="nombre"/><br>
		<label>apellido</label>
		<input type = "text" name="apellido1"/><br>
		<label>org_id</label>
		<input type = "text" name="org_id"/><br>
		<label>email</label>
		<input type = "text" name="email"/><br>
		<label>username</label>
		<input type = "text" name="username"/><br>
		<label>passw</label>
		<input type = "text" name="passw" value="potasio"/><br>
		<input type = "submit" value = "enviar"/>
	</form>
</body>
</html>

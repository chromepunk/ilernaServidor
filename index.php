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

	//crear la consulta
	$query ="select * from usuarios";

	//obtener los resultados
	$res=$con-> query($query);

?>

<!DOCTYPE html>
<html>
<body>
<?php
	while ($fila = $res -> fetch_array()){
		echo $fila['apellido1']."<br>";
	}

?>

</body>
</html>
<?php 
	$con->close();
?>


<?php


function insertar($con, $nombre, $apellido1, $org_id, $email, $username, $passw ){
	$sentencia = "insert into usuarios (nombre, apellido1, org_id, email, username, passw) values ('$nombre', '$apellido1', $org_id, '$email', '$username', '$passw')";

	if(mysqli_query($con, $sentencia)){
		echo "<h3>registro insertado</h3>";
	}else{
		echo "<h3>error al insertar</h3>";
	}
}

function buscar($con, $username){

	$sentencia="select usuario_id from usuarios where username='$username'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){
		echo "existe";
		}else{ 
			echo "no existe";
		}
}

function login($con, $username, $passw){
	$sentencia="select usuario_id from usuarios where username='$username' and passw='$passw'";
	$res=$con->query($sentencia);
	if($res->num_rows > 0){
		echo "login";
		}else{ 
			echo "usuario o contraseña incorrectas";
		}


}
function subeComunicacion($con){

}
?>

<?php
include('config/setup.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta_login = "SELECT * FROM usuarios WHERE EMAIL='$usuario' AND CLAVE=md5('$clave')";

$filas = mysqli_query($cnx, $consulta_login );
$columnas = mysqli_fetch_assoc($filas);


if($columnas){

	$_SESSION['usuario'] = $usuario;
	$_SESSION['id'] = $columnas['ID'];
	header("Location:panel_de_control.php");
		
}else{
	session_destroy();
	$rta = '&error=1';
	header("Location: ".$_SERVER['HTTP_REFERER']."?".$rta);
}



?>
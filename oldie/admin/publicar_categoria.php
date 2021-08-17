<?php
include("config/setup.php");

$nombre = utf8_encode(trim($_POST['nombre']));
//$patNombre='/^([a-zA-Z0-9áéíóúñÁÉÍÓÚÑ]{2,}[\s]?)+$/';
$errores=0;
$error='';
			
//$rta=preg_match($patNombre,$nombre);
if (empty($nombre)) {
$error.="&enombre=Nombre invalido";
$errores++;
//echo $error;
}

if ($errores>0){
$_SESSION['altacat']=$_POST;
header("Location:ingreso_categoria.php?".$error);
} else {
	

$q=<<<SQL
INSERT INTO
categorias
SET
NOMBRE='$nombre'
SQL;


			mysqli_query( $cnx, $q );
			header("Location:ingreso_categoria.php?t=ok");

}





?>
<?php
include("config/setup.php");

$id_c=$_POST['id_c'];
$nombre =utf8_encode(trim($_POST['nombre']));

	//$patNombre='/^([a-zA-Z0-9áéíóúñÁÉÍÓÚÑ]{2,}[\s]?)+$/';
	
	
	$errores=0;
	
	$error='';
			
			
	//$rta=preg_match($patNombre,$nombre) ;
	if (empty($nombre)) {
		$error.="&enombre=Nombre invalido";
		$errores++;
		
	}
	
	
		
	if ($errores>0) {
			
			$_SESSION['editarcat']=$_POST;
			header("Location:editar_categoria.php?id=$id_c".$error);
			
	} else {
			
	


			

$q=<<<SQL
UPDATE
categorias
SET
NOMBRE='$nombre'
WHERE id=$id_c
SQL;


			mysqli_query( $cnx, $q );
			header("Location:listado_categorias.php?m=ok");

}





?>
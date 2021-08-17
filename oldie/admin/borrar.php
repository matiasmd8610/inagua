<?php
include_once('config/setup.php');

if(isset($_GET['id'])) {

$id=mysqli_real_escape_string($cnx,$_GET['id']);

$q =<<<SQL
SELECT
categorias.NOMBRE,
IMAGEN
FROM
categorias join articulos 
ON
categorias.id=articulos.CATEGORIA_ID
where articulos.ID='$id'
SQL;

$f = mysqli_query($cnx,$q);
$c = mysqli_fetch_assoc($f);


	$sql = "DELETE FROM articulos WHERE id='$id'";
	$borrarQuery = mysqli_query($cnx,$sql);
	
	if($borrarQuery){
		if(file_exists("../images/$c[IMAGEN]")){
			//borra el archivo fisico
			unlink("../images/$c[IMAGEN]");
		}		
		$_SESSION['b']="EL ARTICULO SE BORRO EXITOSAMENTE";
header("Location:listado_articulos.php");
	}
	
	
	
}else{
	$_SESSION['b']="EL ARTICULO SE BORRO EXITOSAMENTE";
header("Location:listado_articulos.php");
}
?>
<?php
include_once('config/setup.php');

if(isset($_GET['id'])) {

$id=mysqli_real_escape_string($cnx,$_GET['id']);


		$consul = "select * from articulos WHERE categoria_id=$id";
		$resul = mysqli_query($cnx,$consul); 
		$num = mysqli_num_rows($resul);
		if ($num>0) {
			$_SESSION['err_cat']="NO SE PUEDE ELIMINAR LA CATEGORIA YA QUE TIENE ARTICULOS ASOCIADOS";
			header("Location:listado_categorias.php");
		}

	$sql = "DELETE FROM categorias WHERE id='$id'";
	$borrarQuery = mysqli_query($cnx,$sql);
	
	if($borrarQuery){
		$_SESSION['c']="LA CATEGORIA SE BORRO EXITOSAMENTE";
header("Location:listado_categorias.php");
	}
	
	
	
}else{
	$_SESSION['c']="LA CATEGORIA SE BORRO EXITOSAMENTE";
header("Location:listado_categorias.php");
}
?>
<?php
include("config/setup.php");
$id_p=$_POST['id_p'];
$foto=$_FILES['foto']['name'];
$foto_temp=$_FILES['foto']['tmp_name'];
$categoria=$_POST['categoria'];
$nombre =utf8_encode(trim($_POST['nombre']));
$descripcion_corta=utf8_encode(trim($_POST['descripcion_corta']));
$desc=utf8_encode(trim($_POST['descripcion']));


$dar_enters= str_replace("\n","<br>",$desc);
$dar_enters_corta=str_replace("\n","<br>",$descripcion_corta);
$desc_ok=$dar_enters;
$desc_corta_ok=$dar_enters_corta;

	
	$patFoto='/^(.+\.jpg|.+\.jpeg|.+\.png)$/';
	//$patNombre='/^([a-zA-Z0-9������������]{2,}[\s]?)+$/';
	
	
	$errores=0;
	
	$error='';
			
			
	//$rta=preg_match($patNombre,$nombre) ;
	if (empty($nombre)) {
		$error.="&enombre=Nombre invalido";
		$errores++;
		
		
	}
	
	
	if (empty($desc)) {
		$error.="&edesc=Descripcion vacia";
		$errores++;
		
		
	}
	
	
	if (empty($descripcion_corta)) {
		$error.="&edescc=Descripcion corta vacia";
		$errores++;
		
		
	}
	
	
	
	$rta=preg_match($patFoto,$foto) ;
	if ($rta!=1) {
		$error.="&efoto=Foto invalida";
		$errores++;
	}
	
	if ($categoria==0) {
		
		$error.="&ecat=No seleccion� categoria";
		$errores++;
	}
	
	
	if ($errores>0) {
			
			$_SESSION['editarart']=$_POST;
header("Location:editar_articulo.php?id=$id_p".$error);
			
	} else {
			
	


			$q="SELECT NOMBRE from categorias WHERE ID='$categoria' LIMIT 1";
			$filas=mysqli_query( $cnx, $q );
			$columnas = mysqli_fetch_assoc($filas);
			
			
			
			/*---resize------
			
							
							$original = imagecreatefromjpeg( $foto_temp );
							$ancho = imagesx($original);
							$alto = imagesy($original);

							$n_ancho = 200;
							$n_alto = round( $alto * $n_ancho / $ancho );

							$copia = imagecreatetruecolor($n_ancho,$n_alto);
							
							imagecopyresampled($copia,$original,0,0,0,0,$n_ancho,$n_alto,$ancho,$alto);
							
							$nombre_foto=md5($_FILES['foto']['tmp_name']);

							imagejpeg($copia,"../images/$columnas[NOMBRE]/$nombre_foto",100);
			
			
			--------------------------------*/
			
			move_uploaded_file($foto_temp, "../images/$foto");

$q=<<<SQL
UPDATE
articulos
SET
NOMBRE='$nombre',
DESCRIPCION_CORTA='$desc_corta_ok',
DESCRIPCION_LARGA='$desc_ok',
CATEGORIA_ID='$categoria',
IMAGEN='$foto',
FECHA_ALTA=NOW()
WHERE id=$id_p
SQL;


			mysqli_query( $cnx, $q );
			header("Location:listado_articulos.php?m=ok");

}





?>
<?php
include_once('config/setup.php');
?>

<div>

<?php

$consulta =<<<SQL
SELECT
*
FROM
categorias
SQL;

$filas = mysqli_query($cnx,$consulta);
		
		
		

while( $columna = mysqli_fetch_assoc($filas) ){

		echo "<h1 class='titulo-arti'>".$columna['NOMBRE']."</h1>\n";
		
		
$consulta2 =<<<SQL
SELECT
*
FROM
articulos
where CATEGORIA_ID=$columna[ID];
SQL;

$filas2 = mysqli_query($cnx,$consulta2);
		
		echo "<ul class='items-art'>\n";
		while( $columna2 = mysqli_fetch_assoc($filas2) ){

		echo "<li><a href='articulo.php?id=$columna2[ID]'>".utf8_decode($columna2['NOMBRE'])."</a></li>\n";
		
		}
		
		echo "</ul>\n";
		
	
}

	


?>





</div>
<?php
include_once('admin/config/setup.php');

$consulta ="SELECT * FROM articulos WHERE id=$_GET[id];";

$fila=mysqli_query($cnx,$consulta);
$columna=mysqli_fetch_assoc($fila);
				
				echo "<div id='centro-arti'>";
					echo "<h1>".utf8_decode($columna['NOMBRE'])."</h1>\n";
					echo "<div id='linea-divisoria-horizontal'>&nbsp;</div>";
					echo "<p id='descripcion-larga'>".utf8_decode($columna['DESCRIPCION_LARGA'])."</p>\n";
					echo "<p id='img-art'><img id='imagen-art'  src='images/$columna[IMAGEN]' alt='".utf8_decode($columna['NOMBRE'])."' title='".utf8_decode($columna['NOMBRE'])."' /></p>";
				echo "</div>";
				
				
				echo "<div id='no-dude'>";
				
				if (file_exists("no-dude-en-llamarnos.php")) {
					include("no-dude-en-llamarnos.php");
				} else{
					echo "<p class='no_enc'>Archivo no encontrado</p>";
					
					echo "</div>";
				}	
	
				
				echo "</div>";
			
?>
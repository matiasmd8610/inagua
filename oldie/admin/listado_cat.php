
<?php
								
		if (isset($_SESSION['ec'])) {
								
			echo "<p id='exitosamente'>".$_SESSION['ec']."</p>";
								
		}
		
		if (isset($_SESSION['c'])) {
								
			echo "<p id='exitosamente'>".$_SESSION['c']."</p>";
								
		}
		
		if (isset($_SESSION['err_cat'])) {
								
			echo "<p id='err_cat'>".$_SESSION['err_cat']."</p>";
								
		}
		
		
		
?>

<?php



include_once('config/setup.php');						
	
	
$consulta =<<<SQL
SELECT
*
FROM
categorias
ORDER BY id ASC
SQL;

$filas = mysqli_query($cnx,$consulta);
		
		
		$consul = "select * from categorias";
		$resul = mysqli_query($cnx,$consul); 
		$num = mysqli_num_rows($resul);
		if ($num>0) {


echo "<table id='tabla_productos'>";
echo "<tr id='fila1'><th>CATEGORIA</th><th>ACCIONES</th></tr>";
	

	$j=0;
	while( $columna = mysqli_fetch_assoc($filas) ){
	
			

		
		$j=$columna['ID'];
		
		if ($j%2==0) {
			$class="par";
		} else {
			$class="inpar";
		}
		echo "<tr class='$class'> \n
					<td class='tabla_2'><ul class='items'><li><span class='nombre_prod'>".utf8_decode($columna['NOMBRE'])."</span> </li>\n";
				
					echo "</ul></td>";
					echo "<td class='tabla_3'><a href='editar_categoria.php?id=$columna[ID]'><img src='images/editar.png' alt='Editadr' title='EDITAR'></a>&nbsp;&nbsp;<a onClick='return preguntac();' href='borrar_cat.php?id=$columna[ID]'><img src='images/eliminar.png' alt='eliminar' title='ELIMINAR'></a></td></tr> \n";
					
	}
	
			
			
	echo "</table>";
	
} else {

	echo "<p class='error'>No hay categorias</p>";
	
}


							
?>
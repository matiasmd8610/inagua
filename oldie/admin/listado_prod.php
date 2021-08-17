
<?php
								
		if (isset($_SESSION['t'])) {
								
			echo "<p id='exitosamente'>".$_SESSION['t']."</p>";
								
		}
		
		if (isset($_SESSION['b'])) {
								
			echo "<p id='exitosamente'>".$_SESSION['b']."</p>";
								
		}
		
		
		
?>

<?php

if (isset($_POST['categoria'])){
	$categoria=$_POST['categoria'];
}

if(isset($_POST['listar']) and $categoria!=0) {

include_once('config/setup.php');						
	
	
	$cantidad_por_pagina = 20;
	$pagina_actual=isset($_GET['p'])?$_GET['p']:1;
	$donde_empiezo = ($pagina_actual-1) * $cantidad_por_pagina ;
	
$consulta =<<<SQL
SELECT
*
FROM
articulos
WHERE categoria_id='$categoria'
ORDER BY id ASC
LIMIT $donde_empiezo, $cantidad_por_pagina

SQL;

$filas = mysqli_query($cnx,$consulta);

		$consul = "select * from articulos WHERE categoria_id=$categoria";
		$resul = mysqli_query($cnx,$consul); 
		$num = mysqli_num_rows($resul);
		if ($num>0) {

echo "<table id='tabla_productos'>";
echo "<tr id='fila1'><th>FOTO</th><th>PRODUCTO</th><th>ACCIONES</th></tr>";
	

	$j=0;
	while( $columna = mysqli_fetch_assoc($filas) ){
	
			
$q =<<<SQL
SELECT
NOMBRE
FROM
categorias 
where ID='$columna[CATEGORIA_ID]'
SQL;

$f = mysqli_query($cnx,$q);
$c = mysqli_fetch_assoc($f);
		
		$j=$j+1;
		
		if ($j%2==0) {
			$class="par";
		} else {
			$class="inpar";
		}
		echo "<tr class='$class'> \n
					<td class='tabla_1'><img src='../images/$columna[IMAGEN]' alt='$columna[NOMBRE]' width='110' height='80'></td> \n
					<td class='tabla_2'><ul class='items'><li><span class='nombre_prod'>".utf8_decode($columna['NOMBRE'])."</span></li>\n";
				
					echo "</ul></td>";
					echo "<td class='tabla_3'><a href='editar_articulo.php?id=$columna[ID]'><img src='images/editar.png' alt='Editadr' title='EDITAR'></a>&nbsp;&nbsp;<a onClick='return pregunta();' href='borrar.php?id=$columna[ID]'><img src='images/eliminar.png' alt='eliminar' title='ELIMINAR'></a></td></tr> \n";
					
	}
	
			
			
	echo "</table>";
	


$consulta =<<<SQL
SELECT
COUNT(articulos.ID) AS CANT
FROM
articulos
SQL;

$fila=mysqli_query($cnx,$consulta);
$columna=mysqli_fetch_assoc($fila);

$cantidad_de_paginas = ceil( $columna['CANT']/$cantidad_por_pagina );

echo "<div class='paginador'>";

if( $pagina_actual > 1 ){

echo '<a href="listado_articulos.php?&p='.($pagina_actual-1).'"> &lArr; </a> ';

}

for( $i = 1; $i <= $cantidad_de_paginas; $i++ ){
	if( $i <= $pagina_actual - 4 ){ continue; }
	if( $i >= $pagina_actual + 3 ){ continue; }

	//vinculo
	echo ' <a href="listado_articulos.php?&p='.$i.'"'; 
	if( $i == $pagina_actual ){
		echo ' style="font-weight:bold;color:red;" ';
	}
	echo '>';
	echo "Pag. $i";
	echo '</a> ';
	//vinculo
	
}

if( $pagina_actual < $cantidad_de_paginas ){

echo '<a href="listado_articulos.php?&p='.($pagina_actual+1).'"> &rArr; </a> ';

}

echo "</div>";	

			} else {
				echo "<p class='error'>No hay articulos</p>";
			}
	
} else {
	
	if(isset($_POST['listar'])) {
		echo "<p class='error'>No selecciono categoria</p>";
	}
}

							
?>
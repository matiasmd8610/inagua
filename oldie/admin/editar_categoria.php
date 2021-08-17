<?php
include('config/funciones.php');
if (!isset($_SESSION['usuario'])) {
										
	header("Location:index.php");
									
}
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
		<meta charset="UTF-8">
		<title>PANEL DE CONTROL INAGUA - Desagote y Limpieza de Piletas</title>
		<meta name="description" content="Desagote y Limpieza de Piscinas - Mantenimiento de Piscinas en Casas - Consorcios - Edificios" />
		<meta name="keywords" content="Desagote y Limpieza de Piscinas - Mantenimiento de Piscinas en Casas - Consorcios - Edificios" />
		<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
		<link rel="icon" type="image/jpg" href="../images/logo.png" />
		<link rel="stylesheet" media="all" type="text/css" href="estilos.css" />
		
</head>
<body>
	<div id="contenedor">
		<header>
				<div id="header1"></div>
				<div id="header2">
			
					<?php
									if (isset($_SESSION['usuario'])) {
										
										echo "<p id='ureg'>".$_SESSION['usuario']."</p>";
										echo "<p id='salir'><a href='logout.php'>Cerrar sesi&oacute;n</a></p>";
									
									}
									
									
								
						?>
				</div>
		</header>
		
		<div id="centro-panel">
			
			<div id="izq">
			
				<ul id="acciones">
							
				
					<li><a href="panel_de_control.php">Publicar articulo</a></li>
					<li><a href="listado_articulos.php">Listar productos</a></li>
					<li><a href="ingreso_categoria.php">Publicar categoria</a></li>
							
				</ul>
			
			</div>
			
			<div id="der">
			
				<h2 id="ingresar_p">MODIFICAR CATEGORIA</H2>
						
				<form method="POST" action="publicar_categoria_editada.php" name="publicar_categoria" id="publicar_articulo" enctype="multipart/form-data">
		
				<?php


	
					if( isset($_SESSION['editarcat'])){ 
							
							$nombre = $_SESSION['editarcat']['nombre'];
							unset($_SESSION['editarcat']);
									
					}
		

include_once('config/setup.php');
if (isset($_GET['id'])) {
 $id=$_GET['id'];
 
$q =<<<SQL
SELECT
*
FROM
categorias
where id='$id'
SQL;
		
$filas = mysqli_query($cnx, $q);
$columnas=mysqli_fetch_assoc($filas);
 
 
}


		
			
			
?>				
								
								
								<div>
									<label for="nombre_c">Nombre de la categoria</label><br />
									<input type="text" name="nombre" id="nombre_c" value="<?php 
										if (isset($nombre)) {
											echo $nombre; 
										}
										elseif (isset($columnas['NOMBRE'])) {
											echo utf8_decode($columnas['NOMBRE']); 
										}
										
									?>" />
									<?php
										if (isset($_GET['enombre'])) {
											echo "<p class='error_producto'>".$_GET['enombre']."</p>";
										}
									?>
								</div>
								
								<input type="hidden" name="id_c" value="<?php 
										if (isset($columnas['ID'])) {
											echo $columnas['ID']; 
										}
										
									?>" />
								
									
								<div>
									<input type="submit" value="MODIFICAR" name="agregar" />
									<input type="button" value="CANCELAR" name="cancelar" id="cancelar" />
								
								</div>
							
							
						</form>
			</div>
		
		
		
		
		</div>
		
		
		
		<footer>
		
			<?php
							
							if (file_exists("pie.php")) {
								include("pie.php");
							} else
								{
								echo "<p class='no_enc'>Archivo no encontrado</p>";
								}
						
						
						
				?>
		
		
		</footer>
	</div>
	
	<script type="text/javascript">
		
		
			
				function preguntac() {
					if (!confirm("Seguro desea borrar la categoria?")) {
						return false;
					}

				}

			var cancelar=document.getElementById('cancelar');
			
			
			cancelar.onclick = function () {
				location.href = 'listado_categorias.php';
				//alert(categoria);
			}				
				
	</script>
</body>
</html>
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
		<script type="text/javascript" src="scripts/script.js"></script>
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
							
				
					<li><a href="listado_articulos.php">Listar art&iacute;culos</a></li>
					<li><a href="listado_categorias.php">Listar categorias</a></li>
					<li><a href="panel_de_control.php">Publicar art&iacute;culo</a></li>
							
							
				</ul>
			
			</div>
			
			<div id="der">
						
					<h2 id="ingresar_p">INGRESAR CATEGORIA</H2>
						
						<?php
								
							if (isset($_GET['t'])) {
													
								echo "<p id='exitosamente'>LA CATEGORIA SE AGREGO EXITOSAMENTE</p>";
													
							}
							
						
												
						?>
					
					
					<form method="POST" action="publicar_categoria.php" name="publicar_categoria" id="publicar_articulo" enctype="multipart/form-data">
		
								
								
								
								<div>
									<label for="nombre_c">Nombre de la categoria</label><br />
									<input type="text" name="nombre" id="nombre_c" value="<?php 
										if (isset($nombre)) {
											echo $nombre; 
										}
									?>" />
									<?php
										if (isset($_GET['enombre'])) {
											echo "<p class='error_producto'>".$_GET['enombre']."</p>";
										}
									?>
								</div>
								
							
								
									
								<div>
									<input type="submit" value="Agregar categoria" name="agregar" />
								
								
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
</body>
</html>
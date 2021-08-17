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
					<li><a href="listado_articulos.php">Listar art&iacute;culos</a></li>
					<li><a href="ingreso_categoria.php">Publicar categoria</a></li>
							
				</ul>
			
			</div>
			
			<div id="der">
						
					<h2 id="listado_p">LISTADO CATEGORIAS</H2>
					<?php
						if (isset($_GET['m'])) {
													
								echo "<p id='exitosamente'>LA CATEGORIA SE MODIFICO EXITOSAMENTE</p>";
													
							}
					?>
					<?php
						include_once('listado_cat.php');
						if (isset($_SESSION['ec'])) {
								
								unset($_SESSION['ec']);
													
							}
							
						if (isset($_SESSION['c'])) {
													
								unset($_SESSION['c']);
													
							}
						if (isset($_SESSION['err_cat'])) {
													
								unset($_SESSION['err_cat']);
													
							}
					?>
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
				
	</script>
</body>
</html>
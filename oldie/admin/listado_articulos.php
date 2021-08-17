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
							
				
					<li><a href="panel_de_control.php">Publicar articulo</a></li>
					<li><a href="listado_categorias.php">Listar categorias</a></li>
					<li><a href="ingreso_categoria.php">Publicar categoria</a></li>	
							
				</ul>
			
			</div>
			
			<div id="der">
						
					<h2 id="listado_p">LISTADO PRODUCTOS</H2>
					
					<?php
						if (isset($_GET['m'])) {
													
								echo "<p id='exitosamente'>EL ARTICULO SE MODIFICO EXITOSAMENTE</p>";
													
							}
					?>
					
					<form method="POST" action="" name="publicar_articulo" id="publicar_articulo" enctype="multipart/form-data">
		
								
								<div>
									<label for="categoria">Seleccione categoria</label><br />
									<select name="categoria" id="categoria">
										<option value="0">Seleccionar</option>
										<?php
										
											$categorias=obtener_categorias();
											
											//echo $categorias[0]['NOMBRE'];
										
											for ($i=0;$i<count($categorias);$i++) {
											
												echo "<option value='".$categorias[$i]['ID']."'>".$categorias[$i]['NOMBRE']."</option>\n";
											
											}
										
										?>
									

									</select>
									<?php
										if (isset($_GET['ecat'])) {
											echo "<p class='error_producto'>".htmlentities($_GET['ecat'])."</p>";
										}
									?>
									
									<input type="submit" value="Listar" name="listar" id="listar" />
								</div>
								
						
						</form>
			
			
			
						<?php
							
							
							
						
							include_once('listado_prod.php');
							
							if (isset($_SESSION['t'])) {
								
								unset($_SESSION['t']);
													
							}
							
							if (isset($_SESSION['b'])) {
													
								unset($_SESSION['b']);
													
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
		
		
			
				function pregunta() {
					if (!confirm("Seguro desea borrar el producto?")) {
						return false;
					}

				}	
				
	</script>
</body>
</html>
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
		
				<div id="header1">
					
					<h1>PANEL DE CONTROL</h1>
				
				</div>
				<div id="header2">
			
					<?php
									if (isset($_SESSION['usuario'])) {
										
										echo "<p id='ureg'>".$_SESSION['usuario']."</p>";
										echo "<p id='salir'><a href='logout.php'>Salir</a></p>";
									
									}
									
									
								
						?>
				</div>
		</header>
		
		<div id="centro-panel">
			
			<div id="izq">
			
				<ul id="acciones">
							
				
					<li><a href="listado_articulos.php">Listar art&iacute;culos</a></li>
					<li><a href="listado_categorias.php">Listar categorias</a></li>
					<li><a href="ingreso_categoria.php">Publicar categoria</a></li>
							
							
				</ul>
			
			</div>
			
			<div id="der">
						
					<h2 id="ingresar_p">INGRESAR ART&Iacute;CULO</H2>
						
						<?php
								
							if (isset($_GET['t'])) {
													
								echo "<p id='exitosamente'>EL PRODUCTO SE AGREGO EXITOSAMENTE</p>";
													
							}
												
						?>
					
					
					<form method="POST" action="publicar_articulo.php" name="publicar_articulo" id="publicar_articulo" enctype="multipart/form-data">
		
									<?php
										if( isset($_SESSION['alta'])){ //quiere decir que vengo de un error y tengo todo lo qeu ya llenó.
												$categoria=$_SESSION['alta']['categoria'];
												$nombre = $_SESSION['alta']['nombre'];
												$descripcion_corta = $_SESSION['alta']['descripcion_corta'];		
												$desc = trim($_SESSION['alta']['descripcion']);
												unset($_SESSION['alta']);
														
										}
								
									
									
									
									
									
									?>
								
								
								
								
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
									
								
								</div>
								
								
								<div>
									<label for="nombre">Nombre del producto</label><br />
									<input type="text" name="nombre" id="nombre" value="<?php 
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
									<label for="foto">Foto</label><br />
									<input type="file" name="foto" id="foto" />
									<p class="solo">Solo .jpg/.png</p>
									<?php
										if (isset($_GET['efoto'])) {
											echo "<p class='error_producto'>".$_GET['efoto']."</p>";
										}
									?>
								
								</div>
								
								<div>
									<label for="descripcion_corta">Descripcion corta</label><br />
									<textarea rows="2" cols="50" name="descripcion_corta" id="descripcion"><?php 
										if (isset($descripcion_corta)) {
											echo htmlentities($descripcion_corta); 
										}
									?></textarea>
									
									<?php
											if (isset($_GET['edescc'])) {
												echo "<p class='error_producto'>".htmlentities($_GET['edescc'])."</p>";
											}
										?>
								
								</div>
								
								
									
								
								<div>
									<label for="descripcion">Descripcion larga</label><br />
									<textarea rows="8" cols="50" name="descripcion" id="descripcion"><?php 
										if (isset($desc)) {
											echo htmlentities($desc); 
										}
									?></textarea>
									
									<?php
										if (isset($_GET['edesc'])) {
											echo "<p class='error_producto'>".htmlentities($_GET['edesc'])."</p>";
										}
									?>
								
								
								</div>
								
								
									
								<div>
									<input type="submit" value="Agregar articulo" name="agregar" />
								
								
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" >

	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	
		<meta name="robots" content="index, follow, all" />
		<meta name="googlebot" content="index, follow, all" />
		
		<meta name="keywords" content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
		<meta name="title" content="CAMBIO DE ARENA Y REPARACIÓN DE FILTRO DE PILETA" />
		<meta name="author" content="Administrator" />
		<meta name="description" content="Remplazo de arena y reparación de filtros de piletas." />
		
		<title>CAMBIO DE ARENA Y REPARACIÓN DE FILTRO DE PILETA</title>
		
		<meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />
		
		<link rel="icon" type="image/jpg" href="images/logo.png" />
		
		<link rel="stylesheet" media="all" type="text/css" href="estilos/estilos.css" />
		
		<script type="text/javascript" src="scripts/script.js"></script>
		
	</head>
	<body>

		<div id="contenedor">
			
			<div id="cabecera">
			
				<h1 id="inagua">INAGUA - Mantenimiento de Piletas</h1>
				
				<?php
							
					if (file_exists("includes/botonera.php")) {
						include("includes/botonera.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
						
				?>
				
			</div>
			
			<div id="info">
			
				<div id="info1">
					<p id="relax">Rel�jese. No se complique el d�a y disfrute de su piscina.</p>
					<p id="nosotros">NOSOTROS NOS ENCARGAMOS DEL RESTO</p>
				</div>
				
				<div id="info2">
					<p id="tel">4738.3329</p>
					<p id="llame">LLAME AHORA!</p>
				</div>
			
			</div>
			
			<div id='cssmenu'>
			
				<?php
							
					if (file_exists("includes/menu.php")) {
						include("includes/menu.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
						
				?>
			
			</div>	

			<div id="sombra">&nbsp;</div>
			
			<div id="centro">
				
				<div id="columna-uno">	
				
					<h1>
						CAMBIO DE ARENA Y REPARACIÓN DE FILTRO DE PILETAS
					</h1>
					
					<div id="linea-divisoria-horizontal">
					</div>
					
					<p  class="txt_empresa">
						- Si al filtrar el agua de su pileta aparece arena dentro, en el piso. Esto quiere decir que los colectores del filtro se han dañado y dejan pasar arena en el retorno hacia la pileta. Solución: llamarnos para desarmar filtro y cambiar colectores. 
					</p>
					<p  class="txt_empresa">
						- Si al filtrar el agua de su pileta el nivel de la misma disminuye. Esto quiere decir que la junta del cabezal se ha dañado producto del uso. Los tipos de juntas varian de acuerdo a las marcas de los filtros. Solución: llamarnos para cambiar junta estrella del cabezal del filtro. 
					</p>
					<p  class="txt_empresa">
						- Si al encender el motor o bomba nota que es debil la salida de agua por los jets de retorno a la piscina. Una vez descartado que el motivo de esto sea la bomba, el problema esta en el filtro, mas especificamente en la arena que contiene. Solución: llamarnos para cambiar la carga filtrante del filtro (arenas). 
					</p>
					<p  class="txt_empresa">
						Recuerde que un correcto filtrado del agua dara por resultado agua cristalina.
					</p>
										
					<?php
									
						if (file_exists("includes/firma_en_secciones.php")) {
							include("includes/firma_en_secciones.php");
						} else
							{
							echo "<p class='no_enc'>Archivo no encontrado</p>";
							}
								
					?>
					
				</div>

				<div id="columna-dos">	
				
					<?php
									
						if (file_exists("includes/bloque_de_banners.php")) {
							include("includes/bloque_de_banners.php");
						} else
							{
							echo "<p class='no_enc'>Archivo no encontrado</p>";
							}
								
					?>
				
				</div>
				
			</div>
				
			<div id="bloque_de_benners_largos">

				<?php
								
					if (file_exists("includes/bloque_de_banners_largos.php")) {
						include("includes/bloque_de_banners_largos.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
							
				?>
					
			</div>
			
			<div id="pie">
			
				<?php
							
					if (file_exists("includes/pie.php")) {
						include("includes/pie.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
						
				?>
				
			</div>
	
		</div>
		
	</body>
</html>
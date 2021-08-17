<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow, all" />
		<meta name="googlebot" content="index, follow, all" />	
		<meta name="keywords" content="pileta, piletas, piscinas, piletero, pileteros, desagote, agronomia" />
		<meta name="title" content="Piletero en Agronomia" />
		<meta name="author" content="Administrator" />
		<meta name="description" content="Servicios de limpieza y mantenimiento de piletas. Pileteros profesionales." />	
		<title>Piletero en Agronomia</title>	
		<meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />	
		<link rel="icon" type="image/jpg" href="images/logo.png" />	
		<link rel="stylesheet" media="all" type="text/css" href="estilos/estilos.css" />	
		<script type="text/javascript" src="scripts/script.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">//<![CDATA[
		$(function(){
			$('#slider div:gt(0)').hide();
			setInterval(function(){
			  $('#slider div:first-child').fadeOut(0)
				 .next('div').fadeIn(1000)
				 .end().appendTo('#slider');}, 4000);
		});
		//]]>
		</script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<div id="contenedor">
			
			<header id="cabecera">
			
				<?php
							
					if (file_exists("includes/cabecera.php")) {
						include("includes/cabecera.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
						
				?>
				
			</header>
			
			<div id="info">
			
				<div id="info1">
					<p id="relax">Rel&aacute;jese. No se complique el d�a y disfrute de su piscina.</p>
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
				
					<h2>
						Mantenimiento de Piletas en Agronomia
					</h2>
					
					<div id="linea-divisoria-horizontal">
					</div>
					
					<?php
									
						if (file_exists("includes/servicios_en_secciones.php")) {
							include("includes/servicios_en_secciones.php");
						} else
							{
							echo "<p class='no_enc'>Archivo no encontrado</p>";
							}
								
					?>
					
					<?php
									
						if (file_exists("includes/lugares_en_secciones.php")) {
							include("includes/lugares_en_secciones.php");
						} else
							{
							echo "<p class='no_enc'>Archivo no encontrado</p>";
							}
								
					?>
					
					<p  class="txt_empresa">
						<a href="piletero-en-capital-federal.php">CLICK AQUI PARA VOLVER A ZONAS DE COBERTURA</a>
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
			
			<footer id="pie">
			
				<?php
							
					if (file_exists("includes/pie.php")) {
						include("includes/pie.php");
					} else
						{
						echo "<p class='no_enc'>Archivo no encontrado</p>";
						}
						
				?>
			
			</footer>
	
		</div>
		
	</body>
</html>
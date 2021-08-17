<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow, all" />
		<meta name="googlebot" content="index, follow, all" />	
		<meta name="keywords" content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
		<meta name="title" content="TRABAJO DE PILETERO - INAGUA" />
		<meta name="author" content="Administrator" />
		<meta name="description" content="Empresa de mantenimiento y limpieza de piletas. Pileteros profesionales." />	
		<title>TRABAJO DE PILETERO - INAGUA</title>	
		<meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />	
		<link rel="icon" type="image/jpg" href="images/logo.png" />	
		<link rel="stylesheet" media="all" type="text/css" href="estilos/estilos.css" />	
		<script type="text/javascript" src="scripts/script-contacto.js"></script>
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
					<p id="relax">Relájese. No se complique el día y disfrute de su piscina.</p>
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
		
			<div id="centro-contacto">
			
				<h1>Muchas gracias por querer formar parte de INAGUA - Mantenimiento de Piscinas.</h1>
				
				<h1>Ante una eventual busqueda te tendremos en cuenta.</h1>

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
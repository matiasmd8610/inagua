<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow, all" />
		<meta name="googlebot" content="index, follow, all" />	
		<meta name="keywords" content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
		<meta name="title" content="TODO SOBRE PILETAS - PILETEROS - PISCINAS" />
		<meta name="author" content="Administrator" />
		<meta name="description" content="Problemas con tu tu pileta. Consejos y tips utiles para el mantenimiento y limpieza." />	
		<title>TODO SOBRE PILETAS - PILETEROS - PISCINAS</title>	
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
				
					<h1>
						PREGUNTAS FRECUENTES + TIPS UTILES SOBRE PISCINAS Y SALUD P&Uacute;BLICA
					</h1>
					
					<div class="linea-divisoria-horizontal">
					</div>
					
					<p  class="txt_empresa">
						En Inagua.com.ar contamos con esta secci&oacute;n donde encontrar&aacute;s toda la informaci&oacute;n que necesites para el cuidado de tu pileta y algunas notas de color del mundo de las piscinas. Los principales problemas que surgen en torno a la piscina est&aacute;n relacionados generalmente con el estado del agua o con el funcionamiento de equipos y accesorios. Decidimos realizar un an&aacute;lisis de las preguntas frecuentes de nuestros clientes y p&uacute;blico en general ofreciendo las soluciones m&aacute;s pr&aacute;cticas y efectivas.
					</p>
					
					<?php
							
						if (file_exists("admin/listado.php")) {
							include("admin/listado.php");
						} else
							{
							echo "<p class='no_enc'>Archivo no encontrado</p>";
							}
						
					?>
					
					<h1 id="advertencias">
						ADVERTENCIAS
					</h1>

					<div class="linea-divisoria-horizontal">&nbsp;</div>
					
					<p class="txt_empresa">
						Cada fabricante asesora sobre las proporciones y forma de aplicaci&oacute;n de sus productos qu&iacute;micos, y &eacute;stas pueden variar seg&uacute;n marca. Se recomienda verificar siempre esa informaci&oacute;n, en la etiqueta del producto a aplicar.
					</p>
					
					<p class="txt_empresa">
						INAGUA ni su personal ser&aacute;n responsables del mal uso de esta informaci&oacute;n, negligencia en su aplicaci&oacute;n, mala interpretaci&oacute;n o uso indebido de &eacute;sta. La seguridad y actos del usuario son responsabilidad directa del mismo.
					</p>
					
					<p class="txt_empresa">
						<span class="bold">"Si desea un mantenimiento profesional de su piscina, con productos de primera calidad para que usted utilice su tiempo en disfrutarla no dude en llamarnos para hacer las consultas que desee y pedir un presupuesto acorde a su medida. 
						<br />
						<br />
						INAGUA: Tel.: 4738.3329</span> 
					</p>
					
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
<!DOCTYPE html>
<html lang="es">

	<head>
	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow, all" />
		<meta name="googlebot" content="index, follow, all" />	
		<meta name="keywords" content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
		<meta name="title" content="INAGUA - MANTENIMIENTO DE PILETAS - DESAGOTES" />
		<meta name="author" content="Administrator" />
		<meta name="description" content="Empresa de Mantenimiento y Limpieza de Piletas. Pileteros profesionales." />	
		<title>INAGUA - MANTENIMIENTO DE PILETAS - DESAGOTES</title>	
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
			
				<div id="centro1">
				
					<p class="negrita">
						Si desea comunicarse con <span class="mayus">INAGUA</span> puede hacerlo a trav&eacute;s de los siguientes medios:
					</p>
								
					<p class="negrita">Tel&eacute;fono<br />4738.3329</p>
																		
				</div>
				<div id="centro2">
				
						<p class="negrita">O complete el siguiente formulario para contactarse de forma online</p>
					
					<form id="formu-contacto" action="http://inagua.com.ar/cgi-bin/FormMail.cgi" method="post">	
						<div id="formu1">
							<p>
								<label for="nombre">Nombre y Apellido</label><img src="images/obligatorio.png" width="8" height="8" alt="obligatorio" /><br />
								<input type="text" name="nombre" id="nombre" size="30" />
							</p>	
							<p>
								<label for="mail">E-mail</label><img src="images/obligatorio.png" width="8" height="8" alt="obligatorio" /><br />
								<input name="mail" type="text" id="mail" value="@" size="30" />
							</p>
						</div>
						
						<div id="formu2">
							<p>
								<label for="localidad">Localidad</label><img src="images/obligatorio.png" width="8" height="8" alt="obligatorio" /><br />
								<input name="localidad" id="localidad" type="text" size="30" />
							</p>
							<p>
							
								<label for="telefono">Tel&eacute;fono</label><img src="images/obligatorio.png" width="8" height="8" alt="obligatorio" /><br />
								<input name="telefono" id="telefono" type="text" size="30" />
							</p>
						</div>
						
						<div id="formu5">
							<label for="mensaje">Mensaje</label><br />		
							<textarea name="mensaje" cols="55" rows="5" id="mensaje"></textarea>
							
						</div>
						
						<div id="formu6">
						
							<div>
								<p id="campos-oblig"><img src="images/obligatorio.png" width="8" height="8" alt="obligatorio" /><span>Campos Obligatorios</span></p>
							</div>
							
							<div>
								<input name="submitbtn" id="submitbtn" type="submit" class="boton-de-contacto" value="Enviar Formulario" onClick="submitForm();" />
							</div>			
									
						</div>
						
						<input type="hidden" name="subject" id="subject" value="Formulario de Consulta de INAGUA" />
											
						<input type="hidden" name="recipient" id="recipient" value="info@inagua.com.ar" />
						
						<input type="hidden" name="redirect" id="redirect" value="http://www.inagua.com.ar/gracias.php" />
						
						<input type="hidden" name="para" id="para" value="INAGUA" />
						
						</form>
						
					</div>
						
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
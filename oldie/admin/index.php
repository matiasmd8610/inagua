<?php
include('config/funciones.php');

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
				<div id="header2"></div>
			
			</header>
			
			<div id="centro">
			
					<form action="login.php" method="POST" id="login">
						<div>
							
							<input type="text" id="usuario" name="usuario" placeholder="Usuario">
						</div>
						<div>
							
							<input type="password" id="clave" name="clave" placeholder="Contrase&ntilde;a">
						</div>
						<div>
							<input type="submit" value="ENTRAR" name="enviar" id="enviar"/>
						</div>
						
					
					</form>
					
					<?php
							if(isset($_GET['error']) ){
									echo "<p class='error_login'>Datos invalidos</p>";
							}
											
											
					?>
					
					<br><br>
			
					
			
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

<?php
include('setup.php');



function obtener_categorias(){
global $cnx;
$datos = array();

$q="SELECT ID,NOMBRE FROM categorias";
$f = mysqli_query( $cnx, $q );
	while( $a = mysqli_fetch_assoc($f)){
		$datos[] = $a;
	} //cierre while
return $datos;
}




function validarDatos($post) {
	
	global $cnx;

	$_SESSION['registro'] = $post;
	
	$usuario=$post['usuario'];
	$clave=$post['clave'];
	$confirmar_clave=$post['confirmarclave'];
	$nombre=$post['nombre'];
	$apellido=$post['apellido'];
	$dni=$post['dni'];
	$email=$post['email'];
	$tel_fijo=$post['tel_fijo'];
	$tel_cel=$post['tel_cel'];
	$direccion=$post['direccion'];
	$ciudad=$post['ciudad'];
	$codigo_postal=$post['codigo_postal'];
	$provincia=$post['provincia'];
	
	global $error;
	
	$patUsuario='/^[A-Za-z0-9]{4,25}$/';
	$patClave='/^[\wρ]{3,15}$/';
	$patNombreApellido='/^([a-zA-ZαινσϊρΑΙΝΣΪΡ]{2,}[\s]?)+$/';
	$patDNI='/^([0-9.]{2,})+$/';
	$patEmail='/^[a-zA-Z0-9_\.-]{3,}@[a-zA-Z]{3,}\.[a-zA-Z]{3,}(\.([a-zA-Z]{2,4}))?$/';
	$patCiudad='/^([a-zA-Z0-9αινσϊρΑΙΝΣΪΡ]{2,}[\s]?)+$/';
	$patCodigo_postal='/^[0-9]{2,}$/';
	$patTel='/^([A-Z0-9-]{4,})?$/';
	$patDireccion='/^([a-zA-Z0-9αινσϊρΑΙΝΣΪΡ]{2,}[\s]?)*$/';
			
			
			
		$rta=preg_match($patUsuario,$usuario) ;
		if ($rta!=1) {
			$error['usuario']="Usuario invαlido";	
		}
			
	
		$rta=preg_match($patClave,$clave) ;
		if ($rta!=1) {
			$error['clave']="Clave invαlida";	
		}
			
		$rta=preg_match($patClave,$confirmar_clave) ;
		if ($rta!=1) {
			$error['confirmarclave']="Clave invαlida";	
		}

		$rta=preg_match($patNombreApellido,$nombre) ;
		if ($rta!=1) {
			$error['nombre']="Nombre invαlido";	
		}
			
		$rta=preg_match($patNombreApellido,$apellido) ;
		if ($rta!=1) {
			$error['apellido']="Apellido invαlido";	
		}
			
		$rta=preg_match($patDNI,$dni) ;
		if ($rta!=1) {
			$error['dni']="DNI invαlido";	
		}
			

		$rta=preg_match($patEmail,$email) ;
		if ($rta!=1) {
			$error['email']="E-mail invαlido";	
		}
			
		$rta=preg_match($patTel,$tel_fijo) ;
		if ($rta!=1) {
			$error['tel_fijo']="Telιfono fijo invαlido";	
		}
			
		$rta=preg_match($patTel,$tel_cel) ;
		if ($rta!=1) {
			$error['tel_cel']="Telιfono celular invαlido";		
		}
			

		$rta=preg_match($patDireccion,$direccion) ;
		if ($rta!=1) {
			$error['direccion']="Direcciσn invαlida";
		}
			
			

		$rta=preg_match($patCiudad,$ciudad) ;
		if ($rta!=1) {
			$error['ciudad']="Ciudad invαlida";
		}
			

		$rta=preg_match($patCodigo_postal,$codigo_postal) ;
		if ($rta!=1) {
			$error['codigo_postal']="Cσdigo postal invαlido";
		}
			


		if (!empty($clave) && !empty($confirmar_clave) && ($clave!=$confirmar_clave)) {
		

				$error['claves']="Las claves no coinciden";

		}
		
		
		if ($provincia=="Seleccionar") {
		
			$error['provincia']="Debe elegir la provincia donde vive";
		}
		
		$usuario = trim($post['usuario']);

		$c = "SELECT ID FROM usuarios WHERE nombre_usuario='$usuario' LIMIT 1";
		$f = mysqli_query($cnx, $c );
		$a = mysqli_fetch_assoc($f);

		if( $a ){
			
			//header("Location: ../registro.php?error=El nombre de usuario ya existe");
			$error['usuario2']="El usuario ya existe";
			//exit();
		}
		
		
		
		if (count($error)==0) {
			
			registro($post);
			header('location:index.php');
			
		}
		

		
	
}



function registro($post) {

global $cnx;

$usuario=trim($post['usuario']);
$clave=trim($post['clave']);
$nombre=trim($post['nombre']);
$apellido=trim($post['apellido']);
$dni=trim($post['dni']);
$email=trim($post['email']);
$tel_fijo=trim($post['tel_fijo']);
$tel_cel=$post['tel_cel'];
$direccion=$post['direccion'];
$ciudad=$post['ciudad'];
$codigo_postal=$post['codigo_postal'];
$provincia=$post['provincia'];

$usuario = mysqli_real_escape_string( $cnx , $usuario );

$sql=<<<SQL
INSERT INTO
	usuarios
SET
	NOMBRE_USUARIO='$usuario',
	CLAVE=MD5('$clave'),
	NOMBRE='$nombre',
	APELLIDO='$apellido',
	DNI='$dni',
	EMAIL='$email',
	TEL_FIJO='$tel_fijo',
	TEL_CEL='$tel_cel',
	DIRECCION='$direccion',
	CIUDAD='$ciudad',
	CODIGO_POSTAL='$codigo_postal',
	PROVINCIA='$provincia',
	FECHA_ALTA=NOW()
SQL;

	$f = mysqli_query($cnx, $sql );
	
	$consulta_login = "SELECT * FROM usuarios WHERE NOMBRE_USUARIO='$usuario'";
			
	$filas = mysqli_query($cnx, $consulta_login );
	$columnas = mysqli_fetch_assoc($filas);
			
	if( $columnas ){
			
			$_SESSION['usuario'] = $columnas['NOMBRE_USUARIO'];
			$_SESSION['id'] = $columnas['ID'];
			$_SESSION['mensaje']="GRACIAS POR REGISTRARSE!";
			$rta = '';
	}else{
				//session_destroy();
				$rta = '&error=1';
	}
	
	
	
	
	
	
}


function validarDatosModificados($post,$session) {
	
	global $cnx;

	$_SESSION['registro'] = $post;
	
	$nombre=$post['nombre'];
	$apellido=$post['apellido'];
	$dni=$post['dni'];
	$email=$post['email'];
	$tel_fijo=$post['tel_fijo'];
	$tel_cel=$post['tel_cel'];
	$direccion=$post['direccion'];
	$ciudad=$post['ciudad'];
	$codigo_postal=$post['codigo_postal'];
	$provincia=$post['provincia'];
	
	global $error;
	
	
	$patNombreApellido='/^([a-zA-ZαινσϊρΑΙΝΣΪΡ]{2,}[\s]?)+$/';
	$patDNI='/^([0-9.]{2,})+$/';
	$patEmail='/^[a-zA-Z0-9_\.-]{3,}@[a-zA-Z]{3,}\.[a-zA-Z]{3,}(\.([a-zA-Z]{2,4}))?$/';
	$patCiudad='/^([a-zA-Z0-9αινσϊρΑΙΝΣΪΡ]{2,}[\s]?)+$/';
	$patCodigo_postal='/^[0-9]{2,}$/';
	$patTel='/^([A-Z0-9-]{4,})?$/';
	$patDireccion='/^([a-zA-Z0-9αινσϊρΑΙΝΣΪΡ]{2,}[\s]?)*$/';
			

		$rta=preg_match($patNombreApellido,$nombre) ;
		if ($rta!=1) {
			$error['nombre']="Nombre invαlido";	
		}
			
		$rta=preg_match($patNombreApellido,$apellido) ;
		if ($rta!=1) {
			$error['apellido']="Apellido invαlido";	
		}
			
		$rta=preg_match($patDNI,$dni) ;
		if ($rta!=1) {
			$error['dni']="DNI invαlido";	
		}
			

		$rta=preg_match($patEmail,$email) ;
		if ($rta!=1) {
			$error['email']="E-mail invαlido";	
		}
			
		$rta=preg_match($patTel,$tel_fijo) ;
		if ($rta!=1) {
			$error['tel_fijo']="Telιfono fijo invαlido";	
		}
			
		$rta=preg_match($patTel,$tel_cel) ;
		if ($rta!=1) {
			$error['tel_cel']="Telιfono celular invαlido";		
		}
			

		$rta=preg_match($patDireccion,$direccion) ;
		if ($rta!=1) {
			$error['direccion']="Direcciσn invαlida";
		}
			
			

		$rta=preg_match($patCiudad,$ciudad) ;
		if ($rta!=1) {
			$error['ciudad']="Ciudad invαlida";
		}
			

		$rta=preg_match($patCodigo_postal,$codigo_postal) ;
		if ($rta!=1) {
			$error['codigo_postal']="Cσdigo postal invαlido";
		}
			


		if (!empty($clave) && !empty($confirmar_clave) && ($clave!=$confirmar_clave)) {
		

				$error['claves']="Las claves no coinciden";

		}
		
		
		if ($provincia=="Seleccionar") {
		
			$error['provincia']="Debe elegir la provincia donde vive";
		}
		
		
		
		if (count($error)==0) {
			
			modificacion($post,$session);
			header('location:index.php');
			
		}
		

		
	
}



function modificacion($post,$session) {

global $cnx;

$usuario=trim($post['usuario']);
$nombre=trim($post['nombre']);
$apellido=trim($post['apellido']);
$dni=trim($post['dni']);
$email=trim($post['email']);
$tel_fijo=trim($post['tel_fijo']);
$tel_cel=$post['tel_cel'];
$direccion=$post['direccion'];
$ciudad=$post['ciudad'];
$codigo_postal=$post['codigo_postal'];
$provincia=$post['provincia'];

$usuario = mysqli_real_escape_string( $cnx , $usuario );

$sql=<<<SQL
UPDATE
	usuarios
SET
	
	NOMBRE='$nombre',
	APELLIDO='$apellido',
	DNI='$dni',
	EMAIL='$email',
	TEL_FIJO='$tel_fijo',
	TEL_CEL='$tel_cel',
	DIRECCION='$direccion',
	CIUDAD='$ciudad',
	CODIGO_POSTAL='$codigo_postal',
	PROVINCIA='$provincia'
where ID=$_SESSION[id]
	
SQL;

	$f = mysqli_query($cnx, $sql );
	
	$consulta_login = "SELECT * FROM usuarios WHERE NOMBRE_USUARIO='$usuario'";
			
	$filas = mysqli_query($cnx, $consulta_login );
	$columnas = mysqli_fetch_assoc($filas);
			
	if( $columnas ){

		
			$_SESSION['mensaje2']="MODIFICACION REALIZADA EXISTOSAMENTE";
			$rta = '';
	}else{
				
				$rta = '&error=1';
	}
	
	
	
	
	
	
}








?>
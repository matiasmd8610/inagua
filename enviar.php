<?php
require("class.phpmailer.php");
require("class.smtp.php");

$name = utf8_decode($_POST['name']);
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$localidad = utf8_decode($_POST['localidad']);
$mensaje = utf8_decode($_POST['mensaje']);

$mensajeDeEnviado = '<div style="position: relative; margin-top:50px;"  align="center"><div><img src="img/logo.png"></div><div style="color:#1fcdff; font-size:18px; font-family:Verdana, Geneva, sans-serif; margin-top: 10px;">MENSAJE ENVIADO CON EXITO</div></div>';
$mensajeDeError = '<div style="position: relative; margin-top:50px;"  align="center"><div><img src="img/logo.png"></div><div style="color:#1fcdff; font-size:18px; font-family:Verdana, Geneva, sans-serif; margin-top: 10px;"HUBO UN ERROR, COMUNIQUESE POR TELÉFONO</div></div>';

// VALORES A MODIFICAR //

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "mail.inagua.com.ar";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "correo-web@inagua.com.ar";  // Mi cuenta de correo
$smtpClave = "UXO/EYI8vV";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "info@inagua.com.ar";


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->CharSet = "utf-8";

$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$CuerpoMensaje = "El mensaje lo envia: " . $name . "\r\n";
$CuerpoMensaje .= "Su email es: " . $email . " \r\n";
$CuerpoMensaje .=  "Su telefono es: " . $telefono . " \r\n";
$CuerpoMensaje .=  "Su localidad es: " . $localidad . " \r\n";
$CuerpoMensaje .= "El mensaje es ".$mensaje . " \r\n";

$mail->Subject = $asunto;
$mail->Body = $CuerpoMensaje;

//Attach multiple files one by one
for ($ct = 0; $ct < count($_FILES['imagen']['tmp_name']); $ct++) {
    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['imagen']['name'][$ct]));
    $filename = $_FILES['imagen']['name'][$ct];
    if (move_uploaded_file($_FILES['imagen']['tmp_name'][$ct], $uploadfile)) {
        $mail->addAttachment($uploadfile, $filename);
    } 
}

//send the message, check for errors
if (!$mail->send()) {
    $mensajeDeError;
    //echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo $mensajeDeEnviado;
}

?> 	

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>INAGUA - LIMPIEZA Y MANTENIMIENTO DE PILETAS - Pileteros Profesionales-</title>
<meta http-equiv='refresh' content='4;url=index.php'>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-5539254-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-5539254-2');
</script>

</head>

<body class="woo slide">

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
            <td colspan="2">
              <p style="text-align:center; font-family:Verdana, Geneva, sans-serif; font-size:16px; color:#333; font-style:italic">Espere a que se vuelva a cargar la pagina, lo redireccionaremos al inicio. <br> Muchas gracias por su mensaje, a la brevedad nos podremos en contacto. 
              </p></td>
          </tr>	
        <td height="44" align="center">
      </tr>
      <tr>
        <td align="center"></td>
      </tr>
    </table>
 
</body>
</html>
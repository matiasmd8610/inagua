<?php
$id = isset($_GET['id']) ? $_GET['id'] : '0';

function get_template( $id ) {

  if ( $id == '0' ) {
    echo 'No existe artítulo indicado';
  } else {
    include 'articulos/'.$id.'.php';
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2F4598">
  <meta name="robots" content="index, follow, all">
  <meta name="googlebot" content="index, follow, all">
  <meta name="keywords" content="piscina, piscinas, piletero, pileteros, desagote">
  <meta name="title" content="PILETEROS - LIMPIEZA DE PISCINAS - DESAGOTES DE PISCINAS">
  <meta name="author" content="Administrator">
  <meta name="description" content="Empresa profesional de Limpieza y desagote de piscina. Piletero en Capital Federal.">
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo">
  <meta property="fb:app_id" content="383820332074788" />
  <title>PILETEROS - LIMPIEZA DE PISCINAS - DESAGOTES DE PISCINAS</title>
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <link href="css/fileinput.css" rel="stylesheet">
  <link href="styles/css/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/fileinput.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/animate/animate.css">
  <link href="styles/css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap" rel="stylesheet">
  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-5539254-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-5539254-2');
  </script>

</head>

<body>
  <section>

    <?php include "include/chat.php"; ?>

  </section>
  <span class="ir-arriba"><img src="img/up.png" alt=""></span>
  <div id="top"></div>

  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=383820332074788';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>


  <header>
    <div class="botoner_completa animated slideInDown">
      <?php include "include/navegacion.php"; ?>
    </div>
  </header>

  <section id="cambio_arena">
    <?php get_template($id); ?>
  </section>

  <!-- SERVICIOS SUGERIDOS SMALL: Begin -->
  <?php include "include/servicios-sugeridos-small.php"; ?>
  <!-- SERVICIOS SUGERIDOS SMALL: End -->

  <section id="contacto">
    <?php include "include/formulario.php"; ?>
  </section>

  <footer>
    <?php include "include/footer.php"; ?>
  </footer>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>
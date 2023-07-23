<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2F4598">
  <meta name="robots" content="index, follow, all" />
  <meta name="googlebot" content="index, follow, all" />
  <meta name="keywords"
    content="pileta, piletas, piscinas, piletero, pileteros, desagote, pintura, piletas plastico, fibra de vidrio, caucho clorado" />
  <meta name="title" content="Pintor de piletas" />
  <meta name="author" content="Administrator" />
  <meta name="description"
    content="Servicios de pintura de piletas de material, plastico y fibra de vidrio con caucho clorado." />
  <title>Pintado de piscinas | SERVICIOS | INAGUA</title>
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <script src="js/fileinput.js" type="text/javascript"></script>
  <link href="css/fileinput.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate/animate.css">
  <link href="styles/css/main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap"
    rel="stylesheet">

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

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T4FLXK7');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>

  <section>

    <?php include "include/chat.php"; ?>

  </section>

  <span class="ir-arriba"><img src="img/up.png" alt=""></span>
  <div id="top"></div>

  <header>
    <div class="botoner_completa animated slideInDown">
      <?php include "include/navegacion.php"; ?>
    </div>
  </header>

  <section id="pintado_piletas">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="div-texto">
            <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Pintado de piscinas</h1>
            <h2 class="texto2 wow slideInUp">Se efectúan trabajos de pintura sobre piletas de cemento o fibra de vidrio
            </h2>
          </div>

          <div class="grid-services-images my-5">
            <div class="wow slideInLeft">
              <img src="img/servicios/pintura-piletas.png" alt="Pintura piscinas" class="img-fluid">
            </div>
          </div>

          <div class="div-texto">
            <p class="texto3 wow slideInUp">
              La pintura es fundamental para la estética y el mantenimiento, la pintura vieja se descascara y enturbia
              el agua, por eso una adecuada pintura mejora las condiciones. La época recomendada para pintar es agosto
              septiembre octubre, los meses de mucho calor hacen que se ampollen las paredes. Luego del desagote y la
              desinfección se procede al lijado de las paredes y piso, logrando una superficie lista para el pintado,
              cumpliendo con los días de secado para luego su llenado.
            </p>
          </div>
          <br>

          <div class="col-md-12 presupuesto-ser wow slideInUp">
            <a href="#contacto" class="boton-presupuesto">SOLICITAR PRESUPUESTO</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- NOS DESTACAMOS: Begin -->
  <?php include "include/destacamos.php"; ?>
  <!-- NOS DESTACAMOS: End -->

  <!-- ZONA DE COBERTURA: Begin -->
  <?php include "include/zona-cobertura.php"; ?>
  <!-- ZONA DE COBERTURA: End -->

  <section id="contacto">
    <?php include "include/formulario.php"; ?>
  </section>

    <!-- SERVICIOS SUGERIDOS SMALL: Begin -->
    <?php include "include/servicios-sugeridos-small.php"; ?>
  <!-- SERVICIOS SUGERIDOS SMALL: End -->

  <footer>
    <?php include "include/footer.php"; ?>
  </footer>

  <script src="js/scripts.js"></script>

</body>

</html>
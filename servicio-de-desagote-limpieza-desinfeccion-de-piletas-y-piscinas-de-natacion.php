<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#2F4598">
  <meta name="robots" content="index, follow, all" />
  <meta name="googlebot" content="index, follow, all" />
  <meta name="keywords"
    content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
  <meta name="title" content="Desagote, limpieza y desinfección de piletas" />
  <meta name="author" content="Administrator" />
  <meta name="description"
    content="Pileteros con experiencia brindando servicios de mantenimiento de piscinas a consorcios." />
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />
  <link rel="icon" href="img/logo.png">
  <title>Desagote, limpieza y desinfección de piletas | SERVICIOS | INAGUA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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

  <section id="desagote">
    <div class="container">
      <div class="div-texto">
        <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Desagote, limpieza y
          desinfección de piletas</h1>
        <h2 class="texto2 wow slideInUp">Queda lista para llenar, pintar o pastinar</h2>
        <div class="grid-services-images my-4">
          <div class="wow fadeInLeft">
            <img class="img-fluid" src="img/servicios/desagote_01.jpg" alt="Desagote">
            <div class="name">
              <span>Desagote</span>
            </div>
          </div>
<!--           <div class="wow fadeInDown">
            <img class="img-fluid" src="img/servicios/desagote_02.jpg" alt="Desagote">
            <div class="name">
              <span>Limpieza</span>
            </div>
          </div> -->
          <div class="wow fadeInRight">
            <img class="img-fluid" src="img/servicios/desagote_03.jpg" alt="Limpieza">
            <div class="name">
              <span>Limpieza</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container div-texto mt-3">
      <div class="row">
        <p class="texto3 wow slideInUp">Una vez desagotada su piscina desinfectamos, cepillamos e hidrolavamos
          toda la estructura (pisos y paredes) dejandola lista para llenar o pintar.
          Utilizamos productos de primera calidad.</p>
        <br>
        <h5 class="text-center mt-4">¡DESAGOTE SU PILETA CON NOSOTROS, SOMOS ESPECIALISTAS!</h5>
      </div>
      <div class="col-md-12 presupuesto-ser wow slideInUp">
        <a href="#contacto" class="boton-presupuesto">SOLICITAR PRESUPUESTO</a>
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
<!DOCTYPE html>
<html lang="es">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2F4598">
  <meta name="title" content="Piletero en San Martín" />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Servicios de limpieza y mantenimiento de piletas. Pileteros profesionales." />
  <title>Piletero en San Martín</title>
  <link rel="icon" href="assets/images/logo.png">
  <link href="assets/styles/css/main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap" rel="stylesheet">

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
  <span class="ir-arriba"><img src="assets/images/up.png" alt=""></span>
  <div id="top"></div>

  <header>
    <div class="botoner_completa animated slideInDown">
      <?php include "include/navegacion.php"; ?>
    </div>
  </header>

  <section id="cobertura">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="div-texto">
            <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Mantenimiento de Piletas en San Martín</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section id="contacto">
    <?php include "include/formulario.php"; ?>
  </section>

  <!-- SERVICIOS SUGERIDOS: Begin -->
  <?php include "include/servicios-sugeridos-small.php"; ?>
  <!-- SERVICIOS SUGERIDOS: End -->

  <footer>
    <?php include "include/footer.php"; ?>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="assets/scripts/bootstrap.min.js"></script>
  <script src="assets/scripts/fileinput.js" type="text/javascript"></script>
  <script src="assets/scripts/scripts.js"></script>
  <script src="assets/scripts/wow.js"></script>
  <script>
    new WOW().init();
  </script>

  </body>

</html>
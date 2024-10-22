<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2F4598">
  <meta name="robots" content="index, follow, all">
  <meta name="googlebot" content="index, follow, all">
  <meta name="keywords"
    content="limpieza de piletas, piletas, piscinas, piletero, pileteros, desagotes, mantenimiento de piletas" />
  <meta name="title" content="CLORO - PASTILLAS - CLARIFICADOR - ALGUICIDA">
  <meta name="author" content="Administrator" />
  <meta name="description" content="Vendemos productos químicos para el mantenimiento de piletas.">
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo">
  <title>Productos Químicos para Piscinas | SERVICIOS | INAGUA</title>
  <link rel="icon" href="assets/images/logo.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="assets/scripts/bootstrap.min.js"></script>
  <script src="assets/scripts/fileinput.js" type="text/javascript"></script>
  <!-- <link href="assets/styles/css/fileinput.css" rel="stylesheet"> -->
  <link href="assets/styles/css/main.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/styles/css/animate/animate.css"> -->
  <link href="assets/styles/css/main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap"
    rel="stylesheet">

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
  <span class="ir-arriba"><img src="assets/images/up.png" alt=""></span>

  <header>
    <div class="botoner_completa animated slideInDown">
      <?php include "include/navegacion.php"; ?>
    </div>
  </header>

  <section id="productos">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="div-texto">
            <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Productos Químicos para Piscinas</h1>
            <h2 class="texto2 wow slideInUp">Venta minorista</h2>
          </div>

          <div class="wow slideInRight mb-5">
            <img src="assets/images/nataclor-producto.jpg" class="img_produc" alt="Nataclor producto">
          </div>

          <div>
            <p class="texto3sc wow slideInUp">Brindamos la posibilidad a quienes contratan nuestros servicios de
              proveerles productos químicos para el mantenimiento del agua de su piscina de primera calidad y de las
              marcas comerciales lideres.</p>
            <p class="texto3sc wow slideInUp">Vendemos productos de forma minorista.</p>

            <p class="texto3sc wow slideInUp">Todos los productos que utilizamos están aprobados por la ANMAT
              (Administración Nacional de Medicamentos, Alimentos y Tecnología Médica).</p>
          </div>

        </div>

        <div class="col-md-12 presupuesto-ser wow slideInUp">
          <a href="#contacto" class="boton-presupuesto">SOLICITAR PRESUPUESTO</a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- SERVICIOS SUGERIDOS SMALL: Begin -->
  <?php include "include/servicios-sugeridos-small.php"; ?>
  <!-- SERVICIOS SUGERIDOS SMALL: End -->

  <!-- NOS DESTACAMOS: Begin -->
  <?php include "include/destacamos.php"; ?>
  <!-- NOS DESTACAMOS: End -->

  <!-- ZONA DE COBERTURA: Begin -->
  <?php include "include/zona-cobertura.php"; ?>
  <!-- ZONA DE COBERTURA: End -->

  <section id="contacto">
    <?php include "include/formulario.php"; ?>
  </section>


  <footer>
    <?php include "include/footer.php"; ?>
  </footer>


  <script src="assets/scripts/wow.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="assets/scripts/scripts.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>

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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2F4598">

  <meta name="robots" content="index, follow, all">
  <meta name="googlebot" content="index, follow, all">
  <meta name="keywords" content="piscina, piscinas, piletero, pileteros, desagote, almagro">
  <meta name="title" content="Piletero en Almagro">
  <meta name="author" content="Administrator">
  <meta name="description" content="Servicios de limpieza y mantenimiento de piscinas. Pileteros profesionales.">
  <title>Piletero en Almagro</title>
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo" />
  <link rel="icon" href="img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap-3.3.6.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <script src="js/fileinput.js" type="text/javascript"></script>
  <link href="css/fileinput.css" rel="stylesheet">
  <link href="styles/css/main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/animate/animate.css">
  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>

  <script>
    $(function () {
      $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
          this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
  </script>

  <script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-5539254-2', 'auto');
    ga('send', 'pageview');
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
            <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Mantenimiento de Piscinas en Almagro</h1>
            <h2 class="texto2 wow slideInUp">Servicios sugeridos</h2>
          </div>

          <!-- SERVICIOS SUGERIDOS: Begin -->
          <?php include "include/servicios-sugeridos.php"; ?>
          <!-- SERVICIOS SUGERIDOS: End -->

        </div>

      </div>
    </div>
  </section>




  <section id="contacto">


    <?php include "include/formulario.php"; ?>

  </section>


  <div class="container">
    <div class="row">
      <div class="col-md-12 wow tada" datos-wow-duracion="3s" data-wow-delay="2s">
        <div class="pileteros_profesionales">

          <p class="td08_4">Solo confíe en pileteros profesionales</p>

          <p class="td08_3">
            ..."El tratamiento inadecuado del agua, por falta de conocimientos y experiencia, tiene efectos
            desagradables provocando irritaciones en la piel, ojos y mucosas y causando enfermedades transmitidas por
            microorganismos o agentes patógenos. Por todo esto le ofrecemos mantener su piscina y el agua en óptimas
            condiciones durante todo el año."...</p>

        </div>
      </div>

    </div>
  </div>

  <footer>



    <?php include "include/footer.php"; ?>






  </footer>

  <script>
    $(document).ready(function () {
      var altura = $('.menu').offset().top;

      $(window).on('scroll', function () {
        if ($(window).scrollTop() > altura) {
          $('.menu').addClass('menu-fixed');
        } else {
          $('.menu').removeClass('menu-fixed');
        }
      });

    });
  </script>
  <script src="js/menu.js"></script>
  <!-- jQuery slider Inicio -->

  <script>
    $(document).on('ready', function () {
      $("#input-b5").fileinput({
        showCaption: false
      });
    });
  </script>

</body>

</html>
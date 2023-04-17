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
  <meta name="keywords"
    content="limpieza de piscina, piscinas, piletero, pileteros, desagotes, mantenimiento de piscinas">
  <meta name="title" content="TRABAJO DE PILETERO - INAGUA">
  <meta name="author" content="Administrator">
  <meta name="description" content="Empresa de mantenimiento y limpieza de piscinas. Pileteros profesionales." >
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo">
  <title>TRABAJO DE PILETERO - INAGUA</title>
  <link rel="icon" href="img/logo.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap-3.3.6.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <script src="form/custom.js" type="text/javascript"></script>
  <script src="js/fileinput.js" type="text/javascript"></script>
  <link href="css/fileinput.css" rel="stylesheet">
  <link href="styles/css/main.css" rel="stylesheet">
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

  <div id="contenedor_trabajo">
    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="div-texto">
              <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Trabajá con nosotros</h1>
              <h2 class="texto2 wow slideInUp">Envianos tus datos</h2>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section id="trabaja">


      <div class="container">
        <div class="row">

          <div class="col-md-12 wow shake" datos-wow-duracion="5s" data-wow-delay="1s" data-wow-iteration="3">

            <form method="POST" name="fcontacto" id="fcontacto" action="enviarrhh.php" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" name="puesto" id="puesto" class="form-control" placeholder="Puesto" required>
              </div>

              <div class="form-group">
                <input type="text" name="remuneracion" id="remuneracion" class="form-control"
                  placeholder="Remuneración pretendida" required>
              </div>

              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su nombre" required>
              </div>

              <div class="form-group">
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido"
                  required>
              </div>

              <div class="form-group">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese su telefono"
                  required>
              </div>

              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese su correo"
                  required>
              </div>

              <div class="form-group">
                <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control"
                  placeholder="Dejenos su mensaje" required></textarea>
              </div>


              <div class="btn_file" style="margin-bottom: 30px;">

                <p class="text_file" style="cursor: pointer;">AGREGAR CV</p>
                <input type="file" multiple="true" id="imagen" class="file" name="imagen[]" value="adjuntar" multiple
                  data-show-upload="false" style="cursor: pointer;">
              </div>
              <div class="btn_file2">
                <p class="text_file2" align="center" onClick="location.reload();">BORRAR
                  <input type="reset" class="adjuntar"></p>
              </div>
              <button type="submit" class="btn-submit wow shake" datos-wow-duracion="5s" data-wow-delay="1s"
                data-wow-iteration="10">ENVIANOS SUS REFERENCIAS</button>
              <div id="respuesta1" style="display: none;"></div>
            </form>
          </div>


        </div>
      </div>


    </section>


    <div class="container">
      <div class="row">
        <div class="col-md-12 wow tada" datos-wow-duracion="3s" data-wow-delay="2s">
          <div class="pileteros_profesionales">
            <p class="td08_4">Solo confie en pileteros profesionales</p>
            <p class="td08_3">
              ...”El tratamiento inadecuado del agua, por falta de conocimientos y experiencia, tiene efectos
              desagradables provocando irritaciones en la piel, ojos y mucosas y causando enfermedades transmitidas por
              microorganismos o agentes patógenos. Por todo esto le ofrecemos mantener su piscina y el agua en óptimas
              condiciones durante todo el año.”...</p>
          </div>
        </div>

      </div>
    </div>

    <footer>



      <?php include "include/footer.php"; ?>






    </footer>

    <script src="js/menu.js"></script>
    <script src="js/scripts.js"></script>

    <script>
      $(document).on('ready', function () {
        $("#input-b5").fileinput({
          showCaption: false
        });
      });
    </script>

</body>

</html>
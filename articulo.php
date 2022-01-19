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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <link href="css/fileinput.css" rel="stylesheet">
  <link href="styles/css/main.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap-3.3.6.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
  <script src="js/fileinput.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/animate/animate.css">
  <link href="styles/css/main.css" rel="stylesheet">
    <!-- Animate-->
    <link rel="stylesheet" href="css/animate/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;600&family=Rubik:wght@300;400;600&display=swap" rel="stylesheet">
  <script src="js/wow.js"></script>
  <script>
    new WOW().init();
  </script>


  <!-- Animate Fin-->

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


  <section>

    <div class="container">
      <div class="row">

        <div class="row text-center separ-secciones_2">
          <div class="col-md-4">
            <div class="span-separ-secciones_2"></div>

          </div>
          <div class="col-md-4">
            <P class="td06_2">servicios sugeridos</P>

          </div>
          <div class="col-md-4">
            <div class="span-separ-secciones_2"></div>

          </div>
        </div>



        <div class="container">
          <div class="row text-center cont-iconos">
            <div class="col-md-3 wow fadeIn" datos-wow-duracion="1s" data-wow-delay="1s">
              <table width="100%" border="0" style="margin-bottom: 50px;">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_casas.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>CASAS PARTICULARES</p><br>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p>Si quiere mantener su pileta durante todo el año</p><br>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">
                      <a href="servicio-de-mantenimiento-y-limpieza-de-piletas-y-piscinas-de-natacion-en-casas-countries-casas-quintas.php">
                        <p class="boton-click-aqui" style="text-decoration: none;">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-3 wow fadeIn" datos-wow-duracion="2s" data-wow-delay="2s">
              <table width="100%" border="0" style="text-align:center; margin-bottom: 50px;">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_consorcio.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td class="td07">
                      <p>CONSORCIOS, HOTELES Y EMBAJADAS</p>
                    </td>
                  </tr>
                  <tr>
                    <td class="td08b">
                      <p>Especialistas en mantenimiento de piscinas de natación en consorcios</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">
                      <a href="servicio-de-mantenimiento-y-limpieza-de-piletas-y-piscinas-de-natacion-en-edificios-consorcios-departamentos.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>

            </div>



            <div class="col-md-3 wow fadeIn" datos-wow-duracion="3s" data-wow-delay="3s">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_desagote.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>DESAGOTE DE PISCINAS</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p><br>Vaciamos, limpiamos y desinfectamos su piscina de natación dejandola lista para llenar o
                        pintar <br><br></p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 26px;"><a
                        href="servicio-de-desagote-limpieza-desinfeccion-de-piletas-y-piscinas-de-natacion.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-3 wow fadeIn" datos-wow-duracion="4s" data-wow-delay="4s">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_filtro.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>REPARACION Y CAMBIO DE ARENA</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p>Recuerde que un correcto filtrado
                        dara por resultado agua cristalina<br><br> </p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 39px;"><a
                        href="cambio-de-arena-carga-filtrante-de-filtro.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>

            </div>




          </div>
        </div>



        <div class="container">
          <div class="row text-center cont-iconos">
            <div class="col-md-3 wow fadeIn" datos-wow-duracion="1s" data-wow-delay="1s">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/iconos_servicios_venecitas.png" width="138" height="129" alt="" />
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>PASTINADO DE PISCINAS CON VENECITAS</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p><br>Rejuvenecemos su pileta<br><br></p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 43px;"><a
                        href="servicio-de-pastinado-de-piletas-revestidas.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>


            <div class="col-md-3 wow fadeIn" datos-wow-duracion="2s" data-wow-delay="2s">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/iconos_servicios_pintura.png" width="138" height="129" alt="" />
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>PINTURA DE PISCINAS</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b"><br><br>
                      <p>Pintamos tu piscina de material o plastico <br><br><br></p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 8px;"><a
                        href="servicio-de-pintado-de-piletas-de-cemento-y-plastico-o-fibra-de-vidrio.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>





            <div class="col-md-3 wow fadeIn" datos-wow-duracion="3s" data-wow-delay="3s">
              <table width="100%" border="0">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_pro.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>VENTA DE PRODUCTOS</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p><br><br>Marcas lideres de primera calidad <br><br><br></p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 30px;"><a
                        href="productos-quimicos-y-accesorios-para-piletas-y-piscinas-de-natacion.php">
                        <p class="boton-click-aqui">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="col-md-3 wow fadeIn" datos-wow-duracion="4s" data-wow-delay="4s">
              <table width="100%" border="0" style="margin-bottom: 50px;">
                <tbody>
                  <tr>
                    <td align="center"><img src="img/icon_analisis.png" width="138" height="129" alt="" /></td>
                  </tr>
                  <tr>
                    <td align="center" class="td07">
                      <p>ANALISIS BACTERIOLOGICO</p><br><br>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="td08b">
                      <p>No corra riesgos de infecciones. Análisis bacterelógico y físico-químico</p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 46px;"><a
                        href="analisis-bacteriologico-de-agua-de-piscinas-piletas.php">
                        <p class="boton-click-aqui" style="text-decoration: none;">MÁS INFO</p>
                      </a></td>
                  </tr>
                </tbody>
              </table>
            </div>




          </div>
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

          <p class="td08_4">solo confie en pileteros profesionales</p>

          <p class="td08_3" style="padding-bottom: 50px;">
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
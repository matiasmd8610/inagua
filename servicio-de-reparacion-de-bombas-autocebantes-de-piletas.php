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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#2F4598">
  <meta name="robots" content="index, follow, all">
  <meta name="googlebot" content="index, follow, all">
  <meta name="keywords" content="pileta, piletas, piscinas, piletero, pileteros, desagote">
  <meta name="title" content="Soluciones sobre bombas autocebantes">
  <meta name="author" content="Administrator">
  <meta name="description"
    content="Empresa profesional de Limpieza y desagote de pileta. Piletero en Capital Federal." />
  <meta name="google-site-verification" content="VtdXUgSAs18OSNEOuGEqfMCEsFGjHU_Z447jcwFi3Fo">
  <meta property="fb:app_id" content="383820332074788" />
  <title>Soluciones sobre bombas autocebantes | SERVICIOS | INAGUA</title>
  <link rel="canonical" href="https://inagua.com.ar/servicio-de-reparacion-de-bombas-autocebantes-de-piletas">
  <link rel="icon" href="assets/images/logo.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/styles/css/fileinput.css" rel="stylesheet">
  <link href="assets/styles/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/styles/css/animate/animate.css">
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

</head>

<body>
  <section>

    <?php include "include/chat.php"; ?>

  </section>
  <span class="ir-arriba"><img src="assets/images/up.png" alt=""></span>
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
    <div class="container">
        <div class="div-texto">
          <h1 class="texto1 wow zoomInDown" datos-wow-duracion="2s" data-wow-delay="1s">Soluciones sobre bombas
            autocebantes</h1>
          <h2 class="texto2 wow slideInUp">Colocación, reemplazo o mantenimiento de bombas de piscinas</h2>
          <br>

          <div class="grid-services-images mb-5">
            <div class="wow slideInLeft">
              <img src="assets/images/mantenimiento-bombas-notas.png" alt="ejercicios-piscinas" class="img_produc_pintura">
            </div>
          </div>

          <br>
          <p>La bomba autocebante forma parte del sistema de filtrado del agua de la piscina. La función de la bomba es
            la de tomar el agua de la piscina, pasarlo por el elemento filtrante dentro del filtro y posteriormente
            devolver agua filtrada a la piscina para mantenerla en optimas condiciones.</p>
          <p>INAGUA, cuenta con un servicio de reparación de bombas autocebantes, en caso de ingresada a nuestro
            servicio por encontrarse deteriorada en mas de un 50%, tenemos la opción de ofrecer la instalación de un
            equipo nuevo.</p>
          <p>Algunos problemas que le pueden estar sucediendo:</p>

          <p><strong>Prendo la bomba y se me vacía el vaso. </strong></p>
          <p><i>Verifique que la manguera de succión no esté tomando aire, si no lo hace verifique la unión con la bomba
              y si aún allí no encuentra el problema, verifique que no se esté filtrando aire por la tapa del equipo.
            </i>

            <p><strong>La bomba prende pero no funciona</strong></p>
            <p><i>Esto puede ocurrir si ha pasado mucho tiempo sin utilizar la bomba. Por la parte trasera de la bomba,
                trate de hacer girar un poco, manualmente o con un destornillador, el eje/ventilador de la bomba. Si
                bien puede hacerlo usted mismo, se recomienda que lleve la bomba a un centro autorizado o a una
                electromecánica o llamenos a nosotros que somos especialista.</i></p>

            <p><strong>Utilicé la bomba sin canasto y se me trabó.</strong></p>
            <p><i>Se debe abrir la bomba para limpiar la turbina. Si bien puede hacerlo usted mismo, se recomienda que
                lleve la misma a un centro autorizado o a una electromecánica o llamenos a nosotros que somos
                especialista. Se recuerda que si la bomba esta en garantía, ésta puede perderse ante cualquier apertura
                no autorizada.</i></p>
            <br>
            <h5>TENER CUIDADO:</h5>
            <ul>
              <li>Nunca utilice la Bomba sin Canasto.</li>
              <li>No permita que se mojen sus componentes eléctricos.</li>
              <li>No ponga la Bomba en funcionamiento si no recibe agua.</li>
            </ul>

        </div>

        <div class="div-texto texto-art wow slideInUp">
          <p class="texto31">
            <?php include "include/advertencia.php"; ?>
          </p>
        </div>

        <!--        <div class="seguinos22">
          <p class="seguinos_tex2">COMPARTÍ LA NOTA</p>
        </div> -->

        <!-- <div class="seguinos20">
          <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=http://inagua.com.ar/articulo.php?id=27','','width=600,height=400,left=50,top=50,toolbar=yes');void 0"
            rel="image_src"><img src="assets/images/logo_face.png" class="icono_face_compa" alt=""></a>
          <a href="javascript:window.open('https://twitter.com/?status= El articulo http://inagua.com.ar/articulo.php?id=27 es muy interesante. Te invito a que lo leas y compartas','','width=600,height=400,left=50,top=50,toolbar=yes');void 0""><img src="
            img/logo_tw.png" alt="" class="icono_face_compa"></a>
          <a href="whatsapp://send?text=URL" data-action="share/whatsapp/share"><img src="assets/images/whatsapp.png" alt=""
              class="icono_face_compa2"></a>
        </div>
        <br><br>
        <p class=" seguinos22 seguinos_tex2">DEJANOS TUS COMENTARIOS</p>
        <div class="fb-comments" data-href="http://inagua.com.ar/articulo.php?id=27" data-width="100%"
          data-numposts="3"></div>
        <div class="btn_zona2">
          <p class="boton-zona2">
            <a href="piscinas-piscina-piletas-pileta-pileteros-piletero.php" style="color: white;">VOLVER AL ÍNDICE DE
              ARTÍCULOS DE INTERÉS</a>
          </p>
        </div> -->

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
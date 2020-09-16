<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> DoolPool | Home </title>
    <meta property="og:title" content="DoolPool">
    <meta name="description" content="DoolPool Empresa desarrolladora de software.">
    <meta property="og:locale" content="en_PE">
    <meta name="author" content="Ronald Ramos">
    <meta property="og:description" content="DoolPool Empresa de software.">
    <link rel="canonical" href="https://doolpool.com/red/doolpool">
    <meta property="og:url" content="https://doolpool.com">
    <meta property="og:site_name" content="DoolPool">
    <script type="application/ld+json">
      {
        "name": "DoolPool",
        "description": "DoolPool Empresa de software.",
        "Type": "Empresa";
        "author":
          {
            "@type": "Persona",
            "name": "Ronald Ramos"
          },

        "@type": "WebSite",
        "url": "https://doolpool.com",
        "Domninios": "DoolPool"+"WallClot"+"AnVa"

          {
            "Red Social": "https://doolpool.com/red/"
            "Play": "https://doolpool.com/play/",
            "Music": "https://doolpool.com/music/"
          },   
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="assets/src=ico=doolpool.png">
    <meta name="theme-color" content="#3063A0">
    <!-- End FAVICONS -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.css">
    <!-- END PLUGINS STYLES -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <!-- END PLUGINS STYLES -->
        <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/cookieconsent/cookieconsent.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    
    <!-- Disable unused skin immediately -->
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script>
    <!-- Google AdSense V2-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3866600113606193",
    enable_page_level_ads: true
    });
    </script>
     <!-- Google AdSense -->
    <script data-ad-client="ca-pub-3866600113606193" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  </head>
 <body >
    <!-- .app -->
    <main class="app app-site ">

      <nav class="navbar navbar-expand-lg navbar-light py-4 aos-init aos-animate" data-aos="fade-in">
        <!-- .container -->
        <div class="container">

          <!-- .navbar-brand -->
          <a class="navbar-brand  mr-0" href="#">
            <img src="assets/src=ico=doolpool.png" width="25" height="25"> DoolPool</img>
          </a>

          <a class="navbar-btn btn btn-light ml-auto order-lg-2" data-toggle="skin" ><i class="fas fa-moon"></i><span class="d-none d-sm-inline"> Modo Oscuro</span></a>
          <!-- .hamburger -->
          <button class="hamburger hamburger-squeeze hamburger-light d-flex d-lg-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /.hamburger -->
          <div class="navbar-collapse collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mr-lg-3 active">
                <a class="nav-link py-2" href="https://doolpool.com/red/"><i class="far fa-smile"></i> Red DoolPool</a>
              </li>
              <li class="nav-item mr-lg-3 active ">
                <a class="nav-link py-2" href="https://doolpool.com/music"><i class="fa fa-music"></i> DoolPool Music</a>
              </li>
              <li class="nav-item mr-lg-3 active">
                <a class="nav-link py-2" href="https://doolpool.com/play"><i class="fas fa-play"></i> Play DoolPool</a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
      <!-- hero -->
      <section class="py-5">
        <!-- .container -->
        <div class="container container-fluid-xl">
          <!-- .row -->
          <div class="row align-items-center">
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6 order-md-2" data-aos="fade-left">
              <img class="img-fluid img-float-md-6 mb-5 mb-md-0" src="assets/images/illustration/launch.svg" alt="">
            </div><!-- /.col-md-6 -->
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6 order-md-1" data-aos="fade-in">
              <div class="col-fix ml-auto text-center text-sm-left">
                <h1 class="display-4 enable-responsive-font-size mb-4"> El único límite es tu imaginación.</h1>
                <p class="lead text-muted mb-5"> DoolPool, llevamos al tope tu imaginación. 
                  <br> Mira nuestros proyectos realizados y veras nuestra calidad de trabajo. 
                  <br> O comprar algunos sitemas que tenemos para ty en productos.</p>
<?php
	$archivo = "visitas.txt";
			
    //si no esta creado el archivo visitas.txt lo crea y escribe 0 en él.
	if (!file_exists($archivo)){
		$f = fopen($archivo, "w");
		fwrite($f,"0");
		fclose($f);
	}
			
	//lo lee para ver las visitas que lleva la página
	$f = fopen($archivo,"r");
	$contador = fread($f, filesize($archivo));
	fclose($f);
			
	//le suma uno y lo escribe
	$contador++;
	$f = fopen($archivo, "w");
	fwrite($f, $contador);
	fclose($f); 
?>
                  <p>Visit: <?php echo "$contador";?></p>

                <a href="productos/" class="btn btn-lg btn-primary d-block d-sm-inline-block mr-sm-2 my-3" data-aos="zoom-in" data-aos-delay="200">
                  <i class="fas fa-th-list"> Productos</i></a> 
                
                <a href="proyectos/" class="btn btn-lg btn-subtle-primary d-block d-sm-inline-block my-3" target="_blank" data-aos="zoom-in" data-aos-delay="300"> 
                  <i class="fas fa-th-list"> Proyectos</i></a>
              
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /hero -->
      <!-- .feature -->
     <section class="py-5">
        
        <div class="container">
          
          <div class="row text-center text-md-center">
            
            <div class="col-6 col-md-3 py-4" data-aos="fade-up" data-aos-delay="0">
              <img class="mb-4" src="assets/images/illustration/lab.svg" alt="" height="72">
              <h2 class="lead">backend y frontend </h2>
            </div>
            <div class="col-6 col-md-3 py-4" data-aos="fade-up" data-aos-delay="100">
              <img class="mb-4" src="assets/images/illustration/easy-config.svg" alt="" height="72">
              <h2 class="lead">Diseños modernos </h2>
            </div>
            <div class="col-6 col-md-3 py-4" data-aos="fade-up" data-aos-delay="200">
              <img class="mb-4" src="assets/images/illustration/scale.svg" alt="" height="72">
              <h2 class="lead">Rapido y eficas </h2>
            </div>
            <div class="col-6 col-md-3 py-4" data-aos="fade-up" data-aos-delay="300">
              <img class="mb-4" src="assets/images/illustration/support.svg" alt="" height="72">
              <h2 class="lead">Soporte 7/24</h2>
            </div>
           
          </div>
        
        </div>
        
      </section>
      <!-- /.feature -->
      <!-- sections title -->
      <section class="py-5">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col -->
            <div class="col-12 col-md-8 offset-md-2 text-center">
              <h2> Contigo desde cero </h2>
              <p class="lead text-muted"> Diseñando con estylos propios, construidos para alcanzar tus objetivos.. </p>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /sections title -->
      <!-- feature -->
      <section class="py-5">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row align-items-center">
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6" data-aos="fade-right">
              <img class="img-fluid mb-4 mb-md-0" src="assets/images/illustration/solution.svg" alt="">
            </div>
            <!-- /.col-md-6 -->
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6 text-center text-sm-left">
              <h3 class="mb-4"> Aumenta tu productividad </h3>
              <p class="text-muted font-size-lg mb-4"> Cree una interfaz de usuario sorprendente con toneladas de nuestros componentes. Nuestro sistema de construcción también le permite ahorrar mucho tiempo. </p>
              <a href="https://doolpool.com/red/" class="btn btn-subtle-primary" data-aos="zoom-in" data-aos-delay="200">Contactar a DoolPool</a>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <section class="pt-5">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row align-items-center">
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6 order-md-2" data-aos="fade-left">
              <img class="img-fluid mb-4 mb-md-0" src="assets/images/illustration/img-5.png" alt="">
            </div><!-- /.col-md-6 -->
            <!-- .col-md-6 -->
            <div class="col-12 col-md-6 order-md-1 text-center text-sm-left">
              <h3 class="mb-4"> Haz crecer tu negocio </h3>
              <p class="text-muted font-size-lg mb-4"> Con un diseño fácil de usar, simple y receptivo, puede atraer fácilmente a sus posibles clientes; incluso es adaptable a cualquier medio (responsive). No te preocupes Nuestro equipo siempre estará detrás de usted si es necesario.</p>
              <a href="proyectos.php" class="btn btn-subtle-primary" data-aos="zoom-in" data-aos-delay="200">Ver proyectos</a>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /feature -->
      <!-- divider -->
      <section class="position-relative">
        <!-- wave2.svg -->
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="192" viewbox="0 0 1440 240" preserveaspectratio="none">
          <path class="fill-light" fill-rule="evenodd" d="M0 240V0c19.985 5.919 41.14 11.008 63.964 14.89 40.293 6.855 82.585 9.106 125.566 9.106 74.151 0 150.382-6.697 222.166-8.012 13.766-.252 27.51-.39 41.21-.39 99.76 0 197.087 7.326 282.907 31.263C827.843 72.527 860.3 117.25 906.926 157.2c43.505 37.277 115.38 51.186 208.485 53.076 7.584.153 15.156.224 22.714.224 40.887 0 81.402-2.062 121.914-4.125 40.512-2.062 81.027-4.125 121.902-4.125 1.01 0 2.019.002 3.03.004 16.208.042 34.959.792 55.029 2.234V240H0z"></path>
        </svg>
      </section>
      <!-- /divider -->
      <!-- feature -->
      <section class="position-relative pb-5 bg-light">
        <!-- .sticker -->
         <!-- .sticker -->
        <div class="sticker">
          <div class="sticker-item sticker-top-right sticker-soften">
            <img src="assets/images/decoration/cubes.svg" alt="" data-aos="zoom-in">
          </div>
          <div class="sticker-item sticker-bottom-left sticker-soften scale-150">
            <img src="assets/images/decoration/cubes.svg" alt="" data-aos="zoom-in">
          </div>
        </div><!-- /.sticker -->
        <!-- /.sticker -->
        <!-- .container -->
        <div class="container position-relative">
          <h2 class="text-center text-sm-left"> Obtén más beneficios </h2>
          <p class="lead text-muted text-center text-sm-left mb-5"> Elije tu tema y comienza a desarrollar rápidamente. </p><!-- .card-deck -->
          <div class="card-deck-lg">
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="0">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/rocket.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Listo para ir </h5>
                    <p class="text-muted font-size-lg"> Proporciona toneladas de componentes y páginas útiles que le permiten centrarse en la lógica de su aplicación en lugar de volver a tocar píxeles. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="100">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/setting.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Alta funcionalidad </h5>
                    <p class="text-muted font-size-lg"> DoolPool ofrece una alta calidad y estabilidad, no hay una cantidad obscena de espacio desperdiciado, y estamos agregando cuidadosamente características útiles sin exagerar. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card-deck -->
          <!-- .card-deck -->
          <div class="card-deck-lg">
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="200">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/brain.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Impulsa tu creatividad </h5>
                    <p class="text-muted font-size-lg"> El diseño es limpio, simple, moderno y esencial, con muchos gráficos refinados y toneladas de soporte de terceros(programadores) y doolpool suport. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="300">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/horse.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Flujo de trabajo simple </h5>
                    <p class="text-muted font-size-lg"> Nos aseguramos de que puedas hacer una magia ejecutando solo dos comandos. Es muy fácil, extremadamente poderoso y moderno. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card-deck -->
          <!-- .card-deck -->
          <div class="card-deck-lg">
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="400">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/savings.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Pago único </h5>
                    <p class="text-muted font-size-lg"> Después de realizar una compra, recibirá una actualización gratuita para siempre. Haremos que tu producto sea cada vez mejor para ti. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- .card -->
            <div class="card shadow" data-aos="fade-up" data-aos-delay="500">
              <!-- .card-body -->
              <div class="card-body p-4">
                <div class="d-sm-flex align-items-start text-center text-sm-left">
                  <img src="assets/images/illustration/document.svg" class="mr-sm-4 mb-3 mb-sm-0" alt="" width="72">
                  <div class="flex-fill">
                    <h5 class="mt-0"> Bien documentada </h5>
                    <p class="text-muted font-size-lg"> Cada componente está bien explicado con ejemplos, bloque de código y mejores prácticas. También proporcionamos amplia información sobre la personalización de tu compra. </p>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.card-deck -->
        </div>
        <!-- /.container -->
      </section>

      <!-- /feature -->
      <section class="position-relative py-5 bg-light">
        <!-- .sticker -->
        <div class="sticker">
          <div class="sticker-item sticker-bottom-left sticker-soften">
            <img src="assets/images/decoration/bubble2.svg" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>
        </div><!-- /.sticker -->
        <!-- .container -->
        <div class="container position-relative mb-5">
        
          <div class="row">
            <!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 offset-lg-1 mr-md-0">
              <!-- .card -->
              <div class="card shadow-none rounded-lg mb-0 mr-md-n5 mt-md-n5 scale-125" data-aos="fade-in">
                <img class="img-fluid rounded-lg" src="assets/play.png" alt="">
              </div><!-- /.card -->
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-12 col-md-6 col-lg-5 ml-md-0">
              <!-- .card -->
              <div class="card shadow-lg rounded-lg p-4 ml-md-n5 mt-md-5" data-aos="fade-up">
                <blockquote class="blockquote text-center border-0 p-3 p-md-4">
                  <figure>
                    <img class="mr-2" src="assets/images/decoration/quote.svg" alt="" height="32">
                  </figure>
                  <p> Disfruta de nuestros juegos, en nuestra sub plataforma orientada a juegos gratis. podras encontrar juegos online, de escritorio y incluso juegos para celular. Todos estos juegos son totalmente gratis.</p>
                  <footer class="blockquote-footer"> DoolPool, Inc <cite title="Bootstrap Themes"><a href="play/">Play DoolPool</a></cite>
                  </footer>
                </blockquote>
              </div><!-- /.card -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /testimonials -->

      <section class="position-relative py-5 bg-light">
       
        <!-- .container -->
        <div class="container position-relative mb-5">
          
          <div class="row">
            <!-- .col -->
            <div class="col-12 col-md-6 col-lg-4 offset-lg-1 mr-md-0">
              <!-- .card -->
              <div class="card shadow-none rounded-lg mb-0 mr-md-n5 mt-md-n5 scale-125" data-aos="fade-in">
                <img class="img-fluid rounded-lg" src="assets/red.png" alt="">
              </div><!-- /.card -->
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-12 col-md-6 col-lg-5 ml-md-0">
              <!-- .card -->
              <div class="card shadow-lg rounded-lg p-4 ml-md-n5 mt-md-5" data-aos="fade-up">
                <blockquote class="blockquote text-center border-0 p-3 p-md-4">
                  <figure>
                    <img class="mr-2" src="assets/images/decoration/quote.svg" alt="" height="32">
                  </figure>
                  <p> Red DoolPool es una Red Social para el publico en general, esta es una sub plataforma, en la cual podras interactuar con otros usuarios, es totalmente segura.</p>
                  <footer class="blockquote-footer"> DoolPool, Inc <cite title="Bootstrap Themes"><a href="red/">Red DoolPool</a></cite>
                  </footer>
                </blockquote>
              </div><!-- /.card -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /testimonials -->
  


      <!-- call to action -->
      <section class="py-5 position-relative bg-light">
        <!-- .sticker -->
        <div class="sticker">
          <div class="sticker-item sticker-bottom-left w-100">
            <!-- wave1.svg -->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="120" viewbox="0 0 1440 240" preserveaspectratio="none">
              <path class="fill-black" fill-rule="evenodd" d="M1070.39 25.041c107.898 11.22 244.461 20.779 369.477 51.164L1440 240H0L.133 72.135C350.236-17.816 721.61-11.228 1070.391 25.04z"></path>
            </svg>
          </div>
        </div>
        <!-- /.sticker -->
        <!-- .container -->
        <div class="container">
          <!-- .card -->
          <div class="card bg-success text-white position-relative overflow-hidden shadow rounded-lg p-4 mb-0" data-aos="fade-up">
            <!-- .sticker -->
            <div class="sticker">
              <div class="sticker-item sticker-middle-left">
                <img class="flip-y" src="assets/images/decoration/bubble4.svg" alt="">
              </div>
            </div>
            <!-- /.sticker -->
            <!-- .card-body -->
            <div class="card-body d-md-flex justify-content-between align-items-center text-center position-relative" >
              <h3 class="font-weight-normal mb-3 mb-md-0 mr-md-3" > ¿Tienes alguna pregunta sobre DoolPool? </h3>
                <a class="btn btn-lg btn-primary shadow" href="https://doolpool.com/red//contact-us" >
                  Contáctenos <i class="fa fa-angle-right ml-2"></i>
                </a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /call to action -->
      <!-- footer -->
      <section class="py-5 bg-black text-white">
        <!-- .container -->
        <div class="container">
          <!-- .row -->
          <div class="row">
            <!-- .col -->
            <div class="col-12 col-md-4 col-lg-3">
              <!-- Brand -->
              <a class="navbar-brand ml-auto mr-0" href="#">
                <img src="assets/src=ico=doolpool.png" width="30" height="30" > DoolPool </img>
              </a> 
              <!-- /.navbar-brand -->
              <p></p>
              <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=pLYa9eo8iVl3yBjcT1vyoR2hklFhFZNdKYuNG6dGvOfzhwhsP39hnY4lJ4qQ"></script></span>
              <p></p>          
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-6 col-md-4 col-lg-2 mb-3 mb-md-0">
              <!-- Heading -->
              <h6 class="mb-4"> Empresa </h6><!-- links -->
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="docs/" class="text-muted">Sobre nosotros</a>
                </li>
                <li class="mb-3">
                  <a href="https://doolpool.com/red/doolpool" class="text-muted">Blog</a>
                </li>
              </ul>
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-6 col-md-4 col-lg-2 mb-3 mb-md-0">
              <!-- Heading -->
              <h6 class="mb-4"> Productos </h6><!-- links -->
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="productos.php" class="text-muted">Productos</a>
                </li>
                <li class="mb-3">
                  <a href="proyectos.php" class="text-muted">Proyectos</a>
                </li>
                
              </ul>
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-6 col-md-4 col-lg-2 mb-3 mb-md-0">
              <!-- Heading -->
              <h6 class="mb-4"> Soporte </h6><!-- links -->
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="docs/doolpool/" class="text-muted">Documentation</a>
                </li>
                <li class="mb-3">
                  <a href="docs/support.php" class="text-muted">Soporte Tecnico</a>
                </li>
                
              </ul>
            </div><!-- /.col -->
            <!-- .col -->
            <div class="col-6 col-md-4 col-lg-2 mb-3 mb-md-0">
              <!-- Heading -->
              <h6 class="mb-4"> Legal </h6><!-- links -->
              <ul class="list-unstyled">
                <li class="mb-3">
                  <a href="docs/doolpool/index.php#politica" class="text-muted">Política de privacidad</a>
                </li>
                <li class="mb-3">
                  <a href="docs/doolpool/index.php#terminos" class="text-muted">Términos de servicio</a>
                </li>
              </ul>
            </div><!-- /.col -->
          </div><!-- /.row -->

              <footer class="app-footer">
                <div class="copyright">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">© 2018-<?php $año=date("Y"); echo $año; ?> DoolPool Inc. <br>All right reserved in <a href="docs/">Documentation</a>.</font>
                  </font>
                </div>
              </footer>
     
        </div><!-- /.container -->
      </section><!-- /footer -->
    </main><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
    <!-- END BASE JS -->
     <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/pace-progress/pace.min.js"></script>
    <script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/cookieconsent/cookieconsent.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/aos/aos.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->

    <script src="assets/javascript/pages/cookieconsent-demo.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>

  </body>
</html>
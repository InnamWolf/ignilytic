<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta name="description" content="Diseño de Paginas Web, Desarrollo de Sistemas Web a la medida, Exito para tu Negocio">
  <meta name="keyword" content="Web, Mexico, Dinamicas,  Página, Creativas, Diseño, Sistemas, Confiables, Economicas, Estables">
  <meta name="author" content="http://www.ignilytic.com/">
  <meta name="facebook-domain-verification" content="uc0ql1adbveoomnv2hhigtjnt4rnfd" />
  <meta name="robots" content="inicio" />
  <link rel="icon" href="vistas/img/logo.png">
  <title>Ignilytic - Páginas Web</title>
  <!--===============================================
  Librerias CSS
  =================================================-->
  <link rel="stylesheet" href="vistas/css/normalize.css"/>
  <link rel="stylesheet" href="vistas/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <!--===============================================
  Librerias JS
  =================================================-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QLY0H0KFYK"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>
  <div class="wrapper">
  <!--===============================================
  Menu movil
  =================================================-->
    <nav class="movil">
      <div class="logo">
        <a href="#">
          <img src="vistas/img/logo.svg" alt="logo">
          <span>Ignilytic</span>
        </a>
        <i class="fa fa-bars menu" id="menu" aria-hidden="true"></i>
      </div>
      <div class="contenedor-item">
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Portafolio</a>
        <a href="#">FAQ</a>
        <a href="#" class="btn-saga">Iniciar sesión</a>
      </div>        
    </nav>
  <!--===============================================
  Menu PC
  =================================================-->
  <nav class="pc">
      <div class="logo">
        <a href="#">
          <img src="vistas/img/logo.svg" alt="logo">
          <span>Ignilytic</span>
        </a>        
      </div>
      <div class="contenedor-item">
        <a href="#">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Portafolio</a>
        <a href="#">FAQ</a>
        <a href="#" class="btn-saga">Iniciar sesión</a>
      </div>        
    </nav>
  </div>
  <!--===============================================
  Carrusel
  =================================================-->    
  <div class="owl-carousel owl-theme carrusel">
    <div class="item img1"></div>
    <div class="item img2"></div>
    <div class="item img3"></div>     
  </div>
  <script>
      $('.owl-carousel').owlCarousel({
    loop:true,    
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    center: true,
    items:1,margin: 2,    
})
    </script>  
  <script src="vistas/js/main.js"></script>
</body>
</html>
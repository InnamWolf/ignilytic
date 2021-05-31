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
  <script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
  <div class="wrapper">
    <?php
      /*=================================================
      Menu Movil y PC
      =================================================*/
      include_once 'paginas/menu.php';
      
      /*=============================================
      PÁGINAS
      =============================================*/

      if(isset($_GET["pagina"])){

        if($_GET["pagina"] == "inicio" ||
        $_GET["pagina"] == "servicios" ||
        $_GET["pagina"] == "faq" ||            
        $_GET["pagina"] == "contacto" ||
        $_GET["pagina"] == "pagina-web" ||
        $_GET["pagina"] == "app-web" ||
        $_GET["pagina"] == "diseno" ||
        $_GET["pagina"] == "social" ||
        $_GET["pagina"] == "seguro" ||
        $_GET["pagina"] == "mantenimiento" ||
        $_GET["pagina"] == "preventivo" ||
        $_GET["pagina"] == "ti" ||
        $_GET["pagina"] == "enviar" ||
        $_GET["pagina"] == "enviado" ||
        $_GET["pagina"] == "noenviado" ||
        $_GET["pagina"] == "portafolio" ||
        $_GET["pagina"] == "politica" 
        ){

          include "paginas/".$_GET["pagina"].".php";

        }else{
            
            include "paginas/404.php";
        }

            
      }else{
          include "paginas/inicio.php";    
      }       

      include 'paginas/footer.php';
      
    ?>   
  </div>
<script src="vistas/js/main.js"></script>
</body>

</html>
<?php
include('includes/Cabecera.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Copias Gratis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	
	<link href="css/responsive.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1653596961569015',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_CO/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head><!--/head-->

<body>
    <div class="fondo">
   

	    <header id="header">      
            <?php 
		  include('fragmentos/Header.php')
		  ?>
        </header>
    <!--/#header-->

        <section id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider">
                        <div class="slide-text">
                                <div>
                                    <img class="logo-brand-mobile" style="display:none;" src="images/logotransparente.png">
                                </div>
                                <h1>¿COMO FUNCIONA?</h1>
                                <h3>Paso 1 "Registrate":</h3>
                                <p>Completa el formulario de registro que se encuentra dando click en el siguiente botón.</p>
                        
                                <a href="indice.php?par=1" class="btn btn-common">REGISTRARME</a>
                        
                                 <h3>Paso 2 “Actívate”:</h3>
                                 <p>Activa tu cuenta accediendo al  enlace que ha llegado a tu correo electrónico.</p>
                                <h3>Paso 3 “Saca tus fotocopias”:</h3>
                                <p>Acércate a cualquier centro de copiado identificado con nuestra marca.</p>
                        </div>
                            <img src="images/stackhojas4.png" class="slider-hill" alt="slider image">
                            
                            
                    </div>
                </div>
            </div>
            <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
        </section>
    <!--/#home-slider-->

        <section id="services">
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                             <h1 class="title">Pauta Publicitaria para Empresas</h1>
                             <p>Puedes adquirir paquetes de copias que serán distribuidas en distintos centros de copiado de Popayán.</p>
                             <p>Mientras Universitarios y estudiantes de institutos sacan sus copias gratuitas, tu estas pautando por un lado de cada fotocopia</p>

                        </div>
                    <div>
                  
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                                <img src="images/home/marketing.png" alt="">
                            </div>
                            <h2>Publicidad Segmentada</h2>
                            <p>La publicidad tradicional es costosa y llega a quien no necesita de tu producto o servicio. Nosotros estamos aliados con centros de copiado que manejan publicos diversos y segmentados.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                                <img src="images/home/pie-chart.png" alt="">
                            </div>
                            <h2>Medición de las campañas publicitarias</h2>
                            <p>Utilizamos un sistema que te muestra cuando una compra ha sido gracias a tu anuncio en copiasgratis. </p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <div class="single-service">
                            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                                <img src="images/home/recycling.png" alt="">
                            </div>
                            <h2>Amigable con el medio ambiente</h2>
                            <p>La publicidad de papel no se perderá, se conservará ya que la otra cara de la hoja contiene material académico.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--/#services->

        <section id="action" class="responsive">
            <div class="vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="action take-tour">
                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h1 class="title">Triangle Corporate Template</h1>
                                <p>A responsive, retina-ready &amp; wide multipurpose template.</p>
                            </div>
                            <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="tour-button">
                                    <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   

        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="single-features">
                        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image1.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Experienced and Enthusiastic</h2>
                            <P>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</P>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Built for the Responsive Web</h2>
                            <P>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</P>
                        </div>
                        <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/image2.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/image3.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2>Experienced and Enthusiastic</h2>
                            <P>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</P>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!--/#features-->

        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h2 class="title" style="color:#ede7e7;">Estudiantes de Popayán Utilizan Nuestro Servicio Frecuentemente</h2>        
                            <p><img src="images/universitarios2.png" class="img-responsive" alt=""></p>
                            
                        </div>
                    
                        
                    </div>
                </div>
            </div>
        </section>
    <!--/#clients-->

        <footer id="footer">
            
            <?php 
		  include('fragmentos/Footer.php')
		  ?>
        </footer>
    <!--/#footer-->
    </div>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

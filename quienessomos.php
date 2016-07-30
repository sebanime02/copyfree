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
    <title>Quienes Somos | Copias Gratis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
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
	<header id="header">      
        <?php 
		include('fragmentos/Header.php')
		?>
    </header>
    <!--/#header-->
<br><br><br>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12 letra-quienes">
                            <h1 class="title">Quienes somos</h1>
                            <p>Copias Gratis es un innovador sistema para realizar publicidad segmentada a los estudiantes universitarios. </p></br>
                            <p>
Ofrecemos copias gratuitas por una sola cara sin ningún costo. El sistema es posible ya que el estudiante obtendrá por un lado su material de estudio fotocopiado, y por la otra cara una atractiva pauta publicitaria. </p></br>
<p>Nuestra principal misión es ser de gran ayuda tanto para los alumnos universitarios como para las empresas que deseen llegar a este sector.  
</p>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="fb-page" data-href="https://www.facebook.com/copiasgratis/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"></div> </div>
                <div class="col-sm-6 l">
                	<h2><b>Preguntas frecuentes</b></h2>
                    <h5>1.	¿A partir de cuándo puedo sacar fotocopias gratis?</h5>
                    <p>Para sacar fotocopias gratis primero tienes que inscribirte en la página de CopiasGratis. Una vez inscrito, realizar los pasos que siguen y serás activado rápidamente.</p>
                    <h5>2.	¿Por qué son gratis las fotocopias?</h5>
                    <p>Las fotocopias son gratis porque vienen con publicidad y por ende es la marca quien paga por tus fotocopias. Por lo que ahora podrás ahorrar ese dinero para gastarlos en lo que más te guste!.</p>
                    <h5>3.	¿Cómo me entero que hay una campaña activa?</h5>
                    <p>CopiasGratis te va a estar avisando mediante Facebook, Twitter y pagina web las marcas que van a estar colocando publicidad en las hojas.</p>
                    <h5>4.	¿Cuántas fotocopias podre sacar?</h5>
                    <p>Cada semana tendrás un cupo de 50 fotocopias (Sujeto a disponibilidad), el cual será recargado semanalmente el lunes a primera hora. </p>
                    <h5>5.	¿Puedo sacar fotocopias gratis en un centro de fotocopiado diferente al que se encuentra en mi universidad?</h5>
                    <p>Si, puedes disfrutar del servicio en cualquier centro de fotocopiado de nuestra red, asi no sea el mismo de tu facultad o universidad</p>
                    <h5>6.	¿Qué debo hacer para sacar fotocopias gratis?</h5>
                    <p>Inscribirte y disfrutar del servicio una vez tu cuenta sea activada. </p>
                </div>
            </div>
        </div>
    </section>
<?php /* ?>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

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
 
 <!--/#team-->
    
    <!--/#team-->
<?php */ ?>
<section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Conoce Nuestro Equipo</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Nos caracterizamos por la entrega, responsabilidad y calidad del trabajo. <br>
                 </p>
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/equipo1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="https://www.facebook.com/vladimir.ceballos.3?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Vladimir Ceballos</h2>
                                        <p>Co-fundador &amp; Director de Social Media</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/equipo2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="https://www.facebook.com/ricardo.ez10?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Ricardo Enriquez</h2>
                                        <p>Co-fundador &amp; Desarrollador web</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/equipo3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="https://www.facebook.com/sebastian.d.benavides"><i class="fa fa-facebook"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Sebastian Dejoy</h2>
                                        <p>Desarollador web y móvil</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/equipo4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="https://www.facebook.com/karynaeq?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Karina Enriquez</h2>
                                        <p>Contadora</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <?php 
		include('fragmentos/Footer.php')
		?>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

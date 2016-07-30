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
    <title>Insertar Estudiante | Copias Gratis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head><!--/head-->

<body>
    <!--/#header-->

<header id="header">      
        <?php 
        include('fragmentos/Header.php')
        ?>
    </header>
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text"><br><br>
                        <h2>Registrarme</h2>
                    
					

<?php
if (!empty($_GET['msj'])) {
            $msj = $_GET['msj'];
            $mensaje = consultarCampo("DESCRIPCION", "mensaje", "WHERE ID_MENSAJE={$msj}", "Error Obteniendo el usuario");
        }else{
			$mensaje="";
			}
	include('fragmentos/RegistrarEstudianteHtml.php');
?>
<script>
		<?php if(!empty($mensaje) && $mensaje!="") { ?>
        alert('<?php echo $mensaje ?>');
		<?php } ?>
        </script>

       
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

<br><br><br><br><br>
<footer id="footer">
    
        <?php 
        include('fragmentos/Footer.php')
        ?>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

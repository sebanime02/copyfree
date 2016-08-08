<?php
if(empty($_SESSION['idUsuario2'])){
        //header('Location: indice.php');
}
include('includes/Cabecera.php');
?>
<!DOCTYPE html>
<html lang="es">
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
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <!--/#header-->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Para sacar tus fotocopias GRATIS</h1>
                        <h2>Escribe tus credenciales:</h1>
                        
                        
<?php 
  //session_start();
  //session_destroy();
  if (!empty($_GET['msj'])) {
            $msj = $_GET['msj'];
            $mensaje = consultarCampo("DESCRIPCION", "MENSAJE", "WHERE ID_MENSAJE={$msj}", "Error Obteniendo el usuario");
        }else{
			$mensaje="";
			}
if(empty($_SESSION['nombres'])){
include('fragmentos/IniciarSesionHtml.php');
?>
<a class="link-volver" href="http://localhost:8080/Salvado/index.php"> <- Regresar a la página principal</a>
<?php


}else{
	echo 'Bienvenid@ '.$_SESSION['nombres'].' '.$_SESSION['apellidos'].'<br>'.'<br>';
	
    if($_SESSION['idTipoUsuario']==2){
?>
            
            <a href="<?php
           
		if($_SESSION['idTipoUsuario']==1){ echo '_Admin.php';}
		else if($_SESSION['idTipoUsuario']==2){ echo 'Panel.php';}
			
			?>"/>Principal</a>
            
            <a href="RegistrarEstudiante.php"  >Registrar Estudiante</a><br><br>
            <?php } else {

                echo 'Usted cuenta con '.$_SESSION['copiasDisponiblesEstudiante'].' copias disponibles';
                }?>
                <br>
                <br>
            <a href="includes/CerrarSesion.php"  >Cerrar Sesion</a><br><br>

            <?php } ?>
                        
                    </div>
                    <img src="images/laptop.png" class="slider-hill" alt="slider image">
                    <img src="images/logotransparente.png" class="slider-house" alt="slider image">

                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    <footer id="footer">
            <?php 
          include('fragmentos/Footer.php')
          ?>
    </footer>
<script>
		<?php if(!empty($mensaje) && $mensaje!="") { ?>
        alert('<?php echo $mensaje ?>');
		<?php } ?>
        </script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

       
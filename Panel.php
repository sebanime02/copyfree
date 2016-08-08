<?php
if(empty($_SESSION['idUsuario2'])){
        //        header('Location: indice.php');
}


include('includes/Cabecera.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Fotocopias Gratis</title>
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

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1></h1>

        <?php
        if (!empty($_GET['msj'])) {
            $msj = $_GET['msj'];
            $mensaje = consultarCampo("DESCRIPCION", "mensaje", "WHERE ID_MENSAJE={$msj}", "Error Obteniendo el usuario");
        }else{
			$mensaje="";
			}
?>
<div class="alert alert-success fade in">
                            <h4>Copias gratis</h4>
                            <p>Hola <?= $_SESSION['nombres']; ?> , su usuario esta asociado al establecimiento "<?= $_SESSION['nombreEstablecimiento']; ?>" y tiene disponibles <STRONG><?= $_SESSION['copiasDisponiblesEstablecimiento']; ?></STRONG> copias
                            </p>
                        </div>
<?php

		if(isset($_SESSION['copiasDisponiblesEstudiante']) ){
			echo '<br>';
?>
<div class="alert alert-info fade in">
                            <h4><?php echo $_SESSION['nombresEstdiante'] . ' ' . $_SESSION['apellidosEstudiante']; ?></h4>
                            <p>tiene <STRONG><?php echo $_SESSION['copiasDisponiblesEstudiante']; ?></STRONG> Copias disponibles</p>
        <br>                
<?php
            include('fragmentos/FotocopiarHtml.php');
			?>
            
        </div>
            <?php

                echo '<br>'.$mensaje.'<br>';
			}else{
            include('fragmentos/MostrarUsuarioHtml.php');
			echo $mensaje;
				}
		/*
        if (!empty($_GET['msj']) && $_GET['msj'] == 3) {

            echo '<br>';

            echo 'El(a) Estudiante ' . $_SESSION['nombresEstdiante'] . ' ' . $_SESSION['apellidosEstudiante'] . ' tiene ' . $_SESSION['copiasDisponiblesEstudiante'] . ' copias disponibles';
			
            include('fragmentos/FotocopiarHtml.php');
			 
        } else {

            echo '<br>';
            if (!empty($_GET['msj']) && $_GET['msj'] != 3) {
				if($_GET['msj'] == 4){
					            echo '<br>';

            echo 'El(a) Estudiante ' . $_SESSION['nombresEstdiante'] . ' ' . $_SESSION['apellidosEstudiante'] . ' tiene ' . $_SESSION['copiasDisponiblesEstudiante'] . ' copias disponibles';
			
            include('fragmentos/FotocopiarHtml.php');
					} else {
            include('fragmentos/MostrarUsuarioHtml.php');
			}
                echo $mensaje;
            }
        }*/
        ?>
<br><br>
            <a class="btn btn-danger" href="includes/CerrarSesion.php"  >Cerrar Sesion</a>
		<script>
		<?php if(!empty($mensaje) && $mensaje!="") { ?>
        alert('<?php echo $mensaje ?>');
		<?php } ?>

        </script>
       
                    </div>

                    <img src="images/logotransparente.png" class="slider-house slider-house-panel" alt="slider image">
                    
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

       
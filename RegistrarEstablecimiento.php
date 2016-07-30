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
    <title>Insertar Establecimiento | Copias Gratis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]--> 
    <style>
    #map-canvas {
                height: 100%;
                width: 60%;
                right: 0px;
                top: 10px;
                position: absolute;
                padding: 60px 40px;
                border-radius: 20px 20px 20px 20px;/*borde redondeado*/
                -moz-border-radius: 20px 20px 20px 20px;/*para mozillap*/
                -webkit-border-radius: 20px 20px 20px 20px;/*para mozillap*/

            }
            </style>      
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLbIZ_xm4x_o7mFLO5brVLV9yYj6uSaa0&v=3.exp&sensor=false"></script>
        <script>
            var map;

            var suportGeolocation = false;
            var latitud;
            var longitud;
            var geocoder;

            var dir = 'Sin resultados';
            var finishCallback = false;

            function localizame() {
                if (navigator.geolocation) {
                    suportGeolocation = true;
                    navigator.geolocation.getCurrentPosition(coordenadas, errores);
                } else {
                    alert('Oops! Tu navegador no soporta geolocalizaci?n. Descarga Chrome, que es gratis!');
                }
            }

            function coordenadas(position) {
                latitud = position.coords.latitude;
                longitud = position.coords.longitude;

                initialize();
            }

            function errores(err) {
                if (err.code == 0) {
                    alert("Oops! Algo ha salido mal");
                }
                if (err.code == 1) {
                    alert("Oops! No has aceptado compartir tu posici?n");
                }
                if (err.code == 2) {
                    alert("Oops! No se puede obtener la posici?n actual");
                }
                if (err.code == 3) {
                    alert("Oops! Hemos superado el tiempo de espera");
                }
                suportGeolocation = false;
                initialize();
            }

            function initialize() {
                var lat = 2.59, lng = -76.43;
                if (suportGeolocation == true) {
                    lat = latitud;
                    lng = longitud;
                }
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(lat, lng),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                 //var img ='http://copiasgratis.com/images/market.png';
                 var img = {
                    url: "images/market.png", // url
                    scaledSize: new google.maps.Size(20, 30), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 34) // anchor
                };
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lng),
                    map: map,       
                    icon: img,
                    animation: google.maps.Animation.DROP,
                    title: "Posicion por defecto",
                    draggable: true


                });

                document.getElementById("lat").value = lat;
                document.getElementById("lng").value = lng;

                google.maps.event.addListener(marker, "dragend", function() {
                    document.getElementById("lat").value = marker.getPosition().lat();
                    document.getElementById("lng").value = marker.getPosition().lng();

                });

            }
            //     google.maps.event.addDomListener(window, 'load', initialize);

        </script>
</head><!--/head-->

<body onload="localizame()">
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
                        <h2>Regitrar Establecimiento</h2>
                    
					

<?php
if (!empty($_GET['msj'])) {
            $msj = $_GET['msj'];
            $mensaje = consultarCampo("DESCRIPCION", "mensaje", "WHERE ID_MENSAJE={$msj}", "Error Obteniendo el usuario");
        }else{
			$mensaje="";
			}
	include('fragmentos/RegistrarEstablecimientoHtml.php');
?>
<script>
		<?php if(!empty($mensaje) && $mensaje!="") { ?>
        alert('<?php echo $mensaje ?>');
		<?php } ?>
        </script>

       
                    </div>
        <div id="map-canvas"></div>

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

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>

<?php
include('includes/Cabecera.php');
?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Donde Estamos | Copias Gratis</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/tabla.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <style type="text/css">
            #map-canvas {
                height: 400px;
                top: 50px;
                width: 100%;
                right: 10px;
                border-radius: 20px 20px 20px 20px;/*borde redondeado*/
                -moz-border-radius: 20px 20px 20px 20px;/*para mozillap*/
                -webkit-border-radius: 20px 20px 20px 20px;/*para mozillap*/

            }
            #registros{
                font-size: 20px;
                width: 100%;
                top:20px;
            }
        </style>
        <script language="JavaScript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLbIZ_xm4x_o7mFLO5brVLV9yYj6uSaa0&v=3.exp&sensor=false"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var latlng = new google.maps.LatLng(2.4598, -76.596); // los parametros siempre se transmiten en este orden: (latitud,longitud)
                var myOptions = {
                    zoom: 13,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                        myOptions);
                var img = {
                    url: "images/market.png", // url
                    scaledSize: new google.maps.Size(20, 30), // scaled size
                    origin: new google.maps.Point(0,0), // origin
                    anchor: new google.maps.Point(0, 34) // anchor
                };
                $.get("mapasql.php", function(xml) {
                    $(xml).find("marker").each(function() { /*loop*/

                        var lat = $(this).attr('lat');
                        var lng = $(this).attr('lng');
                        var title = $(this).attr('title');
                        var content = $(this).attr('content');
                        // var icon = $(this).attr('icon');
                        var id = $(this).attr('id');

                        var infoWindow = new google.maps.InfoWindow({
                            content: content
                        });

                        var marcador = new google.maps.Marker({
                            position: new google.maps.LatLng(lat, lng),
                            map: map,
                            animation: google.maps.Animation.DROP,
                            title: title,
                             icon: img
                        })

                    });/** end loop*/

                }); /* end document ready*/

            });

        </script>
</head><!--/head-->

<body>
    <!--/#header-->

<header id="header">      
        <?php 
        include('fragmentos/Header.php')
        ?>
    </header>
    <br>
    <section id="home-slider">

        <div class="container">

        <div id="map-canvas"></div>
       	<h1>Donde estamos?</h1>
            <?php
            ######Configuración#######
            #
            $paginas = 10;            #
            $tabla = "establecimiento";  #
            #
            ##########################
            $pg=$_GET["pg"];

            $actual = (!isset ($pg))?1:$pg;
            $sql = mysql_query ("SELECT * FROM ".$tabla."");
            $total = mysql_num_rows ($sql);
            if ($actual == 1) {
            $desde = "0";
            }
            elseif ($actual != 1) {
            $desde = $actual * $paginas - $paginas;
            }
            $tp = ($total / $paginas);
            if (strstr($tp,'.')){ 
            $tp = explode (".",$tp);
            $tp = ($tp[0]+1);
            }
            $resp = mysql_query ("SELECT * FROM ".$tabla." ORDER BY ID_ESTABLECIMIENTO ");
            ?>

        <div class="CSSTableGenerator">
            <table>
                <tr>
                    <td bgcolor="#999999">Nombre</td>
                    <td bgcolor="#999999">Descripcion</td>
                    <td bgcolor="#999999">Direccion</td>
                </tr>
                <?php 
                while ($row = mysql_fetch_array ($resp)) {
                //Aqui parte la parte de modificación
                ?>
                <tr>
                    <td><?php echo $row['NOMBRE_ESTABLECIMIENTO']; ?>&nbsp; </td>
                    <td><?php echo $row['DESCRIPCION_ESTABLECIMIENTO']; ?>&nbsp; </td>
                    <td><?php echo $row['DIRECCION_ESTABLECIMIENTO']; ?>&nbsp; </td>
                </tr>
                <?php 
                //echo "Registro: ".$row["com_id"]."<br>";
                //Aqui termina xD
                }
                if($tp == 1){
                $pag = "pagina";
                }else{
                $pag = "paginas";
                }

                if($total == 1){
                $reg = "registro";
                }else{
                $reg = "registros";
                }
                //$pag = ($tp == 1) ? pagina : paginas;
                //$reg = ($total == 1) ? registro : registros;
                ?>
            </table>
            </div>
            <br>Encontrados <b><?=$total?></b> <?=$reg?> en <b><?=$tp?></b> <?=$pag?><br>
            <?php
            $anterior = true;
            $siguiente = true;
            if (($actual == 1) AND ($actual == $tp)) {
            $anterior = false;
            $siguiente = false;
            }
            elseif ($actual == $tp) {
            $anterior = true;
            $siguiente = false;
            }
            elseif ($actual == 1) {
            $anterior = false;
            $siguiente = true;
            }
            if ($anterior) {
            echo "<a href=\"consulta.php?pg=".($actual-1)."\">&lt; Pagina anterior</a> | ";
            }
            else {
            echo "|";
            }
            for ($i = 1; $i <= $tp;$i++) {
            if ($i == $actual) {
            echo " <b>".$i."</b> | ";
            }
            else {
            echo "<a href=\"consulta.php?pg=".$i."\"> ".$i."</a> |";
            }
            }
            if ($siguiente) {
            echo " <a href=\"consulta.php?pg=".($actual+1)."\"> Pagina siguiente &gt;</a>";

            }
            ?>
			<br>
        </div>
        </div>
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

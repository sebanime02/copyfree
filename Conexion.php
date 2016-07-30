<?php
$host="localhost";

/*PRODUCCION
$user="soypayan_root";
$pss="soypayan_root";
*/
// PRUEBAS
$user="root";
$pss="";
$db="soypayan_copias_gratis";
$link = mysql_connect($host, $user, $pss)
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($db,$link) or die(mysql_error().'No se pudo seleccionar la base de datos');
?>
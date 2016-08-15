<?php

$produccion=false;

if($produccion){
	

$host="localhost";
$user="soypayan_root";
$pss="soypayan_root";

$db="soypayan_copias_gratis";
$link = mysql_connect($host, $user, $pss)
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($db,$link) or die(mysql_error().'No se pudo seleccionar la base de datos');

}else{

	$host="localhost";
	$user="root";
	$pss="";
	
	$db="copias_gratis";
	$link = mysql_connect($host, $user, $pss)
	or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db($db,$link) or die(mysql_error().'No se pudo seleccionar la base de datos');
	
}


?>
<?php

include("Cabecera.php");

$nombre= $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$direccion= $_POST['direccion'];
$latitud= $_POST['latitud'];
$longitud= $_POST['longitud'];

date_default_timezone_set('America/Bogota');
$fecha= date("Y-m-d");
$hora= date("H:i:s");
$fechaActual=$fecha.' '.$hora;
$camposInsert="NULL,1,'{$nombre}','{$descripcion}','{$direccion}',0,'{$fechaActual}','{$longitud}','{$latitud}'";
				
				insertarRegistro("establecimiento","",$camposInsert,"No se pudo insertar el registro");

header("location: ../RegistrarEstablecimiento.php?msj=7");

?>
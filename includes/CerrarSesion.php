<?php
include ("Cabecera.php");

$_SESSION ['nombres'] = NULL;
$_SESSION ['apellidos'] = NULL;
$_SESSION ['idTipoUsuario'] = NULL;
$_SESSION ['idEstablecimiento'] = NULL;
$_SESSION ['idFacultad'] = NULL;
$_SESSION ['nombreEstablecimiento'] = NULL;
$_SESSION ['copiasDisponiblesEstablecimiento'] = NULL;
$_SESSION ['idFacultad'] = NULL;
$_SESSION ['copiasDisponiblesEstudiante'] = NULL;

header ( 'Location: ../Inicio.php' );

?>
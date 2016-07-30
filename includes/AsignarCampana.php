<?php

	include('includes/cabecera.php');

$id_establecimiento = $_POST['idEstablecimiento'];
$idCampana = $_POST['idCampana'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];

 insertarRegistro("detalle_campana","","NULL, {$id_establecimiento}, {$idCampana}, '{$cantidad}', '{$descripcion}', NULL","Error insertando detalle");

?>
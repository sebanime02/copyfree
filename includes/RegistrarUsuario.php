<?php

include("Cabecera.php");
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$programa = $_POST['programa'];
$nacimiento = $_POST['nacimiento'];

$date = new DateTime($nacimiento);
$date->format('Y-m-d');

//$idTipoDocumento = $_POST['idTipoDocumento'];
$idTipoDocumento = 1;
$numeroDocumento = $_POST['numeroDocumento'];
$facultad = 1;
date_default_timezone_set('America/Bogota');
$fecha= date("Y-m-d");
$hora= date("H:i:s");
$fechaActual=$fecha.' '.$hora;

$result = consultarCampos("usuario", "where NUMERO_DOCUMENTO = '{$numeroDocumento}' AND ID_TIPO_DOCUMENTO={$idTipoDocumento} ", "Error");

if (!empty($result)) {
   header('Location: ../RegistrarEstudiante.php?msj=8');
} else {

$camposInsert="NULL,3,1,{$facultad},{$idTipoDocumento},3,'{$nombres}','{$apellidos}','{$numeroDocumento}','{$numeroDocumento}','{$celular}','{$correo}','NO_APLICA','{$fechaActual}','{$programa}',60,'{$nacimiento}'";
				
				insertarRegistro("usuario","",$camposInsert,"No se pudo insertar el registro");

enviarCorreoActivacion($numeroDocumento ,$nombres.' '.$apellidos,$correo,"Activacion Cuenta de copiasgratis.com");

        header('Location: ../RegistrarEstudiante.php?msj=12');
		}
?>
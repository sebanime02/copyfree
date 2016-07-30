<?php
/**
 * Insertar un nuevo usuario en la base de datos
 */

include("../includes/Funciones.php");

require 'Establecimiento.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);

    // Insertar usuario
    $retorno = Establecimiento::insert(
        $body['nombre'],$body['direccion']);

    if ($retorno) {
        $args = explode("|", $body['direccion']);
        $correo=$args[3];
        $nroDocumento=$args[1];
        $nombres=$body['nombre'];

enviarCorreoActivacion($nroDocumento ,$nombres,$correo,"Activacion Cuenta de copiasgratis.com");

        $json_string = json_encode(array("estado" => 1,"mensaje" => "Creacion correcta"));

        
		echo $json_string;
    } else {
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se creo el registro"));
		echo $json_string;
    }
}

?>
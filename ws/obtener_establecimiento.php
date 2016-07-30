<?php
/**
 * Obtiene todas las usuarios de la base de datos
 */

require 'Establecimiento.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petici�n GET
    $usuarios = Establecimiento::getAll();

    if ($usuarios) {

        $datos["estado"] = 1;
        $datos["usuarios"] = $usuarios;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}


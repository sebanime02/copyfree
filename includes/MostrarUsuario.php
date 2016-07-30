<?php

include("Cabecera.php");
$numeroDocumento = $_POST['documento'];
$idTipoDocumento = 1;
//$idTipoDocumento = $_POST['idTipoDocumento'];

$result = consultarCampos("usuario", "where NUMERO_DOCUMENTO = '{$numeroDocumento}' AND ID_TIPO_DOCUMENTO={$idTipoDocumento} ", "Error");

if (empty($result)) {
   header('Location: ../Panel.php?msj=1');
} else {

    if ($result['ID_ESTADO'] != 1) {

        header('Location: ../Panel.php?msj=2');
    } else {
		    if ($result['ID_TIPO_USUARIO'] != 3) {

        header('Location: ../Panel.php?msj=9');
    } else {
		if ($result['COPIAS_DISPONIBLES'] == 0) {

        header('Location: ../Panel.php?msj=10');
    } else {
		$_SESSION['copiasDisponiblesEstudiante']=$result['COPIAS_DISPONIBLES'];
        $_SESSION['nombresEstdiante']=$result['NOMBRES'];
        $_SESSION['apellidosEstudiante']= $result['APELLIDOS'];
        $_SESSION['idUsuario']= $result['ID_USUARIO'];
        header('Location: ../Panel.php?msj=3');
	}
	}
    }
}
?>
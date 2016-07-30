<?php
include("Cabecera.php");
$numeroDocumento = $_POST['documento'];
$password = $_POST['password'];

$result = consultarCampos("usuario", " where NUMERO_DOCUMENTO = '{$numeroDocumento}' AND PASSWORD='{$password}' AND ID_ESTADO= 1 ", "Error");

if (empty($result)) {
	header("Location: ../inicio.php?msj=11");
} else {
    $_SESSION['idUsuario2'] = $result['ID_USUARIO'];
    $_SESSION['nombres'] = $result['NOMBRES'];
    $_SESSION['apellidos'] = $result['APELLIDOS'];
    $_SESSION['idTipoUsuario'] = $result['ID_TIPO_USUARIO'];

    if ($result['ID_TIPO_USUARIO'] == 1) {

        header('Location: ../_Admin.php');
    } else if ($result['ID_TIPO_USUARIO'] == 2) {
        $_SESSION['idEstablecimiento'] = $result['ID_ESTABLECIMIENTO'];

        $resultEstablecimiento = consultarCampos("establecimiento", " where ID_ESTABLECIMIENTO = '{$_SESSION['idEstablecimiento']}' AND ID_ESTADO= 1 ", "Error Consultando el establecimiento");

        if (empty($resultEstablecimiento)) {
            echo 'El establecimiento asociado a este usuario no se encuentra activo o no se encuentra activo';
        } else {
            $_SESSION['nombreEstablecimiento'] = $resultEstablecimiento['NOMBRE_ESTABLECIMIENTO'];
            $_SESSION['copiasDisponiblesEstablecimiento'] = $resultEstablecimiento['COPIAS_DISPONIBLES'];
            header('Location: ../Panel.php');
        }
    } else if ($result['ID_TIPO_USUARIO'] == 3) {
        $_SESSION['idFacultad'] = $result['ID_FACULTAD'];
        $_SESSION['copiasDisponiblesEstudiante'] = $result['COPIAS_DISPONIBLES'];
        header('Location: ../Panel.php');
    }
}
?>
  

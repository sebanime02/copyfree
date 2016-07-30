<?php 

include("includes/Cabecera.php");

$parametros=$_GET['user'];
$datos = explode("_", $parametros);
$documento=$datos[0];
if (md5($documento)==$datos[1]) {

	modificar("usuario","ID_ESTADO",1,"WHERE NUMERO_DOCUMENTO='{$documento}'","No se pudo activar el usuario");
        header('Location: ../activar.php');
} else {
        header('Location: ../error.php');
}
?>
<?php

include("Cabecera.php");

		

		$_SESSION['nombres'] = NULL;
		$_SESSION['apellidos'] = NULL;
		$_SESSION['idTipoUsuario'] = NULL;
        $_SESSION['idEstablecimiento'] = NULL;
		$_SESSION['idFacultad'] = NULL;
		
		header('Location: ../Inicio.php');

?>
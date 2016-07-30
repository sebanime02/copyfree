<?php

include("Cabecera.php");

		$_SESSION['copiasDisponiblesEstudiante']=NULL;
        $_SESSION['nombresEstdiante']=NULL;
        $_SESSION['apellidosEstudiante']= NULL;
        $_SESSION['idUsuario']= NULL;
		
		header('Location: ../Panel.php');

?>
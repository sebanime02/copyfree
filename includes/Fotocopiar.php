<?php


include("Cabecera.php");
$cantidad = $_POST['cantidad'];

date_default_timezone_set('America/Bogota');
$fecha= date("Y-m-d");
$hora= date("H:i:s");
$fechaActual=$fecha.' '.$hora;
$copiasEstablecimiento = consultarCampo("COPIAS_DISPONIBLES", "establecimiento", "WHERE ID_ESTABLECIMIENTO={$_SESSION['idEstablecimiento']}", "Error Obteniendo las copias disponibles");

	$_SESSION['copiasDisponiblesEstablecimiento']=$copiasEstablecimiento;
	
if($cantidad>$copiasEstablecimiento){
        header('Location: ../Panel.php?msj=5');
		}else{

$copias = consultarCampo("COPIAS_DISPONIBLES", "usuario", "WHERE ID_USUARIO={$_SESSION['idUsuario']}", "Error Obteniendo las copias disponibles");


		$_SESSION['copiasDisponiblesEstudiante']=$copias;
		if($cantidad>$copias){
        header('Location: ../Panel.php?msj=4');
		}else{
			$cantidaDisEst=$copiasEstablecimiento-$cantidad;
			$cantidaDisUsu=$copias-$cantidad;
			$_SESSION['copiasDisponiblesEstudiante']=$cantidaDisUsu;
	$_SESSION['copiasDisponiblesEstablecimiento']=$cantidaDisEst;
			
				modificar("usuario","COPIAS_DISPONIBLES",$cantidaDisUsu,"WHERE ID_USUARIO={$_SESSION['idUsuario']}","No se pudo Modificar las copias disponibles para el usuario");
				
				modificar("establecimiento","COPIAS_DISPONIBLES",$cantidaDisEst,"WHERE ID_ESTABLECIMIENTO={$_SESSION['idEstablecimiento']}","No se pudo Modificar las copias disponibles para el establecimiento");
				$camposInsert="NULL,{$_SESSION['idEstablecimiento']},{$_SESSION['idUsuario']},{$cantidad},NULL,'{$fechaActual}'";
				
				insertarRegistro("detalle_copia","",$camposInsert,"No se pudo insertar el registro");
				
        header('Location: ../Panel.php?msj=6');
			}

		}
?>
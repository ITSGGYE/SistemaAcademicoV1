<?php 
	require_once "../../clases/conexion.php";
	require_once "../../clases/Periodos.php";
	$obj= new periodo();

	$datos=array(
				$_POST['id'],
				$_POST['parcial2'],
				$_POST['periodo2'],								
				$_POST['estado2']
				);

	echo $obj->actualizaparcial($datos);
	

 ?>
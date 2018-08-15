<?php 
	require_once "../../clases/conexion.php";
	require_once "../../clases/Alumno.php";
	$obj= new alumno();
	

	$datos=array(
				$_POST['idalumno'],
				$_POST['nombrem2'],
				$_POST['cedulam2'],
				$_POST['ocupacionm2'],
				$_POST['instruccionm2'],								
				$_POST['telefonom2'],
				$_POST['correom2'],
				$_POST['direccionm2'],
				$_POST['lugarm2'],
				$_POST['nombrep2'],
				$_POST['cedulap2'],
				$_POST['ocupacionp2'],
				$_POST['instruccionp2'],								
				$_POST['telefonop2'],
				$_POST['correop2'],
				$_POST['direccionp2'],
				$_POST['lugarp2'],
				);

	echo $obj->actualizarDatosFamiliares($datos);
	

 ?>
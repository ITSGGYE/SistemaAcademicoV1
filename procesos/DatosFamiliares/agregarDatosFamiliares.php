<?php 
	require_once "../../clases/conexion.php";
	require_once "../../clases/Alumno.php";
	$obj= new alumno();

	$datos=array(
				$_POST['alumno'],
				$_POST['nombrem'],
				$_POST['cedulam'],
				$_POST['ocupacionm'],								
				$_POST['instruccionm'],
				$_POST['telefonom'],
				$_POST['correom'],
				$_POST['direccionm'],
				$_POST['lugarm'],
				
				);
	$datos2= array(
				$_POST['alumno'],
				$_POST['nombrep'],
				$_POST['cedulap'],
				$_POST['ocupacionp'],								
				$_POST['instruccionp'],
				$_POST['telefonop'],
				$_POST['correop'],
				$_POST['direccionp'],
				$_POST['lugarp'],
		);

	echo $obj->agregardatosmadre($datos);
	echo $obj->agregardatospadre($datos2);
	

 ?>
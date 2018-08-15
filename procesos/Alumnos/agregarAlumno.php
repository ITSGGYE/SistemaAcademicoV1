<?php 
	require_once "../../clases/conexion.php";
	require_once "../../clases/Alumno.php";
	$obj= new alumno();

	$datos=array(
				$_POST['matricula'],
				$_POST['institucion'],
				$_POST['nombre'],
				$_POST['sexo'],								
				$_POST['cedula'],
				$_POST['ciudad'],
				$_POST['provincia'],
				$_POST['telefono'],
				$_POST['celular'],
				$_POST['direccion'],
				$_POST['fecha']
				);
	$datos2= array(
			$_POST['matricula'],
			$_POST['representante'],
			$_POST['direccionr'],
			$_POST['ocupacion'],
			$_POST['trabajo'],
			$_POST['cedularp'],
			$_POST['telefonor'],
			$_POST['email'],
			$_POST['familiar']
		);

	echo $obj->agregarAlumno($datos);
	echo $obj->agregardatosrepresentante($datos2);
	

 ?>
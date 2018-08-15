<?php 

	require_once "../../clases/conexion.php";
	require_once "../../clases/Alumno.php";
	$obj= new alumno();

	$datos=array(
				$_POST['idalumno'],
				$_POST['institucion2'],
				$_POST['nombre2'],
				$_POST['sexo2'],								
				$_POST['cedula2'],
				$_POST['ciudad2'],
				$_POST['provincia2'],
				$_POST['telefono2'],
				$_POST['celular2'],
				$_POST['direccion2'],
				$_POST['fecha2'],
				$_POST['representante2'],
				$_POST['direccionr2'],
				$_POST['ocupacion2'],
				$_POST['trabajo2'],
				$_POST['cedularp2'],
				$_POST['telefonor2'],
				$_POST['email2'],
				$_POST['familiar2']
				);

	echo $obj->actualizar($datos);
	

 ?>
<?php 
	
	require_once "../../clases/conexion.php";
	require_once "../../clases/Alumno.php";

	$obj= new alumno();

	echo json_encode($obj->obtenDatos($_POST['idalumno']));

 ?>
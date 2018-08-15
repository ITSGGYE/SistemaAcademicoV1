<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Seccion.php";

	

	$datos=array(
		$_POST['idseccion'],
		$_POST['nombre2']
			);

	$obj= new Secciones();

	echo $obj->actualizaSeccion($datos);

 ?>
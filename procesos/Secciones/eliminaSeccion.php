<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Seccion.php";
	$id=$_POST['idseccion'];

	$obj= new Secciones();
	echo $obj->eliminaSeccion($id);

 ?>
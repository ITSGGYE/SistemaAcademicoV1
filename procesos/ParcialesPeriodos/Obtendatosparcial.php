<?php 
	
	require_once "../../clases/conexion.php";
	require_once "../../clases/Periodos.php";

	$obj= new periodo();

	echo json_encode($obj->obtenDatosparcial($_POST['id']));

 ?>
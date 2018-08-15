<?php 
	
	require_once "../../clases/conexion.php";
	require_once "../../clases/SistemaCalif.php";

	$obj= new sistemacalif();

	echo json_encode($obj->obtenDatossistcalif($_POST['idsistema']));

 ?>
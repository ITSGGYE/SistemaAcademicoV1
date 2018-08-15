<?php 
	/*session_start();*/
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Seccion.php";
	
	/*$idusuario=$_SESSION['iduser'];*/
	$nombre=$_POST['nombre'];

	$datos=array(
		
		$nombre
		
				);

	$obj= new Secciones();

	echo $obj->agregaSeccion($datos);


 ?>
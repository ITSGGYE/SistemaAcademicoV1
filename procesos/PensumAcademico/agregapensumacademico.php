<?php 
	/*session_start();*/
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Pensumacademico.php";
	
	/*$idusuario=$_SESSION['iduser'];*/
	$obj= new pensumacademico();
					
								

	$datos=array(
				$_POST['anio'],
				$_POST['curso'],
				$_POST['estado']
				);
	

	echo $obj->agregardatos($datos);
	
 ?>
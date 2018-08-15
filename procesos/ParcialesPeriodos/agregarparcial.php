<?php 
	/*session_start();*/
	require_once "../../clases/conexion.php";
	require_once "../../clases/Periodos.php";
	
	/*$idusuario=$_SESSION['iduser'];*/
	$obj= new periodo();
					
								

	$datos=array(
				$_POST['parcial'],
				$_POST['periodo'],
				$_POST['estado']
				);
	

	echo $obj->agregarparcial($datos);
	
 ?>
<?php 
	/*session_start();*/
	require_once "../../clases/Conexion.php";
	require_once "../../clases/SistemaCalif.php";
	
	/*$idusuario=$_SESSION['iduser'];*/
	$obj= new sistemacalif();
					
								

	$datos=array(
				$_POST['nombre'],
				$_POST['seccion'],
				$_POST['descripcion'],
				$_POST['periodo'],
				$_POST['parciales'],
				$_POST['nota'],
				$_POST['nota2'],
				$_POST['estado']
				);
	

	echo $obj->agregarsistcalif($datos);
	
 ?>
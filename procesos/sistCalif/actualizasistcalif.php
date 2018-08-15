

								<?php 
	require_once "../../clases/conexion.php";
	require_once "../../clases/SistemaCalif.php";
	$obj= new sistemacalif();

	$datos=array(
				$_POST['idsistema'],
				$_POST['seccion2'],
				$_POST['nombre2'],
				$_POST['descripcion2'],
				$_POST['periodo2'],								
				$_POST['parciales2'],
				$_POST['notap'],
				$_POST['notar'],
				$_POST['estado2']
			
				);

	echo $obj->actualizasistcalif($datos);
	

 ?>
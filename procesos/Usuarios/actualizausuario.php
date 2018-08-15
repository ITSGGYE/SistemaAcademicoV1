<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";
	
	/*$idusuario=$_SESSION['iduser'];*/
	
	$obj= new usuario();
	$pass=sha1($_POST['pass2']);
	$datos=array(
		$_POST['idusuario'],
		$_POST['profesor2'],
		$_POST['usuario2'],
		$pass,
		$_POST['estado2'],
					);

	

	echo $obj->actualizausuario($datos);

 ?>
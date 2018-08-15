<?php
require_once "../../clases/Conexion.php";
require_once "../../clases/SistemaCalif.php";

$idsistema=$_POST['idsistema'];
	$obj=new sistemacalif();
	echo $obj->eliminasistemaCalif($idsistema);

 ?>
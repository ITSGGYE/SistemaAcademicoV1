<?php 
	
	require_once "../../clases/conexion.php";
	require_once "../../clases/Curso.php";

	$obj= new Cursos();

	echo json_encode($obj->obtenDatosCurso($_POST['id_curso']));

 ?>
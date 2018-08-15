<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   


	
	$nota=$_POST['nota1'];
	$nota2=$_POST['nota2'];
	$nota3=$_POST['nota3'];
	$nota4=$_POST['nota4'];
	$nota5=$_POST['nota5'];
	
	$id=$_POST['parcial'];



	
	

for ($i=0; $i < count($nota); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','$curso','$parcial','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	$datos=array($id[$i],$nota[$i],$nota2[$i],$nota3[$i],$nota4[$i],$nota5[$i] );
	$result= $obj->updatenotasparcial($datos);

}
/*$cadena=substr($sql, 0,-1);
$cadena.=";";
echo mysqli_query($conexion,$cadena);*/

echo $result;


/*echo mysqli_query($conexion,$cadena);*/
/*echo $result;*/

?>
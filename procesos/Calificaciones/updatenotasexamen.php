<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   


	$alumno=$_POST['alumno'];
	$nota=$_POST['nota1'];
	$materia=$_POST['materia'];
	$curso=$_POST['curso'];
	$profesor=$_POST['profesor'];
	$examen=$_POST['examen'];
	$aniolectivo=$_POST['aniolectivo'];
	$obs=$_POST['obs'];
	$periodo=$_POST['periodo'];


	
	

for ($i=0; $i < count($alumno); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','$curso','$parcial','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	$datos=array($examen[$i],$alumno[$i],$materia,$profesor,$curso,$periodo,$aniolectivo,$nota[$i],$obs[$i]);
	$result= $obj->updatenotasexamen($datos);

}
/*$cadena=substr($sql, 0,-1);
$cadena.=";";
echo mysqli_query($conexion,$cadena);*/

echo $result;


/*echo mysqli_query($conexion,$cadena);*/
/*echo $result;*/

?>
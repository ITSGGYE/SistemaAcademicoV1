<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   
$n=0;
$sql="INSERT INTO notas (fk_alumno ,fk_materia,fk_profesor,fk_curso,fk_parcial,nota, nota2 ,nota3, nota4,nota5 ) values";


	$alumno=$_POST['alumno'];
	$nota=$_POST['parcial1'];
	$nota2=$_POST['parcial2'];
	$nota3=$_POST['parcial3'];
	$nota4=$_POST['examen'];
	$nota5=$_POST['promedio'];
	$materia=$_POST['materia'];
	$materia2=$_POST['materia2'];
	$curso=$_POST['curso'];
	$profesor=$_POST['profesor'];
	$periodo=$_POST['periodo'];
	$aniolectivo=$_POST['anio'];


								
	

for ($i=0; $i < count($nota); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','$curso','$parcial','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	$datos=array($alumno,$materia[$i],$materia2[$i],$profesor,$curso,$periodo,$aniolectivo,$nota[$i],$nota2[$i],$nota3[$i],$nota4[$i],$nota5[$i] );
	$result=$obj->agregarnotaspreparatoria($datos);

}
/*$cadena=substr($sql, 0,-1);
$cadena.=";";
echo mysqli_query($conexion,$cadena);*/

if($result==1){
	echo json_encode(array('error' => false ));
}
else{
	echo json_encode(array('error' => true ));
}


/*echo mysqli_query($conexion,$cadena);*/
/*echo $result;*/

?>
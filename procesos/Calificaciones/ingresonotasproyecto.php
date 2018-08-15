<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   
$n=0;
$sql="INSERT INTO notas (fk_alumno ,fk_materia,fk_profesor,fk_curso,fk_parcial,nota, nota2 ,nota3, nota4,nota5 ) values";


	$alumno=$_POST['alumno'];
	$nota=$_POST['nota'];
	$curso=$_POST['curso'];
	$profesor=$_POST['profesor'];
	$parcial=$_POST['parcial'];
	$aniolectivo=$_POST['aniolectivo'];

	
	

for ($i=0; $i < count($alumno); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','$curso','$parcial','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	$datos=array($alumno[$i],$profesor,$curso,$parcial,$aniolectivo,$nota[$i]);
	$result=$obj->agregarnotasproyecto($datos);

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
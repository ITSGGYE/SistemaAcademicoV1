<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   
$n=0;
$sql="INSERT INTO notas (fk_alumno ,fk_materia,fk_profesor,fk_curso,fk_parcial,nota, nota2 ,nota3, nota4,nota5 ) values";


	$alumno=$_POST['alumno'];
	$nota=$_POST['nota1'];
	$nota2=$_POST['nota2'];
	$nota3=$_POST['nota3'];
	$nota4=$_POST['nota4'];
	$nota5=$_POST['nota5'];
	$materia=$_POST['materia'];
	$curso=$_POST['curso'];
	$profesor=$_POST['profesor'];
	$parcial=$_POST['parcial'];

	
	

for ($i=0; $i < count($nota); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	if(($nota[$i]>0) &&($nota[$i]<=10) && ($nota2[$i]>0) &&($nota2[$i]<=10)($nota3[$i]>0) &&($nota3[$i]<=10)&&($nota4[$i]>0) &&($nota4[$i]<=10) && ($nota5[$i]>0) &&($nota5[$i]<=10)) {
		$valor=true;
	} else {
		$valor=false;
		break;
	}
}
for ($i=0; $i < count($nota); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	if($valor==true) {
		$datos=array($alumno[$i],$materia,$profesor,$curso,$parcial,$nota[$i],$nota2[$i],$nota3[$i],$nota4[$i],$nota5[$i] );
	$result=$obj->agregarnotas($datos);
		
	} else {
		$result='error';
	}
}

	


/*$cadena=substr($sql, 0,-1);
$cadena.=";";*/

/*echo mysqli_query($conexion,$cadena);*/
echo $result;

?>
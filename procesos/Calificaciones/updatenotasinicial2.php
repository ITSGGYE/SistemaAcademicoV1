<?php

require_once "../../clases/conexion.php";
require_once "../../clases/Calificaciones.php";
 $c= new conectar();
    $conexion=$c->conexion();
    $obj=new calificaciones();
   


	
	$nota=$_POST['parcial1'];
	$nota2=$_POST['parcial2'];
	$nota3=$_POST['parcial3'];
	$nota4=$_POST['promedio'];
	$nota5=$_POST['examen'];
	
	$id=$_POST['idnotas'];



	
	

for ($i=0; $i < count($nota); $i++) { 

	/*$sql.="('".$alumno[$i]."','$materia','$profesor','$curso','$parcial','".$nota[$i]."','".$nota2[$i]."',
	'".$nota3[$i]."','".$nota4[$i]."','".$nota5[$i]."'),";*/
	# code...
	$datos=array($id[$i],$nota[$i],$nota2[$i],$nota3[$i],$nota4[$i],$nota5[$i] );
	$result= $obj->updatenotasinicial2($datos);

}
/*$cadena=substr($sql, 0,-1);
$cadena.=";";
echo mysqli_query($conexion,$cadena);*/

echo $result;


/*echo mysqli_query($conexion,$cadena);*/
/*echo $result;*/

?>
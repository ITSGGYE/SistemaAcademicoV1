<?php
$cont=$_POST['numero'];
echo $cont;
require_once "../clases/conexion.php";
 $c= new conectar();
    $conexion=$c->conexion();

$sql="INSERT INTO notas (fk_alumno ,fk_materia,fk_profesor ,nota ,nota2 ,nota3 ) values";


	$alumno=$_POST['alumno'];
	$nota=$_POST['nota1'];
	$nota2=$_POST['nota2'];
	$nota3=$_POST['nota3'];
	$materia=$_POST['materia'];
	$curso=$_POST['curso'];
	$profesor=$_POST['profesor'];
	

for ($i=0; $i < count($nota); $i++) { 

	$sql.="('".$alumno[$i]."','$materia','$profesor','".$nota[$i]."','".$nota2[$i]."','".$nota3[$i]."'),";
	# code...
}
$cadena=substr($sql, 0,-1);
$cadena.=";";
$result=mysqli_query($conexion,$cadena);
if($result==1)
{
	echo "<script datos guardados";
}
else
	echo "datos incorrectos";
/*echo $result;*/


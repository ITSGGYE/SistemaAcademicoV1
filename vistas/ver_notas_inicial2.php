<?php
session_start();
require_once '../clases/conexion.php';
require_once "dependencias.php"; 
 require_once "menu.php"; 
$c= new conectar();
$conexion=$c->conexion();

$alumno=$_GET['alumno'];
$curso=$_GET['curso'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$profesor=$_GET['profesor'];

?>
<body class="fondo">
	<div class="container" style="background: white;">
		<div class="col-lg-12">
			<div class="card">
			<div class="card-header box ">
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Ingreso de Notas </h3>
					</div>
				<div class="card-body text-right">
					<?php 
					$sql="SELECT nombre_Alumno from alumno where id_alumno='$alumno'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_alumno=$mostrar[0];
}

					$sql="SELECT nombre_profesor from profesor where id_profesor='$profesor'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_profesor=$mostrar[0];
}

 
					$sql="SELECT nombre_Curso from curso where id_curso='$curso'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_curso=$mostrar[0];
}

if($periodo==1)
{
	$nperiodo='PRIMER QUIMESTRE';
} else {
	$nperiodo='SEGUNDO QUIMESTRE';
}

?>				<h2 style="color: green;"> REPORTE DE CALIFICACIONES DEL <?php echo $nperiodo; ?> </h2>
				<p> Nombre del Estudiante:<?php echo $nombre_alumno; ?> </p>
				<p> Tutora: <?php echo $nombre_profesor;?></p>
				<p> Curso: <?php echo $nombre_curso;?></p>



				</div>
<?php
$sql=" SELECT nota  from comportamiento where fk_parcial=1 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta1=$mostrar[0];
    }

/*Segundo Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=2 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta2=$mostrar[0];
    }

/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=3 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta3=$mostrar[0];
    }


/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=4 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta4=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=5 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta5=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=6 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta6=$mostrar[0];
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=1 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia1[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=2 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia2[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=3 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia3[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=4 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia4[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=5 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia5[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=6 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia6[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }


?>



	<div class="table-responsive">
	<table class="table table-sm table-bordered" align="center" style="width: 80%; margin-left: 10%; ">
		<form id="notas">
		<thead style="text-align: center;">
			<th><?php echo $nperiodo;?> </th>
			<th> I</th>
			<th> II</th>
			<th> III</th>
			<th> EX</th>
			<th> P </th>
			
		</thead>
		
<?php
$sql="SELECT id_materia , nombre_materia from materia_inicial2 ";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$inicial2[]=array('id' =>$mostrar[0] ,'materia'=>$mostrar[1] );
}

for ($i=0; $i <count($inicial2) ; $i++) {
?>


	<tr> <td colspan="6" align="center"> <font color="blue"><b> <?php echo $inicial2[$i]['materia'];?> </b></td>

		</tr>
<?php
	$id=$inicial2[$i]['id'];

$sql="SELECT  dm.actividad, n.parcial1, n.parcial2,n.parcial3, n.examen, n.promedio  FROM  detalle_materia_inicial dm , notas_inicial2 n 
where n.fk_materia='$id' and n.fk_alumno='$alumno' and n.fk_curso='$curso' and dm.id_detalle_materia=n.fk_submateria and n.fk_periodo='$periodo'";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_row($result)) {
	# code...
	
		?>
		
		<tr>
			<td> <?php echo $mostrar[0];?> </td>
			<td> <p> <?php echo $mostrar[1];?> </p> </td>
			<td> <p> <?php echo $mostrar[2];?> </p> </td>
			<td> <p> <?php echo $mostrar[3];?> </p> </td>
			<td> <p> <?php echo $mostrar[4];?> </p> </td>
			<td> <p> <?php echo $mostrar[5];?> </p> </td>
			
			
		</tr>

<?php

	}
}
?>

	<?php
if($periodo==1){
	echo '<tr> <td><b>Comportamiento</b></td> 
	<td>'.$conducta1.'</td>
	<td>'.$conducta2.'</td>
	<td>'.$conducta3.'</td></tr>
	<tr> <td><b>Falta Justificadas</b></td>' ;
	
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fj'].'</td>
		<td>'.$asistencia2[$i]['fj'].'</td>
		<td>'.$asistencia3[$i]['fj'].'</td>';
	}
	echo '</tr> <tr><td><b>Falta Injustificada</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fi'].'</td>
		<td>'.$asistencia2[$i]['fi'].'</td>
		<td>'.$asistencia3[$i]['fi'].'</td>';
	}
	echo '</tr> <tr><td><b>Atrasos</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fa'].'</td>
		<td>'.$asistencia2[$i]['fa'].'</td>
		<td>'.$asistencia3[$i]['fa'].'</td>';
	}
	echo '</tr>';

} else {
	echo '<tr><td>Comportamiento<td> 
	<td>'.$conducta4.'</td>
	<td>'.$conducta5.'</td>
	<td>'.$conducta6.'</td></tr>
	<tr> <td><b>Falta Justificadas</b></td>';
	for($i=0; $i<count($asistencia4); $i++){
		echo '<td>'.$asistencia4[$i]['fj'].'</td>
		<td>'.$asistencia5[$i]['fj'].'</td>
		<td>'.$asistencia6[$i]['fj'].'</td>';
	}
	echo '</tr> <tr><td><b>Falta Injustificada</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fi'].'</td>
		<td>'.$asistencia2[$i]['fi'].'</td>
		<td>'.$asistencia3[$i]['fi'].'</td>';
	}
	echo '</tr> <tr><td><b>Atrasos</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fa'].'</td>
		<td>'.$asistencia2[$i]['fa'].'</td>
		<td>'.$asistencia3[$i]['fa'].'</td>';
	}
	echo '</tr>';

} 

?>
</tr>
	</table> 


</form>

</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
</div>
</div>


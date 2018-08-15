<?php
session_start();
require_once '../../clases/conexion.php';
$c= new conectar();
$conexion=$c->conexion();
$alumno=$_GET['alumno'];
$curso=$_GET['curso'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$profesor=$_GET['profesor'];
?>
					<?php 
					$sql="SELECT nombre_Alumno from alumno where id_alumno='$alumno'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_alumno=$mostrar[0];
}

 
					$sql="SELECT nombre_Curso from curso where id_curso='$curso'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_curso=$mostrar[0];
}

	$sql="SELECT nombre_profesor from profesor where id_profesor='$profesor'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_profesor=$mostrar[0];
}

if($periodo==1)
{
	$nperiodo='PRIMER QUIMESTRE';
} else {
	$nperiodo='SEGUNDO QUIMESTRE';
}

?>				<h4 style="color: green; text-align: center; margin-bottom: 2px;"> UNIDAD EDUCATIVA PARTICULAR "YOUNG LIVING ACADEMY"</h4>
				<h5 style="color: green; text-align: center; margin-bottom: 2px;"> REPORTE DE CALIFICACIONES DEL <?php echo $nperiodo; ?> </h5>
				<div style="position: relative;">
				<div style="float: left; padding: 5px;"> Nombre del Estudiante: </div> 
				<div style="border: 1px solid black; padding: 5px; width: 500px; "> <?php echo mb_strtoupper($nombre_alumno); ?> </div>
				</div>
				<table>
					<tr>
						<td>  <font color="blue" border=1> Tutora:</font> </td> 
						<td width="400" border=1> <font color="blue">  <?php echo $nombre_profesor;?> </font></td>
						<td width="100" border=1> <font color="blue">  Año de Eduación </font></td>
						<td border=1>  <font color="blue">  <?php echo $nombre_curso;?></font> </td>

					</tr>

				</table>



				
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


<div style="float: left; width: 50%; ">
	
	<table align="center" border="1" cellpadding="0" cellspacing="0"  style="font-size: 10px; padding: 1px;   ">
		<tr>
		
			<th align="center"> <font color="#A93226 "> <?php echo $nperiodo;?></font>  </th>
			<th align="center"> <font color="#A93226 ">  I </font> </th>
			<th align="center">  <font color="#A93226 "> II </font> </th>
			<th align="center"> <font color="#A93226 ">  III </font> </th>
			<th align="center"> <font color="#A93226 ">  EX</font>  </th>
			<th align="center"> <font color="#A93226 ">  P </font>  </th>
			
	
		</tr>
<?php
$sql="SELECT id_materia , nombre_materia from materia_inicial2 ";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$inicial2[]=array('id' =>$mostrar[0] ,'materia'=>$mostrar[1] );
}

for ($i=0; $i <5 ; $i++) {
?>

	<tr> <td colspan="6" align="center"> <font color="blue"><b> <?php echo mb_strtoupper($inicial2[$i]['materia']);?> </b></td>

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
			<td>  <?php echo $mostrar[1];?> </td>
			<td>  <?php echo $mostrar[2];?>  </td>
			<td>  <?php echo $mostrar[3];?>  </td>
			<td>  <?php echo $mostrar[4];?>  </td>
			<td>  <?php echo $mostrar[5];?>  </td>
			
			
		</tr>

<?php

	}
}
?>



	</table> 
	<br>
	<table align="center">
		<tr>
			<td width=""> <b>_____________________________ </b>
		</td>
		</tr>
		<tr>
		<td width=""> <b><?php echo $nombre_profesor;?> </b>
		</td>
		
	</tr>
	<tr>
		<td align="center"> <b> Tutor </b>
	</tr>
	</table>

</div>
<div style="width: 50%; margin-left: 500px;" >

	<table align="center" border="1" cellpadding="0" cellspacing="0"  style="font-size: 10px; padding: 1px; ">
		<tr>
		
			<th align="center"> <font color="#A93226 "> <?php echo $nperiodo;?></font>  </th>
			<th align="center"> <font color="#A93226 ">  I </font> </th>
			<th align="center">  <font color="#A93226 "> II </font> </th>
			<th align="center"> <font color="#A93226 ">  III </font> </th>
			<th align="center"> <font color="#A93226 ">  EX</font>  </th>
			<th align="center"> <font color="#A93226 ">  P </font>  </th>
			
			
	
		</tr>
<?php
$sql="SELECT id_materia , nombre_materia from materia_inicial2 ";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$inicial2[]=array('id' =>$mostrar[0] ,'materia'=>$mostrar[1] );
}

for ($i=5; $i<10 ; $i++) {
?>


	<tr> <td colspan="6" align="center"> <font color="blue"><b> <?php echo mb_strtoupper($inicial2[$i]['materia']);?> </b></td>
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
			<td>  <?php echo $mostrar[1];?> </td>
			<td>  <?php echo $mostrar[2];?>  </td>
			<td>  <?php echo $mostrar[3];?>  </td>
			<td>  <?php echo $mostrar[4];?>  </td>
			<td>  <?php echo $mostrar[5];?>  </td>
			
			
		</tr>

<?php

	}
}
?>
	<?php
if($periodo==1){
	echo '<tr> <td><font color="blue"><b>Comportamiento</b></font></td> 
	<td>'.$conducta1.'</td>
	<td>'.$conducta2.'</td>
	<td>'.$conducta3.'</td>
	<td></td> <td></td></tr>
	<tr> <td><font color="red">  <b>Falta Justificadas</b></font></td>' ;
	
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fj'].'</td>
		<td>'.$asistencia2[$i]['fj'].'</td>
		<td>'.$asistencia3[$i]['fj'].'</td>
		<td></td> <td></td>';
	}
	echo '</tr> <tr><td><b><font color="red" > Falta Injustificada</b></font></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fi'].'</td>
		<td>'.$asistencia2[$i]['fi'].'</td>
		<td>'.$asistencia3[$i]['fi'].'</td>
		<td></td> <td></td>
		';
	}
	echo '</tr> <tr><td><b><font color="red">  Atrasos</font></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia1[$i]['fa'].'</td>
		<td>'.$asistencia2[$i]['fa'].'</td>
		<td>'.$asistencia3[$i]['fa'].'</td>
		<td></td> <td></td>';
	}
	echo '</tr>';

} else {
	echo '<tr><td>Comportamiento</td> 
	<td>'.$conducta4.'</td>
	<td>'.$conducta5.'</td>
	<td>'.$conducta6.'</td>
	<td></td> <td></td></tr>
	<tr> <td><font color="red">  <b>Falta Justificadas</b></font></td>' ;
	
	for($i=0; $i<count($asistencia4); $i++){
		echo '<td>'.$asistencia4[$i]['fj'].'</td>
		<td>'.$asistencia5[$i]['fj'].'</td>
		<td>'.$asistencia6[$i]['fj'].'</td>
		<td></td> <td></td>';
	}
	echo '</tr> <tr><td><b>Falta Injustificada</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia4[$i]['fi'].'</td>
		<td>'.$asistencia5[$i]['fi'].'</td>
		<td>'.$asistencia6[$i]['fi'].'</td>
		<td></td> <td></td>';
	}
	echo '</tr> <tr><td><b>Atrasos</b></td>';
	for($i=0; $i<count($asistencia1); $i++){
		echo '<td>'.$asistencia4[$i]['fa'].'</td>
		<td>'.$asistencia5[$i]['fa'].'</td>
		<td>'.$asistencia6[$i]['fa'].'</td><td></td> <td></td>';
	}
	echo '</tr>';

} 

?>
</table>
<div style="height: 90px">
</div>

<table align="center">
		<tr>
		<td width=""> <b>___________________________ </b>
		</td>
		
	</tr>
	<tr>
		<td align="center"> <b> Representante  </b>
	</tr>
	</table>
</div>

<?php 
$profesor=$_GET['profesor'];
$materia=$_GET['materia'];
$examen=$_GET['examen'];
$curso=$_GET['curso'];

require_once '../../clases/conexion.php';

$c= new conectar();
$conexion=$c->conexion();
$i=0;
$suma=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <style type="text/css">
	 td{
	 	font-size: 12px;
	 	font-weight: bold;
	 }
	 th{
	 	font-size: 12px;
	 }
	 	label{
	 		font-size: 14px;
	 		font-weight: bold;
	 		text-align: center;
	 	 	}
	 	 	input[type="text"], input[type="date"] {
	 		font-size: 14px;
	 		
	 		padding: 2px;

}



.texto-vertical-2 {
    writing-mode: vertical-lr;
    transform: rotate(180deg);
    font-size: 12px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
}

	 </style>
</head>
<body class="fondo">

	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div  style="text-align: center; padding: 3px;">
						
					</div>
					
					
						<div class="text-center ">  
								<?php 
							$sql="SELECT nombre_materia from materia where 
							id_materia='$materia'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_materia=$mostrar[0];
							
							}
							?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_curso=$mostrar[0];
							
								
							}
							?>
							<?php 
							$sql="SELECT nombre_profesor from profesor where 
							id_profesor='$profesor'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_profesor=$mostrar[0];
							
								
							}
							?>
							<?php 
							$sql="SELECT examen  from examen where id_examen='$examen'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_examen=$mostrar[0];
								
								?>
								
							<?php
							
							}
							?>
							<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$aniolectivo=$mostrar[1];
								
							}
							?>
							
							<h2 style="color: green; text-align: center;">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red; text-align: center;">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_examen);?></h3>
 								<h4 style="text-align: center;"><?php echo($aniolectivo);?></h4>
								<h3 style="text-align: center;">Nómina de Estudiante</h3>
								
								<table width="100%">

								<tr>
								<td> <h3> Asignatura: <?php echo $nombre_materia; ?> </h3></td>
								<td> <h3 > Curso: <?php echo $nombre_curso; ?> </h3></td>
								<td> <h3> Docente: <?php echo $nombre_profesor ?> </h3></td>
								
					</tr>
						</table>
							
							
							
						<div class="table-responsive">	
							
		<table border="1" cellpadding="0" cellspacing="0" style="text-align: center; width: 100%; ">
						<tr>
							<th> <p> <br> <br> No </p> </th>
							<th> <p> <br> <br> Matrícula </p> </th>
							<th> <p> <br> <br>Estudiantes </p></th>
							<th > <p > <br> <br>Exámen</td>
							<th > <p > <br> <br> Ponderación <br> 20%</p></th>
							<th > <p > <br> <br> Observación</p></th>
							<th> Escala Cualitativa </th>
							
						</tr>
							

						<?php 
						$i=0;
$sql="SELECT a.nombre_Alumno , e.nota, e.observacion,(e.nota*0.2) as ponderacion, a.id_alumno from alumno a, notas_examen e where a.id_alumno=e.fk_alumno and e.fk_profesor='$profesor' and e.fk_materia='$materia'and e.fk_curso='$curso' and e.fk_examen='$examen' ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$suma=$suma+$mostrar[1];
							$promedio=number_format($mostrar[1],2);
	?>
						<tr>
 				<td> <p><?php echo $i;?></p> </td>
 				<td> <p><?php echo $mostrar[4];?></p> </td>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
  				<td > <p><?php echo $mostrar[1];?></p>	 </td>
  				
				<td > <p><?php echo number_format($mostrar[3],2);?></p> </td>
				<td > <p><?php echo $mostrar[2];?></p>	 </td>
				<?php 
				
				
						if(($promedio>=8.99) and ($promedio<=10))
							{
								echo '<td>  D.A.R </td>';

					}
					else {
						if(($promedio>=7) and ($promedio<=8.99))
						{
							echo '<td>  A.A.R </td>';
						}
					else {
						if(($promedio>=5) and ($promedio<=6.99))
						{
							echo '<td>  E.P.A.A.R </td>';
						}
					else
					{
						echo '<td> N.A.A.R </td>';
					}
					}
					}
				
					?>

</tr>

<?php
$prom=0;
}
?>

</table>

</div>


						
						</div>
					
					<div class="card-footer text-muted">
						<?php $prom=($suma/$i);?>
					<table>
						<td> Promedio del Redimiendo del curso: </td>
						<td> <small style="border: 1px solid black; padding: 5px; width: 100px;"><?php echo number_format($prom,2); ?></small> </td>
						<td> Equivalente a: </td>
						<?php 
							$promedio=number_format($prom,2);
				
						if(($promedio>=8.99) and ($promedio<=10))
							{
								echo '<td> <small style="border: 1px solid black ; width: 150px;">  D.A.R  </small> </td>';

					}
					else {
						if(($promedio>=7) and ($promedio<=8.99))
						{
							echo '<td> <small style="border: 1px solid black ; width: 150px;">  A.A.R  </small> </td>';
						}
					else {
						if(($promedio>=5) and ($promedio<=6.99))
						{
							echo '<td> <small style="border: 1px solid black ; width: 150px;">  E.P.A.A.R </small>  </td>';
						}
					else
					{
						echo '<td> <small style="border: 1px solid black ; width: 150px;"> N.A.A.R  </small> </td>';
					}
					}
					}
				
					?>
				</tr>

					</table>
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>



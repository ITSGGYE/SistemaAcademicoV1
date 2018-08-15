<?php session_start();?>
<?php 
$alumno=$_GET['alumno'];
$anio=$_GET['anio'];
$parcial=$_GET['parcial'];
$curso=$_GET['curso'];





require_once '../clases/conexion.php';

$c= new conectar();
$conexion=$c->conexion();
$i=0;
$suma=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "dependencias.php"; 
	 ?>
	 

	 </style>
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card" >
					<div class="card-header box ">
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Notas Ingresadas </h3>
					</div>
					<div class="card-body text-center">
						<p style="color: green;"> UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</p>
						<?php 
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where codigo_parcial='$parcial'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								if($mostrar[1]==1){
									$quimestre="PRIMER QUIMESTRE";
								} else {
									if($mostrar[1]==2){
										$quimestre="SEGUNDO QUIMESTRE";
									}
								}
								?>
								<p style="color: black"> REPORTE  DE  CALIFICACIONES <?php echo strtoupper ($mostrar[2]).' DEL '.$quimestre;?> </p>
							<?php
							$parcial=$mostrar[0];
							}
							?>
						<?php 
							$sql="SELECT nota from proyecto_escolar where  fk_anio='$anio' and fk_curso='$curso' and fk_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
							
								$proyecto=$mostrar[0];
							
							}
							?>
						<?php 
							$sql="SELECT nota from comportamiento where  fk_anio='$anio' and fk_curso='$curso' and fk_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
							
								$comportamiento=$mostrar[0];
							
							}
							?>
						<?php 
							$sql="SELECT fa,fi,fj from asistencia where  fk_anio='$anio' and fk_curso='$curso' and fk_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$fa=$mostrar[0];
								$fi=$mostrar[1];
								$fj=$mostrar[2];
							}
							?>
						<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p style="color: black;">Periodo Lectivo: <?php echo $mostrar[1];?> </p>
							<?php
							}
							?>
					</div>
						<div class="text-center " style="margin-left:50px;">  
							
							<?php 
							$sql="SELECT nombre_alumno from alumno where 
							id_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p class="text-justify">Nombre del Estudiante:<small style="color: blue; font-size: 18px; padding: 5px; width: 300px;"> <?php echo $mostrar[0];?></small></p>
							<?php
							}
							?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p class="text-justify"> Curso: <?php echo $mostrar[0];?></p>
							<?php
							}
							?>
							
							
							
						<div class="table-responsive" style="width: 80%; margin-left: 10%; " >	
							
					<table class="table table-sm table-bordered" style="margin-bottom: 10px;">
						<tr>
							<th > Asignatura </th>
							<th >  Tarea </th>
							<th >  Actividad <br> Indivual</th>
							<th >  Actividad <br> Grupal</th>
							<th >  Lecciones </th>
							<th >  Prueba <br> Escrita </th>
							<th > Promedio </th>
							<th > Escala  <br> Cualitativa</th>

							
						</tr>
							

						<?php 

						$sql="SELECT m.nombre_materia, n.nota,n.nota2,n.nota3, n.nota4, n.nota5, ((n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5) as promedio from
							materia m , notas n  where n.fk_alumno='$alumno' and n.fk_parcial='$parcial'  and m.id_materia=n.fk_materia and n.fk_anio='$anio' order by m.nombre_materia;
";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$suma=$suma+$mostrar[6];
							
	?>
						<tr>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
 				<td> <p><?php echo $mostrar[1];?></p> </td>
  				<td > <p><?php echo $mostrar[2];?></p>	 </td>
				<td > <p><?php echo $mostrar[3];?></p> </td>
				<td > <p><?php echo $mostrar[4];?></p> </td>
				<td > <p><?php echo $mostrar[5];?></p> </td>
				<td > <p><?php echo number_format($mostrar[6],2);?></p> </td>
				
				<?php 
				$promedio=number_format($mostrar[6],2);
					
						if(($promedio>=8.99) and ($promedio<=10))
							{
								echo '<td> <p> D.A.R </p></td>';

					}
					else {
						if(($promedio>=7) and ($promedio<=8.99))
						{
							echo '<td> <p> A.A.R </p></td>';
						}
					else {
						if(($promedio>=5) and ($promedio<=6.99))
						{
							echo '<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
						echo '<td> <p> N.A.A.R </p></td>';
					}
					}
					}
				
					?>

</tr>


<?php
$prom=0;
}
?>
<tr>
<td><p>Proyecto escolar</p></td>
<td><p></p></td>
<td><p></p></td>
<td><p></p></td>
<td><p></p></td>
<td><p></p></td>
<td><p><?php echo $proyecto;?> </p></td>
<td><p></p></td>
</tr>
<tr>
<td><p></p></td>
<td><p>FJ</p></td>
<td><p><?php 
	if($fj!=0)
 echo $fj; 
else echo ' '; ?></p></td>
<td><p>FI</p></td>
<td><p><?php if($fi!=0)
 echo $fi; 
else echo ' '; ?></p></td>
<td><p>AT</p></td>
<td><p><?php if($fa!=0)
 echo $fa; 
else echo ' '; ?></p></td>
<td><p></p></td>
</tr>
<tr>
<td><p></p></td>
<td><p></p></td>
<td><p></p></td>
<td><p>Promedio General</p></td>
<td><p></p></td>
<td><p><?php $prom=($suma/$i);
echo '<p> '.number_format($prom,2).'</p>'; ?></p></td>

	<?php 
	$pr=number_format($prom,2);

						if(($pr>=8.99) and ($pr<=10))
							{
								echo '<td> <p> D.A.R </p></td>';

					}
					else {
						if(($pr>=7) and ($pr<=8.99))
						{
							echo '<td> <p> A.A.R </p></td>';
						}
					else {
						if(($pr>=5) and ($pr<=6.99))
						{
							echo '<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
						echo '<td> <p> N.A.A.R </p></td>';
					}
					}
					}
				
	?>
</p></td>
<td><p></p></td>
</tr>
<tr>
<td><p></p></td>
<td><p></p></td>
<td><p></p></td>
<td><p>Comportamiento</p></td>
<td><p></p></td>
<td><p><?php echo $comportamiento; ?></p></td>
<td><p></p></td>
<td><p></p></td>
</tr>


</table>
</div>
<div class="row">
<div class="col-lg-5">
	<table class="table table-bordered table-sm">
		<th><p>ESCALA CUALITATIVA</p></th>
		<th><p>SIGLAS</p></th>
		<th><p>Escala Cuantitativa</p></th>
		
		<tr>
			<td><p>Domina los aprendizajes requeridos</p>	</td>
			<td><p>D.A.R.	</p>	</td>
			<td><p>10-9</p></td>
		</tr>
		<tr>
			<td><p>Alcanza los aprendizajes requeridos</p>	</td>
			<td><p>A.A.R.	</p>	</td>
			<td><p>8-7</p></td>
		</tr>
		<tr>
			<td><p>Esta Proximo a alcanzar los aprendizajes requeridos</p>		</td>
			<td><p>E.P.A.A.R.	</p>	</td>
			<td><p>6-5</p></td>
		</tr>
		<tr>
			<td><p>No alcanza los aprendizajes requeridos	</p></td>
			<td><p>N.A.A.R.		</p></td>
			<td><p><=4</p></td>
		</tr>

	</table>
	
</div>

<div class="col-lg-5">
	<table class="table table-bordered table-sm">
		<th rowspan="5"><br> <br> Tabla de <br> Equivalencias <br> del Comportamiento</th>
		<th>A</th>
		<th>Muy Satisfactorio</th>
		<tr>
			<td>B</td>
			<td>Satisfactorio</td>  
		</tr>
		<tr>
			<td>C</td>
			<td>Poco Satisfactorio</td>
		</tr>
		<tr>
			<td>D</td>
			<td>Mejorable</td>
		</tr>
		<tr>
			<td>E</td>
			<td>Insatisfactorio</td>
		</tr>
			<tr>
		</tr>
		<tr>
		</tr>
	</table>
	
</div>
</div>




						
						</div>
					
					<div class="card-footer text-muted">
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>


?>
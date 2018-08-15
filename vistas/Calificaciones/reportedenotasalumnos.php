<?php 
$alumno=$_GET['alumno'];
$anio=$_GET['anio'];
$parcial=$_GET['parcial'];
$curso=$_GET['curso'];

require_once '../../clases/conexion.php';
/*require_once '../dependencias.php';*/
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
	body{
		margin:2px;
	}
</style>	
	
</head>
<body >


				<div class="card" >
					<div class="card-body text-center" >
						<?php 
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where codigo_parcial='$parcial'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_periodo=$mostrar[2];
								if($mostrar[1]==1){
									$quimestre="PRIMER QUIMESTRE";
								} else {
									if($mostrar[1]==2){
										$quimestre="SEGUNDO QUIMESTRE";
									}
								}
								?>
								
							<?php
							$parcial=$mostrar[0];
							}
							?>
						<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_anio=$mostrar[1];
							}
							?>
					</div>
						
							
						<div class="table-responsive" style="">	
							<?php 
							$sql="SELECT nombre_alumno from alumno where 
							id_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_alumno=$mostrar[0];
								
							}
							
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_curso=$mostrar[0];
								
							}
							?>
				<table align="center" style="width: 100%; text-align: center;">
				<tr>
					<td align="center"><font color="green">UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</font></td>
				</tr>
				<tr>
					<td align="center"> <font color="green"> REPORTE  DE  CALIFICACIONES <?php echo strtoupper ($nombre_periodo).' DEL '.$quimestre;?></font></td>
				</tr>
				<tr>
					<td align="center"> Periodo Lectivo: <?php echo $nombre_anio;?></td>
					
				</tr>
</table>
							
							<table>
				<tr>
					<td>Estudiante:</td>
					<td> <small><?php echo mb_strtoupper($nombre_alumno);?></small></td>
					<td> Curso:</td>
					<td> <small><?php echo mb_strtoupper($nombre_curso);?></small></td>
				</tr>
</table>
			
					<table   border="1" cellspacing="0" cellpadding="0" color="black" style="width: 100%;  margin-bottom: 5px; 
					font-size: 10px; padding:1px; text-align: center;">
						<tr>
							
							<td > Asignatura </td>
							<th >  Tarea </th>
							<th >  Actividad  Indivual</th>
							<th >  Actividad  Grupal</th>
							<th >  Lecciones </th>
							<th >  Prueba  Escrita </th>
							<th > Promedio </th>
							<th > Escala  <br> Cualitativa</th>
							
						</tr>
							

						<?php 

						$sql="SELECT m.nombre_materia, n.nota,n.nota2,n.nota3, n.nota4, n.nota5, ((n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5) as promedio from
							materia m , notas n  where n.fk_alumno='$alumno' and n.fk_parcial='$parcial'  and m.id_materia=n.fk_materia and n.fk_anio='$anio';
";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$suma=$suma+$mostrar[6];
							
	?>
						<tr>
 				<td >  <?php echo $mostrar[0];?> </td>
 				<td >  <?php echo $mostrar[1];?> </td>
  				<td  >  <?php echo $mostrar[2];?></td>
				<td  >  <?php echo $mostrar[3];?> </td>
				<td  >  <?php echo $mostrar[4];?> </td>
				<td >  <?php echo $mostrar[5];?> </td>
				<td > <?php echo number_format($mostrar[6],2);?></td>
				
				<?php 
				$promedio=number_format($mostrar[6],2);
					if($promedio==10)
					{ 
						echo '<td>  S.A.R</td>';
						
					} else {
						if(($promedio>=8.99) and ($promedio<10))
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
						echo '<td>  N.A.A.R </td>';
					}
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
<td>Proyecto escolar</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>B</td>
<td></td>
</tr>
<tr>
<td><</td>
<td>FJ</td>
<td></td>
<td>FI</td>
<td>1<</td>
<td>AT</td>
<td>1</td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td> Promedio  General</td>
<td></td>
<td><?php $prom=($suma/$i);
echo ' '.number_format($prom,2).''; ?></p></td>

	<?php 
	$pr=number_format($prom,2);
	
						if(($pr>=8.99) and ($pr<=10))
							{
								echo '<td>  D.A.R </td>';

					}
					else {
						if(($pr>=7) and ($pr<=8.99))
						{
							echo '<td> A.A.R </td>';
						}
					else {
						if(($pr>=5) and ($pr<=6.99))
						{
							echo '<td>  E.P.A.A.R </td>';
						}
					else
					{
						echo '<td>  N.A.A.R </td>';
					}
					}
					}
				
	?>
</td>

<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Comportamiento</td>
<td></td>
<td>B</td>
<td></td>
<td></td>
</tr>

</table>
</div>
<div class="row">
	<div class="col-lg-6">
<table  border="1" cellspacing="0" cellpadding="0" color="black" style="width: 60%;  margin-bottom:0px;

font-size: 10px; padding: 2px; text-align: center; margin-left: px;"  >
	<tr>
		<th>ESCALA CUALITATIVA</th>
		<th>SIGLAS</th>
		<th>Escala <br> Cuantitativa</th>
	</tr>
		
		<tr>
			<td>Domina los aprendizajes requeridos	</td>
			<td>D.A.R.	</td>
			<td>9</td>
		</tr>
		<tr>
			<td>Alcanza los aprendizajes requeridos	</td>
			<td>A.A.R.</td>
			<td>8-7</td>
		</tr>
		<tr>
			<td>Esta Proximo a alcanzar los aprendizajes requeridos</td>
			<td>E.P.A.A.R.</td>
			<td>6-5</td>
		</tr>
		<tr>
			<td>No alcanza los aprendizajes requeridos</td>
			<td>N.A.A.R.</td>
			<td> 4 </td>
		</tr>

	</table>
</div>


<div class="col-lg-6">
	<table border="1"  cellspacing="0" cellpadding="0"  style="width: 90%; margin-left: 320px; margin-bottom:0px; 

 margin-top: -90px; text-align: center; font-size: 10px"  >
	<tr>
		<th rowspan="5">Tabla de Equivalencias del <br> Comportamiento</th>
		<th >A</th>
		<th>Muy Satisfactorio</th>
	</tr>

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
			
	</table>

</div>
	
				
			</div>


</body>
</html>


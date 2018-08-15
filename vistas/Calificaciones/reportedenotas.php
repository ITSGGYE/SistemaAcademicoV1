
<?php 
$profesor=$_GET['profesor'];
$materia=$_GET['materia'];
$parcial=$_GET['parcial'];
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
	<?php require_once "../dependencias.php"; 
	 ?>
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
						<h3 style="color: green; margin-bottom: 2px; padding: 2px;">UNIDAD EDUCATIVA PARTICULAR "YOUNG LIVING ACADEMY" </h3>
						<h4 style="color: red; margin-bottom: 2px; padding: 2px;">INFORME PARCIAL DE APRENDIZAJE </h4>
						<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<h4> Periodo Lectivo <?php echo $mostrar[1];?> </h4>
							<?php
							}
							?>
					</div>
					<small style="font-size: 14px; font-weight: bold;"> DATOS INFORMATIVOS</small>

					
						<div class="text-center ">  
							<?php 
							$sql="SELECT nombre_profesor from profesor where id_profesor='$profesor'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)) {
							$nombre_profesor=$mostrar[0];
							}

							?>
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
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where codigo_parcial='$parcial'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$period=$mostrar[1];
								$nom_parcial=$mostrar[2];
								$parcial=$mostrar[0];
							}
							?>
							<table>
						<tr>
							<td width="200"> ASIGNATURA</td>
							<td> PROFESOR </td>
							<td> <small style="font-size: 14px; padding: 5px; border: 1px solid black; width: 300px;"><?php echo mb_strtoupper($nombre_profesor);?></small></td>
						</tr>
						<tr>
							<td><small style="font-size: 14px;  border: 1px solid black; width: 200px;"><?php echo mb_strtoupper($nombre_materia);?></small> </td>
							<td> CURSO </td>
							<td><small style="font-size: 14px;  border: 1px solid black; width: 200px;"><?php echo mb_strtoupper($nombre_curso);?></small></td> </tr>
							<tr>
								<?php 
								if($period==1){

?>							<td> QUIMESTRE : 1 </td>
							<td><small style="font-size: 14px;  border: 1px solid black; width: 150px;"><?php echo $nom_parcial;?></small></td>
						<?php 
					} else {
						?>
						<td> QUIMESTRE : 2 </td>
							<td><small style="font-size: 14px;  border: 1px solid black; width: 150px;"><?php echo $nom_parcial;?></small></td>
<?php
					}
					?>
						</tr>
						</table>
							<br>
							
							
							
						<div class="table-responsive">	
							
		<table border="1" cellpadding="0" cellspacing="0" style="text-align: center; width: 100%">
						<tr>
							<th>  Matrícula </th>
							<th width="200"> Nómina de Alumno </th>
							<th > Tarea </th>
							<th >  Act. Indivual</th>
							<th > Act.  Grupal</th>
							<th > Lecciones </td>
							<th > Prueba  Escrita </th>
							<th > Promedio </th>
							<th > Escala Cualitativa </th>
							
						</tr>
							

						<?php 

						$sql="SELECT a.id_alumno, a.nombre_Alumno , n.nota, n.nota2, n.nota3, n.nota4, n.nota5, ((n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5) as promedio from alumno a , notas n where a.id_alumno=n.fk_alumno and n.fk_profesor='$profesor' and n.fk_materia='$materia' and 
						    n.fk_curso='$curso' and n.fk_parcial='$parcial'";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$suma=$suma+$mostrar[7];
							
	?>
						<tr>
 				<td> <?php echo $mostrar[0];?> </td>
 				<td> <?php echo $mostrar[1];?> </td>
  				<td > <?php echo $mostrar[2];?>	 </td>
				<td > <?php echo $mostrar[3];?> </td>
				<td > <?php echo $mostrar[4];?> </td>
				<td > <?php echo $mostrar[5];?> </td>
				<td > <?php echo $mostrar[6];?> </td>
				<td >  <?php echo number_format($mostrar[7],2);?> </td>
				<?php 
				$promedio=number_format($mostrar[7],2);
				
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



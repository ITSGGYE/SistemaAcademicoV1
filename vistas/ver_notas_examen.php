<?php session_start();?>
<?php 
$profesor=$_SESSION['profesor']['id'];
$materia=$_GET['materia'];
$examen=$_GET['examen'];
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
	 <style type="text/css">
	 td{
	 	font-size: 12px;
	 	font-weight: bold;
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
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
}

	 </style>
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">


 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div class="card-header box ">
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Notas Ingresadas </h3>
					</div>
					<div class="card-body text-left">
						
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
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_examen);?></h3>
 								<h4><?php echo($aniolectivo);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border"> Asignatura: <?php echo $nombre_materia; ?> </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								<td> <a href="../procesos/Calificaciones/reportenotasexamen.php?profesor=<?php echo $profesor ?>&materia=<?php echo $materia ?>&examen=<?php echo $examen ?>&curso=<?php echo $curso ?>" class="btn btn-danger btn-sm">
							 <i class="fa fa-download"></i>
						</a></td>
					</tr>
				</table>
						<div class="table-responsive">	
							
					<table class="table   table-stripe table-sm table-bordered table-hover"  style=" margin-top:30px; margin-bottom: 30px; width: 70%; margin-left: 15%;">
						<tr>
							<th> <p> <br> <br> No </p> </th>
							<th> <p> <br> <br> Matrícula </p> </th>
							<th width=300> <p> <br> <br>Estudiantes </p></th>
							<th > <p > <br> <br>Examen</td>
							<th > <p > <br> <br> Ponderación <br> 20%</p></th>
							<th > <p > <br> <br> Observación</p></th>
							
						</tr>
							

						<?php 
						$sql="SELECT a.nombre_Alumno , e.nota, e.observacion,(e.nota*0.2) as ponderacion, a.id_alumno from alumno a, notas_examen e where a.id_alumno=e.fk_alumno and e.fk_profesor='$profesor' and e.fk_materia='$materia'and e.fk_curso='$curso' and e.fk_examen='$examen' ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$suma=$suma+$mostrar[1];
	?>
						<tr>
 				<td> <p><?php echo $i;?></p> </td>
 				<td> <p><?php echo $mostrar[4];?></p> </td>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
  				<td > <p><?php echo $mostrar[1];?></p>	 </td>
  				
				<td > <p><?php echo number_format($mostrar[3],2);?></p> </td>
				<td > <p><?php echo $mostrar[2];?></p>	 </td>
				
				
				

</tr>

<?php

}
?>

</table>

</div>


						
						</div>
					
					<div class="card-footer text-muted">
						<?php $prom=($suma/$i);
						echo '<p> Promedio curso:'.number_format($prom,2).'</p>'; ?>
					</div>
				
			</div>
		</div>
	</div>
</div>


?>
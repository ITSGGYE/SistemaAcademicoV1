<?php session_start();?>
<?php 
$idcurso=$_GET['id'];

if($idcurso==1){
header("location:inicial2.php");
} 

if($idcurso==2){
header("location:PrimeroBasica.php");
} 


$id_parcial=$_GET['parcial'];
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

</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div class="card-header box ">
						<h2>Unidad Educativa "Young Living  Academy" </h2>
						<h3>Listado de Alumno </h3>
					</div>
					<div class="card-body text-left">
						
					</div>
						<div class="text-center ">  
							
    					<?php
							$sql2="SELECT nombre_curso from curso where id_curso='$idcurso'"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							$nombre_curso=$ver2[0];

 							
							 endwhile; 
							?>
							<?php

							 $sql2="SELECT p.nombre_profesor from tutor t , profesor p where t.fk_curso='$idcurso' and p.id_profesor=t.fk_profesor"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							$nombre_profesor=$ver2[0];
 								endwhile;
							 ?>

							<?php
							$sql2="SELECT codigo_periodo from periodos where estado=1"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							

 							?>
								<?php  $periodo=$ver2[0]; ?>
								

							<?php endwhile; ?>

							<?php
							$sql2="SELECT p.codigo_parcial , pr.periodo, p.parcial from parciales p , periodos pr where p.codigo_parcial='$id_parcial'and p.fk_periodo=pr.codigo_periodo"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							
 								$periodo=$ver2[1];
 								$parcial=$ver2[2];
 							endwhile; ?>

							<?php
							$sql2="SELECT codigo_periodo  from periodos where estado=1"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							
 								$periodo=$ver2[0];
 							
								

						 endwhile; ?>
				
							<?php
							$sql2="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$idcurso' limit 1 "; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)):
 							$anio=$ver2[0];
 							$aniolectivo=$ver2[1];
 						 ?>
								
							<?php endwhile; 
							$i=0;
							?>
				
							<br>
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES QUIMESTRAL</h3>
 								<h4> Periodo <?php echo $periodo; ?> - Parcial: <?php echo $parcial; ?> </h4>
 								<h5> <?php echo $aniolectivo; ?></h5> 
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								
								<td> <h6> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6> Tutor: <?php echo $nombre_profesor; ?> </h6></td>
							</tr>
							

						</table>
								

						<div class="table-responsive">	
							
					<table class="table   table-stripe table-sm table-bordered table-hover"  style="text-align: center; width: 90%; margin-left: 5%;">
						<tr>
							<th> <p> Nº </p> </th>
							<th> <p>  Matrícula </p> </th>
							<th width=300> <p> Estudiantes </p></th>
							<th >  Notas Parcial </td>
							<th > Reporte </th>
							<th > Notas Quimestral </th>
							<th > Reporte </th>
							<th >  Notas Finales </td>
							<th > Reporte Final </td>
							
						</tr>
							

						<?php 

						$sql="SELECT a.id_alumno, a.nombre_Alumno  from alumno a , curso_alumno ca  where
						    ca.fk_curso='$idcurso' and ca.fk_alumno=a.id_alumno";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i++;
							
							
	?>
				<tr>
					<td> <p><?php echo $i;?></p> </td>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
 				<td> <p><?php echo $mostrar[1];?></p> </td>
  				<td > <p><a href="Reportenotasalumnos.php?alumno=<?php echo $mostrar[0]?>&parcial=<?php echo $id_parcial ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>" class="btn btn-info btn-sm">
							Ver nota <span class="glyphicon glyphicon-list-alt"></span>
						</a></p>	 </td>
				<td > <p><a href="../procesos/Calificaciones/reportenotasalumnos.php?alumno=<?php echo $mostrar[0]?>&parcial=<?php echo $id_parcial ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>"" class="btn btn-danger btn-sm">
							PDF <span class="glyphicon glyphicon-list-alt"></span>
						</a></p> </td>
				<td > <p><a href="Reportenotasquimestral.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>" class="btn btn-info btn-sm">
							Ver nota <span class="glyphicon glyphicon-list-alt"></span>
						</a></p>	 </td>
				<td > <p><a href="../procesos/Calificaciones/Reportenotasquimestral.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>"" class="btn btn-danger btn-sm">
							PDF<span class="glyphicon glyphicon-list-alt"></span>
						</a></p> </td>


				<td > <p><a href="notasalumnosperiodos.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>"" class="btn btn-success btn-sm">
							Notas  <span class="glyphicon glyphicon-list-alt"></span>
						</a></p> </td>
				<td > <p><a href="../procesos/Calificaciones/Reportenotasfinales.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $idcurso?>&anio=<?php echo $anio ?>"" class="btn btn-danger btn-sm">
							PDF <span class="glyphicon glyphicon-list-alt"></span>
						</a></p> </td>

				
				</tr>

<?php
}
?>

</table>

</div>


						
						</div>
					
					<div class="card-footer text-muted">
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>


?>
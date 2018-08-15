<?php session_start();?>
<?php 
require_once '../clases/conexion.php';
$c= new conectar();
$conexion=$c->conexion();
$i=0;
$suma=0;
?>

</head>
<body class="fondo">

<?php require_once "menu.php";
 require_once "dependencias.php"; 
	 ?>
	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div class="card-header box ">
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Listado de Alumno </h3>
					</div>
					<div class="card-body text-left">
						
					</div>
						<div class="text-center ">  
							
    				<?php
							$sql2="SELECT id_curso, nombre_curso from curso where id_curso=2"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							$curso=$ver2[0];
 							$nombre_curso=$ver2[1];
 							

 							?>
 						<?php
							$sql2="SELECT t.fk_profesor, p.nombre_profesor from tutor t ,profesor p where t.fk_curso='$curso' and p.id_profesor=t.fk_profesor"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							$id_profesor=$ver2[0];
 							$nombre_profesor=$ver2[1];
 							
							 endwhile; ?>
 								<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<?php
							$sql2="SELECT codigo_periodo from periodos where estado=1"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							

 							?>
								<?php  $periodo=$ver2[0]; ?>
								

							<?php endwhile; 
							if($periodo==1){
								echo '<h3 style="color: red">REPORTE DE REPORTE DE CALIFICACIONES DEL PRIMER QUIMESTRE</h3>';
							} else
							echo '<h3 style="color: red"> REPORTE DE REPORTE DE CALIFICACIONES DEL SEGUNDO QUIMESTRE</h3>';
?>

 								
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="50%" style="margin-left: 25%;">

								<tr>
								
								<td> <h6> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6> Tutor: <?php echo $nombre_profesor; ?> </h6></td>
							</tr>
						</table>
								

							<?php endwhile;

$i=0;
							 ?>

							

														
							
							
						<div class="table-responsive">	
							
					<table class="table   table-stripe table-sm table-bordered table-hover"  style="text-align: center; width: 60%; 
					margin-left: 20%;">
						<tr>
							<th> <p>  Nº </p> </th>
							<th> <p>  Matrícula </p> </th>
							<th width=300> <p> Estudiantes </p></th>
							<th >  Ver notas Quimestral </td>
							<th> PDF </th>
						</tr>
							

						<?php 

						$sql="SELECT a.id_alumno, a.nombre_Alumno, ca.fk_anio  from alumno a , curso_alumno ca  where
						    ca.fk_curso='$curso' and ca.fk_alumno=a.id_alumno order by a.nombre_Alumno asc";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i++;
							$anio=$mostrar[2];
							
							
	?>
				<tr>
					<td> <p><?php echo $i;?></p> </td>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
 				<td> <p><?php echo $mostrar[1];?></p> </td>
  				 <td> <a href="ver_notas_preparatoria.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $anio ?>&profesor=<?php echo $id_profesor?>" class="btn btn-success btn-sm">
             Ver  <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
				<td> <a href="../procesos/Calificaciones/reporte_notas_preparatoria.php?alumno=<?php echo $mostrar[0]?>&periodo=<?php echo $periodo ?>&curso=<?php echo $curso?>&anio=<?php echo $mostrar[2] ?>&profesor=<?php echo $id_profesor?>" class="btn btn-danger btn-sm">
             PDF  <span class="glyphicon glyphicon-list-alt"></span>
            </a></td>
				
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
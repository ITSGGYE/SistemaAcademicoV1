<?php session_start();?>
<?php 
$profesor=$_SESSION['profesor']['id'];
$materia=$_GET['materia'];
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
	
<?php $sql2="SELECT parcial from parciales where codigo_parcial='$parcial'";
          $datos=mysqli_query($conexion,$sql2); 
          while($mostrar=mysqli_fetch_row($datos))
          {
          	$validar=$mostrar[0];
          }
          if($validar=='Examen'){
          	header("location:../vernotasexamen.php");
          } else {
          ?>




	 </style>
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div class="card-header box "> 
						<h2>Unidad Educativa "Young Living  Academy" </h2>
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
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where codigo_parcial='$parcial'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_periodo=$mostrar[0];
								$nombre_parcial=$mostrar[2];
								?>
								
							<?php
							$parcial=$mostrar[0];
							}
							?>
							<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$aniolectivo=$mostrar[1];
								
							}
							?>
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_parcial);?></h3>
 								<h4><?php echo($aniolectivo);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border"> Asignatura: <?php echo $nombre_materia; ?> </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								<td> <a href="../procesos/Calificaciones/reportenotas.php?profesor=<?php echo $profesor ?>&materia=<?php echo $materia ?>&parcial=<?php echo $parcial ?>&curso=<?php echo $curso ?>" class="btn btn-danger btn-sm">
							 <i class="fa fa-download"></i>
						</a></td>
					</tr>
				</table>
						<div class="table-responsive">	
							
					<table class="table   table-stripe table-sm table-bordered table-hover"  style="text-align: center; width: 90%; margin-left: 5%;">
						<tr>
							<th> <p> Nº </p> </th>
							<th> <p>  Matrícula </p> </th>
							<th width=300> <p>  Estudiantes </p></th>
							<th > <p class="texto-vertical-2"> Tarea </td>
							<th > <p class="texto-vertical-2"> Actividad Indivual</p></th>
							<th > <p class="texto-vertical-2"> Actividad  Grupal</p></th>
							<th > <p class="texto-vertical-2"> Lecciones </p></td>
							<th ><p class="texto-vertical-2">  Prueba  Escrita </p></th>
							<th ><p class="texto-vertical-2">  Promedio </p></th>
							<th > <p class="texto-vertical-2"> Escala Cualitativa</p></th>
							
						</tr>
							

						<?php 
						$cont=0;

						$sql="SELECT a.id_alumno, a.nombre_Alumno , n.nota, n.nota2, n.nota3, n.nota4, n.nota5, ((n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5) as promedio from alumno a , notas n where a.id_alumno=n.fk_alumno and n.fk_profesor='$profesor' and n.fk_materia='$materia' and 
						    n.fk_curso='$curso' and n.fk_parcial='$parcial' order by a.nombre_Alumno";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i=$i+1;
							$cont++;
							$suma=$suma+$mostrar[7];
							
	?>
						<tr>
							<td> <p><?php echo $cont;?></p> </td>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
 				<td> <p><?php echo $mostrar[1];?></p> </td>
  				<td > <p><?php echo $mostrar[2];?></p>	 </td>
				<td > <p><?php echo $mostrar[3];?></p> </td>
				<td > <p><?php echo $mostrar[4];?></p> </td>
				<td > <p><?php echo $mostrar[5];?></p> </td>
				<td > <p><?php echo $mostrar[6];?></p> </td>
				<td > <p> <?php echo number_format($mostrar[7],2);?> </td>
				<?php 
				$promedio=number_format($mostrar[7],2);
					if($promedio==10)
					{ 
						echo '<td> <p> S.A.R</p></td>';
						
					} else {
						if(($promedio>=8.99) and ($promedio<10))
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
						<?php $prom=($suma/$i);
						echo '<p> Promedio curso:'.number_format($prom,2).'</p>'; ?>
					</div>
					<?php }?>
				
			</div>
		</div>
	</div>
</div>


?>
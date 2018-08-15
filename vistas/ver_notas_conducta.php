<?php session_start();?>
<?php 
$profesor=$_SESSION['profesor']['id'];
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
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where estado='1'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$periodo=$mostrar[1];
								$parcial=$mostrar[0];
								$nombreparcial=$mostrar[2];
								
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
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_parcial);?></h3>
 								<h4><?php echo($aniolectivo);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border">Comportamiento </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								
					</tr>
				</table>
						<div class="table-responsive">	
							
					<table class="table   table-sm table-bordered "  style="text-align: center; width: 60%; margin-left: 20%;">
						<tr>
							<th> <p> <br> <br> Matrícula </p> </th>
							<th width=300> <p> <br> <br>Estudiantes </p></th>
							<th > <p > <br> <br> Comportamiento </td>
							<th > <p > <br> <br> Escala Cualitativa</p></th>
							
						</tr>
							

						<?php 
						$sql="SELECT a.id_alumno ,a.nombre_Alumno , c.nota from alumno a , comportamiento c where a.id_alumno=c.fk_alumno and c.fk_profesor='$profesor'  and c.fk_curso='$curso' and c.fk_parcial='$parcial' ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
						
							
	?>
						<tr>
 				<td> <p><?php echo $mostrar[0];?></p> </td>
 				<td> <p><?php echo $mostrar[1];?></p> </td>
 				<td> <p><?php echo $mostrar[2];?></p> </td>
 				<td><?php 
 					if($mostrar[2]=='A'){
 						echo '<p> Muy Satisfactorio </p>';
 					}
 					if($mostrar[2]=='B'){
 						echo '<p> Satisfactorio </p>';
 					}
 					if($mostrar[2]=='C'){
 						echo '<p> Poco Satisfactorio </p>';
 					}
 					if($mostrar[2]=='D'){
 						echo '<p> Mejorable </p>';
 					}
 					if($mostrar[2]=='E'){
 						echo '<p>  Insatisfactorio </p>';
 					}

 					?>
 				
  				
  				
					

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



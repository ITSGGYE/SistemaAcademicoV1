<?php session_start();
$id_profesor=$_SESSION['profesor']['id'];

$curso=$_GET['curso'];

require_once '../clases/conexion.php';

$c= new conectar();
$conexion=$c->conexion();
$i=0;
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
						<h2>Unidad Educativa "Young Living  Academy" </h2>
						<h3>Ingreso de Notas Proyecto Escolar </h3>
					</div>
					<div class="card-body text-right">
						
					</div>
						<div class="text-center" style="margin: 30px;">  
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
								$aniolectivo=$mostrar[0];
								$anio=$mostrar[1];
								
								
							}
							?>
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_parcial);?></h3>
 								<h4><?php echo($anio);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border">Proyecto Escolar </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								
					</tr>
				</table>
							<div id="rst"></div>
					<table class="table  table-bordered  table-sm" style=" width:50%; margin-left: 25%;">
						<tr>
							<th width="400"  ><p style="text-align: center;"><br><br>Estudiantes</p> </th>
							<th > <p > <br><br> Comportamiento </p> </th>
							
							
						</tr>
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.nombre_Alumno , ca.fk_alumno from alumno a , curso_alumno ca where ca.fk_alumno=a.id_alumno and ca.fk_curso='$curso' limit 3 ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
	?>
						<tr>
 				<td> <input type="text" name="nombre"  class="form-control-plaintext" value="<?php echo $mostrar[0];?>" readonly > </td>
  				<td > <select class="form-control form-control-sm" id="nota[]" name="nota[]"  >
							<option value="EX"> Excelente </option>
							<option value="MB"> Muy Bueno </option>
							<option value="B"> Bueno </option>
							<option value="R"> Regular </option>
							
							
						</select>	 </td>
				 <input type="hidden" id="curso" name="curso" value="<?php echo $curso ?>">
				 <input type="hidden" id="parcial" name="parcial" value="<?php echo $parcial ?>"> 
			 <input type="hidden" id="profesor" name="profesor" value="<?php echo $id_profesor ?>"> 
			 <input type="hidden" id="alumno[]" name="alumno[]" value="<?php echo $mostrar[1];?>"> 
			 <input type="hidden" id="aniolectivo" name="aniolectivo" value="<?php echo $aniolectivo?>"> 
			

<?php

}
?>
 </tr>

</table>
<input type="submit" id="btnguardar" name="btnguardar" class="btn btn-primary" value="Guardar">

</form>	


						</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
				
			</div>
		</div>
	</div>
</div>



	<script type="text/javascript">
		jQuery(document).on('submit','#frmnotas',function(event){
			event.preventDefault();
			jQuery.ajax({
				url:"../procesos/Calificaciones/ingresonotasproyecto.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){
					$("#frmnotas")[0].reset();
					alertify.success("Notas ingresadas correctamente");

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>

	


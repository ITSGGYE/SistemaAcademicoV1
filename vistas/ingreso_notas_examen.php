<?php session_start();
$id_profesor=$_SESSION['profesor']['id'];
$examen=$_GET['examen'];
$materia=$_GET['materia'];
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
						<h3>Ingreso de Notas </h3>
					</div>
					<div class="card-body text-right">
						
					</div>

<?php 
$sql= "SELECT count(*) from notas_examen where fk_curso='$curso' and fk_examen='$examen' and fk_materia='$materia'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$verificar=$mostrar[0];
}
	if($verificar>0){
		echo ' <div class="container-fluid">
		<div class="jumbotron col-lg-8">
  <h1 class="display-6">Estimado, '.$_SESSION['profesor']['nombre'].'!</h1>
  <p class="lead">Usted ya ingreso las notas para esta asignatura.</p>
  <hr class="my-4">
  <p>Dar clic para seguir calificando las demas asignatura.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="../examen.php" role="button">Regresar</a>
  </p>
</div>
</div>';
	} else {


?>

						<div class="text-center" style="margin: 30px;">  
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
								$aniolectivo=$mostrar[0];
								$anio=$mostrar[1];
								
							}
							?>
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_examen);?></h3>
 								<h4><?php echo($anio);?></h4>
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
							<div id="rst"></div>
					<table class=" table table-sm table-bordered"  style=" margin-top:30px; margin-bottom: 30px; width: 70%; margin-left: 15%;">
						<tr>
							<th > <p> No </p> </th>
							<th width="400px"  ><p style="text-align: center;">Estudiantes</p> </th>
							<th > <p > Examen </p> </th>
							<th width="400" > <p > Observaciones </p> </th>
							
						</tr>
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.nombre_Alumno , ca.fk_alumno from alumno a , curso_alumno ca where ca.fk_alumno=a.id_alumno and ca.fk_curso='$curso'  limit 3 ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i++;
	?>
						<tr>
							<td> <?php echo $i?>
 				<td> <input type="text" name="nombre"  class="form-control-plaintext" value="<?php echo $mostrar[0];?>" readonly > </td>
  				<td >	<input type="text" id="nota1[]" class="form-control form-control-sm" name="nota1[]" value="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this); "> </td>
  				<td >	<input type="text" id="obs[]" class="form-control form-control-sm" name="obs[]" value="" > </td>
				
				
		 <input type="hidden" id="materia" name="materia" value="<?php echo $materia ?>"> </td>
				 <input type="hidden" id="curso" name="curso" value="<?php echo $curso ?>"> 
				 <input type="hidden" id="examen" name="examen" value="<?php echo $examen ?>"> 
			 <input type="hidden" id="profesor" name="profesor" value="<?php echo $id_profesor ?>"> 
			 <input type="hidden" id="alumno[]" name="alumno[]" value="<?php echo $mostrar[1];?>"> 
			 <input type="hidden" id="aniolectivo" name="aniolectivo" value="<?php echo $aniolectivo?>"> 

</tr>




	
	
	
	





<?php

}
?>

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
<?php 
}?>
<script>
function prueba(n) {
   var num = n.value;
   if (parseFloat(num) > 10.00) {
      /*document.getElementById('rst').innerHTML = 'OK: ' + num;*/
   
     document.getElementById('rst').innerHTML = '<p style="color:#E43A19;">Calificación Incorrecta</p>';

   } else {
   
  
   	document.getElementById('rst').innerHTML = '';
   }
}
</script>



	<script type="text/javascript">
		jQuery(document).on('submit','#frmnotas',function(event){
			event.preventDefault();
			jQuery.ajax({
				url:"../procesos/Calificaciones/ingresonotasexamen.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){
					 location.href ="../inicio.php";
					$("#frmnotas")[0].reset();
					alertify.success("Notas ingresadas correctamente");

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>

	


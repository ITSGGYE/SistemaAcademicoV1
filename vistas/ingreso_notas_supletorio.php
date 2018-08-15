<?php session_start();
$id_profesor=$_SESSION['profesor']['id'];

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
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Ingreso de Notas Supletorio </h3>
					</div>
					<div class="card-body text-right">
					<?php
						$sql= "SELECT count(*) from alumnos_supletorio where fk_curso='$curso'  and fk_materia='$materia' and fk_profesor='$id_profesor'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$verificar=$mostrar[0];
}
	if($verificar==0){
		echo ' <div class="container-fluid">
		<div class="jumbotron col-lg-8">
  <h1 class="display-6">Estimado, '.$_SESSION['profesor']['nombre'].'!</h1>
  <p class="lead">No existe estudiante en Supletorio.</p>
  <hr class="my-4">
  <p>Dar clic para seguir calificando las demas asignatura.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="../supletorio.php" role="button">Regresar</a>
  </p>
</div>
</div>';
	} else {


?>
					</div>
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
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$aniolectivo=$mostrar[1];
								
							}
							?>
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES SUPLETORIO </h3>
 								<h4><?php echo($aniolectivo);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border"> Asignatura: <?php echo $nombre_materia; ?> </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								
					</tr>
				</table>
							
							<div id="rst"></div>
					<table class="table table-bordered table-responsive table-stripe table-sm" style="width: 60%;  margin-left: 20%;">
						<tr>
							<th width="400px"  ><p style="text-align: center;"><br><br>Estudiantes</p> </th>
							<th > <p > Tipo de Supletorio </p> </th>
							<th > <p > Nota</p></th>
							
							
						</tr>
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.nombre_Alumno, a.id_alumno  from alumno a , alumnos_supletorio al where al.fk_alumno=a.id_alumno and al.fk_curso='$curso' and al.fk_materia='$materia' and al.fk_profesor='$id_profesor' ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
	?>
						<tr>
 				<td> <input type="text" name="nombre"  class="form-control-plaintext" value="<?php echo $mostrar[0];?>" readonly > </td>

  				<td >	
  					 <select class="form-control form-control-sm" id="examen[]" name="examen[]"  >
							<option value="1"> Supletorio</option>
							<option value="2"> Remedial </option>
							<option value="3"> Gracia </option>
							
							
						</select>	 </td>
				<td >	<input type="text" id="nota[]"  class="form-control form-control-sm"
					name="nota[]" value="" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);" > </td>
			
		 <input type="hidden" id="materia" name="materia" value="<?php echo $materia ?>"> </td>
				 <input type="hidden" id="curso" name="curso" value="<?php echo $curso ?>"> 
				
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
}
?>
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
				url:"../procesos/Calificaciones/ingresonotassupletorio.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){

					$("#frmnotas")[0].reset();
					alertify.success("Notas ingresadas correctamente");
					windows.location.href="../inicio.php";

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>

	


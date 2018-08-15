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

table tbody,th,tr,td{
	border: 1px solid black;
	border-collapse: border: 1px solid black;
	border-color: black;
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
						<h3>Ingreso de Notas </h3>
					</div>
					<div class="card-body text-right">
						
					</div>
						<div class="text-center" style="margin: 30px;">  
							<p> Docente : <?php 
							$profesor=$_SESSION['profesor']['nombre'];
							echo $profesor;  ?></p>
							<?php 
							$parcial='';
							$sql="SELECT nombre_materia from materia where 
							id_materia='$materia'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Materia: <?php echo $mostrar[0];?></p>
							<?php
							}
							?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Curso: <?php echo $mostrar[0];?></p>
							<?php
							}
							?>
							<?php 
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where estado='1' and parcial='Examen'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Periodo: <?php echo $mostrar[1];?>-<?php echo $mostrar[2]?> </p>
							<?php
							$parcial=$mostrar[0];
							}
							?>
							<?php 
							if($parcial!='')
							{
							$i=0;
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Año Lectivo: <?php echo $mostrar[1];?> </p>
							<?php
							$aniolectivo=$mostrar[0];
							}
							?>
							<div id="rst"></div>
					<table class=" table-responsive table-sm" width="100%" style=" margin-bottom: 30px;">
						<tr>
							<th > <p> No </p> </th>
							<th width="400px"  ><p style="text-align: center;"><br><br>Estudiantes</p> </th>
							<th > <p > Exámen </p> </th>
							<th width="400" > <p > Observaciones </p> </th>
							
						</tr>
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.id_alumno, a.nombre_Alumno, e.nota, e.observacion, e.id_examen from alumno a, examen e where a.id_alumno=e.fk_alumno and 
						   e.fk_profesor='$id_profesor' and e.fk_materia='$materia' and e.fk_curso='$curso' and e.fk_parcial='$parcial' ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i++;
	?>
						<tr>
							<td> <?php echo $i?>
 				<td> <input type="text" name="nombre"  class="form-control-plaintext" value="<?php echo $mostrar[1];?>" readonly > </td>
  				<td >	<input type="text" id="nota1[]" class="form-control form-control-sm" name="nota1[]" value="<?php echo $mostrar[2];?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this); "> </td>
  				<td >	<input type="text" id="obs[]" class="form-control form-control-sm" name="obs[]" value="<?php echo $mostrar[3];?>" > </td>
				
				
		 <input type="hidden" id="materia" name="materia" value="<?php echo $materia ?>"> </td>
				 <input type="hidden" id="curso" name="curso" value="<?php echo $curso ?>"> 
				 <input type="hidden" id="parcial" name="parcial" value="<?php echo $parcial ?>"> 
			 <input type="hidden" id="profesor" name="profesor" value="<?php echo $id_profesor ?>"> 
			 <input type="hidden" id="alumno[]" name="alumno[]" value="<?php echo $mostrar[0];?>"> 
			 <input type="hidden" id="aniolectivo" name="aniolectivo" value="<?php echo $aniolectivo?>"> 
			  <input type="hidden" id="examen[]" name="examen[]" value="<?php echo $mostrar[4];?>"> 

</tr>




	
	
	
	





<?php

}
?>

</table>
<input type="submit" id="btnguardar" name="btnguardar" class="btn btn-warning" value="Actualizar">

</form>	


						</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
				
			</div>
			<?php 
			}
else
{	$parcial='';
	echo "no esta disponible ingresar notas del Examen";
}
?>
		</div>
	</div>
</div>

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
				url:"../procesos/Calificaciones/updatenotasexamen.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){
					
					alertify.warning("Notas actualizadas correctamente");

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>

	


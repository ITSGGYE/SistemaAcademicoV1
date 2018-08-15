<?php
session_start();
require_once '../clases/conexion.php';
require_once "dependencias.php"; 
 require_once "menu.php"; 
$c= new conectar();
$conexion=$c->conexion();

$alumno=$_GET['alumno'];
$curso=$_GET['curso'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$profesor=$_SESSION['profesor']['id'];

?>
<body class="fondo">
	<div class="container" style="background: white;">
		<div class="col-lg-12">
			<div class="card">
			<div class="card-header box ">
						<h2>Unidad Educativa "Young Living  Academy" </h2>
						<h3>Ingreso de Notas </h3>
					</div>
				<div class="card-body text-right">
					<?php 
					$sql="SELECT nombre_Alumno from alumno where id_alumno='$alumno'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_alumno=$mostrar[0];
}

 
					$sql="SELECT nombre_Curso from curso where id_curso='$curso'" ;
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$nombre_curso=$mostrar[0];
}

if($periodo==1)
{
	$nperiodo='PRIMER QUIMESTRE';
} else {
	$nperiodo='SEGUNDO QUIMESTRE';
}

?>				<h2 style="color: green;"> INGRESO DE CALIFICACIONES DEL <?php echo $nperiodo; ?> </h2>
				<p> Nombre del Estudiante:<?php echo $nombre_alumno; ?> </p>
				<p> Tutora: <?php echo $_SESSION['profesor']['nombre'];?></p>
				<p> Curso: <?php echo $nombre_curso;?></p>



				</div>

	<div class="table-responsive">
	<table class="table table-sm table-bordered" align="center" style="width: 85%; margin-left: 7%; ">
		<form id="notas">
		<thead style="text-align: center;">
			<th><?php echo $nperiodo;?> </th>
			<th> I</th>
			<th> II</th>
			<th> III</th>
			<th> EX</th>
			<th> P </th>
			
		</thead>
		
<?php
$sql="SELECT id_materia , nombre_materia from materia_preparatoria ;";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$preparatoria[]=array('id' =>$mostrar[0] ,'materia'=>$mostrar[1] );
}

for ($i=0; $i <count($preparatoria) ; $i++) {
?>

	<tr> <td colspan="6" align="center"> <font color="blue"><b> <?php echo $preparatoria[$i]['materia'];?> </b></td>

		</tr>
<?php
	$id=$preparatoria[$i]['id'];

$sql="SELECT dm.id_detalle_materia, dm.actividad  FROM  detalle_materia_preparatoria dm where dm.fk_materia='$id'";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_row($result)) {
	# code...
	
		?>
		
		<tr>
			<td> <?php echo $mostrar[1];?> </td>
			<td> <select  id="parcial1[]" class="form-control form-control-sm" name="parcial1[]"  >
							<option value="A"> A  </option>
							<option value="EP">EP </option>
							<option value="I"> I </option>
							<option value="N.E"> N.E </option>
			</select></td>
			<td> <select  id="parcial2[]" class="form-control form-control-sm" name="parcial2[]"  >
							<option value="A"> A  </option>
							<option value="EP">EP </option>
							<option value="I"> I </option>
							<option value="N.E"> N.E </option>
			</select></td>
			<td> <select  id="parcial3[]" class="form-control form-control-sm" name="parcial3[]"  >
							<option value="A"> A  </option>
							<option value="EP">EP </option>
							<option value="I"> I </option>
							<option value="N.E"> N.E </option>
			</select></td>
			<td> <select  id="examen[]" class="form-control form-control-sm" name="examen[]"  >
							<option value="A"> A  </option>
							<option value="EP">EP </option>
							<option value="I"> I </option>
							<option value="N.E"> N.E </option>
			</select></td>
			<td> <select  id="promedio[]" class="form-control form-control-sm" name="promedio[]"  >
							<option value="A"> A  </option>
							<option value="EP">EP </option>
							<option value="I"> I </option>
							<option value="N.E"> N.E </option>
			</select></td>
			
			<input type="hidden"  class="form-control form-control-sm" name="materia2[]" id="materia2[]" value="<?php echo $mostrar[0];?>">
			<input type="hidden"  class="form-control form-control-sm" name="materia[]" id="materia[]" value="<?php echo $id;?>">

		</tr>

<?php

	}
}
?>

	</table> 
<center>
	<input type="hidden"  class="form-control form-control-sm" name="alumno" id="alumno" value="<?php echo $alumno;?>">
			<input type="hidden"  class="form-control form-control-sm" name="profesor" id="profesor" value="<?php echo $profesor;?>">
			<input type="hidden"  class="form-control form-control-sm" name="curso" id="curso" value="<?php echo $curso;?>">
			<input type="hidden"  class="form-control form-control-sm" name="anio" id="anio" value="<?php echo $anio;?>">
			<input type="hidden"  class="form-control form-control-sm" name="periodo" id="periodo" value="<?php echo $periodo;?>">
<input type="submit" id="btnguardar" name="btnguardar" class="btn btn-primary" value="Guardar">
</center>

</form>

</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
</div>
</div>

<script type="text/javascript">
		jQuery(document).on('submit','#notas',function(event){
			event.preventDefault();
			jQuery.ajax({
				url:"../procesos/Calificaciones/ingresonotaspreparatoria.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){
					location.href ="../PrimeroBasica.php";
					$("#notas")[0].reset();
					alertify.success("Notas ingresadas correctamente");
					

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>
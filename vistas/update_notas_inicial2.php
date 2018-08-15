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

?>				<h2 style="color: green;"> REPORTE DE CALIFICACIONES DEL <?php echo $nperiodo; ?> </h2>
				<p> Nombre del Estudiante:<?php echo $nombre_alumno; ?> </p>
				<p> Tutora: <?php echo $_SESSION['profesor']['nombre'];?></p>
				<p> Curso: <?php echo $nombre_curso;?></p>



				</div>

	<div class="table-responsive">
	<table class="table table-sm table-bordered" align="center" style="width: 80%; margin-left: 10%; ">
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
$sql="SELECT id_materia , nombre_materia from materia_inicial2 ";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_row($result)){
	$inicial2[]=array('id' =>$mostrar[0] ,'materia'=>$mostrar[1] );
}

for ($i=0; $i <count($inicial2) ; $i++) {
?>

	<tr> <td colspan="6" align="center"> <font color="blue"><b> <?php echo $inicial2[$i]['materia'];?> </b></td>

		</tr>
<?php
	$id=$inicial2[$i]['id'];

$sql="SELECT  n.id_notas, dm.actividad, n.parcial1, n.parcial2,n.parcial3, n.examen, n.promedio  FROM  detalle_materia_inicial dm , notas_inicial2 n 
where n.fk_materia='$id' and n.fk_alumno='$alumno' and n.fk_curso='$curso' and dm.id_detalle_materia=n.fk_submateria and n.fk_periodo='$periodo'";
$result=mysqli_query($conexion,$sql);
while ($mostrar=mysqli_fetch_row($result)) {
	# code...
	
		?>
		
		<tr>
			<td> <?php echo $mostrar[1];?> </td>
			<td> <input type="text" id="parcial1[]" name="parcial1[]"  class="form-control form-control-sm" value="<?php echo $mostrar[2];?>"> </td>
			<td> <input type="text" id="parcial2[]" name="parcial2[]"  class="form-control form-control-sm" value="<?php echo $mostrar[3];?>"> </td>
			<td> <input type="text" id="parcial3[]" name="parcial3[]"  class="form-control form-control-sm" value="<?php echo $mostrar[4];?>"> </td>
			<td> <input type="text" id="examen[]"   name="examen[]"   class="form-control form-control-sm" value="<?php echo $mostrar[5];?>"> </td>
			<td> <input type="text" id="promedio[]" name="promedio[]"  class="form-control form-control-sm" value="<?php echo $mostrar[6];?>"> </td>
			<input type="hidden"  class="form-control form-control-sm" name="idnotas[]" id="idnotas[]" value="<?php echo $mostrar[0];?>">
			
		</tr>

<?php

	}
}
?>

	</table> 
<center>
	
			<button type="button" class="btn btn-warning" id="btnguardar">Actualizar</button></center>

</form>

</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
</div>
</div>



	<script type="text/javascript">
			$('#btnguardar').click(function(){
			var formData = new FormData(document.getElementById("notas"));

			$.ajax({
					url:"../procesos/Calificaciones/updatenotasinicial2.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

				success:function(r){
					
					if(r){
						
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});

	</script>

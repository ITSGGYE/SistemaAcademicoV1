<?php session_start();
$id_profesor=$_SESSION['profesor']['id'];

$materia=$_GET['materia'];
$curso=$_GET['curso'];
$parcial=$_GET['parcial'];

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
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES DEL <?php echo mb_strtoupper($nombre_parcial);?></h3>
 								<h4><?php echo($anio);?></h4>
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
						
						</tr>
							
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.id_alumno ,a.nombre_Alumno , n.nota, n.nota2, n.nota3, n.nota4, n.nota5, n.id_notas from alumno a , notas n where a.id_alumno=n.fk_alumno and n.fk_profesor='$id_profesor' and n.fk_materia='$materia'and n.fk_curso='$curso' and n.fk_parcial='$parcial'  ";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
							$i++;
	?>
						<tr>
 				<td> <input type="text"   class="form-control-plaintext" value="<?php echo $i?>" readonly > </td>
 				<td> <input type="text"   class="form-control-plaintext" value="<?php echo $mostrar[0]?>" readonly > </td>
 					<td> <input type="text"  class="form-control-plaintext" value="<?php echo $mostrar[1] ?>" readonly > </td>
  				<td >	<input type="text" id="nota1[]" class="form-control form-control-sm" name="nota1[]" value="<?php echo $mostrar[2] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);"> </td>
				<td >	<input type="text" id="nota2[]"  class="form-control form-control-sm"
					name="nota2[]" value="<?php echo $mostrar[3] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);" > </td>
				<td ">	<input type="text" id="nota3[]" class="form-control form-control-sm" name="nota3[]" value="<?php echo $mostrar[4] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);"> </td>
				<td >	<input type="text" id="nota4[]" class="form-control form-control-sm" name="nota4[]" value="<?php echo $mostrar[5] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);"> </td>
				<td >	<input type="text" id="nota5[]" class="form-control form-control-sm" name="nota5[]" value="<?php echo $mostrar[6] ?>" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" oninput="prueba(this);"> </td>
				
		
			  <input type="hidden" id="parcial[]" name="parcial[]" value="<?php echo $mostrar[7];?>"> 
			

</tr>




	
	
	
	





<?php

}
?>



</table>
<button type="button" class="btn btn-warning" id="btnguardar">Actualizar</button>
</form>	

</div>


						</div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
				
			</div>
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
			$('#btnguardar').click(function(){
			var formData = new FormData(document.getElementById("frmnotas"));

			$.ajax({
					url:"../procesos/Calificaciones/updatenotasparcial.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

				success:function(r){
					alert(r);
					if(r){
						
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});

	</script>

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
						<div class="text-center">  
							<p> Docente : <?php echo $_SESSION['profesor']['nombre'];?></p>
							<?php 
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
							$sql="SELECT codigo_parcial , fk_periodo, parcial from parciales where estado='1'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Periodo: <?php echo $mostrar[1];?>- Parcial : <?php echo $mostrar[2]?> </p>
							<?php
							$parcial=$mostrar[0];
							}
							?>
					<div id="rst"></div>		
					<table class="table table-bordered table-responsive table-stripe table-sm">
						<tr>
							<td width="20%">Estudiantes </td>
							<td width="5%"> Tarea </td>
							<td width="5%"> Actividad <br>Indivual</td>
							<td width="5%"> Actividad <br> Grupal</td>
							<td width="5%"> Lecciones </td>
							<td width="5%"> Prueba <br> Escrita </td>
							
						</tr>
							<form id="frmnotas" method="POST">

						<?php 
						$sql="SELECT a.nombre_Alumno , ca.fk_alumno from alumno a , curso_alumno ca where ca.fk_alumno=a.id_alumno and ca.fk_curso='$curso' limit 3";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_row($result)){
	?>
						<tr>
 				<td> <input type="text" name="nombre"  class="form-control-plaintext" value="<?php echo $mostrar[0];?>" readonly > </td>
  				<td >	<input type="text" id="nota1[]" class="form-control form-control-sm" name="nota1[]" pattern="\d{1,2}(.\d{1,2})?"  oninput="prueba(this);">  </td>
				<td >	<input type="text" id="nota2[]"  class="form-control form-control-sm"
					name="nota2[]" value=""  maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" > </td>
				<td ">	<input type="text" id="nota3[]" class="form-control form-control-sm" name="nota3[]" value=""> </td>
				<td >	<input type="text" id="nota4[]" class="form-control form-control-sm" name="nota4[]" value=""> </td>
				<td >	<input type="text" id="nota5[]" class="form-control form-control-sm" name="nota5[]" value=""> </td>
				
		 <input type="hidden" id="materia" name="materia" value="<?php echo $materia ?>"> </td>
				 <input type="hidden" id="curso" name="curso" value="<?php echo $curso ?>"> 
				 <input type="hidden" id="parcial" name="parcial" value="<?php echo $parcial ?>"> 
			 <input type="hidden" id="profesor" name="profesor" value="<?php echo $id_profesor ?>"> 
			 <input type="hidden" id="alumno[]" name="alumno[]" value="<?php echo $mostrar[1];?>"> 

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
<!--<script type="text/javascript">
		$(document).ready(function(e) {

    $("#btnguardar").click(function() {
        var error = false;
        $('input[name^="nota1"]').each(function() {
            
                var valor = $(this).val();
                if (valor < 1 || valor > 10 ) {
                    error = true;
                    return;
                }
            
        });
        $('input[name^="nota2"]').each(function() {
            
                var valor = $(this).val();
                if (valor < 1 || valor > 10 ) {
                    error = true;
                    return;
                }
            
        });

        $('input[name^="nota3"]').each(function() {
            
                var valor = $(this).val();
                if (valor < 1 || valor > 10 ) {
                    error = true;
                    return;
                }
            
        });
        $('input[name^="nota4"]').each(function() {
            
                var valor = $(this).val();
                if (valor < 1 || valor > 10 ) {
                    error = true;
                    return;
                }
            
        });
        $('input[name^="nota5"]').each(function() {
            
                var valor = $(this).val();
                if (valor < 1 || valor > 10 ) {
                    error = true;
                    return;
                }
            
        });
     
        if(error==1){
          e.preventDefault();
           alert('Escala Incorrecta: Ingrese Evaluación entre: 1 - 10');
        }
    });
  });



</script>-->

<script>
function prueba(n) {
   var num = n.value;
   if (parseInt(num) > 10) {
      /*document.getElementById('rst').innerHTML = 'OK: ' + num;*/
   
     document.getElementById('rst').innerHTML = 'calificacion incorrecta';

   } else {
   	document.getElementById('rst').innerHTML = '';
   }
}
</script>

<script type="text/javascript">
		$(document).ready(function(){

		$('#btnguardar').click(function(){

			vacios=validarFormVacio('frmnotas');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
				return false;
			}

				datos=$('#frmnotas').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/Calificaciones/ingresonotas.php",
					success:function(r){
						if(r==1){
							alertify.success("Se ingreso correctamente con exito :)");
							
						}else{
							alertify.error("no se pudo actualizar :(");
						}
					}
				});
			});
		});
	</script>

	


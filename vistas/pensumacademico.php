<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Calificaciones</title>
	
</head>
<body>
<body class="fondo">
<?php require_once "dependencias.php"; ?>
	<?php require_once "menu.php"; ?>

<?php require_once "menu.php"; ?>
		<?php require_once "../clases/conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		
		
		?>


	
	<div class="container-fluid " style="background-color: white;">
		
		<div class="row">
		<div class="col-sm-12 box ">
						<h1>Pensum Academico</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
		</div>
<div class="row">
			<div class="col-md-3">
				<form id="frmingreso">
					<div class="row">
   
    <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label >Año Lectivo</label>
     <select class="form-control form-control-sm" id="anio" name="anio">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT a.id_aniolectivo, a.anio_lectivo, s.descripcion  from aniolectivo a , seccion s where a.fk_seccion=s.id_seccion and a.estado_aniolectivo='AB'";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[2].'-'.$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
    </div>
    </div>
    <div class="row">
     <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label >Curso</label>

    <select class="form-control form-control-sm" id="curso" name="curso">
							<option value="A">Selecciona ...</option>
							<?php
							$sql="SELECT id_curso, nombre_Curso 
		from curso";
		$result=mysqli_query($conexion,$sql);
							 while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
							<?php endwhile; ?>
						</select>
    </div>

  </div>
     
  
  <div class="form-group col-md-6 form-check">
  <label>Estado</label> <br>
  <div class="form-check ">
  <input class="form-check-input" type="radio" name="estado" id="estado" value="AB">
  <label class="form-check-label" for="inlineCheckbox1">Activo</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="estado" id="estado" value="CR" checked="">
  <label class="form-check-label" for="inlineCheckbox1">Inactivo</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="estado" id="estado" value="ES" checked="">
  <label class="form-check-label" for="inlineCheckbox1">Espera</label>
</div>
</div>
					<span class="btn btn-primary" id="btnAgregasistema" style="margin-bottom: 10px;">Agregar</span>
				</form>
			</div>
			
			
			
				<div id="tabladatatable" class="col-md-9" style="margin-top: 30px;">
						
					
				</div>
			
			
			</div>
		</div>
	
			<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar datos Año Lectivo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevo2">
					<div class="row">
					<div class="col-md-12">
						 <label >Año Lectivo</label>
     <select class="form-control form-control-sm" id="anio2" name="anio2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT a.id_aniolectivo, a.anio_lectivo, s.descripcion  from aniolectivo a , seccion s where a.fk_seccion=s.id_seccion and a.estado_aniolectivo='AB'";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[2].'-'.$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					 <label >Curso</label>

    <select class="form-control form-control-sm" id="curso2" name="curso2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql="SELECT id_curso, nombre_Curso 
		from curso";
		$result=mysqli_query($conexion,$sql);
							 while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					
					<div class="row">
					<div class="col-md-12">
					<div class="form-group col-md-6 form-check">
				  <label>Estado</label> <br>
				  <div class="form-check ">
				  <input class="form-check-input" type="radio" name="estado2" id="estado2" value="AB">
				  <label class="form-check-label" for="inlineCheckbox1">Activo</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="estado2" id="estado2" value="CR" >
				  <label class="form-check-label" for="inlineCheckbox1">Inactivo</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="estado2" id="estado2" value="ES" >
				  <label class="form-check-label" for="inlineCheckbox1">Espera</label>
				  <input type="hidden" name="idpensum" id="idpensum">
				</div>
				</div>

					
					</div>

					
					</div>
					

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){

		$('#tabladatatable').load("PensumAcademico/tablapensumacademico.php");

		$('#btnAgregasistema').click(function(){

			vacios=validarFormVacio('frmingreso');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
				return false;
			}

		datos=$('#frmingreso').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/PensumAcademico/agregapensumacademico.php",
			success:function(r){
				alert(r);
				if(r==1){
					$("#frmingreso")[0].reset();
					$('#tabladatatable').load("PensumAcademico/tablapensumacademico.php");
					alertify.success("Se guardado corectamentos los datos :D");
				}else{
					alertify.error("No se pudo agregar ");
				}
			}
		});
	});
	});
</script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizar').click(function(){

				datos=$('#frmnuevo2').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/PensumAcademico/actualizapensumacademico.php",
					success:function(r){
						alert(r);
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("PensumAcademico/tablapensumacademico.php");
							alertify.success("Actualizado con exito :)");
						}else{
							alertify.error("no se pudo actualizar :(");
						}
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		function agregaFrmActualizar(idpensum){
		$.ajax({
			type:"POST",
			data:"idpensum=" + idpensum,
			url:"../procesos/PensumAcademico/Obtendatospensumacademico.php",
			success:function(r){
								datos=jQuery.parseJSON(r);
				
				$('#curso2').val(datos['curso']);
				$('#anio2').val(datos['anio']);
				$('#estado2').val(datos['estado']);
				$('#idpensum').val(datos['idpensum']);
				
			}
		});
	}
		function eliminar(idpensum){
			alertify.confirm('Eliminar El PensumAcademico','¿Desea eliminar el item seleccionado?', function(){ 
				$.ajax({
					type:"POST",
					data:"idpensum=" + idpensum,
					url:"../procesos/PensumAcademico/eliminapensumacademico.php",
					success:function(r){
						
							if(r==1){
							$('#tabladatatable').load("PensumAcademico/tablapensumacademico.php");
							alertify.success("Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar :(");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}
	</script>



<?php /*
	}else{
		header("location:../index.php");
	}*/
 ?>
 
 </body>
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


		<?php require_once "../clases/conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT id_seccion,descripcion 
		from seccion";
		$result=mysqli_query($conexion,$sql);
		
		?>


	

	<div class="container-fluid " style="background-color: white;">
		
		<div class="row">
		<div class="col-sm-12 box ">
						<h1>Listado Año Lectivo</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>

			<div class="col-sm-4">
				<form id="frmingreso">
					<div class="form-row">
    <div class="form-group col-md-4" style="margin-top: 15px;">
      <label >Sección</label>

    <select class="form-control form-control-sm" id="seccion" name="seccion">
							<option value="A">Selecciona ...</option>
							<?php while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
							<?php endwhile; ?>
						</select>
    </div>
    <div class="form-group col-md-4" style="margin-top: 15px;">
      <label >Calificación</label>
     <select class="form-control form-control-sm" id="sistema" name="sistema">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT s.id_sistcalif, s.nombre_sistcalif, se.descripcion from sistemaCalificaciones s , seccion se where s.fk_seccion=se.id_seccion ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[2].'-'.$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
    </div>

  </div>
     
  <div class="form-group col-md-4">
    <label>Ano Lectivo</label>
    <input type="text"  class="form-control form-control-sm" id="anio" name="anio">
     <small  class="form-text text-muted">Ingrese el ano lectivo ej:2017-2018</small>
  </div>
  <div class="form-row">
 
    
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
			<br>
			
			<div class="col-sm-8">
				<div id="tabladatatable" style="margin-top: 15px;"></div>
			
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
						<label>Sección</label>
					<?php
						$sql="SELECT id_seccion,descripcion 
		from seccion";
		$result=mysqli_query($conexion,$sql); ?>
						<select class="form-control form-control-sm" id="seccion2" name="seccion2">
							<option value="A">Selecciona ...</option>
							<?php while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					 <label >Calificación</label>
     				<select class="form-control form-control-sm" id="sistema2" name="sistema2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT s.id_sistcalif, s.nombre_sistcalif, se.descripcion from sistemaCalificaciones s , seccion se where s.fk_seccion=se.id_seccion ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[2].'-'.$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					<label>Ano Lectivo</label>
    					<input type="text"  class="form-control form-control-sm" id="anio2" name="anio2">
     					<small  class="form-text text-muted">Ingrese el ano lectivo ej:2017-2018</small>
					
					</div>
					
					<div class="col-md-12">
					
				  
				  <label >Estado</label>
     				<select class="form-control form-control-sm" id="estado2" name="estado2">
							<option value="A">Selecciona ...</option>
							<option value="AB">Activo</option>
							<option value="CR">Inactivo</option>
							<option value="ES">Espera</option>
					</select>

				  <input type="hidden" name="idanio" id="idanio">
				
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

		$('#tabladatatable').load("AnioLectivo/tablaAniolectivo.php");

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
			url:"../procesos/AnioLectivo/agregaaniolectivo.php",
			success:function(r){
				
				if(r==1){
					$("#frmingreso")[0].reset();
					$('#tabladatatable').load("AnioLectivo/tablaAniolectivo.php");
					alertify.success("Se guardado corectamentos los datos :D");
				}else{
					alertify.error("No se pudo agregar el año lectivo");
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
					url:"../procesos/AnioLectivo/actualizaaniolectivo.php",
					success:function(r){
					
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("AnioLectivo/tablaAniolectivo.php");
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
		function agregaFrmActualizar(idanio){
		$.ajax({
			type:"POST",
			data:"idanio=" + idanio,
			url:"../procesos/AnioLectivo/Obtendatosaniolectivo.php",
			success:function(r){
								datos=jQuery.parseJSON(r);
				
				$('#seccion2').val(datos['seccion']);
				$('#sistema2').val(datos['sistema']);
				$('#anio2').val(datos['anio']);
				$('#estado2').val(datos['estado']);
				$('#idanio').val(datos['idanio']);
				
			}
		});
	}
		function eliminar(idanio){
			alertify.confirm('Eliminar Sistema de Calificacion','¿Desea eliminar el item seleccionado?', function(){ 
				$.ajax({
					type:"POST",
					data:"idanio=" + idanio,
					url:"../procesos/AnioLectivo/eliminaaniolectivo.php",
					success:function(r){
						alert(r);
							if(r==1){
							$('#tabladatatable').load("AnioLectivo/tablaAniolectivo.php");
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
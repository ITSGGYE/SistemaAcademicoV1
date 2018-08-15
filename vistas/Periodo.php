
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
		
	<div class="container-fluid " style="background-color: white;">
		
		<div class="row">
		<div class="col-sm-12 box ">
						<h1>Registro de Periodos </h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>

			<div class="col-sm-6">
				<form id="frmsistema">
					<div class="form-row">
    
    <div class="form-group col-md-4" style="margin-top: 15px;">
      <label >Perido</label>
      <input type="text" class="form-control form-control-sm " id="periodo" name="periodo">
      
    </div>

  </div>
     
  
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputAddress2">Estado</label>
    <select  id="estado" class="form-control form-control-sm" name="estado"  >
							<option value="A"> Seleccione... </option>
							<option value="1"> Activo</option>
							<option value="0"> Inactivo</option>
						</select>
  </div>
  </div>
  
					<span class="btn btn-primary" id="btnAgregasistema" style="margin-bottom: 10px;">Agregar</span>
				</form>
			</div>
			<br>
			
			<div class="col-sm-4">
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
					<h5 class="modal-title" id="exampleModalLabel">Actualizar datos </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevo2">
					<div class="row">
					
					<div class="col-md-6">
					<label>Periodo</label>
						<input type="text" class="form-control" id="periodo2" name="periodo2">
						<input type="hidden" class="form-control" id="id" name="id">
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
					<label>Estado</label>
						<select  id="estado2" class="form-control form-control-sm" name="estado2"  >
							<option value="A"> Seleccione ... </option>
							<option value="1">Activo</option>
							<option value="0"> Inactivo</option>
						</select>
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

		$('#tabladatatable').load("ParcialesPeriodos/tablaPeriodo.php");

		$('#btnAgregasistema').click(function(){

			vacios=validarFormVacio('frmsistema');

			if(vacios > 0){
				alertify.alert("Debes llenar todos los campos!!");
				return false;
			}

		datos=$('#frmsistema').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/ParcialesPeriodos/agregarperiodo.php",
			success:function(r){
				
				if(r==1){
					$("#frmsistema")[0].reset();
					$('#tabladatatable').load("ParcialesPeriodos/tablaPeriodo.php");
					alertify.success("Periodo agregado :D");
				}else{
					alertify.error("No se pudo agregar el perido");
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
					url:"../procesos/ParcialesPeriodos/actualizaperiodo.php",
					success:function(r){
						
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("ParcialesPeriodos/tablaPeriodo.php");
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
		function agregaFrmActualizar(id){
		$.ajax({
			type:"POST",
			data:"id=" + id,
			url:"../procesos/ParcialesPeriodos/obtenDatosperiodo.php",
			success:function(r){
				
				datos=jQuery.parseJSON(r);
				$('#periodo2').val(datos['periodo']);
				$('#estado2').val(datos['estado']);
				$('#id').val(datos['id']);
				
			}
		});
	}
	
	</script>



<?php /*
	}else{
		header("location:../index.php");
	}*/
 ?>
 
 </body>
</html>


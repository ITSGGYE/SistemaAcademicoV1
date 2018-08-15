<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Calificaciones</title>
	
</head>

<body class="fondo">
<?php require_once "dependencias.php"; ?>
	<?php require_once "menu.php"; ?>

<?php require_once "../clases/conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		?>

		
	<div class="container-fluid " style="background-color: white;">
		
		<div class="row">
		<div class="col-sm-12 box ">
						<h1>Registro de Examenes </h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>

			<div class="col-sm-5">
				<form id="frmsistema">
					<div class="form-row">
    
    <div class="form-group col-md-6" style="margin-top: 15px;">
      <label >Examen</label>
      <input type="text" class="form-control form-control-sm" id="examen" name="examen">
      
    </div>

  </div>
     
  
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputAddress2">Periodo</label>
    <select  id="periodo" class="form-control form-control-sm" name="periodo"  >
    <option value="A"> Seleccione... </option>
	<?php
    	$sql="SELECT codigo_periodo, periodo from periodos where estado=1"; 
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_row($result)){
		?> 
		<option value="<?php echo $mostrar[0];?>"><?php echo $mostrar[1]; ?> </option>
		<?php
		}
		?>
		</select>
  </div>
  </div>
  			<div class="form-row">
   			 <div class="form-group col-md-4">
    			<label for="inputAddress2">Estado</label>
   			 <select  id="estado" class="form-control form-control-sm" name="estado"  >
   			 <option value="A"> Seleccione... </option>
					<option value="1">Activo</option>		
					<option value="0">Inactivo</option>	
		
					</select>
 			 </div>
  </div>
  
					<span class="btn btn-primary" id="btnAgregasistema" style="margin-bottom: 10px;">Agregar</span>
				</form>
			</div>
			<br>
			
			<div class="col-sm-6">
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
					<label>Examen</label>
						<input type="text" class="form-control" id="examen2" name="examen2">
						<input type="hidden" class="form-control" id="id" name="id">
					</div>
					</div>
					  <div class="form-row">
    					<div class="form-group col-md-4">
    					<label for="inputAddress2">Periodo</label>
    					<select  id="periodo2" class="form-control form-control-sm" name="periodo2"  >
    					<option value="A"> Seleccione... </option>
						<?php
    						$sql="SELECT codigo_periodo, periodo from periodos where estado=1"; 
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
							?> 
							<option value="<?php echo $mostrar[0];?>"><?php echo $mostrar[1]; ?> </option>
							<?php
							}
							?>
							</select>
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

		$('#tabladatatable').load("ParcialesPeriodos/tablaExamen.php");

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
			url:"../procesos/ParcialesPeriodos/agregarexamen.php",
			success:function(r){
				
				if(r==1){
					$("#frmsistema")[0].reset();
					$('#tabladatatable').load("ParcialesPeriodos/tablaExamen.php");
					alertify.success("Examen agregado :D");
				}else{
					alertify.error("No se pudo agregar el parcial");
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
					url:"../procesos/ParcialesPeriodos/actualizaexamen.php",
					success:function(r){
						
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("ParcialesPeriodos/tablaExamen.php");
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
			url:"../procesos/ParcialesPeriodos/obtenDatosExamen.php",
			success:function(r){
				
				datos=jQuery.parseJSON(r);
				$('#examen2').val(datos['examen']);
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


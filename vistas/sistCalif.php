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
		$sql="SELECT id_seccion,descripcion 
		from seccion";
		$result=mysqli_query($conexion,$sql);
		?>


	

	<div class="container-fluid " style="background-color: white;">
		
		<div class="row">
		<div class="col-sm-12 box ">
						<h1>Sistema de Calificaciones</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>

			<div class="col-sm-5">
				<form id="frmsistema">
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
      <label >Nombre</label>
      <input type="text" class="form-control form-control-sm" id="nombre" name="nombre">
      
    </div>

  </div>
     
  <div class="form-group col-md-8">
    <label>Descripción</label>
    <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" rows="2"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
    <label for="inputAddress2">Periodo</label>
    <input type="number" class="form-control form-control-sm" id="periodo" min="1" max="10" name="periodo" >
  </div>
  <div class="form-group col-md-2">
      <label >Parciales</label>
      <input type="number" class="form-control form-control-sm" id="parciales" min="1" max="10" name="parciales">
    </div>
   </div>
  <div class="form-row">
    <div class="form-group col-md-2">
        <label for="inputAddress2" style=""> Alta </label>
    <input type="number" class="form-control form-control-sm" id="nota" min="1" max="10" name="nota" >
   
  </div>
  <div class="form-group col-md-2">
      <label >Baja</label>
      <input type="number" class="form-control form-control-sm" id="nota2"  min="1" max="10" name="nota2">
      
    </div>
    
  </div>
  <div class="form-group col-md-6">
  <label>Estado</label> <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="estado" id="estado" value="1">
  <label class="form-check-label" for="inlineCheckbox1">Activo</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="estado" id="estado" value="0" checked="">
  <label class="form-check-label" for="inlineCheckbox1">Inactivo</label>
</div>
</div>
					<span class="btn btn-primary" id="btnAgregasistema" style="margin-bottom: 10px;">Agregar</span>
				</form>
			</div>
			<br>
			
			<div class="col-sm-7" style="margin-top: 15px;">
				<div id="tabladatatable" ></div>
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
					<div class="col-md-12">
						<label>Seccion</label>
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
					<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre2" name="nombre2">
					</div>
					<div class="col-md-12">
					<label>Descripción</label>
						<textarea class="form-control form-control-sm" id="descripcion2" name="descripcion2" rows="2"></textarea>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Periodo</label>
						<input type="number" class="form-control form-control-sm" id="periodo2" min="1" max="10" name="periodo2">
						
					</div>
					<div class="col-md-3">
						<label>Parciales</label>
							<input type="number" class="form-control form-control-sm" name="parciales2" id="parciales2" min="1" max="10" onKeyPress="return solonumero(event)" onpaste="return false" >
					</div>
					<div class="col-md-3">
							<label>Promoción</label>
							<input type="number" class="form-control form-control-sm" id="notap" name="notap" min="1" max="10"  >
							</div>
					<div class="col-md-3">
							<label>Nota Rojo</label>
							<input type="number" class="form-control form-control-sm" id="notar" min="1" max="10" name="notar">
							<input type="hidden" class="form-control form-control-sm" id="idsistema" name="idsistema">
							
							</div>
					</div>

					
					
					<div class="row">
					<div class="col-md-4">
							<label>Estado </label>
							<select  id="estado2" class="form-control form-control-sm" name="estado2"  >
							<option value="A"> .... </option>
							<option value="1">Activo</option>
							<option value="0"> Inactivo</option>
						</select>
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

		$('#tabladatatable').load("SistCalif/tablaSistCalif.php");

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
			url:"../procesos/sistCalif/agregasistcalif.php",
			success:function(r){
				alert(r);
				if(r==1){
					$("#frmsistema")[0].reset();
					$('#tabladatatable').load("SistCalif/tablaSistCalif.php");
					alertify.success("Sistema de Calificacion agregado con exito :D");
				}else{
					alertify.error("No se pudo agregar el curso");
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
					url:"../procesos/sistCalif/actualizasistcalif.php",
					success:function(r){
						alert(r);
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("SistCalif/tablaSistCalif.php");
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
		function agregaFrmActualizar(idsistema){
		$.ajax({
			type:"POST",
			data:"idsistema=" + idsistema,
			url:"../procesos/sistCalif/obtenDatossistcalif.php",
			success:function(r){
								datos=jQuery.parseJSON(r);
				
				$('#nombre2').val(datos['nombre']);
				$('#seccion2').val(datos['seccion']);
				$('#descripcion2').val(datos['descripcion']);
				$('#periodo2').val(datos['periodo']);
				$('#parciales2').val(datos['parciales']);
				$('#notap').val(datos['nota']);
				$('#notar').val(datos['nota2']);
				$('#estado2').val(datos['estado']);
				$('#idsistema').val(datos['idsistema']);
				
			}
		});
	}
		function eliminarSeccion(idsistema){
			alertify.confirm('Eliminar Sistema de Calificacion','¿Desea eliminar el item seleccionado?', function(){ 
				$.ajax({
					type:"POST",
					data:"idsistema=" + idsistema,
					url:"../procesos/sistCalif/eliminasistemacalif.php",
					success:function(r){
							if(r==1){
							$('#tabladatatable').load("SistCalif/tablaSistCalif.php");
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
</html>


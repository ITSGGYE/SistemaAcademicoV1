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
						<h1>Detalle de Asignaturas</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
		</div>
<div class="row">
			<div class="col-md-4">
				<form id="frmingreso">
					<div class="row">
   
    <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label >Materia</label>
     <select class="form-control form-control-sm" id="materia" name="materia">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_materia, nombre_materia from materia_inicial2 where estado_materia=1 order by id_materia ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[0]."-".$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
    </div>
    </div>
    <div class="row">
     <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label>Item</label>

    <input type="text" class="form-control form-control-sm" id="detalle" name="detalle">
							
    </div>

  </div>

  
     
  
  <div class="form-group col-md-6 ">
  <label> Estado   </label>
			<select id="estado" name="estado" class="form-control form-control-sm">
							<option value="A"> ...</option>
							<option value="1">Habilitado</option>
							<option value="0">Desabilitado </option>
						
						</select>
</div>
					<span class="btn btn-primary" id="btnAgregasistema" style="margin-bottom: 10px;">Agregar</span>
				</form>
			</div>
			
			
			
				<div id="tabladatatable" class="col-md-8" style="margin-top: 30px;"></div>
			
			
			</div>
		</div>
	
			<!-- Button trigger modal -->

		<!-- Modal -->
		<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Detalle de Asignatura</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevo2">
					<div class="row">
					<div class="col-md-12">
						 <label >Materia</label>
     		<select class="form-control form-control-sm" id="materia2" name="materia2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_materia, nombre_materia from materia_inicial2 order by nombre_materia ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[0]."-".$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					 <label >Item</label>
					 	<input type="text" class="form-control form-control-sm" id="detalle2" name="detalle2">
   					</div>

					
					<div class="col-md-12">
					  <label> Estado</label>
					  <select id="estado2" name="estado2" class="form-control form-control-sm">
							<option value="A"> ...</option>
							<option value="1">Habilitado</option>
							<option value="0">Desabilitado </option>
						
						</select>
				</div>
					</div>
					<input type="hidden" name="id" id="id">
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

		$('#tabladatatable').load("Materia/tabladetallemateria.php");

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
			url:"../procesos/Materia/agregadetallemateria.php",
			success:function(r){
				alert(r);
				if(r){
					$("#frmingreso")[0].reset();
					$('#tabladatatable').load("Materia/tabladetallemateria.php");
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
					url:"../procesos/Materia/actualizadetallemateria.php",
					success:function(r){
						alert(r);
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("Materia/tabladetallemateria.php");

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
			url:"../procesos/Materia/ObtenDatosdetallemateria.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#materia2').val(datos['materia']);
				$('#detalle2').val(datos['detalle']);
				$('#estado2').val(datos['estado']);
				$('#id').val(datos['id']);
			
			}
		});
	}
		function eliminar(id){
			alertify.confirm('Eliminar datos de la materia','¿Desea eliminar ?', function(){ 
				$.ajax({
					type:"POST",
					data:"id=" + id,
					url:"../procesos/Materia/eliminardetallemateria.php",
					success:function(r){
						
							if(r==1){
							$('#tabladatatable').load("Materia/tabladetallemateria.php");

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
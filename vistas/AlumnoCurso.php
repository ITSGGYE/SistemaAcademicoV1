<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "dependencias.php"; 
	 ?>
	 <style type="text/css">
	 	label{
	 		font-size: 14px;
	 		font-weight: bold;
	 		text-align: center;
	 	 	}
	 	 	input[type="text"], input[type="date"], input[type="email"], input[type="file"]{
	 		font-size: 14px;
			}
		select {
     
     font-size: 14px;
     height: 30px;
     padding: 5px;
     
  }
	 </style>
</head>

<body class="fondo">
<?php require_once "menu.php"; ?>
<?php require_once "../clases/conexion.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		
		?>


	<div class="container-fluid ">


 <div class="row">
 <div class="col-lg-12">
				<div class="card text-left ">
					<div class="card-header box ">
						<h1>Listado de Alumno por Cursos</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
					<div class="card-body text-right">
						<span class="btn btn-primary " data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<a href="Alumno.php" class="btn btn-warning ">
							Agregar Alumno <span class="fa fa-plus-circle"></span>
						</a>
						<hr>
					</div>
						<div id="tablaDatatable">  </div>
					
					<div class="card-footer text-muted">
						Young Living
					</div>
				
			</div>
		</div>
	</div>
</div>


	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog  modal-md" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevos Alumnos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div class="container-fluid">
					<form id="frmnuevo">
					<div class="row">
					<div class="col-md-12">
					<label>Nombre del Estudiante</label>
											<div id="tablaDatatable2">
												
											 </div>
					</div>
					<div class="col-md-12">
					<label>Curso</label>
						<select class="form-control form-control-sm" id="curso" name="curso">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_curso, nombre_Curso from curso ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Sección</label>
						<select class="form-control form-control-sm" id="seccion" name="seccion">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_seccion, descripcion from seccion ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
						
					</div>
					<div class="col-md-6">
						<label>Año Lectivo</label>
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
					<div class="col-md-3">
							<div class="form-group col-md-6 form-check">
				  <label>Estado</label> <br>
				  <div class="form-check ">
				  <input class="form-check-input" type="radio" name="estado" id="estado" value="A" checked="">
				  <label class="form-check-label" for="inlineCheckbox1">Activo</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="estado" id="estado" value="I" >
				  <label class="form-check-label" for="inlineCheckbox1">Inactivo</label>

				</div>
							
					</div>
					
					</div>
					</div>
	
						
					</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" id="btnAgregarnuevo" class="btn btn-primary">Agregar nuevo</button>
				</div>
				
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar datos del Curso</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevo2">
						<div class="row">
					<div class="col-md-12">
						<label >Nombres y Apellidos</label>
						<select class="form-control form-control-sm" id="alumno2" name="alumno2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_alumno, nombre_Alumno from alumno ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					<label>Curso</label>
						<select class="form-control form-control-sm" id="curso2" name="curso2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_curso, nombre_Curso from curso ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
						<input type="hidden" name="alumnocurso" id="alumnocurso">	
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Sección</label>
						<select class="form-control form-control-sm" id="seccion2" name="seccion2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_seccion, descripcion from seccion ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
						
					</div>
					<div class="col-md-6">
						<label>Año Lectivo</label>
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
					
					<div class="col-md-6">
				  
				  <label >Estado</label>
     				<select class="form-control form-control-sm" id="estado2" name="estado2">
							<option value="A">Selecciona ...</option>
							<option value="A">Activo</option>
							<option value="I">Inactivo</option>
							
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
		

		$('#btnAgregarnuevo').click(function(){


				/*vacios=validarFormVacio('frmnuevo2');

				if(vacios > 0){

					alertify.alert("Información","Debes llenar todos los campos!!");
					return false;
				}*/
			var formData = new FormData(document.getElementById("frmnuevo"));

			$.ajax({
				url:"../procesos/AlumnoCurso/agregaralumnocurso.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

				success:function(r){
					
					if(r==1){
						$('#frmnuevo')[0].reset();
						$('#agregarnuevosdatosmodal').modal('hide');
						$('#tablaDatatable2').load('AlumnoCurso/listadodeAlumno.php');
						$('#tablaDatatable').load('AlumnoCurso/tablaAlumnoCurso.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

	
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('AlumnoCurso/tablaAlumnoCurso.php');
		$('#tablaDatatable2').load('AlumnoCurso/listadodeAlumno.php');

	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		
		
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(alumnocurso){
		$.ajax({
			type:"POST",
			data:"alumnocurso=" + alumnocurso,
			url:"../procesos/AlumnoCurso/Obtendatosalumnocurso.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				
				$('#alumnocurso').val(datos['alumnocurso']);
				$('#alumno2').val(datos['alumno']);
				$('#curso2').val(datos['curso']);
				$('#seccion2').val(datos['seccion']);
				$('#anio2').val(datos['anio']);
				$('#estado2').val(datos['estado']);
				
				
			}
		});
	}

 
	function eliminarDatos(alumnocurso){
		alertify.confirm('Eliminar el Alumno del curso', '¿Seguro de eliminar al estudiante :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"alumnocurso=" + alumnocurso,
				url:"../procesos/AlumnoCurso/eliminaralumnocurso.php",
				success:function(r){
					
					if(r==1){
						$('#tablaDatatable2').load('AlumnoCurso/listadodeAlumno.php');
						$('#tablaDatatable').load('AlumnoCurso/tablaAlumnoCurso.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){
			alertify.error('Cancelo !');

		});
	}
		$(document).ready(function(){
			$('#btnActualizar').click(function(){

				datos=$('#frmnuevo2').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/AlumnoCurso/actualizaralumnocurso.php",
					success:function(r){
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tablaDatatable').load("AlumnoCurso/tablaAlumnoCurso.php");
							
							alertify.success("Actualizado con exito :)");
						}else{
							alertify.error("no se pudo actualizar :(");
						}
					}
				});
			});
		});
	</script>
	
</script>
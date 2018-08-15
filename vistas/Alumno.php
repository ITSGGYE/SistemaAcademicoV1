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
	 	 	input[type="text"], input[type="date"] {
	 		font-size: 14px;

}
	 </style>
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">


 <div class="row">
 <div class="col-lg-12">
				<div class="card text-left ">
					<div class="card-header box ">
						<h1>Listado de alumnos</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
					<div class="card-body text-right">
						<a href="AlumnoCurso.php" class="btn btn-warning ">
							Asignar Curso <span class="fa fa-plus-circle"></span>
						</a>
						<a href="DatosFamiliares.php" class="btn btn-danger ">
							Datos Familiares <span class="fa fa-plus-circle"></span>
						</a>
						<span class="btn btn-primary " data-toggle="modal" data-target="#agregarnuevosdatosmodal">
							Agregar nuevo <span class="fa fa-plus-circle"></span>
						</span>
						<hr>
					</div>
						<div id="tablaDatatable">  </div>
					
					<div class="card-footer text-muted">
						Academia Young Living
					</div>
				
			</div>
		</div>
	</div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
		<div class="modal-dialog  modal-lg" role="document" >
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevos Alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div class="container-fluid">
					<form id="frmnuevo">
					<div class="row">
					<div class="col-md-6">
						<label>Nombres y Apellidos</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
					</div>
					<div class="col-md-6">
					<label>Institución educatica de la que procede:</label>
						<input type="text" class="form-control input-sm" id="institucion" name="institucion">
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Género</label>
						<select class="form-control form-control-sm" id="sexo" name="sexo">
							<option value="A"> Seleccione </option>
							<option value="M">Masculino </option>
							<option value="F">Femenino </option>
						</select>
					</div>
					<div class="col-md-3">
						<label>Número de matrícula</label>
							<input type="text" class="form-control input-sm" name="matricula" id="matricula">
					</div>
					<div class="col-md-3">
							<label>Cédula del Estudiante</label>
							<input type="text" class="form-control input-sm" name="cedula" id="cedula">
					</div>
					</div>
					<hr>
							<label><b>DATOS DEL ESTUDIANTE</b></label>
						<br>
							<label>Lugar de Nacimiento</label>  <br>
							<div class="row">
							<div class="col-md-3">
							<label>Ciudad</label>
							<input type="text" class="form-control input-sm" name="ciudad" id="ciudad">
							</div>
							<div class="col-md-3">
							<label>Provincia:</label>
							<input type="text" class="form-control input-sm" name="provincia" id="provincia">
							</div>
							<div class="col-md-6">
							<label>Dirección domicilio</label>
							<input type="text" class="form-control input-sm" name="direccion" id="direccion">
							</div>
							</div>
							<div class="row">
							<div class="col-md-4">
							<label>Fecha de nacimiento</label>
							<input type="date" class="form-control input-sm" name="fecha" id="fecha">
							</div>
							<div class="col-md-4">
							<label>Teléfono convencional</label>
							<input type="text" class="form-control input-sm" name="telefono" id="telefono">
							</div>
							<div class="col-md-4">
							<label>Celular*</label>
							<input type="text" class="form-control input-sm" name="celular" id="celular">
							</div>
							</div>
							
						<hr>
							<label> DATOS DEL REPRESENTANTE</label>
						
							<div class="row">
							<div class="col-md-6">
							<label>Nombre del Representante</label>
							<input type="text" class="form-control input-sm" name="representante" id="representante">
							</div>
							<div class="col-md-3">
							<label>Cédula</label>
							<input type="text" class="form-control input-sm" name="cedularp" id="cedularp">
							</div>
							<div class="col-md-3">
							<label>Ocupación</label>
							<input type="text" class="form-control input-sm" name="ocupacion" id="ocupacion">
							</div>
							</div>
							<div class="row">
							<div class="col-md-4">
							<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="trabajo" id="trabajo">
							</div>
							<div class="col-md-4">
							<label>Relación Familiar</label>
							<input type="text" class="form-control input-sm" name="familiar" id="familiar">
							</div>
							<div class="col-md-4">
							<label>Teléfono*</label>
							<input type="text" class="form-control input-sm" name="telefonor" id="telefonor">
							</div>
							</div>
							<div class="row">
							<div class="col-md-6">
							<label>Dirección domicilio</label>
							<input type="text" class="form-control input-sm" name="direccionr" id="direccionr">
							</div>
							
							<div class="col-md-6">
							<label>Email</label>
							<input type="text" class="form-control input-sm" name="email" id="email">
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
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar datos del estudiante</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevoU" class="letras">
						<div class="row">
					<div class="col-md-6">
						<label>Nombres y Apellidos</label>
						<input type="text" class="form-control input-sm" id="nombre2" name="nombre2">
					</div>
					<div class="col-md-6">
					<label>Institución educatica de la que procede:</label>
						<input type="text" class="form-control input-sm" id="institucion2" name="institucion2">
					</div>
					</div>
					<div class="row">
					<div class="col-md-4">
						<label>Género</label>
						<select class="form-control form-control-sm" id="sexo2" name="sexo2">
							<option value="A">Selecciona .. </option>
							<option value="M">Masculino </option>
							<option value="F">Femenino </option>
						</select>
					</div>
					<div class="col-md-4">
				     <label> Número de matrícula</label>
							<input type="text" class="form-control input-sm" name="idalumno" id="idalumno">
					</div>
					<div class="col-md-4">
							<label>Cédula del Estudiante</label>
							<input type="text" class="form-control input-sm" name="cedula2" id="cedula2">
					</div>
					</div>
					<hr>
							<label><b>DATOS DEL ESTUDIANTE</b></label>
						<br>
							<label>Lugar de Nacimiento</label>  <br>
							<div class="row">
							<div class="col-md-4">
							<label>Ciudad</label>
							<input type="text" class="form-control input-sm" name="ciudad2" id="ciudad2">
							</div>
							<div class="col-md-4">
							<label>Provincia:</label>
							<input type="text" class="form-control input-sm" name="provincia2" id="provincia2">
							</div>
							<div class="col-md-4">
							<label>Dirección domicilio</label>
							<input type="text" class="form-control input-sm" name="direccion2" id="direccion2">
							</div>
							</div>
							<div class="row">
							<div class="col-md-4">
							<label>Fecha de nacimiento</label>
							<input type="date" class="form-control input-sm" name="fecha2" id="fecha2">
							</div>
							<div class="col-md-4">
							<label>Teléfono convencional</label>
							<input type="text" class="form-control input-sm" name="telefono2" id="telefono2">
							</div>
							<div class="col-md-4">
							<label>Celular*</label>
							<input type="text" class="form-control input-sm" name="celular2" id="celular2">
							</div>
							</div>
							<hr>
							<label> DATOS DEL REPRESENTANTE</label>
						
							<div class="row">
							<div class="col-md-6">
							<label>Nombre del Representante</label>
							<input type="text" class="form-control input-sm" name="representante2" id="representante2">
							</div>
							<div class="col-md-3">
							<label>Cédula</label>
							<input type="text" class="form-control input-sm" name="cedularp2" id="cedularp2">
							</div>
							<div class="col-md-3">
							<label>Ocupación</label>
							<input type="text" class="form-control input-sm" name="ocupacion2" id="ocupacion2">
							</div>
							</div>
							<div class="row">
							<div class="col-md-4">
							<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="trabajo2" id="trabajo2">
							</div>
							<div class="col-md-4">
							<label>Relación Familiar</label>
							<input type="text" class="form-control input-sm" name="familiar2" id="familiar2">
							</div>
							<div class="col-md-4">
							<label>Teléfono*</label>
							<input type="text" class="form-control input-sm" name="telefonor2" id="telefonor2">
							</div>
							</div>
							<div class="row">
							<div class="col-md-6">
							<label>Dirección domicilio</label>
							<input type="text" class="form-control input-sm" name="direccionr2" id="direccionr2">
							</div>
							
							<div class="col-md-6">
							<label>Email</label>
							<input type="text" class="form-control input-sm" name="email2" id="email2">
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



	<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Datos del Alumno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="employee_detail">
							</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				
				</div>
				
			</div>
		</div>
	</div>

 <!--<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Detalle del Alumno</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>-->

</body>
</html>



<script type="text/javascript">
	$(document).ready(function(){
		

		$('#btnAgregarnuevo').click(function(){


				vacios=validarFormVacio('frmnuevo');

				if(vacios > 0){

					alertify.alert("Información","Debes llenar todos los campos!!");
					return false;
				}
			datos=$('#frmnuevo').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos/Alumnos/agregarAlumno.php",
				success:function(r){
					if(r){

						$('#frmnuevo')[0].reset();
						$('#agregarnuevosdatosmodal').modal('toggle');
						$('#tablaDatatable').load('Alumno/tablaAlumno.php');
						alertify.success("agregado con exito :D");
					}else{
						alertify.error("Fallo al agregar :(");
					}
				}
			});
		});

		$('#btnActualizar').click(function(){
			datos=$('#frmnuevoU').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"../procesos//Alumnos/actualizarAlumno.php",
				success:function(r){
					if(r==1){

						$('#tablaDatatable').load('Alumno/tablaAlumno.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('Alumno/tablaAlumno.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idalumno){
		$.ajax({
			type:"POST",
			data:"idalumno=" + idalumno,
			url:"../procesos//Alumnos/obtenDatosAlumno.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idalumno').val(datos['idalumno']);
				$('#nombre2').val(datos['nombre']);
				$('#institucion2').val(datos['institucion']);
				$('#sexo2').val(datos['sexo']);
				$('#cedula2').val(datos['cedula']);
				$('#ciudad2').val(datos['ciudad']);
				$('#provincia2').val(datos['provincia']);
				$('#telefono2').val(datos['telefono']);
				$('#celular2').val(datos['celular']);
				$('#direccion2').val(datos['direccion']);
				$('#fecha2').val(datos['fecha']);
				$('#representante2').val(datos['nombrer']);
				$('#cedularp2').val(datos['cedularp']);
				$('#ocupacion2').val(datos['ocupacion']);
				$('#trabajo2').val(datos['lugar']);
				$('#familiar2').val(datos['familiar']);
				$('#telefonor2').val(datos['telefonor']);
				$('#direccionr2').val(datos['direccionr']);
				$('#email2').val(datos['email']);
				
				

			}
		});
	}

  $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var user_id= $(this).attr("id");
  $.ajax({
   url:"../procesos//Alumnos/verDatosAlumno.php",
   method:"POST",
   data:{user_id:user_id},
   success:function(data){
   	$('.modal-title').text("Infor. Alumno");
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

	function eliminarDatos(idalumno){
		alertify.confirm('Eliminar estudiante', '¿Seguro de eliminar este alumno :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"idalumno=" + idalumno,
				url:"../procesos//Alumnos/eliminarAlumno.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('Alumno/tablaAlumno.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}

	
</script>
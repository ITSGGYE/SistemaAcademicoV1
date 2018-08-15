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
	 		text-align: center;
	 		padding: `2px;

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
						<h1>Datos Familiares de los Estudiantes</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
					<div class="card-body text-right">
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
					<h5 class="modal-title" id="exampleModalLabel">Agrega nuevos datos</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div class="container-fluid">
					<form id="frmnuevo">
					<div class="row">
					<div class="col-md-6">
					<label>Datos de la Madre</label> <br>
						<label>Nombres y Apellidos de la Madre</label>
						<input type="text" class="form-control input-sm" id="nombrem" name="nombrem">
					</div>
					<div class="col-md-6">
					<br>
					
						<label>Nombre del Estudiante</label>
											<div id="tablaDatatable2">
												
											 </div>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupación</label>
						<input type="text" class="form-control input-sm" id="ocupacionm" name="ocupacionm">
					</div>
					<div class="col-md-3">
						<label>Instrucción</label>
							<input type="text" class="form-control input-sm" name="instruccionm" id="instruccionm">
					</div>
					<div class="col-md-3">
							<label>Teléfono</label>
							<input type="text" class="form-control input-sm" name="telefonom" id="telefonom">
					</div>
					<div class="col-md-3">
					
					<label>Cédula</label>
						<input type="text" class="form-control input-sm" id="cedulam" name="cedulam">
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" id="correom" name="correom">
					</div>
					<div class="col-md-6">
						<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="lugarm" id="lugarm">
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Dirección</label>
						<input type="text" class="form-control input-sm" id="direccionm" name="direccionm">
					</div>
					</div>
					<hr>
							
						
							<label> Datos del Padre</label>
						
							<div class="row">
					<div class="col-md-6">
					
						<label>Nombres y Apellidos del Padre</label>
						<input type="text" class="form-control input-sm" id="nombrep" name="nombrep">
					</div>
										
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupación</label>
						<input type="text" class="form-control input-sm" id="ocupacionp" name="ocupacionp">
					</div>
					<div class="col-md-3">
						<label>Instrucción</label>
							<input type="text" class="form-control input-sm" name="instruccionp" id="instruccionp">
					</div>
					<div class="col-md-3">
							<label>Teléfono</label>
							<input type="text" class="form-control input-sm" name="telefonop" id="telefonop">
					</div>
					<div class="col-md-3">
					
					<label>Cédula</label>
						<input type="text" class="form-control input-sm" id="cedulap" name="cedulap">
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" id="correop" name="correop">
					</div>
					<div class="col-md-6">
						<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="lugarp" id="lugarp">
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Dirección</label>
						<input type="text" class="form-control input-sm" id="direccionp" name="direccionp">
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
					<form id="frmnuevoU" >
						<div class="row">
					<div class="col-md-6">
					<label>Datos de la Madre</label> <br>
						<label>Nombres y Apellidos de la Madre</label>
						<input type="text" class="form-control input-sm" id="nombrem2" name="nombrem2">
					</div>
					<div class="col-md-6">
					<br>
					
						<label>Nombre del Estudiante</label>
											<input type="hidden" class="form-control input-sm" id="idalumno" name="idalumno" readonly>
											<input type="text" class="form-control input-sm" id="estudiante" name="estudiante" readonly>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupacion</label>
						<input type="text" class="form-control input-sm" id="ocupacionm2" name="ocupacionm2">
					</div>
					<div class="col-md-3">
						<label>Instriccion</label>
							<input type="text" class="form-control input-sm" name="instruccionm2" id="instruccionm2">
					</div>
					<div class="col-md-3">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" name="telefonom2" id="telefonom2"2>
					</div>
					<div class="col-md-3">
					
					<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="cedulam2" name="cedulam2">
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" id="correom2" name="correom2">
					</div>
					<div class="col-md-6">
						<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="lugarm2" id="lugarm2">
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Direccion</label>
						<input type="text" class="form-control input-sm" id="direccionm2" name="direccionm2">
					</div>
					</div>
					<hr>
							
						
							<label> Datos del Padre</label>
						
							<div class="row">
					<div class="col-md-6">
					
						<label>Nombres y Apellidos del Padre</label>
						<input type="text" class="form-control input-sm" id="nombrep2" name="nombrep2">
					</div>
										
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupacion</label>
						<input type="text" class="form-control input-sm" id="ocupacionp2" name="ocupacionp2">
					</div>
					<div class="col-md-3">
						<label>Instriccion</label>
							<input type="text" class="form-control input-sm" name="instruccionp2" id="instruccionp2">
					</div>
					<div class="col-md-3">
							<label>Telefono</label>
							<input type="text" class="form-control input-sm" name="telefonop2" id="telefonop2">
					</div>
					<div class="col-md-3">
					
					<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="cedulap2" name="cedulap2">
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" id="correop2" name="correop2">
					</div>
					<div class="col-md-6">
						<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="lugarp2" id="lugarp2">
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Direccion</label>
						<input type="text" class="form-control input-sm" id="direccionp2" name="direccionp2">
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

<!-- Modal -->
	<div class="modal fade" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Datos Familiares</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevoU" >
						<div class="row">
						<p> <b> Datos de La Madre </b></p>
						</div>
						<div class="row">
					<div class="col-md-5">
					
						<label>Nombre</label>
						<input type="text" class="form-control form-control-sm"" id="nombrem3" name="nombrem3" readonly>
					</div>
					<div class="col-md-5">
					
					
						<label>Estudiante</label>
											<input type="hidden" class="form-control input-sm" id="idalumno2" name="idalumno2" readonly>
											<input type="text" class="form-control form-control-sm" id="estudiante2" name="estudiante2" readonly>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupacion</label>
						<input type="text" class="form-control form-control-sm" id="ocupacionm3" name="ocupacionm3" readonly>
					</div>
					<div class="col-md-3">
						<label>Instriccion</label>
							<input type="text" class="form-control form-control-sm" name="instruccionm3" id="instruccionm3" readonly>
					</div>
					<div class="col-md-3">
							<label>Telefono</label>
							<input type="text" class="form-control form-control-sm" name="telefonom3" id="telefonom3" readonly>
					</div>
					
					</div>
					<div class="row">
					<div class="col-md-5">
						<label>Correo</label>
						<input type="text" class="form-control form-control-sm" id="correom3" name="correom3" readonly>
					</div>
					<div class="col-md-3">
						<label> Trabajo</label>
							<input type="text" class="form-control form-control-sm" name="lugarm3" id="lugarm3" readonly>
					</div>
					<div class="col-md-3">
					
					<label>Cedula</label>
						<input type="text" class="form-control form-control-sm" id="cedulam3" name="cedulam3" readonly>
					</div>
					</div>
					<div class="row">
					<div class="col-md-5">
						<label>Direccion</label>
						<input type="text" class="form-control form-control-sm" id="direccionm3" name="direccionm3" readonly>
					</div>
					</div>
					<hr>
					
							<div class="row">
							<p> <b>Datos del padre</b></p>
							</div>
							<div class="row">
					<div class="col-md-5">
					
						<label>Nombres </label>
						<input type="text" class="form-control form-control-sm" id="nombrep3" name="nombrep3" readonly>
					</div>
					<div class="col-md-6">
						<label>Direccion</label>
						<input type="text" class="form-control form-control-sm" id="direccionp3" name="direccionp3" readonly>
					</div>
										
					</div>
					<div class="row">
					<div class="col-md-3">
						<label>Ocupacion</label>
						<input type="text" class="form-control form-control-sm" id="ocupacionp3" name="ocupacionp3" readonly>
					</div>
					<div class="col-md-3">
						<label>Instriccion</label>
							<input type="text" class="form-control form-control-sm" name="instruccionp3" id="instruccionp3" readonly>
					</div>
					<div class="col-md-3">
							<label>Telefono</label>
							<input type="text" class="form-control form-control-sm" name="telefonop3" id="telefonop3" readonly>
					</div>
					<div class="col-md-3">
					
					<label>Cedula</label>
						<input type="text" class="form-control input-sm" id="cedulap3" name="cedulap3" readonly>
					</div>
					</div>
					<div class="row">
					<div class="col-md-6">
						<label>Correo</label>
						<input type="text" class="form-control input-sm" id="correop3" name="correop3" readonly>
					</div>
					<div class="col-md-4">
						<label>Lugar de Trabajo</label>
							<input type="text" class="form-control input-sm" name="lugarp3" id="lugarp3" readonly>
					</div>
					
					</div>
					
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>

	

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
				url:"../procesos/DatosFamiliares/agregarDatosFamiliares.php",
				success:function(r){
					if(r){

						$('#frmnuevo')[0].reset();
						$('#agregarnuevosdatosmodal').modal('hide');
						$('#tablaDatatable').load('DatosFamiliares/tablaDatosFamiliares.php');
						$('#tablaDatatable2').load('DatosFamiliares/listadodeAlumno.php');
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
				url:"../procesos/DatosFamiliares/actualizarDatosFamiliares.php",
				success:function(r){
					
					if(r==1){
						$('#modalEditar').modal('hide');

						$('#tablaDatatable').load('DatosFamiliares/tablaDatosFamiliares.php');
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
		
		$('#tablaDatatable2').load('DatosFamiliares/listadodeAlumno.php');
		$('#tablaDatatable').load('DatosFamiliares/tablaDatosFamiliares.php');
	});
</script>

<script type="text/javascript">
	function agregaFrmActualizar(idalumno){
		$.ajax({
			type:"POST",
			data:"idalumno=" + idalumno,
			url:"../procesos/DatosFamiliares/ObtenDatosFamiliares.php",
			success:function(r){
				
				datos=jQuery.parseJSON(r);
				$('#idalumno').val(datos['alumno']);
				$('#estudiante').val(datos['estudiante']);
				
				$('#nombrem2').val(datos['madre']);
				$('#cedulam2').val(datos['cedula']);
				$('#ocupacionm2').val(datos['ocupacion']);
				$('#instruccionm2').val(datos['instruccion']);
				$('#telefonom2').val(datos['telefono']);
				$('#direccionm2').val(datos['direccion']);
				$('#correom2').val(datos['email']);
				$('#lugarm2').val(datos['lugar']);
				$('#nombrep2').val(datos['padre']);
				$('#cedulap2').val(datos['cedula2']);
				$('#ocupacionp2').val(datos['ocupacion2']);
				$('#instruccionp2').val(datos['instruccion2']);
				$('#telefonop2').val(datos['telefono2']);
				$('#direccionp2').val(datos['direccion2']);
				$('#correop2').val(datos['email2']);
				$('#lugarp2').val(datos['lugar2']);


				
				

			}
		});
	}

	function agregaFrmActualizar2(idalumno){
		$.ajax({
			type:"POST",
			data:"idalumno=" + idalumno,
			url:"../procesos/DatosFamiliares/ObtenDatosFamiliares.php",
			success:function(r){
				
				datos=jQuery.parseJSON(r);
				$('#idalumno2').val(datos['alumno']);
				$('#estudiante2').val(datos['estudiante']);
				
				$('#nombrem3').val(datos['madre']);
				$('#cedulam3').val(datos['cedula']);
				$('#ocupacionm3').val(datos['ocupacion']);
				$('#instruccionm3').val(datos['instruccion']);
				$('#telefonom3').val(datos['telefono']);
				$('#direccionm3').val(datos['direccion']);
				$('#correom3').val(datos['email']);
				$('#lugarm3').val(datos['lugar']);
				$('#nombrep3').val(datos['padre']);
				$('#cedulap3').val(datos['cedula2']);
				$('#ocupacionp3').val(datos['ocupacion2']);
				$('#instruccionp3').val(datos['instruccion2']);
				$('#telefonop3').val(datos['telefono2']);
				$('#direccionp3').val(datos['direccion2']);
				$('#correop3').val(datos['email2']);
				$('#lugarp3').val(datos['lugar2']);


				
				

			}
		});
	}


  $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var user_id= $(this).attr("id");
  $.ajax({
   url:"../procesos/DatosFamiliares/verDatosFamiliares.php",
   method:"POST",
   data:{user_id:user_id},
   success:function(data){
   	$('.modal-title').text("Infor. Alumno Datos Familiares");
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

	function eliminarDatos(idalumno){
		alertify.confirm('Eliminar datos del estudiante', '¿Seguro de eliminar los datos :(?', function(){ 

			$.ajax({
				type:"POST",
				data:"idalumno=" + idalumno,
				url:"../procesos//DatosFamiliares/eliminardatosfamiliares.php",
				success:function(r){
					if(r==1){
						$('#tablaDatatable').load('DatosFamiliares/tablaDatosFamiliares.php');
						$('#tablaDatatable2').load('DatosFamiliares/listadodeAlumno.php');
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
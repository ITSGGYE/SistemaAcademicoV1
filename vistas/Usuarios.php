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
						<h1>Usuarios</h1>
						<h2>Ingreso, Actualizar, Eliminar </h2>
					</div>
		</div>
<div class="row">
			<div class="col-md-4">
				<form id="frmingreso">
					<div class="row">
   
    <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label >Profesor</label>
     <select class="form-control form-control-sm" id="profesor" name="profesor">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_profesor, nombre_profesor from profesor ";
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
      <label >Usuario</label>

    <input type="text" class="form-control form-control-sm" id="usuario" name="usuario">
							
    </div>

  </div>

   <div class="row">
     <div class="form-group col-md-10" style="margin-top: 15px; margin-left: 15px;">
      <label >Password</label>

    <input type="text" class="form-control form-control-sm" id="password" name="password">
							
    </div>

  </div>
     
  
  <div class="form-group col-md-6 ">
  <label> Privilegio   </label>
			<select id="estado" name="estado" class="form-control form-control-sm">
							<option value="A"> ...</option>
							<option value="C">Calificar </option>
							<option value="I">Inicial2 </option>
							<option value="P">Primero </option>
							<option value="V">Ver notas </option>
							<option value="M">Modificar </option>
							<option value="1">Administrador </option>
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
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Usuarios</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmnuevo2">
					<div class="row">
					<div class="col-md-12">
						 <label >Profesor</label>
     		<select class="form-control form-control-sm" id="profesor2" name="profesor2">
							<option value="A">Selecciona ...</option>
							<?php
							$sql2="SELECT id_profesor, nombre_profesor from profesor ";
							$result=mysqli_query($conexion,$sql2)
 
							?>
							<?php while($ver2=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver2[0] ?>"><?php echo $ver2[0]."-".$ver2[1]; ?></option>
							<?php endwhile; ?>
						</select>
					</div>
					<div class="col-md-12">
					 <label >Usuario</label>
					 	<input type="text" class="form-control form-control-sm" id="usuario2" name="usuario2">
   					</div>

					<div class="col-md-12">
					 <label>Password</label>
					 	<input type="password" class="form-control form-control-sm" id="pass2" name="pass2">
   					</div>

					
					<div class="col-md-12">
					  <label> Privilegio </label>
					  <select id="estado2" name="estado2" class="form-control form-control-sm">
							<option value="A"> ...</option>
							<option value="C">Calificar </option>
							<option value="V">Ver notas </option>
							<option value="M">Modificar </option>
							<option value="1">Administrador </option>
						</select>
				</div>
					</div>
					<input type="hidden" name="idusuario" id="idusuario">
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

		$('#tabladatatable').load("Usuarios/tablaUsuario.php");

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
			url:"../procesos/Usuarios/agregausuario.php",
			success:function(r){
				alert(r);
				if(r){
					$("#frmingreso")[0].reset();
					$('#tabladatatable').load("Usuarios/tablaUsuario.php");
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
					url:"../procesos/Usuarios/actualizausuario.php",
					success:function(r){
						
						if(r==1){
							$('#modalEditar').modal('hide');
							$('#tabladatatable').load("Usuarios/tablaUsuario.php");

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
		function agregaFrmActualizar(idusuario){
		$.ajax({
			type:"POST",
			data:"idusuario=" + idusuario,
			url:"../procesos/Usuarios/ObtenDatosusuario.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#profesor2').val(datos['profesor']);
				$('#usuario2').val(datos['usuario']);
				$('#pass2').val(datos['password']);
				$('#estado2').val(datos['estado']);
				$('#idusuario').val(datos['idusuario']);
			
			}
		});
	}
		function eliminar(idusuario){
			alertify.confirm('Eliminar el usuario','¿Desea eliminar el usuario?', function(){ 
				$.ajax({
					type:"POST",
					data:"idusuario=" + idusuario,
					url:"../procesos/Usuarios/eliminarusuario.php",
					success:function(r){
						
							if(r==1){
							$('#tabladatatable').load("Usuarios/tablaUsuario.php");

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
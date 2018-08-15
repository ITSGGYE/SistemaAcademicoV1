<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT 
			s.id_sistcalif, 
			e.descripcion, 
			s.nombre_sistcalif, 
			s.descripcion_sistcalif, 
			s.cant_perido_sistcalif, 
			s.cant_parcial_sistcalif, 
			s.nota_promocion_sistcalif, 
			s.nota_rojo_sistcalif, 
			s.estado_sistcalif from sistemaCalificaciones s inner join seccion e on s.fk_seccion = e.id_seccion";
$result=mysqli_query($conexion,$sql);
?>



<div class="table-responsive">
	<table class="table table-bordered table-striped table-sm "  width="100%" cellspacing="0"  id="iddatatable">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr class="letras">
				<td>Codigo</td>	
				<td>Seccion</td>
				<td>Nombre</td>
				<td>Periodos</td>
				<td>Parciales</td>
				
				<td>Estado</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					
					<td style="text-align: center;"><?php echo $mostrar[4] ?></td>
					<td style="text-align: center;"><?php echo $mostrar[5] ?></td>
					<td><?php 
					if($mostrar[8]==1) {
						echo 'Habilitado</td>';
					} else
					{
						echo 'Desabilitado</td>';
					}
					?>
					
					
								
					<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalEditar"onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil" ></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span  onclick="eliminarSeccion('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>

</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#iddatatable').DataTable( {
       
    } );
} );
</script>

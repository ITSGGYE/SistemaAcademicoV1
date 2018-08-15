<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();




$sql="SELECT 
			a.id_aniolectivo,	
			a.anio_lectivo,				
			a.estado_aniolectivo, s.descripcion, c.nombre_sistcalif 		
 from  aniolectivo a, sistemaCalificaciones c, seccion s where a.fk_seccion=s.id_seccion and a.fk_sistcalif=c.id_sistcalif";
$result=mysqli_query($conexion,$sql);
?>



<div class="table-responsive">
	<table class="table table-bordered table-striped table-sm "  width="100%" cellspacing="0"  id="iddatatable" style="text-align: center;">
		<thead  align="center" style="color:#333 white; font-weight: bold;">
			<tr >
				<td>Codigo</td>	
				<td>Año Lectivo</td>
				<td>Seccion</td>
				<td>Calificacion</td>
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
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[2] ?></td>
								
					<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalEditar"onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil" ></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span  onclick="eliminar('<?php echo $mostrar[0] ?>')">
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

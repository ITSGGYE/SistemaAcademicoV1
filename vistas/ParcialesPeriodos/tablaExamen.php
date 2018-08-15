<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT  e.id_examen, e.examen, pe.periodo, e.estado from examen e inner join periodos pe on e.fk_periodo=pe.codigo_periodo ";
$result=mysqli_query($conexion,$sql);
?>


<div class="table-responsive">

	<table class="table table-bordered table-striped table-sm table-hover"  width="100%" cellspacing="0"  id="iddatatable">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr class="letras">
				<td>Codigo</td>	
				<td>Examen</td>
				<td>Periodo</td>
				<td>Estado</td>
				<td>Editar</td>
			</tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				
					<td style="text-align: center;"><?php echo $mostrar[0] ?></td>
					<td style="text-align: center;"><?php echo $mostrar[1] ?></td>
					<td style="text-align: center;"><?php echo $mostrar[2] ?></td>
					<?php  if ($mostrar[3]==1) {
						$mensaje="Activo";
					} else $mensaje="Inactivo"; ?>
					<td style="text-align: center;"><?php echo $mensaje ?></td>
			
			<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalEditar"onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil" ></span>
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

<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT p.id_pensum,c.nombre_Curso,s.descripcion,f.nombre_sistcalif, a.anio_lectivo,p.estado,p.fecha_registro  from sistemaCalificaciones f , aniolectivo a, pensum_academico p , curso c, seccion s where p.fk_anio=a.id_aniolectivo 
and a.fk_seccion=s.id_seccion and a.fk_sistcalif=f.id_sistcalif and c.id_curso=p.fk_curso;
";
$result=mysqli_query($conexion,$sql);
?>

<div class="table-responsive">
	<div class="text-right">
		<a href="../vistas/pensumacademicodetalle.php" class="btn btn-primary " >
							Detalle Pensum <span class="fa fa-plus-circle"></span></a>
						</span>
		</div>				
						<hr>
	<table class="table table-bordered table-striped table-sm "  width="100%" cellspacing="0"  id="iddatatable">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr class="letras">
				<td>Codigo</td>
				<td>Curso</td>
				<td>Seccion</td>
				<td>Sistema</td>
				<td>Año Lectivo</td>
				<td>Estado</td>
				<td>Fecha</td>
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
					
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					
								
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
        "scrollX": true
    } );
} );
</script>

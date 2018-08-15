<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$i=0;
$sql="SELECT a.id_alumno,a.nombre_Alumno, m.nombre_madre, p.nombre_padre, m.direccion_madre, m.telefono_madre from alumno a, 
datos_madre m, datos_padre p where a.id_alumno=m.fk_alumno and a.id_alumno =p.fk_alumno order by a.id_alumno";
$result=mysqli_query($conexion,$sql);
?>


<div class="table-responsive">
	<table class="table table-bordered table-striped  table-sm"  width="100%" cellspacing="0"  id="iddatatable">
		<thead  align="center" style="color:#333 white; font-weight: bold; ">
			<tr >
				<td>Nº</td>
				<td>Matricula</td>
				<td>Estudiante</td>
				<td>N.Madre</td>
				<td>N.Padre</td>
				<td>Direccion</td>
				<td>Telefono</td>
				
				
				<td> View </td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				$i++;
				?>
				<tr>
					<td align="center"><?php echo $i ?></td>
					<td align="center"><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					
					
					<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalVer" onclick="agregaFrmActualizar2('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-search" aria-hidden="true"></span>
						</span>
					</td>
								
					<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil" aria-hidden="true"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span  onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
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
       "lengthMenu": [[25, 50, 100,-1], [25, 50, 100, "Todos"]]
    } );
} );
</script>


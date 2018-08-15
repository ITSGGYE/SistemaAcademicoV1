<?php 

require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$i=0;
$sql="SELECT a.id_alumno , a.institucion_Alumno,
a.nombre_Alumno , a.sexo_Alumno ,
a.cedula_Alumno ,
a.ciudad_Alumno, a.direccion_Alumno FROM alumno a order by a.id_alumno ";
$result=mysqli_query($conexion,$sql);
?>


<div class="table-responsive">
	<table class="table table-bordered table-striped  table-sm"  width="100%" cellspacing="0"  id="iddatatable">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr >
				<td align="center">Nº</td>
				<td align="center">Matricula</td>
				<td align="center">Nombre</td>
				<td align="center">Institucion</td>
				<td align="center">Sexo</td>
				<td align="center">Cedula</td>
				<td align="center">Ciudad</td>
				<td align="center">Direccion</td>
				
				<td align="center"> View </td>
				<td align="center">Editar</td>
				<td align="center">Eliminar</td>
			</tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				$i++;
				?>
				<tr >
					<td align="center"><?php echo $i ?></td>
					<td align="center"><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[6] ?></td>
					
					<td style="text-align: center;">
						<span  name="view_data" id="'<?php echo $mostrar[0] ?>'" class=" view_data"><span class="fa fa-search" aria-hidden="true""></span></span>
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


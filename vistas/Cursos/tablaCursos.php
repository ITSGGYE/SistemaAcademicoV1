	<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

                  $sql2="SELECT codigo_parcial from parciales   where estado=1"; 
              $result=mysqli_query($conexion,$sql2);
              while($mostrar=mysqli_fetch_row($result)){
                $parcial=$mostrar[0];
              }
$sql="SELECT id_curso, nombre_Curso, estado_Curso  FROM curso";
$result=mysqli_query($conexion,$sql);
?>


<div class="table-responsive">
	<table class="table table-bordered table-striped table-sm "  width="80%" cellspacing="0"  id="iddatatable" style="margin-left: 10%; text-align: center;">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr class="letras">
				<td>#</td>	
				<td>Curso</td>
				<td>Estado</td>
				<td>Alumnos</td>
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
					<?php
					if($mostrar[2]==1)
					{
						?> <td><?php echo "Habilitado" ?></td>
					<?php
					}
					 
					else {
						?> <td><?php echo "Desabilitado" ?></td>
						<?php
					}?>
					
					
					
						<td style="text-align: center;"> 
 
                <a  class="" href="../vistas/vernotasAlumno.php?id=<?php echo $mostrar[0] ?>&parcial=<?php echo $parcial ?>"><i class="fa fa-address-book"></i></a>

</td>			
					<td style="text-align: center;">
						<span  data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil" ></span>
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
       
    } );
} );
</script>



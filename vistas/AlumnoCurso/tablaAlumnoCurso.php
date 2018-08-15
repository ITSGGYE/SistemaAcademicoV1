<?php 
require_once "../../clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
$i=0;
$sql="SELECT cr.id_curso_alumno, a.nombre_Alumno, c.nombre_Curso, s.descripcion, anio.anio_lectivo, cr.estado, a.id_alumno ,cr.fk_curso from 
 alumno a , curso c, seccion s, aniolectivo anio, curso_alumno cr where
 cr.fk_alumno=a.id_alumno and cr.fk_curso=c.id_curso and cr.fk_seccion=s.id_seccion and 
 cr.fk_anio=anio.id_aniolectivo order by cr.fk_curso";

$result=mysqli_query($conexion,$sql);

?>


<div class="table-responsive">
	<table class="table table-bordered table-striped  table-sm"   width="100%" cellspacing="0"  id="iddatatable">
		<thead  style="color:#333 white; font-weight: bold;">
			<tr >
				<td align="center"> Nº </td>
				<td align="center">Matrícula</td>
				<td align="center">Estudiante</td>
				
				<td align="center">Sección</td>
				<td align="center">Año Lectivo</td>
				<td align="center">Estado</td>
				<td align="center">Curso</td>
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

					<td><?php echo $i ?></td>
					<td align="center"><?php echo $mostrar[6] ?></td>
					<td align="center"><?php echo $mostrar[1] ?></td>
				

					
					<td align="center"><?php echo $mostrar[3] ?></td>
					<td align="center"><?php echo $mostrar[4] ?></td>
					<td align="center"><?php echo $mostrar[5] ?></td>
						<?php 
					switch ($mostrar[7]) {
						case 1 :
							echo' <td align="center"><span class="badge badge-pill badge-primary">'.$mostrar[2].'</span> </td>';
							break;
						case 2 :
							echo' <td align="center"><span class="badge badge-pill badge-danger">'.$mostrar[2].'</span> </td>';
							break;
						case 3 :
							echo' <td align="center"><span class="badge badge-pill badge-success">'.$mostrar[2].'</span> </td>';
							break;
						case 4 :
							echo' <td align="center"><span class="badge badge-pill badge-info">'.$mostrar[2].'</span> </td>';
							break;
						case 5 :
							echo' <td align="center"><span class="badge badge-pill badge-secundary">'.$mostrar[2].'</span> </td>';
							break;
						case 6 :
							echo' <td align="center"><span class="badge badge-pill badge-light">'.$mostrar[2].'</span> </td>';
							break;
						case 7 :
							echo' <td align="center"><span class="badge badge-pill badge-warning">'.$mostrar[2].'</span> </td>';
							break;
						case 8 :
							echo' <td align="center"><span class="badge badge-pill badge-dark">'.$mostrar[2].'</span> </td>';
							break;
						case 9 :
							echo' <td align="center"><span class="badge badge-pill badge-primary">'.$mostrar[2].'</span> </td>';
							break;
						case 10 :
							echo' <td align="center"><span class="badge badge-pill badge-danger">'.$mostrar[2].'</span> </td>';
							break;
						case 11 :
							echo' <td align="center"><span class="badge badge-pill badge-success">'.$mostrar[2].'</span> </td>';
							break;
						case 12 :
							echo' <td align="center"><span class="badge badge-pill badge-info">'.$mostrar[2].'</span> </td>';
							break;
						case 13 :
							echo' <td align="center"><span class="badge badge-pill badge-secundary">'.$mostrar[2].'</span> </td>';
							break;
						default:
							break;
					}
					
						
					?>
					
					
								
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


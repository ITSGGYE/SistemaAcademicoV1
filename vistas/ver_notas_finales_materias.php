<?php session_start();?>
<?php 

$anio=$_GET['anio'];
$profesor=$_GET['profesor'];
$curso=$_GET['curso'];
$materia=$_GET['materia'];





require_once '../clases/conexion.php';

$c= new conectar();
$conexion=$c->conexion();
$i=0;
$suma=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "dependencias.php"; 
	 ?>
	 <style type="text/css">
	 td{
	 	font-size: 10px;
	 	font-weight: bold;

	 }
	 th{
	 	font-size: 12px;
	 }
	 	label{
	 		font-size: 14px;
	 		font-weight: bold;
	 		text-align: center;
	 	 	}
	 	 	input[type="text"], input[type="date"] {
	 		font-size: 14px;
	 		margin-left: 
	 		padding: 2px;

}


	 </style>
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
	<div class="container-fluid ">




 <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					<div class="card-header box ">
						<h2>Unidad Educativa "Young Living  Academy" </h2>
						<h3>Notas Ingresadas </h3>
					</div>
					<div class="card-body text-left">
						
					</div>
						<div class="text-center ">  
							
										<?php 
							$sql="SELECT nombre_materia from materia where 
							id_materia='$materia'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_materia=$mostrar[0];
							
							}
							?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_curso=$mostrar[0];
							
								
							}
							?>
							
							<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$aniolectivo=$mostrar[1];
								
							}
							?>
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES FINALES </h3>
 								<h4><?php echo($aniolectivo);?></h4>
								<h3>Nómina de Estudiante</h3>
								<br>
								<table width="100%">

								<tr>
								<td> <h6 class="border"> Asignatura: <?php echo $nombre_materia; ?> </h6></td>
								<td> <h6 class="border"> Curso: <?php echo $nombre_curso; ?> </h6></td>
								<td> <h6 class="border"> Docente: <?php echo $_SESSION['profesor']['nombre']; ?> </h6></td>
								
					</tr>
				</table>
<?php
	

/*************************************************/

/*Primer parcial  Asistencia ******/



/*******************************************Notas de Parciales *////////////////////////////////////////////

	$sql="SELECT a.id_alumno, a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=1 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial1[]=array('id'=>$mostrar[0], 'alumno' =>$mostrar[1] , 'promedio'=>$mostrar[2] );
    }
    
    
   $sql="SELECT a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=2 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial2[]=array('alumno' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
   
   $sql="SELECT a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=3 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial3[]=array('alumno' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    /*****************Notas parciales del segundo quimestre *******/

   $sql="SELECT a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=4 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial4[]=array('alumno' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    
   $sql="SELECT a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=5 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial5[]=array('alumno' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    

   $sql="SELECT a.nombre_alumno, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from alumno a, notas n where n.fk_alumno=a.id_alumno and n.fk_parcial=6 and n.fk_curso='$curso' and n.fk_materia='$materia'  and  n.fk_anio='$anio'  and n.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial6[]=array('alumno' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    

    /*************************************************************/


     $sql="SELECT a.nombre_alumno, e.nota from alumno a , notas_examen e where e.fk_alumno=a.id_alumno and e.fk_examen=1 and e.fk_curso='$curso' and e.fk_materia='$materia' and e.fk_anio='$anio' and e.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen[]=array('alumno' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }

    /********************************************************************/

      $sql="SELECT a.nombre_alumno, e.nota from alumno a , notas_examen e where e.fk_alumno=a.id_alumno and e.fk_examen=2 and e.fk_curso='$curso' and e.fk_materia='$materia' and e.fk_anio='$anio' and e.fk_profesor='$profesor'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen2[]=array('alumno' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }
		
							
		$tabla='				<div class="table-responsive">	
							
					<table class="table  table-sm table-bordered"  style="text-align: center; width:90%; margin-left: 5%;"> 
						<tr>
				<form id="frmnotas" method="POST">
							
			<td align="center" rowspan="3" > <br> <br> Estudiante </td> 
			<td colspan="9"> PRIMER QUIMESTRE </td>
			<td colspan="9"> SEGUNDO QUIMESTRE </td>
			<td colspan="2"> ANUAL </td>
			
			<td rowspan="3"> <br> <br> NF </td>	
			<td rowspan="3"> <br> <br> OBSERVACIONES</td>
			
	


			
			</tr>
			<tr>
			<td colspan="5">PARCIALES</td>
			<td colspan="2">EXAMEN</td>
			<td rowspan="2" align="center"> <br> PQ </td>
			<td rowspan="2"> <br> OBSERVACION </td>
			<td colspan="5">PARCIALES</td>
			<td colspan="2">EXAMEN</td>
			<td rowspan="2" align="center"> <br> PQ </td>
			<td rowspan="2"> <br> OBSERVACION </td>
			<td rowspan="2"> <br> SUMA </td>
            <td rowspan="2"> <br> PR </td>
			</tr>
			<tr>
    		<td> 1 </td>
    		<td> 2 </td>
            <td> 3 </td>
            <td> SUMA </td>
            <td> 80 </td>
            <td> EX </td>
            <td> 20 </td>
            <td> 1 </td>
    		<td> 2 </td>
            <td> 3 </td>
            <td> SUMA </td>
            <td> 80 </td>
            <td> EX </td>
            <td> 20 </td>
            
            
            
    		</tr> ';
		$pq1=0;
		$pq2=0;					
		$pqf=0;
		for ($i=0; $i <count($parcial2) ; $i++) { 
    	$suma=0;
        $suma=($parcial1[$i]['promedio']+$parcial2[$i]['promedio']+$parcial3[$i]['promedio'])/3;
        $suma2=0;
        $suma2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio'])/3;
        $suma=number_format($suma,2);
        $suma2=number_format($suma2,2);
        
        
        $promedio_general=($suma*0.80)+($examen[$i]['examen']*0.20);
        $promedio_general=number_format($promedio_general,2);
        $promedio_general2=($suma2*0.80)+($examen2[$i]['examen']*0.20);
        $promedio_general2=number_format($promedio_general2,2);
        $pq1=($pq1+$promedio_general);
        $pq2=($pq2+$promedio_general2);
        $pqf=$pqf+(($suma+$suma2)/2);

    	

    		$tabla.='<tr> <td>'.$parcial1[$i]['alumno'].'</td>
    				<td>'.number_format($parcial1[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial2[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial3[$i]['promedio'],2).'</td> 
                   <td bgcolor="#C39BD3">'.number_format(($parcial1[$i]['promedio']+$parcial2[$i]['promedio']+$parcial3[$i]['promedio']),2).'</td> 
                    <td bgcolor="">'.number_format($suma*0.80,2).'</td> 
                    <td>'.number_format($examen[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($examen[$i]['examen']*0.20,2).'</td>
                    <td>'.$promedio_general.'</td>';
                 	if(($promedio_general>=8.99) and ($promedio_general<=10))
							{
					$tabla.='<td> <p> D.A.R </p></td>';

					}
					else {
						if(($promedio_general>=7) and ($promedio_general<=8.99))
						{
					$tabla.='<td> <p> A.A.R </p></td>';
						}
					else {
						if(($promedio_general>=5) and ($promedio_general<=6.99))
						{
					$tabla.='<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
					$tabla.= '<td> <p> N.A.A.R </p></td>';
					}
					}
					}
				 
                  $tabla.=  '<td>'.number_format($parcial4[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial5[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial6[$i]['promedio'],2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format(($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio']),2).'</td> 
                    <td>'.number_format($suma2*0.80,2).'</td> 
                    <td>'.number_format($examen2[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($examen2[$i]['examen']*0.20,2).'</td>
                    <td>'.$promedio_general2.'</td>';
                    if(($promedio_general2>=8.99) and ($promedio_general2<=10))
							{
					$tabla.='<td> <p> D.A.R </p></td>';

					}
					else {
						if(($promedio_general2>=7) and ($promedio_general2<=8.99))
						{
					$tabla.='<td> <p> A.A.R </p></td>';
						}
					else {
						if(($promedio_general2>=5) and ($promedio_general2<=6.99))
						{
					$tabla.='<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
					$tabla.= '<td> <p> N.A.A.R </p></td>';
					}
					}
					}




                    $tabla.='
                    <td>'.($suma+$suma2).'</td> 

                    <td bgcolor="yellow">'.number_format((($suma+$suma2)/2),2).'</td> ';
                    
                     
                    
                    if(number_format((($suma+$suma2)/2),2)>=7)
                    	$tabla.='<td> <b>'.number_format((($suma+$suma2)/2),2).'</</td> <td>APROBADO</td> <td></td>';

                    	else 
                    		$tabla.='<td><font color="red"><b>'.number_format((($suma+$suma2)/2),2).'</font></td> <td>PIERDE AÑO</td>
                    	<input type="hidden" name="alumno[]" id="alumno[]" value='.$parcial1[$i]['id'].'>
                    	<input type="hidden" name="materia" id="materia" value='.$materia.'>
                    	<input type="hidden" name="curso" id="curso" value='.$curso.'>
                    	<input type="hidden" name="profesor" id="profesor" value='.$profesor.'>
                    	<input type="hidden" name="anio" id="anio" value='.$anio.'>'

                    	
                    	;

                    	
                    
                    
                    $tabla.='</tr>';
                    
    	
    }
    $suma1=0;
    $suma2=0;
    $suma3=0;
    $suma4=0;
    $suma5=0;
    $suma6=0;
    $examen=0;
    $examen2=0;
    $cont=0;
    for ($i=0; $i <count($parcial2) ; $i++) { 
    	$suma1=$suma1+$parcial1[$i]['promedio'];
    	$suma2=$suma2+$parcial2[$i]['promedio'];
    	$suma3=$suma3+$parcial3[$i]['promedio'];
    	$suma4=$suma4+$parcial4[$i]['promedio'];
    	$suma5=$suma5+$parcial5[$i]['promedio'];
    	$suma6=$suma6+$parcial6[$i]['promedio'];
    	$examen=$examen+$examen[$i]['examen'];
    	$examen2=$examen2+$examen2[$i]['examen'];
    	$cont=$cont+1;
    		
    }
    $tabla.='<tr> 
    <td>PROMEDIO</td>
	<td>'.number_format(($suma1)/$cont,2).'</td>
	<td>'.number_format(($suma2)/$cont,2).'</td>
	<td>'.number_format(($suma3)/$cont,2).'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>'.number_format(($pq1)/$cont,2).'</td>';

	if((number_format(($pq1)/$cont,2)>=8.99) and (number_format(($pq1)/$cont,2)<=10))
							{
					$tabla.='<td> <p> D.A.R </p></td>';

					}
					else {
						if((number_format(($pq1)/$cont,2)>=7) and (number_format(($pq1)/$cont,2)<=8.99))
						{
					$tabla.='<td> <p> A.A.R </p></td>';
						}
					else {
						if((number_format(($pq1)/$cont,2)>=5) and (number_format(($pq1)/$cont,2)<=6.99))
						{
					$tabla.='<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
					$tabla.= '<td> <p> N.A.A.R </p></td>';
					}
					}
					}

	$tabla.='
	<td>'.number_format(($suma4)/$cont,2).'</td>
	<td>'.number_format(($suma5)/$cont,2).'</td>
	<td>'.number_format(($suma6)/$cont,2).'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td>'.number_format(($pq2)/$cont,2).'</td>';
	if((number_format(($pq2)/$cont,2)>=8.99) and (number_format(($pq2)/$cont,2)<=10))
							{
					$tabla.='<td> <p> D.A.R </p></td>';

					}
					else {
						if((number_format(($pq2)/$cont,2)>=7) and (number_format(($pq2)/$cont,2)<=8.99))
						{
					$tabla.='<td> <p> A.A.R </p></td>';
						}
					else {
						if((number_format(($pq2)/$cont,2)>=5) and (number_format(($pq2)/$cont,2)<=6.99))
						{
					$tabla.='<td> <p> E.P.A.A.R </p></td>';
						}
					else
					{
					$tabla.= '<td> <p> N.A.A.R </p></td>';
					}
					}
					}

	$tabla.='
	
	<td></td>
	<td>'.number_format(($pqf)/$cont,2).'</td>
	
	<td>'.number_format(($pqf)/$cont,2).'</td>

	</tr>
	
    </table>
	

<input type="submit" id="btnguardar" name="btnguardar" class="btn btn-sm btn-danger" value="Guardar">
     </form>';

    echo $tabla;
   echo' <br>

   <table style="margin-left:300px;">
<tr>
	<td >Mgs. Paulina Huayamave <br> Rectora </td>



	<td width="800" style="margin-left:300px;">Gabriela Gonzáles Jama <br> Secretaria </td>
</tr>
</table> ';


?>
<br>
<br>
<br>
<br>
<br>
<br>

				



</div>


						
						</div>
					
					<div class="card-footer text-muted">
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>


?>

<script type="text/javascript">
		jQuery(document).on('submit','#frmnotas',function(event){
			event.preventDefault();
			jQuery.ajax({
				url:"../procesos/Calificaciones/enviosupletorio.php",
				type: 'POST',
				dataType:'json',
				data:$(this).serialize(),
			})
			.done(function(respuesta){
				console.log(respuesta);
				if(!respuesta.error){
					 
					$("#frmnotas")[0].reset();
					alertify.success("El estudiante fue enviado a Supletorio");

				}
				else{
					alertify.error("Hubo un error:(");
				}
			})
			
		});

	</script>


<?php 
$alumno=$_GET['alumno'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$curso=$_GET['curso'];





require_once '../../clases/conexion.php';

$c= new conectar();
$conexion=$c->conexion();
$i=0;
$suma=0;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body class="fondo">
	<div class="container-fluid ">




  <div class="row">
 <div class="col-lg-12">
				<div class="card ">
					
						<div class="text-center ">  
							
							<?php 
							$sql="SELECT nombre_alumno from alumno where 
							id_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$nombre_alumno=$mostrar[0];
							}
							
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
							$nombre_curso=$mostrar[0];
							}
							 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
							$aniolectivo=$mostrar[1];	
														}
							?>
                            <?php
                            $sql2="SELECT t.fk_profesor, p.nombre_profesor from tutor t ,profesor p where t.fk_curso='$curso' and p.id_profesor=t.fk_profesor"; 
                            $result=mysqli_query($conexion,$sql2);
                        while($ver2=mysqli_fetch_row($result)): 
                            $id_profesor=$ver2[0];
                            $nombre_profesor=$ver2[1];
                            
                             endwhile; ?>
		<table align="center">
				<tr>
					<td align="center"><small style="color:green; font-size: 16px;"> UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</small></td>
				</tr>
				<tr>
					<td align="center"><small style="font-size: 14px; color: red;"> INFORME ACADEMICO ESTUDIANTIL DEL PERIODO LECTIVO <?php echo $aniolectivo;?></small></td>
				</tr>
				
</table>
							
							<table>
				<tr>
					<td><small style="font-size: 14px;"> Estudiante: </small></td>
					<td> <small style="font-size: 16px; border: 1px solid black; padding: 5px; color: blue; "><?php echo mb_strtoupper($nombre_alumno);?></small></td>
					<td> <small style="font-size: 14px;"> Curso: </small></td>
					<td> <small style="font-size: 16px; border: 1px solid black; padding: 5px; color: blue;"><?php echo mb_strtoupper($nombre_curso);?></small>
                    </td>
                    <td> <small style="font-size: 14px;"> Tutor: </small></td>
                    <td> <small style="font-size: 16px; border: 1px solid black; padding: 5px; color: blue;"><?php echo mb_strtoupper($nombre_profesor);?></small>
                    </td>
				</tr>
</table>
<?php 
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=1 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto1=$mostrar[0];
    }

/*Segundo Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=2 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto2=$mostrar[0];
    }

/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=3 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto3=$mostrar[0];
    }


/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=4 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto4=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=5 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto5=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from proyecto_escolar where fk_parcial=6 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$proyecto6=$mostrar[0];
    }


	
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=1 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta1=$mostrar[0];
    }

/*Segundo Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=2 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta2=$mostrar[0];
    }

/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=3 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta3=$mostrar[0];
    }


/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=4 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta4=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=5 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta5=$mostrar[0];
    }
/*Primer Parcial Conducta ******/
$sql=" SELECT nota  from comportamiento where fk_parcial=6 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$conducta6=$mostrar[0];
    }



/*************************************************/

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=1 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia1[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=2 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia2[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=3 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia3[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=4 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia4[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=5 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia5[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }

/*Primer parcial  Asistencia ******/
$sql= "SELECT fj,fi,fa from asistencia where fk_parcial=6 and fk_curso='$curso' and fk_anio='$anio' and fk_alumno='$alumno' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$asistencia6[]=array('fj' =>$mostrar[0] , 'fi'=>$mostrar[1], 'fa'=>$mostrar[2] );
    }





/*******************************************Notas de Parciales *////////////////////////////////////////////

	$sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=1 and n.fk_curso='$curso' and m.id_materia=n.fk_materia  and  n.fk_anio='$anio' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial1[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=2 and n.fk_curso='$curso' and m.id_materia=n.fk_materia  and n.fk_anio='$anio' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial2[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

   
     $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=3 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio' ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $parcial3[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

    /*****************Notas parciales del segundo quimestre *******/

    
	$sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=4 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial4[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=5 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial5[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

   
     $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=6 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $parcial6[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

    /*************************************************************/


     $sql="SELECT m.nombre_materia, e.nota from materia m , notas_examen e where e.fk_alumno='$alumno' and e.fk_examen=1 and e.fk_curso='$curso' and m.id_materia=e.fk_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen[]=array('materia' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }

    /********************************************************************/

     $sql="SELECT m.nombre_materia, e.nota from materia m , notas_examen e where e.fk_alumno='$alumno' and e.fk_examen=2  and e.fk_curso='$curso' and m.id_materia=e.fk_materia and e.fk_anio='$anio'";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen2[]=array('materia' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }
		
		if($periodo==1){ 
							
		$tabla='				<div class="table-responsive">	
							
					<table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:100%; ; padding:1px; font-size:14px;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> Materia </td> 
			<td colspan="9"> PRIMER QUIMESTRE </td>
			
			</tr>
			<tr>
			<td colspan="5">PARCIALES</td>
			<td colspan="2">EXAMEN</td>
			<td rowspan="2" align="center"> <br> PQ </td>
			<td rowspan="2"> <br> OBSERVACION </td>
			</tr>
			<tr>
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
        $sumap1=($parcial1[$i]['promedio']+$parcial2[$i]['promedio']+$parcial3[$i]['promedio']);
      
       
        $suma=number_format($suma,2);
      
        
        $promedio_general=($suma*0.80)+($examen[$i]['examen']*0.20);
        $promedio_general=number_format($promedio_general,2);
        
        $pq1=($pq1+$promedio_general);
    	if($parcial1[$i]['materia']=$parcial2[$i]['materia']) {

    		$tabla.='<tr> <td>'.$parcial1[$i]['materia'].'</td>
    				<td>'.number_format($parcial1[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial2[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial3[$i]['promedio'],2).'</td> 
                    <td>'.number_format($sumap1,2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($suma*0.80,2).'</td> 
                    <td>'.number_format($examen[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($examen[$i]['examen']*0.20,2).'</td>
                    <td>'.$promedio_general.'</td>';
                 	if(($promedio_general>=8.99) and ($promedio_general<=10))
							{
					$tabla.='<td> D.A.R </td>';

					}
					else {
						if(($promedio_general>=7) and ($promedio_general<=8.99))
						{
					$tabla.='<td>  A.A.R </td>';
						}
					else {
						if(($promedio_general>=5) and ($promedio_general<=6.99))
						{
					$tabla.='<td> E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td> N.A.A.R </td>';
					}
					}
					}
				}
			}
			$suma1=0;
    $suma2=0;
    $suma3=0;
    $cont=0;
     for ($i=0; $i <count($parcial2) ; $i++) { 
    	$suma1=$suma1+$parcial1[$i]['promedio'];
    	$suma2=$suma2+$parcial2[$i]['promedio'];
    	$suma3=$suma3+$parcial3[$i]['promedio'];
    	
    	$cont=$cont+1;
    		
    }
    $tabla.='<tr> 
    <td>Proyeto Escolar</td>
	<td>'.$proyecto1.'</td>
	<td>'.$proyecto2.'</td>
	<td>'.$proyecto3.'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
    <tr> 
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
					$tabla.='<td>  D.A.R </td>';

					}
					else {
						if((number_format(($pq1)/$cont,2)>=7) and (number_format(($pq1)/$cont,2)<=8.99))
						{
					$tabla.='<td> A.A.R </td>';
						}
					else {
						if((number_format(($pq1)/$cont,2)>=5) and (number_format(($pq1)/$cont,2)<=6.99))
						{
					$tabla.='<td> E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R </td>';
					}
					}
					}
				$tabla.='</tr>
				 </table>';
    echo $tabla;
    $tabla2=' <div style="">
    <table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:225px; ; padding:1px; font-size:14px;">

    <tr> 
    <td width="150">COMPORTAMIENTO</td>
	<td width="56">'.$conducta1.'</td>
	<td width="56">'.$conducta2.'</td>
	<td width="44">'.$conducta3.'</td>

	</tr> 
	<tr> 
	<td width="90"> Faltas Justificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia1[$i]['fj'].'</td>
		<td width="25">'.$asistencia2[$i]['fj'].'</td>
		<td width="23">'.$asistencia3[$i]['fj'].'</td>';

}

$tabla2.='
	</tr>
	<tr> 
	<td width="90"> Faltas Injustificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia1[$i]['fi'].'</td>
		<td width="25">'.$asistencia2[$i]['fi'].'</td>
		<td width="23">'.$asistencia3[$i]['fi'].'</td>';
		
		}
$tabla2.='
	</tr>
	<tr> 
	<td width="90"> Atrasos </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia1[$i]['fi'].'</td>
		<td width="25">'.$asistencia2[$i]['fa'].'</td>
		<td width="23">'.$asistencia3[$i]['fa'].'</td>';
		
		}
	

	
$tabla2.='
	</tr>


    </table> </div>';


    echo $tabla2;

	} else {
		if($periodo==2)
		{
			$tabla='				<div class="table-responsive">	
							
					<table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:100%; ; padding:1px; font-size:14px;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> Materia </td> 
			<td colspan="9"> SEGUNDO  QUIMESTRE </td>
			
			</tr>
			<tr>
			<td colspan="5">PARCIALES</td>
			<td colspan="2">EXAMEN</td>
			<td rowspan="2" align="center"> <br> PQ </td>
			<td rowspan="2"> <br> OBSERVACION </td>
			</tr>
			<tr>
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
		for ($i=0; $i <count($parcial4) ; $i++) { 
        $suma2=0;
        $suma2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio'])/3;
        $sumap2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio']);
      
       
        $suma2=number_format($suma2,2);
        $promedio_general2=($suma2*0.80)+($examen2[$i]['examen']*0.20);
        $promedio_general2=number_format($promedio_general2,2);
        $pq1=($pq1+$promedio_general2);
        

    	if($parcial1[$i]['materia']=$parcial2[$i]['materia']) {

    		$tabla.='<tr> <td>'.$parcial1[$i]['materia'].'</td>
    				<td>'.number_format($parcial4[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial5[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial6[$i]['promedio'],2).'</td> 
                    <td>'.number_format($sumap2,2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($suma2*0.80,2).'</td> 
                    <td>'.number_format($examen2[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3">'.number_format($examen2[$i]['examen']*0.20,2).'</td>
                    <td>'.$promedio_general2.'</td>';
                 	if(($promedio_general2>=8.99) and ($promedio_general2<=10))
							{
					$tabla.='<td>  D.A.R </td>';

					}
					else {
						if(($promedio_general2>=7) and ($promedio_general2<=8.99))
						{
					$tabla.='<td> A.A.R </td>';
						}
					else {
						if(($promedio_general2>=5) and ($promedio_general2<=6.99))
						{
					$tabla.='<td> E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R </td>';
					}
					}
					}
				}
			}
			$suma1=0;
    $suma2=0;
    $suma3=0;
    $cont=0;
     for ($i=0; $i <count($parcial2) ; $i++) { 
    	$suma1=$suma1+$parcial4[$i]['promedio'];
    	$suma2=$suma2+$parcial5[$i]['promedio'];
    	$suma3=$suma3+$parcial6[$i]['promedio'];
    	
    	$cont=$cont+1;
    		
    }
    $tabla.='<tr> 
    <td>Proyeto Escolar</td>
	<td>'.$proyecto4.'</td>
	<td>'.$proyecto5.'</td>
	<td>'.$proyecto6.'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr> <tr> 
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
					$tabla.='<td> D.A.R </td>';

					}
					else {
						if((number_format(($pq1)/$cont,2)>=7) and (number_format(($pq1)/$cont,2)<=8.99))
						{
					$tabla.='<td> A.A.R </td>';
						}
					else {
						if((number_format(($pq1)/$cont,2)>=5) and (number_format(($pq1)/$cont,2)<=6.99))
						{
					$tabla.='<td>  E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td> N.A.A.R </td>';
					}
					}
					}
			$tabla.='</tr>
				 </table>';
    echo $tabla;
    $tabla2=' <div style="">
    <table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:225px; ; padding:1px; font-size:14px;">

    <tr> 
    <td width="150">COMPORTAMIENTO</td>
	<td width="56">'.$conducta4.'</td>
	<td width="56">'.$conducta5.'</td>
	<td width="44">'.$conducta6.'</td>

	</tr> 
	<tr> 
	<td width="90"> Faltas Justificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fj'].'</td>
		<td width="25">'.$asistencia5[$i]['fj'].'</td>
		<td width="23">'.$asistencia6[$i]['fj'].'</td>';

}

$tabla2.='
	</tr>
	<tr> 
	<td width="90"> Faltas Injustificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fi'].'</td>
		<td width="25">'.$asistencia5[$i]['fi'].'</td>
		<td width="23">'.$asistencia6[$i]['fi'].'</td>';
		
		}
$tabla2.='
	</tr>
	<tr> 
	<td width="90"> Atrasos </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fi'].'</td>
		<td width="25">'.$asistencia5[$i]['fa'].'</td>
		<td width="23">'.$asistencia6[$i]['fa'].'</td>';
		
		}
	

	
$tabla2.='
	</tr>


    </table> </div>';


    echo $tabla2;		

}
	}			
				 
                 




?>



<div class="row">
    <div class="col-lg-6">
<table  border="1" cellspacing="0" cellpadding="0" color="black" style="width: 40%;  margin-bottom:0px;

font-size: 10px; padding: 2px; text-align: center; margin-left: px;"  >
    <tr>
        <th>ESCALA CUALITATIVA</th>
        <th>SIGLAS</th>
        <th>Escala <br> Cuantitativa</th>
    </tr>
        
        <tr>
            <td>Domina los aprendizajes requeridos  </td>
            <td>D.A.R.  </td>
            <td>9</td>
        </tr>
        <tr>
            <td>Alcanza los aprendizajes requeridos </td>
            <td>A.A.R.</td>
            <td>8-7</td>
        </tr>
        <tr>
            <td>Esta Proximo a alcanzar los aprendizajes requeridos</td>
            <td>E.P.A.A.R.</td>
            <td>6-5</td>
        </tr>
        <tr>
            <td>No alcanza los aprendizajes requeridos</td>
            <td>N.A.A.R.</td>
            <td> 4 </td>
        </tr>

    </table>
</div>


<div class="col-lg-6">
    <table border="1"  cellspacing="0" cellpadding="0"  style="width: 60%; margin-left: 360px; margin-bottom:0px; 

 margin-top: -85px; text-align: center; font-size: 10px"  >
    <tr>
        <th rowspan="5">Tabla de Equivalencias del <br> Comportamiento</th>
        <th >A</th>
        <th>Muy Satisfactorio</th>
    </tr>

        <tr>
            <td>B</td>
            <td>Satisfactorio</td>  
        </tr>
        <tr>
            <td>C</td>
            <td>Poco Satisfactorio</td>
        </tr>
        <tr>
            <td>D</td>
            <td>Mejorable</td>
        </tr>
        <tr>
            <td>E</td>
            <td>Insatisfactorio</td>
        </tr>
            
    </table>

</div>
    
                
            </div>


				



</div>


						
						</div>
					
					<div class="card-footer text-muted">
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>



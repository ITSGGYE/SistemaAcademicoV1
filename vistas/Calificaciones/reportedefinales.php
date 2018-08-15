<?php session_start();?>
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
p{
	font-size: 10px;
}


	 </style>
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
		<table align="center">
				<tr>
					<td align="center"><small style="color:green; font-size: 16px;"> UNIDAD EDUCATIVA PARTICULAR "Young Living Academy"</small></td>
				</tr>
				<tr>
					<td align="center"><small style="font-size: 14px;"> INFORME ACADEMICO ESTUDIANTIL DEL PERIODO LECTIVO <?php echo $aniolectivo;?></small></td>
				</tr>
				
</table>
							
							<table>
				<tr>
					<td><small style="font-size: 14px;"> Estudiante: </small></td>
					<td> <small style="font-size: 16px; border: 1px solid black; padding: 5px; "><?php echo mb_strtoupper($nombre_alumno);?></small></td>
					<td> <small style="font-size: 14px;"> Curso: </small></td>
					<td> <small style="font-size: 16px; border: 1px solid black; padding: 5px;"><?php echo mb_strtoupper($nombre_curso);?></small></td>
				</tr>
</table>

<?php
	
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
		
		
							
		$tabla='				
							
					<table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:100%; ; padding:1px; font-size:14px;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> Materia </td> 
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
         $sumap1=($parcial1[$i]['promedio']+$parcial2[$i]['promedio']+$parcial3[$i]['promedio']);
          $sumap2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio']);
        $pq1=($pq1+$promedio_general);
        $pq2=($pq2+$promedio_general2);
        $pqf=$pqf+(($suma+$suma2)/2);

    	if($parcial1[$i]['materia']=$parcial2[$i]['materia']) {

    		$tabla.='<tr> <td>'.$parcial1[$i]['materia'].'</td>
    				<td>'.number_format($parcial1[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial2[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial3[$i]['promedio'],2).'</td> 
                    <td>'.number_format($sumap1,2).'</td>  
                    <td bgcolor="#C39BD3"><p>'.number_format($suma*0.80,2).'</td> 
                    <td>'.number_format($examen[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3"><p>'.number_format($examen[$i]['examen']*0.20,2).'</td>
                    <td>'.$promedio_general.'</td>';
                 	if(($promedio_general>=8.99) and ($promedio_general<=10))
							{
					$tabla.='<td>  D.A.R </td>';

					}
					else {
						if(($promedio_general>=7) and ($promedio_general<=8.99))
						{
					$tabla.='<td>  A.A.R</td>';
						}
					else {
						if(($promedio_general>=5) and ($promedio_general<=6.99))
						{
					$tabla.='<td>  E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R </td>';
					}
					}
					}
				 
                  $tabla.=  '<td>'.number_format($parcial4[$i]['promedio'],2).'</td>
    				<td>'.number_format($parcial5[$i]['promedio'],2).'</td>
                    <td>'.number_format($parcial6[$i]['promedio'],2).'</td> 
                  <td>'.number_format($sumap2,2).'</td>  
                    <td bgcolor="#C39BD3"><p>'.number_format($suma2*0.80,2).'</td> 
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
					$tabla.='<td>  A.A.R </td>';
						}
					else {
						if(($promedio_general2>=5) and ($promedio_general2<=6.99))
						{
					$tabla.='<td>  E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R </td>';
					}
					}
					}




                    $tabla.='
                    <td>'.($suma+$suma2).'</td> 

                    <td bgcolor="yellow">'.number_format((($suma+$suma2)/2),2).'</td> 
                    
                     <td>'.number_format((($suma+$suma2)/2),2).'</td> ';
                    
                    if(number_format((($suma+$suma2)/2),2)>=7)
                    	$tabla.='<td>APROBADO</td>';
                    	else 
                    		$tabla.='<td>PIERDE AÑO</td>';
                    	
                    
                    
                    $tabla.='</tr>';
                    
    	}
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
	<td>'.$proyecto4.'</td>
	<td>'.$proyecto5.'</td>
	<td>'.$proyecto6.'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
	</tr><tr> 
    <td width="90">PROMEDIO</td>
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
					$tabla.='<td> <p> A.A.R </td>';
						}
					else {
						if((number_format(($pq1)/$cont,2)>=5) and (number_format(($pq1)/$cont,2)<=6.99))
						{
					$tabla.='<td>  E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R </td>';
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
					$tabla.='<td>  D.A.R </td>';

					}
					else {
						if((number_format(($pq2)/$cont,2)>=7) and (number_format(($pq2)/$cont,2)<=8.99))
						{
					$tabla.='<td> A.A.R </td>';
						}
					else {
						if((number_format(($pq2)/$cont,2)>=5) and (number_format(($pq2)/$cont,2)<=6.99))
						{
					$tabla.='<td>  E.P.A.A.R </td>';
						}
					else
					{
					$tabla.= '<td>  N.A.A.R</td>';
					}
					}
					}

	$tabla.='
	
	
	<td>'.number_format(($pqf)/$cont,2).'</td>
	<td></td>
	<td>'.number_format(($pqf)/$cont,2).'</td>
    <td></td>

    </tr>';
    echo $tabla;
    $tabla2=' <div style="">
    <table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:163px; ; padding:1px; font-size:14px;">

    <tr> 
    <td width="90">COMPORTAMIENTO</td>
	<td width="25">'.$conducta1.'</td>
	<td width="25">'.$conducta2.'</td>
	<td width="23">'.$conducta3.'</td>

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

   

     $tabla2.='<div style="float:left;">
    <table border=1  cellspacing="0" cellpadding="0" color="black" style="text-align: center; width:70px; ; padding:1px; font-size:14px;
     margin-left:355px;">

    <tr> 
    
	<td width="25">'.$conducta4.'</td>
	<td width="25">'.$conducta5.'</td>
	<td width="21">'.$conducta6.'</td>

	</tr> 
	<tr> ';
	
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fj'].'</td>
		<td width="25">'.$asistencia5[$i]['fj'].'</td>
		<td width="21">'.$asistencia6[$i]['fj'].'</td>';

}

$tabla2.='
	</tr>
	<tr>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fi'].'</td>
		<td width="25">'.$asistencia5[$i]['fi'].'</td>
		<td width="21">'.$asistencia6[$i]['fi'].'</td>';
		
		}
$tabla2.='
	</tr>
	<tr> ';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla2.='<td width="25">'.$asistencia4[$i]['fi'].'</td>
		<td width="25">'.$asistencia5[$i]['fa'].'</td>
		<td width="23">'.$asistencia6[$i]['fa'].'</td>';
		
		}
	

	
$tabla2.='
	</tr>


    </table> </div> ';

    echo $tabla2;


   /*echo' <br>

   <table style="margin-left:300px;">
<tr>
	<td >Mgs. Paulina Huayamave <br> Rectora </td>



	<td width="800" style="margin-left:300px;">Gabriela Gonzáles Jama <br> Secretaria </td>
</tr>
</table>'*/


?>



</div>


						
						</div>
					
					<div class="card-footer text-muted">
						
					</div>
					
				
			</div>
		</div>
	</div>
</div>



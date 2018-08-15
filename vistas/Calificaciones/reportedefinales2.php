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
					<div class="card-header box ">
						<h2>Unidad Educativa Academy Young Living </h2>
						<h3>Notas Ingresadas </h3>
					</div>
					<div class="card-body text-left">
						
					</div>
						<div class="text-center ">  
							
							<?php 
							$sql="SELECT nombre_alumno from alumno where 
							id_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p>Alumno: <?php echo $mostrar[0];?></p>
							<?php
							}
							?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Curso: <?php echo $mostrar[0];?></p>
							<?php
							}
							?>
							<?php 
							$sql="SELECT periodo from periodos where codigo_periodo='$periodo'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								?>
								<p> Notas Periodo: <?php echo $mostrar[0];?> </p>
							<?php
							
							}
							?>
							<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$anio=$mostrar[0];
								?>
								<p> Año Lectivo: <?php echo $mostrar[1];?> </p>
							<?php
							}
							?>
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
		
		
							
		$tabla='				<div class="table-responsive">	
							
					<table class="table  table-sm table-bordered"  style="text-align: center; width:60%; margin-left: -20%;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> <p> Materia</p>  </td> 
			<td colspan="9"> <p> PRIMER QUIMESTRE </p> </td>
			<td colspan="9"> <p> SEGUNDO QUIMESTRE</p>  </td>
			<td colspan="2"> <p> ANUAL</p>  </td>
			<td rowspan="3"> <br> <br> <p> TIPO</p>  </td>	
			<td rowspan="3"> <br> <br> <p> NF </p> </td>	
			<td rowspan="3"> <br> <br> <p> OBSERVACIONES</p> </td>	
		


			
			</tr>
			<tr>
			<td colspan="5"><p> PARCIALES</p> </td>
			<td colspan="2"><p> </p> </td>
			<td rowspan="2" align="center"> <br> <p> PQ </p> </td>
			<td rowspan="2"> <br> <p> OBSERVACION</p>  </td>
			<td colspan="5"><p> PARCIALES</p> </td>
			<td colspan="2"><p> EXAMEN</p> </td>
			<td rowspan="2" align="center"> <br> <p> PQ</p>  </td>
			<td rowspan="2"> <br><p>  OBSERVACION</p>  </td>
			<td rowspan="2"> <br><p>  SUMA </p> </td>
            <td rowspan="2"> <br> <p> PR </p> </td>
			</tr>
			<tr>
    		<td> <p> 1  </p> </td>
    		<td><p>  2  </p> </td>
            <td> <p> 3  </p> </td>
            <td> <p> SUMA </p>  </td>
            <td> <p> 80 </p>  </td>
            <td> <p> EX </p>  </td>
            <td> <p> 20 </p>  </td>
            <td> <p> 1  </p> </td>
    		<td> <p> 2  </p> </td>
            <td> 3 </td>
            <td> <p> SUMA </p>  </td>
            <td><p>  80 </td>
            <td><p>  EX </p> </td>
            <td> <p> 20 </p> </td>
            
            
            
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

    	if($parcial1[$i]['materia']=$parcial2[$i]['materia']) {

    		$tabla.='<tr> <td>'.$parcial1[$i]['materia'].'</td>
    				<td><p>'.number_format($parcial1[$i]['promedio'],2).'</p></td>
    				<td><p>'.number_format($parcial2[$i]['promedio'],2).'</p></td>
                    <td><p>'.number_format($parcial3[$i]['promedio'],2).'</p></td> 
                    <td><p>'.$suma.'</td> 
                    <td bgcolor="#C39BD3"><p>'.number_format($suma*0.80,2).'</p></td> 
                    <td><p>'.number_format($examen[$i]['examen'],2).'</td> 
                    <td bgcolor="#C39BD3"><p>'.number_format($examen[$i]['examen']*0.20,2).'</p></td>
                    <td><p>'.$promedio_general.'</p></td>';
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
                    <td bgcolor="#C39BD3">'.$suma.'</td> 
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

                    <td bgcolor="yellow">'.number_format((($suma+$suma2)/2),2).'</td> 
                    <td></td>
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
	<td></td>
	<td>'.number_format(($pqf)/$cont,2).'</td>

	</tr>
	<tr> 
    <td>COMPORTAMIENTO</td>
	<td>'.$conducta1.'</td>
	<td>'.$conducta2.'</td>
	<td>'.$conducta3.'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>

	<td>'.$conducta4.'</td>
	<td>'.$conducta5.'</td>
	<td>'.$conducta6.'</td>
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

	</tr> 
	<tr> 
	<td> Faltas Justificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla.='<td>'.$asistencia1[$i]['fj'].'</td>
		<td>'.$asistencia2[$i]['fj'].'</td>
		<td>'.$asistencia3[$i]['fj'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>'.$asistencia4[$i]['fj'].'</td>
		<td>'.$asistencia5[$i]['fj'].'</td>
		<td>'.$asistencia6[$i]['fj'].'</td>';
}

$tabla.='
	</tr>
	<tr> 
	<td> Faltas Injustificada </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla.='<td>'.$asistencia1[$i]['fi'].'</td>
		<td>'.$asistencia2[$i]['fi'].'</td>
		<td>'.$asistencia3[$i]['fi'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>'.$asistencia4[$i]['fi'].'</td>
		<td>'.$asistencia5[$i]['fi'].'</td>
		<td>'.$asistencia6[$i]['fi'].'</td>';
}
$tabla.='
	</tr>
	<tr> 
	<td> Atrasos </td>';
	for ($i=0; $i <count($asistencia1) ; $i++) { 
		$tabla.='<td>'.$asistencia1[$i]['fi'].'</td>
		<td>'.$asistencia2[$i]['fa'].'</td>
		<td>'.$asistencia3[$i]['fa'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>'.$asistencia4[$i]['fa'].'</td>
		<td>'.$asistencia5[$i]['fa'].'</td>
		<td>'.$asistencia6[$i]['fa'].'</td>';
}
$tabla.='
	</tr>


    </table>';

    echo $tabla;
   echo' <br>

   <table style="margin-left:300px;">
<tr>
	<td >Mgs. Paulina Huayamave <br> Rectora </td>



	<td width="800" style="margin-left:300px;">Gabriela Gonzáles Jama <br> Secretaria </td>
</tr>
</table>'


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



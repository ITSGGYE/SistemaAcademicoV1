<?php session_start();?>
<?php 
$alumno=$_GET['alumno'];
$anio=$_GET['anio'];
$periodo=$_GET['periodo'];
$curso=$_GET['curso'];





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

	 
</head>
<body class="fondo">
<?php require_once "menu.php"; ?>
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
							
							<h2 style="color: green">UNIDAD EDUCATIVA PARTICULAR "Young Living"</h2>
 								<h3 style="color: red">REPORTE DE CALIFICACIONES QUIMESTRAL</h3>
							
							<?php 
							$sql="SELECT nombre_alumno from alumno where 
							id_alumno='$alumno'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								
							 $nombre_alumno=$mostrar[0];
							
							}
							?>
							<?php
							$sql2="SELECT t.fk_profesor, p.nombre_profesor from tutor t ,profesor p where t.fk_curso='$curso' and p.id_profesor=t.fk_profesor"; 
							$result=mysqli_query($conexion,$sql2);
 						while($ver2=mysqli_fetch_row($result)): 
 							$id_profesor=$ver2[0];
 							$nombre_profesor=$ver2[1];
 							
							 endwhile; ?>
							<?php 
							$sql="SELECT nombre_curso from curso where 
							id_curso='$curso'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								 $nombre_curso=$mostrar[0];
							}
							?>
							<?php 
							$sql="SELECT codigo_periodo, periodo from periodos where codigo_periodo='$periodo'";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								if ($mostrar[0]==1) {
									$nombre_periodo='Primer Quimestre';
																} else {
																	$nombre_periodo='Segundo Quimestre';
																}
								?>
								
							<?php
							
							}
							?>
							<?php 
							$sql="SELECT ac.fk_anio, a.anio_lectivo from curso_alumno ac , aniolectivo a where ac.estado='A' and ac.fk_anio=a.id_aniolectivo and ac.fk_curso='$curso' limit 1";
							$result=mysqli_query($conexion,$sql);
							while($mostrar=mysqli_fetch_row($result)){
								$anio=$mostrar[0];
								$aniolectivo=$mostrar[1];
								
							}
							?>
							<h5><?php echo $nombre_periodo;?></h5>
							<h5><?php echo $aniolectivo;?></h5>
							<table width="80%" style="margin-left: 10%;">
								<tr>
									<td> <h6>Alumno: <?php echo $nombre_alumno;?></h6></td>
									<td> <h6>Curso: <?php echo $nombre_curso;?></h6></td>
									<td> <h6>Tutor: <?php echo $nombre_profesor;?></h6></td>
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

	$sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=1 and n.fk_curso='$curso' and m.id_materia=n.fk_materia  and  n.fk_anio='$anio'   order by m.nombre_materia ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial1[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=2 and n.fk_curso='$curso' and m.id_materia=n.fk_materia  and n.fk_anio='$anio'  order by m.nombre_materia ";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial2[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

   
     $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=3 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio'  order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $parcial3[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

    /*****************Notas parciales del segundo quimestre *******/

    
	$sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=4 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio' order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial4[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=5 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio' order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial5[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

   
     $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno='$alumno' and n.fk_parcial=6 and n.fk_curso='$curso' and m.id_materia=n.fk_materia and n.fk_anio='$anio' order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $parcial6[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }

    /*************************************************************/


     $sql="SELECT m.nombre_materia, e.nota from materia m , notas_examen e where e.fk_alumno='$alumno' and e.fk_examen=1 and e.fk_curso='$curso' and m.id_materia=e.fk_materia order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen[]=array('materia' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }

    /********************************************************************/

     $sql="SELECT m.nombre_materia, e.nota from materia m , notas_examen e where e.fk_alumno='$alumno' and e.fk_examen=2  and e.fk_curso='$curso' and m.id_materia=e.fk_materia and e.fk_anio='$anio' order by m.nombre_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
        $examen2[]=array('materia' =>$mostrar[0] , 'examen'=>$mostrar[1] );
    }
		
		if($periodo==1){ 
							
		$tabla='				<div class="table-responsive">	
							
					<table class="table  table-sm table-bordered"  style="text-align: center; width:90%; margin-left: 5%;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> <b> Materia </b> </td> 
			<td colspan="9">  <b>PRIMER QUIMESTRE</b>  </td>
			
			</tr>
			<tr>
			<td colspan="5"> <b>PARCIALES</b> </td>
			<td colspan="2"> <b>EXAMEN</b> </td>
			<td rowspan="2" align="center"> <br> <b> PQ </b> </td>
			<td rowspan="2"> <br> <b> OBSERVACION </b> </td>
			</tr>
			<tr>
    		<td> <b> 1 </b> </td>
    		<td> <b> 2 </b> </td>
            <td> <b> 3 </td>
            <td> <b> SUMA </b></td>
            <td> <b> 80 </b> </td>
            <td> <b> EX </b> </td>
            <td> <b> 20 </b> </td>
           
            
            
            
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
				$tabla.='</tr>
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
		';
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
		';
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
		';
}
$tabla.='
	</tr>
    </table>';

    echo $tabla;

	} else {
		if($periodo==2)
		{
			$tabla='				<div class="table-responsive">	
							
					<table class="table  table-sm table-bordered"  style="text-align: center; width:90%; margin-left: 5%;"> 
						<tr>
							
			<td align="center" rowspan="3" > <br> <br> <b> Materia </b> </td> 
			<td colspan="9">  <b>SEGUNDO QUIMESTRE</b>  </td>
			
			</tr>
			<tr>
			<td colspan="5"> <b>PARCIALES</b> </td>
			<td colspan="2"> <b>EXAMEN</b> </td>
			<td rowspan="2" align="center"> <br> <b> PQ </b> </td>
			<td rowspan="2"> <br> <b> OBSERVACION </b> </td>
			</tr>
			<tr>
    		<td> <b> 1 </b> </td>
    		<td> <b> 2 </b> </td>
            <td> <b> 3 </td>
            <td> <b> SUMA </b></td>
            <td> <b> 80 </b> </td>
            <td> <b> EX </b> </td>
            <td> <b> 20 </b> </td>
            
            
            
    		</tr> ';
		$pq1=0;
		$pq2=0;					
		$pqf=0;
		for ($i=0; $i <count($parcial4) ; $i++) { 
        $suma2=0;
        $suma2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio'])/3;
        $suma2=number_format($suma2,2);
          $sumap2=($parcial4[$i]['promedio']+$parcial5[$i]['promedio']+$parcial6[$i]['promedio']);
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
    <tr> <tr> 
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
				$tabla.='</tr>
	<tr> 
    <td>COMPORTAMIENTO</td>
	<td>'.$conducta4.'</td>
	<td>'.$conducta5.'</td>
	<td>'.$conducta6.'</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr> 
	<tr> 
	<td> Faltas Justificada </td>';
	for ($i=0; $i <count($asistencia4) ; $i++) { 
		$tabla.='<td>'.$asistencia4[$i]['fj'].'</td>
		<td>'.$asistencia5[$i]['fj'].'</td>
		<td>'.$asistencia6[$i]['fj'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		';
}

$tabla.='
	</tr>
	<tr> 
	<td> Faltas Injustificada </td>';
	for ($i=0; $i <count($asistencia4) ; $i++) { 
		$tabla.='<td>'.$asistencia4[$i]['fi'].'</td>
		<td>'.$asistencia5[$i]['fi'].'</td>
		<td>'.$asistencia6[$i]['fi'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		';
}
$tabla.='
	</tr>
	<tr> 
	<td> Atrasos </td>';
	for ($i=0; $i <count($asistencia4) ; $i++) { 
		$tabla.='<td>'.$asistencia4[$i]['fi'].'</td>
		<td>'.$asistencia5[$i]['fa'].'</td>
		<td>'.$asistencia6[$i]['fa'].'</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		';
}
$tabla.='
	</tr>
    </table>';

    echo $tabla;

		}
	}			
				 
                 




?>

<div class="row">
<div class="col-lg-5">
	<table class="table table-bordered table-sm" style="margin-left: 20%">
		<th><p>ESCALA CUALITATIVA</p></th>
		<th><p>SIGLAS</p></th>
		<th><p>Escala Cuantitativa</p></th>
		
		<tr>
			<td><p>Domina los aprendizajes requeridos</p>	</td>
			<td><p>D.A.R.	</p>	</td>
			<td><p>10-9</p></td>
		</tr>
		<tr>
			<td><p>Alcanza los aprendizajes requeridos</p>	</td>
			<td><p>A.A.R.	</p>	</td>
			<td><p>8-7</p></td>
		</tr>
		<tr>
			<td><p>Esta Proximo a alcanzar los aprendizajes requeridos</p>		</td>
			<td><p>E.P.A.A.R.	</p>	</td>
			<td><p>6-5</p></td>
		</tr>
		<tr>
			<td><p>No alcanza los aprendizajes requeridos	</p></td>
			<td><p>N.A.A.R.		</p></td>
			<td><p><=4</p></td>
		</tr>

	</table>
	
</div>

<div class="col-lg-5">
	<table class="table table-bordered table-sm" style="margin-left: 20%">
		<th rowspan="5"><br> <br> Tabla de <br> Equivalencias <br> del Comportamiento</th>
		<th>A</th>
		<th>Muy Satisfactorio</th>
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
			<tr>
		</tr>
		<tr>
		</tr>
	</table>
	
</div>
</div>















     
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
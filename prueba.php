<?php require_once "clases/conexion.php"; 
    $c= new conectar();
    $conexion=$c->conexion();
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno=37 and n.fk_parcial=1 and n.fk_curso=2 and m.id_materia=n.fk_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial1[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    for ($i=0; $i <count($parcial1) ; $i++) { 
    	echo "<br>".$parcial1[$i]['materia']." ". $parcial1[$i]['promedio'];
    	# code...
    }
    
    $sql="SELECT m.nombre_materia, ( (n.nota+n.nota2+n.nota3+n.nota4+n.nota5)/5 ) as promedio from materia m , notas n where n.fk_alumno=37 and n.fk_parcial=3 and n.fk_curso=2 and m.id_materia=n.fk_materia";

    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_row($result)) {
    	$parcial2[]=array('materia' =>$mostrar[0] , 'promedio'=>$mostrar[1] );
    }
    for ($i=0; $i <count($parcial2) ; $i++) { 
    	echo "<br>".$parcial2[$i]['materia']." ". $parcial2[$i]['promedio'];
    	# code...
    }

    $tabla=' <table> 

    		<tr> <td> Materia </td> 
    		<td> Primer Parcial </td>
    		<td> Segundo Parcial </td>
    		</tr> ';

    for ($i=0; $i <count($parcial2) ; $i++) { 
    	
    	if($parcial1[$i]['materia']=$parcial2[$i]['materia']) {
    		$tabla.='<tr> <td>'.$parcial1[$i]['materia'].'</td>
    				<td>'.number_format($parcial1[$i]['promedio'],2).'</td>
    				<td>'.$parcial2[$i]['promedio'].'</td> </tr>';
    	}
    }
    $tabla.='</table>';

    echo $tabla;


    ?>


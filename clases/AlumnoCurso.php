<?php 

	class alumnocurso{
		public function agregarAlumnoCurso($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT into   curso_alumno (
								fk_alumno,  
								fk_curso,
								fk_seccion, 
								fk_anio, 
								estado 
								)
					values (	'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]'
								
					)";
		return mysqli_query($conexion,$sql);
		}

		


		public function obtenDatosAlumnoCurso($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT        id_curso_alumno,
								fk_alumno,  
								fk_curso,
								fk_seccion, 
								fk_anio, 
								estado  from curso_alumno where id_curso_alumno='$idalumno' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'alumnocurso' => $ver[0],
				'alumno' => $ver[1],
				'curso' => $ver[2],
				'seccion' => $ver[3],
				'anio' => $ver[4],
				'estado' => $ver[5]
				
				);
			return $datos;
		}

		public function actualizaAlumnoCurso($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE curso_alumno set fk_alumno='$datos[1]', fk_curso='$datos[2]',  fk_seccion='$datos[3]',  fk_anio='$datos[4]', 
			 estado='$datos[5]' where id_curso_alumno='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminarAlumnoCurso($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from curso_alumno where id_curso_alumno='$idalumno'";
			return mysqli_query($conexion,$sql);
		}
	

	
	}
?>
 
<?php 

	class alumno{
		public function agregarAlumno($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$fecha=date('Y-m-d');
			$sql="INSERT into   alumno (id_alumno,
								institucion_Alumno,
								nombre_Alumno,
								sexo_Alumno,
								cedula_Alumno,
								ciudad_Alumno,
								provincia_Alumno,
								telefono_Alumno,
								celular_Alumno,
								direccion_Alumno,
								fechanac_Alumno,
								fecha_registro)
					values (	'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]',
								'$datos[9]',
								'$datos[10]',
								'$fecha'
					)";
		return mysqli_query($conexion,$sql);
		}

		public function agregardatosrepresentante($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			
			$sql="INSERT into  datos_representante(fk_alumno, 
nombre_representante, 
direccion_representante,
ocupacion_representante, 
lugar_trabajo_representante, 
cedula_representante, 
telefono_representante, 
email_representante, 
relacion_representante)
					
					values (	'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]')";
		return mysqli_query($conexion,$sql);
		}

		public function agregardatosmadre($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			
			$sql="INSERT into  datos_madre(fk_alumno, 
								nombre_madre, cedula_madre,ocupacion_madre, instruccion_madre,telefono_madre, correo_madre,direccion_madre, lugartra_madre)
					
					values (	'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]')";
		return mysqli_query($conexion,$sql);
		}

	public function agregardatospadre($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			
			$sql="INSERT into  datos_padre(fk_alumno, 
								nombre_padre, cedula_padre,ocupacion_padre, instruccion_padre,telefono_padre, correo_padre,direccion_padre,lugartra_padre)
					
					values (	'$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',
								'$datos[8]')";
		return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT 	a.id_alumno,
							a.institucion_Alumno,
							a.nombre_Alumno,
							a.sexo_Alumno,
							a.cedula_Alumno,
							a.ciudad_Alumno,
							a.provincia_Alumno,
							a.telefono_Alumno,
							a.celular_Alumno,
							a.direccion_Alumno, 
							a.fechanac_Alumno,
							r.nombre_representante, 
							r.direccion_representante,
							r.ocupacion_representante, 
							r.lugar_trabajo_representante, 
							r.cedula_representante, 
							r.telefono_representante, 
							r.email_representante, 
							r.relacion_representante
							FROM alumno a , datos_representante r  where  a.id_alumno='$idalumno' 
							and r.fk_alumno='$idalumno' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idalumno' => $ver[0],
				'institucion' => $ver[1],
				'nombre' => $ver[2],
				'sexo' => $ver[3],
				'cedula' => $ver[4],
				'ciudad' => $ver[5],
				'provincia' => $ver[6],
				'telefono' => $ver[7],
				'celular' => $ver[8],
				'direccion' => $ver[9],
				'fecha' => $ver[10],
				'nombrer' => $ver[11],
				'direccionr' => $ver[12],
				'ocupacion' => $ver[13],
				'lugar' => $ver[14],
				'cedularp' => $ver[15],
				'telefonor' => $ver[16],
				'email' => $ver[17],
				'familiar' => $ver[18]
				);
			return $datos;
		}

		public function obtenDatosFamiliares($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT 
							
							m.fk_alumno, 
							m.nombre_madre, 
							m.cedula_madre, 
							m.ocupacion_madre, 
							m.instruccion_madre, 
							m.telefono_madre, 
							m.correo_madre,
							m.direccion_madre,
							m.lugartra_madre,
							p.nombre_padre, 
							p.cedula_padre, 
							p.ocupacion_padre, 
							p.instruccion_padre, 
							p.telefono_padre, 
							p.correo_padre,
							p.direccion_padre,
							p.lugartra_padre,
							a.nombre_Alumno
						FROM alumno a, datos_madre m , datos_padre p  where  a.id_alumno='$idalumno' and m.fk_alumno='$idalumno' 
							and p.fk_alumno='$idalumno' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'alumno' => $ver[0],
				'madre' => $ver[1],
				'cedula' => $ver[2],
				'ocupacion' => $ver[3],
				'instruccion' => $ver[4],
				'telefono' => $ver[5],
				'email' => $ver[6],
				'direccion' => $ver[7],
				'lugar' => $ver[8],
				'padre' => $ver[9],
				'cedula2' => $ver[10],
				'ocupacion2' => $ver[11],
				'instruccion2' => $ver[12],
				'telefono2' => $ver[13],
				'email2' => $ver[14],
				'direccion2' => $ver[15],
				'lugar2' => $ver[16],
				'estudiante' => $ver[17]


				);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE alumno a , datos_representante r set a.institucion_Alumno='$datos[1]',
								a.nombre_Alumno='$datos[2]',
								a.sexo_Alumno='$datos[3]',
								a.cedula_Alumno='$datos[4]',
								a.ciudad_Alumno='$datos[5]',
								a.provincia_Alumno='$datos[6]',
								a.telefono_Alumno='$datos[7]',
								a.celular_Alumno='$datos[8]',
								a.direccion_Alumno='$datos[9]',
								a.fechanac_Alumno='$datos[10]',
								r.nombre_representante='$datos[11]', 
								r.direccion_representante='$datos[12]',
								r.ocupacion_representante='$datos[13]', 
								r.lugar_trabajo_representante='$datos[14]', 
								r.cedula_representante='$datos[15]', 
								r.telefono_representante='$datos[16]', 
								r.email_representante='$datos[17]', 
								r.relacion_representante='$datos[18]'

								where a.id_alumno='$datos[0]' and r.fk_alumno='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}

public function actualizarDatosFamiliares($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE datos_madre m , datos_padre p set 
							
							m.nombre_madre='$datos[1]', 
							m.cedula_madre='$datos[2]', 
							m.ocupacion_madre='$datos[3]', 
							m.instruccion_madre='$datos[4]', 
							m.telefono_madre='$datos[5]', 
							m.correo_madre='$datos[6]',
							m.direccion_madre='$datos[7]',
							m.lugartra_madre='$datos[8]',
							p.nombre_padre='$datos[9]', 
							p.cedula_padre='$datos[10]', 
							p.ocupacion_padre='$datos[11]', 
							p.instruccion_padre='$datos[12]', 
							p.telefono_padre='$datos[13]', 
							p.correo_padre='$datos[14]',
							p.direccion_padre='$datos[15]',
							p.lugartra_padre='$datos[16]'
							
								where m.fk_alumno='$datos[0]' and p.fk_alumno='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}


		public function eliminar($idalumno){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from alumno where id_alumno='$idalumno'";
			return mysqli_query($conexion,$sql);
		}
	

	
	}
?>
 
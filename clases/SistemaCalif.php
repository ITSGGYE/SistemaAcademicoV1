<?php 

	class sistemacalif{

		public function agregarsistcalif($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into sistemaCalificaciones(nombre_sistcalif, fk_seccion, descripcion_sistcalif, cant_perido_sistcalif, 
			cant_parcial_sistcalif, nota_promocion_sistcalif, nota_rojo_sistcalif, estado_sistcalif)
						values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')";
								
								
			return mysqli_query($conexion,$sql);
		}
		public function obtenDatossistcalif($idsistema){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT 
			s.id_sistcalif, 
			s.fk_seccion, 
			s.nombre_sistcalif, 
			s.descripcion_sistcalif, 
			s.cant_perido_sistcalif, 
			s.cant_parcial_sistcalif, 
			s.nota_promocion_sistcalif, 
			s.nota_rojo_sistcalif, 
			s.estado_sistcalif from sistemaCalificaciones s inner join seccion e on s.fk_seccion = e.id_seccion  where  s.id_sistcalif='$idsistema' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idsistema' => $ver[0],
				'seccion' => $ver[1],
				'nombre' => $ver[2],
				'descripcion' => $ver[3],
				'periodo' => $ver[4],
				'parciales' => $ver[5],
				'nota' => $ver[6],
				'nota2' => $ver[7],
				'estado' => $ver[8]				);
			return $datos;
		}

		public function actualizasistcalif($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE sistemaCalificaciones set  
			fk_seccion='$datos[1]', 
			nombre_sistcalif='$datos[2]', 
			descripcion_sistcalif='$datos[3]', 
			cant_perido_sistcalif='$datos[4]', 
			cant_parcial_sistcalif='$datos[5]', 
			nota_promocion_sistcalif='$datos[6]', 
			nota_rojo_sistcalif='$datos[7]', 
			estado_sistcalif='$datos[8]'where id_sistcalif='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminasistemaCalif($idsistema){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from sistemaCalificaciones
					where id_sistcalif='$idsistema'";
			return mysqli_query($conexion,$sql);
		}


	}

 ?>
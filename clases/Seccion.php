<?php 

	class Secciones{

		public function agregaSeccion($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into seccion(descripcion)
						values ('$datos[0]')";
								
								
			return mysqli_query($conexion,$sql);
		}

		public function actualizaSeccion($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE seccion set descripcion='$datos[1]'
								where id_seccion='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminaSeccion($idseccion){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from seccion
					where id_seccion='$idseccion'";
			return mysqli_query($conexion,$sql);
		}


	}

 ?>
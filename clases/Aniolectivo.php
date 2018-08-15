<?php 

	class aniolectivo{

		public function agregaraniolectivo($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into aniolectivo (fk_seccion, fk_sistcalif, anio_lectivo, estado_aniolectivo)
						values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
								
								
			return mysqli_query($conexion,$sql);
		}
		public function obtenDatosaniolectivo($idanio){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT 
			a.id_aniolectivo,	
			a.anio_lectivo,				
			a.estado_aniolectivo, a.fk_seccion, a.fk_sistcalif		
 			from  aniolectivo a, sistemaCalificaciones c, seccion s where  a.id_aniolectivo='$idanio' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'idanio' => $ver[0],
				'anio' => $ver[1],
				'estado' => $ver[2],
				'seccion' => $ver[3],
				'sistema' => $ver[4]
							);
			return $datos;
		}

		public function actualizaaniolectivo($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE aniolectivo set  
			fk_seccion='$datos[1]', fk_sistcalif=$datos[2], anio_lectivo='$datos[3]', estado_aniolectivo='$datos[4]' where id_aniolectivo='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminaaniolectivo($idanio){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from aniolectivo
					where id_aniolectivo='$idanio'";
			return mysqli_query($conexion,$sql);
		}


	}

 ?>
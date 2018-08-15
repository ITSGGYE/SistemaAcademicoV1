<?php 

	class periodo{

		public function agregarperiodo($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="INSERT into periodos (periodo, estado) values ('$datos[0]','$datos[1]')";
			return mysqli_query($conexion,$sql);
		}
		public function agregarparcial($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="INSERT into parciales (parcial, fk_periodo, estado) values ('$datos[0]','$datos[1]','$datos[2]')";
			return mysqli_query($conexion,$sql);
		}
		public function agregarexamen($datos){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="INSERT into examen (examen, fk_periodo, estado) values ('$datos[0]','$datos[1]','$datos[2]')";
			return mysqli_query($conexion,$sql);
		}
		public function obtenDatosperiodo($id){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT codigo_periodo, periodo, estado from periodos  where  codigo_periodo='$id' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id' => $ver[0],
				'periodo' => $ver[1],
				'estado' => $ver[2]				);
			return $datos;
		}
		public function obtenDatosparcial($id){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT codigo_parcial, parcial, fk_periodo, estado from parciales  where  codigo_parcial='$id' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id' => $ver[0],
				'parcial'=>$ver[1],
				'periodo' => $ver[2],
				'estado' => $ver[3]				);
			return $datos;
		}
		public function obtenDatosexamen($id){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="SELECT id_examen, examen, fk_periodo, estado from examen  where  id_examen='$id' ";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id' => $ver[0],
				'examen'=>$ver[1],
				'periodo' => $ver[2],
				'estado' => $ver[3]				);
			return $datos;
		}


		public function actualizaperiodo($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE periodos set  
			periodo='$datos[1]', 
			estado='$datos[2]'
			where codigo_periodo='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function actualizaparcial($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE parciales set  
			parcial='$datos[1]', 
			fk_periodo='$datos[2]',
			estado='$datos[3]'
			where codigo_parcial='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}
		public function actualizaexamen($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE examen set  
			examen='$datos[1]', 
			fk_periodo='$datos[2]',
			estado='$datos[3]'
			where id_examen='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}




		

	}

 ?>
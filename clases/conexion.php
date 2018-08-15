

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('',
										'',
										'',
										'');
			mysqli_query($conexion,"SET NAMES 'utf8'");
			

			return $conexion;
		}
	}


 ?>
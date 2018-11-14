<?php 

class Funciones {
	public function conectar() {
		$host = "sql110.epizy.com";
		$user = "epiz_22932719";
		$pass = "ellO55QT";
		$db = "epiz_22932719_classhub";

		$conexion = new mysqli($host, $user, $pass, $db);



		if ($conexion-> connect_errno > 0) {
			echo "ERROR:".$conexion->error."<br>";
		} else {
			
			return $conexion;
		}
	}

	public function desconectar($conexion){
		mysql_close($conexion);
	}
}

 ?>
<?php

require_once "conexion.php";

class ModeloFormularios{

	/*------------------------------------------
	REGISTRO
	------------------------------------------*/

	static public function mdlRegistro($tabla, $datos){
		#stmt=statement=declaracion
		#prepare()prepara una sentencia SQL para ser ejecutada por el método
		$stmt = Conexion:: conectar()-> prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre,:email,:password)");

		#bindParam() Vincula variables de PHP
		$stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password",$datos["password"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		

		$stmt->close();

		$stmt = null; #refuerza la seguridad 
		}
	}	

		/*-------------------------------------------------------
		Seleccionar REGISTROS
		--------------------------------------------------------*/

	static public function mdlSeleccionarRegistros($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt->execute();

		return $stmt ->fetchAll(); #sin all seria solo un registro

		$stmt->close();
		$stmt = null;

	}

}



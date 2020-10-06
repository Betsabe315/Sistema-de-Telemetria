<?php

class ControladorFormularios{

	/*-------------------------------------------------------
	REGISTROS
	--------------------------------------------------------*/

	public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			echo $_POST["registroNombre"];

		}
	}
}



?>
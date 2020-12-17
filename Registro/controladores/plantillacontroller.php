  
<?php
#La pagina es llamada a traves del controlador  y la envia al index
class ControladorPlantilla{
	#Llamada a la plantila
	#-------------------------------------------------------------
	public function ctrTraerPlantilla(){

		include "vistas/template.php"; #include es como echo pero muestra el archivo

	}

}

?>
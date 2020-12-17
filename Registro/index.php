<?php

#EL INDEX:En el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas accionesque el usuario envie al controlador.
#require() establece que el código del archivo invocado es requerido, es decir, obligatorio parael funcionamiento del programa. Por ello, si el archivo especificado en la función requre() no se encuentra saltará un error "PHP Fatal error" y el programa PHP se detendrá.
#La versión require_once() funciona de la misma manera que su respectivo, salvo que al utilizar la version_once, se impide la carga de un mismo archivo más de una vez.
#Si requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

require_once "controladores/plantillacontroller.php"; #solo lo requiero una vez 
require_once "controladores/formularioscontroller.php";
require_once "modelos/formularios.modelo.php";
#Controlador envia a index a traves del MvcController
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
#Plantilla incluye la vista del template





?>
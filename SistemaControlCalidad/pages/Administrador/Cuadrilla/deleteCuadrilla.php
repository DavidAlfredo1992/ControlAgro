<?php
	
	#obtengo la informacion del usuario seleccionado...
	$command = "python ../../../../ControlDeCalidad/Modules/CCCuadrillas/handlerCuadrillas.py 1";
	echo $command;
	$outputArray = array();
	exec($command, $outputArray);#ejecucion del comando
	
	$arrayInformation = explode(";", $outputArray[$_GET['idArray']-1]);#se obtiene nombre de usuario, correo y tipo
	$cuadrilla = str_replace(" ", "-", $arrayInformation[0]);
	$jefeCuadrilla = str_replace(" ", "-", $arrayInformation[1]);
	
	#execute the remove user...
	$command = "python ../../../../ControlDeCalidad/Modules/CCCuadrillas/handlerCuadrillas.py 5 ".$cuadrilla." ".$jefeCuadrilla;
	$outputArray = array();
	exec($command, $outputArray);#ejecucion del comando
	echo $command;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily");
    header("Location: Cuadrilla.php");
?>

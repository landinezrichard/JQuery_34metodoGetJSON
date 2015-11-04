<?php
	$mnsjrespuesta=array(
		"n" => empty($_GET["nombre"])?"Sin Nombre":$_GET["nombre"],
		"c" => empty($_GET["email"])?"Sin Correo":$_GET["email"],
		"m" => empty($_GET["mensaje"])?"Sin Mensaje":$_GET["mensaje"]
	);
	
	echo json_encode($mnsjrespuesta);
?>
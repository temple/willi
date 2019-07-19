<?php

class router{
//Creamos la clase router
function getController(string $url){
//La función getController recibe como parámetro un string

if ($ruta == '/home'){
	return 'home/controller/homeController.php';
	//Si el contenido del parámetro es igual a "/home", devuelve la ruta donde está homeController.
}else{
	return 'error/controller/errorController.php';
		//Si el contenido del parámetro es diferente a "/home", devuelve la ruta donde está errorController.
}

function getAction (string $url){
	return 'indexAction';
}
//La función getAction recibe como parámetro un string llamado url y devuelve un string.
}
}
?>


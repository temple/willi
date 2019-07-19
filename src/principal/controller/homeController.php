<?php

//Es el controlador que responde la petición HTTP con una respuesta en HTML

//Se crea un objeto request
$request = new Request();
$request = $request->getPathInfo();
//En ruta se guarda l

//$Response->send();
function indexAction($request){

if ($request == '/home'){
	$Response = new BinaryFileResponse(__DIR__.'/principal/view/home.html');
}


indexAction($Response);
?>

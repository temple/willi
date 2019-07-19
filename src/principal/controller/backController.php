<?php

//Es el controlador que responde la petición HTTP con una respuesta en HTML

//Se crea un objeto request
$request = new Request();
$ruta = $request->getPathInfo();
//En ruta se guarda l

//$Response->send();
function indexAction($ruta){

if ($ruta == '/home'){
	$Response = new BinaryFileResponse(__DIR__.'/principal/view/home.html');
}else{
	$Response = new BinaryFileResponse(__DIR__.'/principal/view/error.html');
}

}

indexAction($Response);
?>

<?php
ini_set('display_errors', true);
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing;


$request = Request::createFromGlobals();
// $request recoge info del servidor en relación a la superglobal $_REQUEST
// https://www.php.net/manual/en/reserved.variables.request.php

//$ruta = $_SERVER["REQUEST_URI"];
$ruta = $request->getPathInfo();
// Antes obteníamos la ruta así... el componente de enrutamiento podría
// usar esta ruta

// Aquí se determina la vista responsable de atender la petición ($request)
if ($ruta == '/home'){

	$Response = new BinaryFileResponse(__DIR__.'/view/home.html');

}else{
	$Response = new BinaryFileResponse(__DIR__.'/view/error.html');

}
// el if..else ya es obsoleto según el enunciado.
// esto ya no lo hace front.php

//TODO: Necesitamos un componente de enrutamiento que determine el controlador
//      responsable de atender la petición ($request)

//TODO: Este componente de enrutamiento también determina la acción
//      a invocar en dicho controlador


//TODO: Hay que responder a la petición ($request)
//      La respuesta se hace delegando en otro controlador:
//      el controlador responsable de atender la petición ($request)
//      Necesitamos disponer de este controlador!!
//      La delegación funciona ejecutando una acción de este controllador


$Response->send();
// esta línea es antiguas, hay que cambiar esto y ponerlo al día
// el front ya no delega en una vista, sinó que delega en un controllador
// todo el tema del envio de la respuesta

?>

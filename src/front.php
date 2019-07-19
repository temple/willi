<?php
ini_set('display_errors', true);
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing;


$request = Request::createFromGlobals();


//$ruta = $_SERVER["REQUEST_URI"];
$ruta = $request->getPathInfo();



if ($ruta == '/home'){

	$Response = new BinaryFileResponse(__DIR__.'/view/home.html');

}else{
	$Response = new BinaryFileResponse(__DIR__.'/view/error.html');

}

$Response->send();

?>
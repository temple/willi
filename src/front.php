<?php
ini_set('display_errors', true);

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
//use Symfony\Component\Routing;
$request = new Request();
//Se crea un objeto request
$request = Request::createFromGlobals();
//$ruta = $_SERVER["REQUEST_URI"];
//Se crea un objeto request usando globals (la informacion del servidor)


$ruta = $request ->getPathInfo()
$url = '/home';
include ('router.php');
indexAction($request);

$router = new router();
$back_controller = $ruter->getController($url);
//componente de enrutamiento
//Todo: crear un componente de enrutamiento
//controller delegado
//Todo: conseguir el valor de $back_controller a partir del $router
$action = 'indexAction';

//$action = getAction($url);
//include($back_controller);

//$controller = new $class();
//var_dump($controller);
//exit;
?>

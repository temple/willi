<?php

$ruta = $request ->getPathInfo();

if ($ruta == '/home'){
	$Response = new BinaryFileResponse(__DIR__.'/view/home.html');
}else{
	$Response = new BinaryFileResponse(__DIR__.'/view/error.html');}
$Response->send();
?>

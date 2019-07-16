<?php
$ruta = $_SERVER['REQUEST_URI'];
if ($ruta ==.'/home'){
	include '/src/view/home.html';
}else {
	include '/src/view/error.html';
}
?>

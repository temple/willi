<?php
ini_set('display_errors', true);
require_once _DIR_.'/../vendor/autoload.php';


//$ruta = $_SERVER["REQUEST_URI"];
switch ($ruta){
	case "/home":
		include "view/home.html";
		break;
	case "/empresa":
		include "view/empresa.html";
		break;
	case "/biblioteca":
		include "view/biblioteca.html";
		break;	
	case "/subastas":
		include "view/subastas.html";
		break;
	case "/blog":
		include "view/blog.html";
		break;	
	case "/shop":
		include "view/shop.html";
		break;
	case "/signup":
		include "view/signup.html";
		break;	
	case "/login":
		include "view/login.html";
		break;		
	case "/tazas":
		include "view/tazas.html";
		break;
	case "/platos":
		include "view/platos.html";
		break;
	case "/legal":
		include "view/legal.html";
		break;
	case "/cookies":
		include "view/cookies.html";
		break;
	case "/faqs":
		include "view/faqs.html";
		break;
	default:
		include "view/error.html";
		break;
}
?>

<?php
class errorController{
function indexAction($request){

$response = new BinaryFileResponse(__DIR__.'/../view/error.html');
$response->send();

}
}


?>

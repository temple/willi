<?php
<?php
class homeController {

function indexAction($request){

$response = new BinaryFileResponse(__DIR__.'/../view/home.html');
$response->send();

}
}


?>

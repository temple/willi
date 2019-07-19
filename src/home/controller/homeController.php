<?php
<?php
class home {

function indexAction($request){

$response = new BinaryFileResponse(__DIR__.'/../view/home.html');
$response->send();

}
}


?>

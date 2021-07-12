<?php
require 'app/autoloader.php'; 
Autoloader::register(); 

if (isset($_GET['p'])){
$p = $_GET['p'];

}else{
    $p ='home';
}

$db = new database('biliotheque')
ob_start();

if ($p === 'home'){
require './view/home.php';

}elseif($p === 'rayon'){
    require './view/rayon.php';

}elseif($p === 'empreint'){
    require './view/empreint.php';

}elseif($p === 'cataloque'){
    require './view/catalogue.php';

}elseif($p === 'abonnes'){
    require './view/abonnes.php';
}









$content = ob_get_clean();
require './view/template/template.php';
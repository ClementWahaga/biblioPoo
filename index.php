<?php



if (isset($_GET['p'])){
$p = $_GET['p'];

}else{
    $p ='home';
}



if ($p === 'home'){
require '../view/home.php';

}
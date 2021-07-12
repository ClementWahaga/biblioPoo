<?php

require '../helper/db.php';

if (isset($_GET['p'])){
$p = $_GET['p'];

}else{
    $p ='home';
}


ob_start();

if ($p === 'home'){
require '../view/home.php';

}





$content = ob_get_clean();
require '../template/template.php';
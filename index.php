<?php
require 'db.php';


$db = pdo_connect_mysql();
$req= $db->query('SELECT * FROM abonnes');
$req->execute();
while ($perso = $req ->fetch(PDO::FETCH_ASSOC)){
     echo
    $perso['id'].'<br>'.
    $perso['lastName'].' <br>'.
    $perso['firstName'].' a emprunté <br>'.
    $perso['NblivreEmprunte'].' livre <br>'
    ;

}



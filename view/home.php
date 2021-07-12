<?php
$user='root';
$pass="";
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



?>
<pre><?=var_export ($pdo);?></pre>
<h1>je suis la home page</h1>









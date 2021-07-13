<?php

class database {
  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;
  
  public function __construct($db_name='bibliotheque', $db_user='root', $db_pass = '', $db_host = 'localhost'){

    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_host;

  }

  private function getPdo(){
    if ($this -> pdo === null){
      $user='root';
      $pass="";
      $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $this->pdo =$pdo;
    }
    return $this->pdo;

  }

  public function q ($statement) {
    $req = $this -> getPdo()->query($statement);
    $result = $req -> fetchAll(PDO::FETCH_OBJ);
    return $result ;}
   

  

}
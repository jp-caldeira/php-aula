<?php

$host = "mysql:host=localhost;dbname=banco1;port=3306";//nome diferente no dbname//
$user = "root";
$pass = "";


//$db = new PDO($host, $user, $pass);

//------------try & catch----------------------

try {
  $db = new PDO($host, $user, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conexão feita com sucesso!";
} catch (PDOException $e) {
    echo "Não foi possível realizar a conexão com o banco de dados :(<br>";
    echo $e->getMessage();
    exit;

}

//var_dump($db);

 ?>

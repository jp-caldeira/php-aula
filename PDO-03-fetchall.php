<?php

include 'PDO-01-index.php';

echo "<br><br>";

$query = $db->prepare("SELECT * FROM ator");

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

echo "<br><br><h3>Tabela atores</h3>";

foreach ($result as $key => $value){
  echo "<br>Nome: ".$value['primeiro_nome']."<br>";
  echo "Sobrenome: ".$value['ultimo_nome']."<br>";
  echo "ID: ".$value['ator_id']."<br>";

}
 ?>

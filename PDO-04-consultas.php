<?php

include 'PDO-01-index.php';

$id = $_POST['id'];

$query = $db->prepare("SELECT * FROM ator WHERE ator_id=:id");
$query->execute(["id"=>$id]);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $key => $value) {
  echo $value['primeiro_nome']."<br>";
}

 ?>

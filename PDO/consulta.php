<?php

require 'connect.php';

$id = $_POST['id'];

$query = $db->prepare("SELECT * FROM usuarios WHERE ID=:id");

$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute(["id"=>$id]);

$result = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $key => $value){
      echo "<br><br>Nome: ".$value['nome'];
    echo  "<br>Email: ".$value['Email'];
}



 ?>

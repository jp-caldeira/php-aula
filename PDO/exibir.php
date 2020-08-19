<?php

require 'connect.php';

$query = $db->prepare("SELECT * FROM usuarios");
$query->execute();


$result = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT * FROM usuarios");
$query->execute();
$result2 = $query->rowCount();
var_dump($result2);



// while($result2){
//     var_dump($result2);
//     $result2 = $query->fetch(PDO::FETCH_ASSOC);
// }


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
  </head>
  <body>
    <h1>Listas dos usuários</h1>
    <table>
    <thead>
      <th>Nome</th>
      <th>Email</th>
    </thead>
    <?php foreach ($result as $key => $value): ?>
      <tr>
        <td><?=$value['nome']?></td>
        <td><?=$value['Email']?></td>
      </tr>
    <?php endforeach ?>
    </table>
  </body>
</html>

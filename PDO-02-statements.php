<?php

include "PDO-01-index.php";//aqui ele vai usar o outro arquivo para estabelecer a conexão

$query = $db->prepare("INSERT INTO ator (ator_id) VALUES (004)");

$query->execute();

$query2 = $db->prepare("UPDATE ator set primeiro_nome='Alfonso' where ator_id=004");

$query2->execute();

$query3 = $db->prepare("UPDATE ator set ultimo_nome='Oliveira' WHERE ator_id=004");

$query3->execute();

// $query = $db->prepare("DELETE FROM ator WHERE ator_id=004");

// $query->execute();


?>
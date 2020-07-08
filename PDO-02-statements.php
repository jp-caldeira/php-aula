<?php

include "PDO-01-index.php";//aqui ele vai usar o outro arquivo para estabelecer a conexão




$query = $db->prepare("INSERT INTO ator (ator_id) VALUES (006)");
$query->execute();

$query2 = $db->prepare("UPDATE ator set primeiro_nome='João' where ator_id=006");

$query2->execute();

$query3 = $db->prepare("UPDATE ator set ultimo_nome='Rodrigues' WHERE ator_id=006");

$query3->execute();

// $query = $db->prepare("DELETE FROM ator WHERE ator_id=004");

// $query->execute();

// $query = $db->prepare("INSERT INTO ator (ator_id) VALUES (002)");
//
// $query->execute();
//
// $query2 = $db->prepare("UPDATE ator set primeiro_nome='Ronaldinho' where ator_id=002");
//
// $query2->execute();
//
// $query3 = $db->prepare("UPDATE ator set ultimo_nome='Gaucho' WHERE ator_id=002");
//
// $query3->execute();

?>

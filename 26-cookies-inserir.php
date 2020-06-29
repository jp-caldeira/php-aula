<?php

setcookie('idioma','PT-BR', 0);

session_start();

$_SESSION['pessoa'] = ["nome" => "Fulano", "altura" => 170];

echo 'Session incluída com sucesso';


?>

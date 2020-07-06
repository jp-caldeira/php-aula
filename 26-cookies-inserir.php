<?php

setcookie('idioma','PT-BR', 0);//0 dura pra sempre(até fechar o navegador)
setcookie('sobrenome', 'Silva', time()+10);//dura 10 seg
//setcookie(nome do cookie, valor do cookie, duração)

setcookie('biscoito', 'delicioso', 0);

session_start();

$_SESSION['pessoa'] = ["nome" => "Fulano", "altura" => 170];

echo 'Session incluída com sucesso';


?>

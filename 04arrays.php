<?php

$lista = ["Pão","Manteiga","Abobrinha","Presunto", 50, true, false, 1.75];
//inserindo (na última posição do array):

$lista[] = "Chocolate";
$lista[5] = 'Macarrão';

//exibindo os valores (para desenvolvedores):
// var_dump($lista);

//exibindo para o usuário:

echo $lista[6];




?>

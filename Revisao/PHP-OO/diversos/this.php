<?php

require_once "src/Classes/Cliente.php";

$cliente1 = new Cliente;
$cliente1->nome = "João";
$cliente1->endereco = "São Paulo";
$cliente1->idade = 34;
$cliente1->telefone = "11 89898989898";

$cliente1->comprar();

$cliente2 = new Cliente;
$cliente2->definirNome("Maria");
$cliente2->endereco = "São Paulo";
$cliente2->idade = 34;
$cliente2->telefone = "11 89898989898";

echo "<br>";
$cliente2->comprar();

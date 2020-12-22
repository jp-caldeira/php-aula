<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Refrigerante");

//$prod->titulo = "1232232";

//$prod->detalhes();

$prod2 = new App\Classes\Eletrodomestico("Geladeira", 110);

$prod2->definePreco(4500.50);
$prod2->descricao = "bla bla bla";

$prod2->detalhes();

echo "<br>Descrição do produto: {$prod2->descricao}";

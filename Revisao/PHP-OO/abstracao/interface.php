<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");

$prod->defineCodigoBarras("45646553");
$prod->definePreco(2.99);

$prod->detalhes();

echo "<br><br>Método retorna detalhes:<br>";

echo $prod->retornaDetalhes();

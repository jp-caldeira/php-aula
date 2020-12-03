<?php

error_reporting(E_ALL);

echo "início do arquivo<br><br>";

require_once "tipos.php";//se o arquivo não for encontrado, o require vai dar um erro fatal e interromper a execução

include_once "funcoes.php"; //sem o include once, o outro funcoes.php vai dar erro, porque vai declarar funções já declaradas

echo "<br>";

include_once "funcoes.php";

echo "<br>Estou exibindo a variável preco no arquivo include.php: $preco";

echo "<br>";

echo "<br>Estou chamando a função somar no arquivo include.php: ".somar(10, 10);

echo "<br>";

echo "fim do arquivo";

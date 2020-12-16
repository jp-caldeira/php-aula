<?php

require_once "../autoload/autoload-psr4.php";

$cliente = new App\Classes\Cliente("Fulano", "89869683968", 44);
$cliente->cpf = "45.212.841.34.5";
$cliente->rg = "12.1212.1212.11";

echo $cliente->cidade;

$cliente->alterar("Joao", 32);

$cliente(true);

$clienteSerializado = serialize($cliente);

echo "<br>" . $clienteSerializado;

$cliente2 = unserialize($clienteSerializado);


//unset($cliente); dá erro no var_dump --> unset elimina a variável
//exit; termina a execução --> não exibe o var_dump, mas não dá erro.

var_dump($cliente, $cliente2);

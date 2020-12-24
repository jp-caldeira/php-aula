<?php

require_once "../autoload/autoload-psr4.php";

//$pessoa = new App\Classes\Pessoa;//erro - cannot instantiate abstract class app/classes/pessoa

$cliente = new App\Classes\Cliente;

$cliente->setNome("Fulano");
$cliente->setIdade(24);
$cliente->setTelefone("1258657896453");
$cliente->setEndereco("Rua das Camélias");

$cliente->setId(1);

var_dump($cliente);

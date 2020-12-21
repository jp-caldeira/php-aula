<?php

require_once "../autoload/autoload-psr4.php";

$eletro = new App\Classes\Eletrodomestico;

$eletro->defineCodigoBarras("4251552");
$eletro->preco = 899.99;
$eletro->titulo = "Geladeira Brastemp";

$eletro->definirVoltagem(110);

var_dump($eletro);

$microondas = new App\Classes\Microondas;

$microondas->titulo = "Microondas";
$microondas->preco = 129.99;
$microondas->defineCodigoBarras("425512418");
$microondas->definirVoltagem(110);
$microondas->definirPotencia(600);

var_dump($microondas);

$microondas->mostrar();

<?php

require_once "../autoload/autoload-psr4.php";

$produto1 = new App\Classes\Produto;

$produto1->titulo = "Cerveja";
$produto1->preco = 2.99;
$produto1->defineCodigoBarras('011001010');

$produto1->detalhes();

$eletro = new App\Classes\Eletrodomestico;

$eletro->titulo = "Geladeira";
$eletro->valor = 3000.00;
$eletro->defineCodigoBarras("100010110");
$eletro->definirVoltagem(110);

$eletro->detalhes();

$microonda = new App\Classes\Microondas;
$microonda->titulo = "Microondas";
$microonda->valor = 1229.99;
$microonda->defineCodigoBarras("11520110");
$microonda->definirVoltagem(110);
$microonda->definirPotencia(600);

$microonda->detalhes();

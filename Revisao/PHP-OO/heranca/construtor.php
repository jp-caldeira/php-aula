<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Refrigerante");

$prod->detalhes();

$geladeira = new App\Classes\Eletrodomestico("Geladeira", 110);
$geladeira->detalhes();

$microonda = new App\Classes\Microondas("Micro", 110, 600);
$microonda->detalhes();

var_dump($prod, $geladeira, $microonda);

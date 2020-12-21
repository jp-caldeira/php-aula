<?php

require_once "../autoload/autoload-psr4.php";

$geladeira = new App\Classes\Eletrodomestico("Geladeira", 110);

$microonda = new App\Classes\Microondas("Geladeira", 110, 1100);

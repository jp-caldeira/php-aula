<?php

require_once "../autoload/autoload-psr4.php";

$email = new App\Email\Envio;

$mailgun = new App\Email\Adaptadores\Mailgun\Adaptador;

$email->enviar($mailgun);

echo "<br>";

$ses = new App\Email\Adaptadores\SES\Adaptador;
$base = new App\Email\Adaptadores\AdaptadorBase;//adaptadorbase não é classe abstrata, então ela pode
//ser instanciada
//ou seja, não precisa ser uma classe abstrata para usar polimorfismo

$email->enviar($ses);

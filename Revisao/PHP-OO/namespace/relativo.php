<?php

require_once "../autoload/autoload-psr4.php";


// require_once "../src/Classes/Cliente.php";
// require_once "../src/Email/envio.php";
// require_once "../src/Email/transporte.php";
// require_once "../src/Email/Adaptadores/Mailgun/adaptador.php";

$email = new \App\Email\Envio;
$sms = new \App\SMS\Envio;

$email->enviar();

//var_dump($email);

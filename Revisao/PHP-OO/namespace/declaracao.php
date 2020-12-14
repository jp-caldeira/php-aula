<?php

require_once '../src/Email/envio.php';
require_once '../src/SMS/envio.php';


use App\Email\Envio as Email;
use App\SMS\Envio as SMS;
use const App\Email\VERSAO;
use function App\Email\validar;


$email = new Email; //aqui não precisa da barra
$sms = new SMS;

var_dump($email, $sms);

echo VERSAO . "<br>";

validar("fulano@uol.com.br");

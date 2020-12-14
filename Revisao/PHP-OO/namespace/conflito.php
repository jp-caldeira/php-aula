<?php

require_once '../src/Email/envio.php';
require_once '../src/SMS/envio.php';


$email = new Email_Envio;
$sms = new SMS_Envio;

var_dump($email, $sms);

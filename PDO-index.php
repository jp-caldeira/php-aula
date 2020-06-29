<?php

$host = "mysql:host=localhost;dbname=banco1;port=3306";
$user = "root";
$pass = "";


$db = new PDO($host, $user, $pass);

var_dump($db);

 ?>

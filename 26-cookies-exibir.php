<?php

var_dump($_COOKIE['idioma']);

session_start();

echo "<br>";

unset($_SESSION['pessoa']['altura']);
var_dump($_SESSION);

echo "<br><br>Olá, ".$_SESSION['pessoa']['nome'];


 ?>

<?php

if (isset($_COOKIE['idioma'])){
var_dump($_COOKIE['idioma']);
}

if(isset($_COOKIE['sobrenome'])){
echo "<br><br>O sobrenome do usuário é: ".$_COOKIE['sobrenome'];
}
session_start();

echo "<br>";

unset($_SESSION['pessoa']['altura']);
var_dump($_SESSION);

echo "<br><br>Olá, ".$_SESSION['pessoa']['nome']."<br>";

echo "Este biscoito está ".$_COOKIE['biscoito'];




 ?>

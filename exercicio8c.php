<?php

$infos = file_get_contents('infos.json');

$infosdecode = json_decode($infos, true);

var_dump($infosdecode);
echo "<br><br>";

echo "Nome: ".$infosdecode['nome'];
echo "<br>";
echo "Idade: ".$infosdecode['idade']." anos.<br>";



session_start();

echo "Nome: ".$_SESSION['usuar']['nome'];
echo "<br>";
echo "Idade: ".$_SESSION['usuar']['idade']." anos.";
echo "<br>".strrev($infosdecode['nome']);

$newtxt = str_replace("Jo", "Fulan", $infosdecode['nome']);

echo "<br>".$newtxt;

$txt = "olá como vai você bom dia";

$maiuscula = ucwords($txt);

echo "<br>".$txt."<br>";
echo $maiuscula."<br>";


 ?>

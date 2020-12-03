<?php 

$nome = "João";

echo "<h1>Bem vindo ao meu site</h1>";

echo "Olá mundo<br>";

//phpinfo();

//variaves - tipagem dinâmica

$email = "fulano@fulanomail.com";

echo $email;

$email = "fulanos@gmail.com";

echo "<br>o novo valor de email é ".$email."<br>";

var_dump($email);

echo "<br>";

$email = 100;

var_dump($email);

$nome = "João";

echo "<br>".$nome."<br>";

$nome = 3.565;

echo $nome;

echo "<br>";

var_dump($nome);

//constante

define("CIDADE", "São Paulo");
# boa prática: usar tudo maiúscula

echo "<br>".CIDADE;

const CURSO = "PHP";

echo "<br>".CURSO;

/*
  comentários de vários linhas
  etc
  etc
  etc
  */ 
  
  
//declaração de strings

$escola = "minha escola";
$curso = "meu curso";
$cursos = ["PHP", "Java", "Python"];

$string1 = "Estude o $curso na $escola";
$string2 = 'Estude o $curso na $escola';//não interpreta as variáveis

//também é legal usar colchetes
$string3 = "{$curso} foi bem legal";
//com valores de arrays:
$str4 = "Você já pensou em aprender $cursos[1]?";
//ou
$str5 = "Você já pensou em aprender {$cursos[2]}?";


echo $string1;
echo "<br>";
echo $string2;
echo "<br>";
echo $string3;
echo "<br>";
echo $str4;
echo "<br>";
echo $str5;






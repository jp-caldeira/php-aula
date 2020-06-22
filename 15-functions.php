<?php

function hello () {

  echo "Hello World <br>";


}

echo "Antes <br>";
hello();
echo "Depois <br>";

//função dentro da função
function completar (){
 echo "Olá essa é a função completar <br>";
 hello();
}

completar();

function saludar()
{
  return "Hola Mundo";
}

saludar();// como está no return, ele não vai imprimir na tela

echo "<br>";
$espanhol = saludar();

echo $espanhol;



function greet($nome, $sobrenome = " ") {
 echo "Olá, ".$nome." ".$sobrenome;

}
echo "<br>";
echo "<br>";
greet("Fulano","Silva");
echo "<br>";
echo "<br>";
greet("João");
echo "<br>";
echo "<br>";
greet("Amanda","Souza");
echo "<br>";
echo "<br>";
////////

function whoIs(){
    $nome = "Fulano";
    return $nome;
}


$nome = whoIs();

echo $nome;

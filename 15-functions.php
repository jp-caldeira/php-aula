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

$espanhol = saludar();

echo $espanhol;



function greet($nome, $sobrenome = " ") {
 echo "Olá, $nome $sobrenome";

}

greet("Fulano","Silva");

////////

function whoIs(){
    $nome = "Fulano";
    return $nome;
}


$nome = whoIs();

echo $nome;

 ?>

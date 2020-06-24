
<h1>Exercício 2 - Superfície</h1>

<?php

echo "<p>a. Definir uma função <strong>triangulo()</strong> que retorne sua superfície.</p>";

function triangulo ($base, $altura){
  global $funcoesExecutadas;
  $funcoesExecutadas++;
  return ($base * $altura)/2;

}

echo "A área de um triângulo com base de 10 centímetros e altura de 5 centímetros é de ".triangulo(10, 5)." centímetros.";

echo "<br><p>b. Definir uma função <strong>retângulo()</strong> que retorne sua superfície.</p>";

function retangulo($base, $altura) {
  global $funcoesExecutadas;
  $funcoesExecutadas++;
  return $base * $altura;
}

echo "A área de um retângulo com lados de 20 e 3 centímetros é de ".retangulo(20,3)." centímetros";
 ?>

 <br><p>c. Definir uma função <strong>quadrado()</strong> que retorne sua superfície.</p>

 <?php function quadrado($lado){
   global $funcoesExecutadas;
   $funcoesExecutadas++;
    return $lado * $lado;
 }

echo "A área de um quadrado com lado de 15 centímentros é ".quadrado(15)." centímetros.";
  ?>

<br><p>d.Utilizando a função <em>pi()</em>, definir uma função <strong>circulo()</strong> que retorne sua superíficie.</p>

<?php function circulo($raio){
  global $funcoesExecutadas;
  $funcoesExecutadas++;
  return pi() * ($raio * $raio);
}

echo "A área de um círculo cujo raio é 5 centímentros é ".circulo(5)." centímetros.";

 ?>

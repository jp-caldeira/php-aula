<?php

$numeroMagico = 31;

echo "<h1>Exercício Funcões:</h1>";
echo "<p>a. Definir uma função <strong>maior()</strong> que receba 3 números e retorne o maior deles.</p>";

function maior($numA, $numB, $numC){
  global $funcoesExecutadas;
  $funcoesExecutadas++;

    if ($numA > $numB && $numA > $numB){
        return $numA;
    } else if ($numB > $numA && $numB > $numC){
        return $numB;
    } else if ($numC > $numA && $numC > $numB){
      return $numC;
    } else {
      echo "deu ruim";
    }
}

$emaior = maior(10, 10, 10);

echo $emaior;

echo "<p>b. Definir uma função <strong>tabela()</strong> que receba um parâmetro base, um parâmetro limite e retorne um <strong>array</strong> com a sequência de números a partir do número base até o número limite.</p>";

function tabela ($numeroBase, $numeroLimite){
  global $funcoesExecutadas;
  $funcoesExecutadas++;

  $array = [];
  for ($numeroBase; $numeroBase <= $numeroLimite; $numeroBase++){
    $array[] = $numeroBase;
  }
  return $array;
}

print_r(tabela(10,20));

echo "<p>c. Definir uma variável chamada <strong>numeroMagico</strong>, que contenha um número. Tal número variável deverá estar na primeira linha no nosso código PHP.</p>";

echo "<p>d. Modificar <strong>maior()</strong> de forma que, se receber apenas 2 parâmetros, a função compare esses dois números com numeroMagico.</p>";

function maiorMagico($numA, $numB, $numC = null){
    global $numeroMagico;
    global $funcoesExecutadas;
    $funcoesExecutadas++;


    if ($numC === null){
      $numC = $numeroMagico;
    }

    if ($numA > $numB && $numA > $numB){
        return $numA;
    } else if ($numB > $numA && $numB > $numC){
        return $numB;
    } else if ($numC > $numA && $numC > $numB){
      return $numC;
    } else {
      echo "deu ruim";
    }
}

echo maiorMagico(10, 40);

echo "<p>e. Modificar tabela de forma que, se ela receber apenas um parâmetro, a função use numeroMagico como limite.</p>";

function tabelaMagica ($numeroBase, $numeroLimite = null){
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    global $numeroMagico;

  if ($numeroLimite === null) $numeroLimite = $numeroMagico;

  $array = [];
  for ($numeroBase; $numeroBase <= $numeroLimite; $numeroBase++){
    $array[] = $numeroBase;
  }
  return $array;
}

print_r(tabelaMagica(20));

?>

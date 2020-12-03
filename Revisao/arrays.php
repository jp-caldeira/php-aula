<?php

/*
arrays
*/

$linguagens = ["PHP", "C#", "Java"];

var_dump($linguagens);

echo "<h2>Lista de linguagens de programação</h2>";

echo $linguagens[0]."<br>";
echo $linguagens[1]."<br>";
echo $linguagens[2]."<br>";

/*
outra sintaxe, mais antiga
*/

echo "<br>";

$linguagens2 = array("Javascript", "C", "Python");

var_dump($linguagens2);

echo "<br>";

echo $linguagens2[0]."<br>";
echo $linguagens2[1]."<br>";
echo $linguagens2[2]."<br>";

//ARRAYS ASSOCIATIVOS//

$curso = [ 
          "nome_curso" => "curso php", 
          "versao_ferramenta" => 7.4, 
          "carga_horaria" => 40,
          "ativo" => true
        ];

var_dump($curso);

echo "<br>";

echo $curso["nome_curso"]."<br>";
echo $curso["versao_ferramenta"]."<br>";
echo $curso["carga_horaria"]."<br>";
echo $curso["ativo"]."<br>";

//echo $curso[0]."<br>"; -> dá erro --> undefined offset

//ARRAYS MULTIDIMENSIONAIS

$numeros = [
       [1, 2, 3, 4],
       [5, 6, 7, 8],
       [10, [11, 12, 13]]
];

echo "<br>";
var_dump($numeros);
echo "<br>";

echo $numeros[0][0]."<br>";
echo $numeros[2][1][2]."<br>";

//array assoc multidimensionais

$cursos = [
    "php" => [ 
        "nome_curso" => "curso php", 
        "versao_ferramenta" => 7.4, 
        "carga_horaria" => 40,
        "ativo" => true
    ],
    "Java" => [
        "nome_curso" => "fundamentos Java", 
        "versao_ferramenta" => 11.4, 
        "carga_horaria" => 30,
        "ativo" => false
    ]
];

var_dump($cursos);
echo "<br>";
echo "<br>";
var_dump($cursos["Java"]);
echo "<br>";

echo $cursos["php"]["nome_curso"]."<br>";
echo $cursos["Java"]["nome_curso"]."<br>";

//INSERINDO DADOS NO ARRAY

$nomes = ["João", "Maria"];
var_dump($nomes);
$nomes[2] = "José";
echo "<br>";
var_dump($nomes);
$nomes[] = "Roberto";
echo "<br>";
var_dump($nomes);

//com array assoc

$curso['pre-requisitos'] = "lógica de programação";
echo "<br>";
var_dump($curso);

$cursos["Java"]["pre-requisitos"] = "lógica de programação";
echo "<br>";
var_dump($cursos["Java"]);






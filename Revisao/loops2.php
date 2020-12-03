<?php

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
    ],
    "C#" => [
      "nome_curso" => "C# essencial",
      "versao_ferramenta" => 23.0,
      "carga_horaria" => 35,
      "ativo" => true
    ]
];

foreach($cursos as $curso){

    if($curso["ativo"] == false){
      continue;//caso 'ativo' seja false, o loop vai pular a iteração. neste caso, o array Java não será exibido no navegador
    }

    echo "Nome do curso: {$curso["nome_curso"]}<br>";
    echo "Versão da ferramenta: {$curso["versao_ferramenta"]}<br>";
    echo "Duração: {$curso["carga_horaria"]} horas<br>";
    echo "Status: {$curso["ativo"]}<br><br>";
}

$n = 2;
for ($i = 1; $i <= 10; $i++){
        echo "$n x $i = $n * $i<br>";
    }

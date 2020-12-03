<?php

function cursos()
{
    return [
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
                "nome_curso" => "C# básico",
                "versao_ferramenta" => 2.2,
                "carga_horaria" => 35,
                "ativo" => true
            ],

            "Javascript" => [
                "nome_curso" => "Fundamentos Javascript",
                "versao_ferramenta" => 5.2,
                "carga_horaria" => 25,
                "ativo" => true
            ]      
        
            ];


}
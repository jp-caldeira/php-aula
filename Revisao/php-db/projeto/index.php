<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;



//var_dump($configDB);

try {

    $configDB = require 'config/banco-de-dados.php';

    $conexao = new Conexao($configDB);

    $cursoRepositorio = new Curso($conexao);
    $cursos = $cursoRepositorio->todos();

} catch (\PDOException $e) {
    echo $e->getMessage();
    exit;
}






require_once "exibicao/principal.php";

<?php

require_once "connect.php";

//$dbname = "5489548645";
  $conexao  = new mysqli($host, $user, $pass, $dbname);

var_dump($conexao->connect_errno);//propriedade que retorna um int com código de erro. 0 significa sem erro

//lembrando: zero é convertido para false

if ($conexao->connect_errno) {
    echo "erro código: " . $conexao->connect_errno;
    echo "<br>mensagem erro: " . $conexao->connect_error;
}

$result = $conexao->query("fsghfghfgh");//quando dá erro na query, ele retorna false

if (!$result) {
    echo "erro código: " . $conexao->errno;
    echo "<br>mensagem erro: " . $conexao->error;
}

//ou

try {
    $conexao  = new mysqli($host, $user, $pass, $dbname);

    if ($conexao->connect_errno) {
      throw new Exception($conexao->connect_error, $conexao->connect_errno);
    }

    $result = $conexao->query("SELECT * FROM alunos");//quando dá erro na query, ele retorna false

    if (!$result) {
        throw new Exception($conexao->error, $conexao->errno);
    }

    var_dump($result->fetch_all());

} catch (\Exception $e) {
    echo "erro código: " . $e->getCode();
    echo "<br>mensagem erro: " . $e->getMessage();
}

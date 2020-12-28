<?php

require_once "connect.php";


try {

    $conexao = new PDO("mysql:host=localhost;dbname=teste_db", $user, $pass);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $resultado = $conexao->query("SELECT * FROM ALUNOSsssss");

    // if(!$resultado){
    //   $erro = $conexao->errorInfo();
    //
    //   throw new \PDOException($erro[2], $erro[1]);
    // }

    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);

    var_dump($alunos);

  foreach ($resultado as $aluno){
    var_dump($aluno);
  }


} catch (\PDOException $e) {
  echo "Mensagem: " . $e->getMessage();
  echo "<br>Código: ". $e->getCode();
}

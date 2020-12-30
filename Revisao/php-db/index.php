<?php

require_once "connect.php";

//$conexao = new PDO('mysql:host=localhost;dbname=teste_db', $user, $pass);



//tratando erros - classes PDOException

try {
      $user = "root";
      $pass = "";

      $conexao = new PDO('mysql:host=localhost;dbname=teste_db', $user, $pass);

      //$resultado = $conexao->query("INSERT INTO alunos (id, nome) values (4, 'Fulano')");

      $resultado = $conexao->query("SELECT * FROM alunos");

      //$resultado->setFetchMode(PDO::FETCH_ASSOC);
      if(!$resultado){
        $erro = $conexao->errorInfo();

        throw new \PDOException($erro[2], $erro[1]);
      }


      $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);

      var_dump($alunos);

    foreach ($resultado as $aluno){
      var_dump($aluno);
    }


} catch (\PDOException $e) {
    echo "Mensagem: " . $e->getMessage();
    echo "<br>Código: ". $e->getCode();
}

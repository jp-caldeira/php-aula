<?php

namespace App\Uteis;

class Conexao extends \PDO
{
    public function __construct(array $dados)
    {
        $opcoes = [
              \PDO::ATTR_PERSISTENT => $dados["conexao-persistente"],
              \PDO::ATTR_ERRMODE => $dados["modo-erro"]
        ];

        $dns = \vsprintf('%s:host=%s;dbname=%s', $dados);

        //\var_dump($dns);

        parent::__construct($dns, $dados['user'], $dados['pass'], $opcoes);
    }
}

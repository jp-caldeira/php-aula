<?php

namespace App\Uteis;

class Conexao extends \PDO
{
    public function __construct(array $dados)
    {
        $dns = \vsprintf('%s:host=%s;dbname=%s', $dados);

        // \var_dump($dns);

        parent::__construct($dns, $dados['user'], $dados['pass']);
    }
}

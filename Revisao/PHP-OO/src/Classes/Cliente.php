<?php

namespace App\Classes;

class Cliente
{
    public string $nome;

    public int $idade;

    public string $endereco;

    public string $telefone;

    public function __construct(string $nome, string $telefone, int $idade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    public function __set(string $nomePropriedade, $valorPropriedade)
    {
        if($nomePropriedade === 'cpf'){
          $this->cpf = str_replace(".", "", $valorPropriedade);
        } else {
          $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade)
    {
        return "A propriedade não existe";
    }

    public function __call(string $nomeMetodo, array $argumentosMetodo)
    {
        if ($nomeMetodo === "alterar"){
           $this->nome = $argumentosMetodo[0];
           $this->idade = $argumentosMetodo[1];
        }
    }

    public function __invoke(bool $status)
    {
        $this->status = $status;
    }

    public function comprar(): void
    {
        echo "O cliente {$this->nome} realizou uma compra";
    }

    public function definirNome($nome) : void
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
       echo "O objeto foi destruído<br>";
       echo "O método destrutor é bem menos utilizado que o construtor.";
    }


}
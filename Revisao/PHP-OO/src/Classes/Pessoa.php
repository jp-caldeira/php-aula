<?php

namespace App\Classes;

class Pessoa
{
    private $nome;

    private $idade;

    private $telefone;

    public function setNome($nome): void 
    {
        $this->nome = $nome;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setIdade(int $idade): void 
    {
        $this->idade = $idade;            
    }

    public function getIdade(): int 
    {
        return $this->idade;
    }

    public function setTelefone($telefone): void 
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

}
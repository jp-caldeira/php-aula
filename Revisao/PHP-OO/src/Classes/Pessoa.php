<?php

namespace App\Classes;

abstract class Pessoa
{
    private $nome;

    private $idade;

    private $telefone;

    public string $endereco;

    protected int $id;

    abstract public function setID(int $id): void;

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

    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

}

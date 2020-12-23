<?php
declare(strict_types=1);

class Curso
{
    private $nome;
    private $descricao;
    
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
    
    public function getDescricao(): string
    {
        return $this->descricao;
    }
    
    public function setValor(float $valor): void
    {
        if($valor >= 0){
            $this->valor = $valor;
        }
        else
            throw new TypeError("O valor não pode ser negativo!");
    }
    
    public function getValor(): float
    {
        return $this->valor;
    }
}

try
{
    $curso = new Curso;   
    $curso->setNome("PHP OO");
    $curso->setDescricao("etc etc");
    $curso->setValor(-120);
    
    print($curso->getNome() . PHP_EOL);
    print($curso->getDescricao() . PHP_EOL);
    print($curso->getValor() . PHP_EOL);
}
catch(Exception $ex)
{
    print(get_class($ex));
}
catch(Error $ex)
{
    print(get_class($ex));
}
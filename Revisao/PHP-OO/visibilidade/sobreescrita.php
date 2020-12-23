<?php

class a
{
    private $prop = "privado";

    private function teste()
    {
    }

    public function imprimir()
    {
        $this->privado();
        $this->publico();
    }

    private function privado()
    {
        echo "class a - privado\n";
    }

    public function publico()
    {
        echo "classe a  - publico\n";
    }
}

//mais restrito ---> menos restrito
//protected -----> public

class b extends a
{
    protected $prop = "protegido";

    protected function teste()
    {
        
    }

    public function publico()
    {
        echo "classe b  - publico\n";
    }

    public function privado()
    {
        echo "classe b - privado\n";
    }
}

class c extends b 
{
    public $prop = "público";    

    public function teste(): void
    {
        
    }
}

// $c = new c;
//var_dump($c);

//echo "<br>" . $c->prop;

$b = new b;
$b->imprimir();//vai imprimir o privado() de A e o publico() de b


/////////////

class classe1
{
    public function imprimir(): void
    {
        echo $this->prop;
    }

    private $prop = "privado";//na verdade, é private string $prop, mas essa versão do php dá erro
}

class classe2 extends classe1
{
    public $prop = "publico";
}

echo "<br>";
$obj = new classe2;
$obj->imprimir();// irá imprimir o prop da classe1, pois ela é privada e não pode ser sobreescrita



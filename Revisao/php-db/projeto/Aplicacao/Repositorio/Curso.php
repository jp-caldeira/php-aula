<?php

namespace App\Repositorio;

use App\Entidade\Curso as CursoEntidade;

class Curso extends RepositorioBase
{
    public function todos() 
    {
        var_dump($this->select('cursos'));
    }
}

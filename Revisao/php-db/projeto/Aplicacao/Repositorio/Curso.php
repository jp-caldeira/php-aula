<?php

namespace App\Repositorio;

use App\Entidade\Curso as CursoEntidade;

class Curso extends RepositorioBase
{
    public function todos()
    {
        $cursosArray = $this->select('cursos');

        $cursosObj = [];

        foreach($cursosArray as $curso){
            $cursosObj[] = CursoEntidade::fromArray($curso);
        }

        return $cursosObj;
    }
}

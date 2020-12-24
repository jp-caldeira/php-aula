<?php

namespace App\Email\Adaptadores;

class AdaptadorBase implements AdaptadorInterface
{
    public function processar():void
    {
        Echo "processado com adaptador base";
    }
}

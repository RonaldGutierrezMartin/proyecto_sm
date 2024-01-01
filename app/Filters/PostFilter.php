<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostFilter extends ApiFilter{

    protected $safeParams =[
        'id' => ['='],
        'user_id' => ['='],
        /* Buscar como filtrar por contenido */
    ];
}
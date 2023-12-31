<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class PostFilter extends ApiFilter{

    protected $safeParams =[
        'id' => ['eq'],
        'user_id' => ['eq'],
        /* Buscar como filtrar por contenido */
    ];
    protected $columnMap =[];
    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>', 
        'gte' => '>='
    ];
}
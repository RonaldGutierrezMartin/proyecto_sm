<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class FollowFilter extends ApiFilter{

    protected $safeParams =[
        'id' => ['eq'],
        'name' => ['eq'],
        'email' => ['eq']
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
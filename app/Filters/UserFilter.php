<?php
//Modificar posts
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class UserFilter extends ApiFilter{

    protected $safeParams =[
        'id' => ["="],
        'name' => ["="],
        'email' => ["="]
    ];
}
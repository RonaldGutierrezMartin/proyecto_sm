<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class FollowFilter extends ApiFilter{

    protected $safeParams =[
        'followerId' => ['eq'],
        'followedId' => ['eq']
    ];
    protected $columnMap =[
        "followerId" => "follower_id",
        "followedId" => "followed_id"
    ];
    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>', 
        'gte' => '>='
    ];
}
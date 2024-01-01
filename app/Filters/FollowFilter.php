<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class FollowFilter extends ApiFilter{

    protected $safeParams =[
        'followerId' => ['='],
        'followedId' => ['=']
    ];
    protected $columnMap =[
        "followerId" => "follower_id",
        "followedId" => "followed_id"
    ];
}
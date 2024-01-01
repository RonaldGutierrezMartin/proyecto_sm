<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FollowCollection;
use App\Models\Follow;
use App\Filters\FollowFilter;

class Follows extends Controller
{
    function index(Request $request){
        $filter = new FollowFilter();
        $queryItems = $filter->transform($request);
        $follows = Follow::where($queryItems);
        return new FollowCollection($follows->paginate(25)->appends($request->query()));
    }
}

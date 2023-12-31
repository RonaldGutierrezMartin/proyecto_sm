<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\FollowCollection;
use App\Models\Follow;

class Follows extends Controller
{
    function index(){
        $follows = Follow::all();
        return new FollowCollection($follows);
    }
}

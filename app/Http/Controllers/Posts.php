<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Filters\PostFilter;

class Posts extends Controller
{
    function index(Request $request){
        $filter = new PostFilter();
        $queryItems = $filter->transform($request);
        $posts = Post::where($queryItems);
        return new PostCollection($posts->paginate()->appends($request->query()));
    }
}

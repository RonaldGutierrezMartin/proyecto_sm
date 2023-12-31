<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;

class Posts extends Controller
{
    function index(){
        $posts = Post::paginate();
        return new PostCollection($posts);
    }
}

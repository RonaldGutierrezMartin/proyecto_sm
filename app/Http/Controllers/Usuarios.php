<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usuarios extends Controller
{
    function drawSingup(){
        $tipos = DB::table("tiposusuario")->select("id", "nombre")->get();
        return view("signUp", ["tipos" => $tipos]);
    }
}

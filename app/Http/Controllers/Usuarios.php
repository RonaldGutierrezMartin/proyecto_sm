<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerUser;
use App\Models\Usuario;

class Usuarios extends Controller
{
    function drawSignUp(){
        $tipos = DB::table("tiposusuario")->select("id", "nombre")->get();
        return view("signUp", ["tipos" => $tipos]);
    }

    function createUser(registerUser $datos){
        $info = Usuario::create($datos->all());
        dd($info);
    }
}

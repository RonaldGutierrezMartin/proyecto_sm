<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerUser;
use App\Http\Requests\logUser;
use App\Models\Usuario;

class Usuarios extends Controller
{
    function drawSignUp(){
        $tipos = DB::table("tiposusuario")->select("id", "nombre")->get();
        return view("signUp", ["tipos" => $tipos]);
    }

    function createUser(registerUser $datos){
        Usuario::create($datos->all());
        return view("login", ["created" => "Se ha creado la cuenta."]);
    }

    function userLog(logUser $datos){
        $user = DB::table("usuarios")->select("*")->where("email", "=", $datos->email)->get();
        if($datos->password == $user->password){
            session(["user" => $user]);
            return view("main");
        }else{
            return view("login", ["error" => "La contraseña no es correcta."]);
        }
    }
}

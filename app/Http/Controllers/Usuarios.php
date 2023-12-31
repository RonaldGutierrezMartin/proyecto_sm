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
        if($datos["password"] == $user[0]->password){
            $follows = DB::table("siguen")->select("id_seguido")->where("id_seguidor", "=", $user[0]->id)->get();
            session(["user" => $user]);
            if(count($follows)!=0){
                $posts = [];
                foreach($follows as $follow){
                    array_push($posts, DB::table("publicaciones")->select("*")->where("id_usuario", "=", $follow->id_seguido)->get());
                }
                return view("main", ["posts" => $posts, "follows" => $follows]);
            }else{
                return view("main", ["warning" => "Debes seguir a alguien para que se te muestre contenido."]);
            }
            
        }else{
            return view("login", ["error" => "La contraseña no es correcta."]);
        }
    }
}

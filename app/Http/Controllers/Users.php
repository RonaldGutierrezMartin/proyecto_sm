<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerUser;
use App\Http\Requests\logUser;
use App\Models\User;

class Users extends Controller
{
    function drawSignUp(){
        $types = DB::table("usertypes")->select("id", "name")->get();
        return view("signUp", ["types" => $types]);
    }

    function createUser(registerUser $data){
        User::create($data->all());
        return view("login", ["created" => "Se ha creado la cuenta."]);
    }

    function userLog(logUser $data){
        $user = DB::table("users")->select("*")->where("email", "=", $data->email)->get();
        if($data["password"] == $user[0]->password){
            $follows = DB::table("follows")->select("followed_id")->where("follower_id", "=", $user[0]->id)->get();
            session(["user" => $user]);
            if(count($follows)!=0){
                $posts = [];
                foreach($follows as $follow){
                    array_push($posts, DB::table("posts")->select("*")->where("user_id", "=", $follow->id_seguido)->get());
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

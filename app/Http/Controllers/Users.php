<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerUser;
use App\Http\Requests\logUser;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Filters\UserFilter;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Session;

class Users extends Controller
{
    function index(Request $request){
        $filter = new UserFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems) > 0){
            $user = User::find($queryItems[0][2]);
            return new UserResource($user);
        }else{
            $users = User::all();
            $data = [];
            foreach($users as $user){
                $userModel = User::find($user->id);
                $userData = new UserResource($userModel);
                array_push($data, $userData);
            }
            return $data;

        }
    }

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
            Session::put("user", $user);
            if(count($follows)!= 0){
                $posts = [];
                foreach($follows as $follow){
                    array_push($posts, DB::table("posts")->select("*")->where("user_id", "=", $follow->followed_id)->get());
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

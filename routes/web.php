<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/login", function(){
    return view("logIn");
})->name("login");

Route::get('/signup', [Users::class ,"drawSignUp"])->name("signup");

Route::post('/registerd', [Users::class ,"createUser"])->name("register");

//Route::post('/main', [Usuarios::class ,"userLog"])->name("verify");

Route::post('/verify', [Users::class ,"userLog"])->name("verify");


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios;
use App\Models\Usuario;

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


Route::get("/logIn", function(){
    return view("logIn");
});

Route::get('/signUp', [Usuarios::class ,"drawSignUp"])->name("signUp");


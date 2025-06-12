<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get("/home",[HomeController::class, 'index']);

// Route::resource('/about', AboutController::class);

// Route::controller(AboutController::class)->group(function(){
//     Route::get("/about","index");
//     Route::get("/about/create","create");
// });

// basic route
// Route::get("/",function(){
//     return "hello";
// });
// // parameter route
// Route::get("/user/{id}",function($id){
//     return "hello $id";
// });
// // route with parameter optional 
// Route::get("/users/{name?}",function($name='guest'){
//     return "hello $name";
// });
// // route with regular expression
// Route::get("/user_admin/{id}",function($id){
//     return "id : $id";
// })->where("id",'[0-9]+');

// // name route
// Route::get("/",function(){
//     return "hello";
// })->name("index");

// route with controller
Route::get("user/show/{id}",[UserController::class,"show"]);



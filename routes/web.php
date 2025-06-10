<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get("/home",[HomeController::class, 'index']);

Route::resource('/about', AboutController::class);

// Route::controller(AboutController::class)->group(function(){
//     Route::get("/about","index");
//     Route::get("/about/create","create");
// });



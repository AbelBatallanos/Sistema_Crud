<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/estudiantes", function(){
//     return "HOLA MUNDO";
// });

Route::resource("estudiantes", EstudianteController::class);
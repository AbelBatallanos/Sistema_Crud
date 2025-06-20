<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\EstudianteApiController;

Route::resource("/estudiantes", EstudianteApiController::class);
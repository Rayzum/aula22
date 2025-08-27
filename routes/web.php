<?php

use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;


Route::resource('turmas', TurmaController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sobre', function () {
    return view('sobre');
    });
    

Route::get('/contato', function () {
return view('contato');
    });

   


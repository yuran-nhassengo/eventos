<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contactos', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $nome = "Banana";

    return view('products',['produto' =>$nome]);
});
 
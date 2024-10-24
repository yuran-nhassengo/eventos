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
    $arr = [10,20,30,40,50];

    return view('products',['produto' =>$nome,'arr'=>$arr]);
});
 
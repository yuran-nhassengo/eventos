<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::get('/contactos', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $nome = "Banana";
    $arr = [10,20,30,40,50];

    $busca = request('search');

    return view('products',['produto' =>$nome,'arr'=>$arr,'busca'=>$busca]);
});
 
Route::get('/produtos/{id}', function ($id) {

    $frutas =['Banana',"Manga","Laranja","Uva"];

    return view('productid',['id' =>$id,'frutas'=>$frutas]);
});
 
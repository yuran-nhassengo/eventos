<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index() {
        $nome ="Yuran";
        $idade =26;
        $arr =[10,20,30,30,50];

        $nomes = ["Yuran","Oscar","Nhassengo","Lamarck"];

        return view('welcome',
            [
                'nome' =>$nome,
                'idade2'=>$idade,
                'profissao' =>"Programador",
                'arr' =>$arr,
                'nomes'=>$nomes
            ]

            );


    }
}

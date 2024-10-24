@extends('layout.main')


@section('title','Produtos')

@section('content')


<h1>Tela de Produtos</h1>

<main>
    @if($busca != "")
        <p>O Usuario esta pesquisando alguma coisa</p>
    @else
        <p>Nada de pesquisa</p>
    @endif

    @for($i =0;$i < count($arr);$i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>Chegou no indice 2</p>
            @endif
    @endfor
</main>

  
@endsection
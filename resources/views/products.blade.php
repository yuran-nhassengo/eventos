@extends('layout.main')


@section('title','HDC Events')

@section('content')


<h1>Tela de Produtos</h1>

<main>
    @if($produto == "Banana")
        <p>Escolheu uma Banana</p>
    @elseif(@produto == "Laranja")
        <p>Escolheu uma Laranja</p>
    @else
        <p>Opcao Invalidade</p>
    @endif

    @for($i =0;$i < count($arr);$i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>Chegou no indice 2</p>
            @endif
    @endfor
</main>

  
@endsection
<h1>Tela de Produtos</h1>

<main>
    @if($produto == "Banana")
        <p>Escolheu uma Banana</p>
    @elseif(@produto == "Laranja")
        <p>Escolheu uma Laranja</p>
    @else
        <p>Opcao Invalidade</p>
    @endif
</main>
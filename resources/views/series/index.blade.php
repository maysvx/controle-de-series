<x-layout title="Séries">

    <div class="container">
        <a href="/series/create" class="btn btn-success mb-2">Adicionar</a>

        <ul class="list-group">
            @foreach($series as $serie)
            <li class="list-group-item">{{$serie->nome}}</li>
            @endforeach
        </ul>
    </div>


</x-layout>
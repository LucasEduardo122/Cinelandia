@extends('layout')
@section('pagina_titulo', 'Series')
@section('pagina_conteudo')

<div class="container">
    <h4 class="text-white mb-4 mt-4">Series</h4>
    <div class="card-deck">
        @if(!empty($series[0]->id))
        @foreach($series as $serie)
        <div class="card bg-dark" id="card" style="height:350px; overflow:hidden">
            <a href="{{env('APP_URL')}}/series/assistir/{{$serie->serie_id}}" style="text-decoration: none;">
                <img src="{{$serie->imagem1}}" style="height:190px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">{{$serie->nome}}</h5>
                    <p class="card-text text-white">{{$serie->sinopse}}</p>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <p>Nenhuma série registrada no acervo</p>
        @endif
    </div>
</div>
@stop
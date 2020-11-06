@extends('layout')
@section('pagina_titulo', 'Filmes')
@section('pagina_conteudo')

<div class="container">
    <h4 class="text-white mb-4 mt-4">Filmes</h4>
    <div class="card-deck">
        @if(!empty($filmes[0]->id))
        @foreach($filmes as $filme)
        <div class="card bg-dark" id="card" style="height:350px; overflow:hidden">
            <a href="{{env('APP_URL')}}/filmes/assistir/{{$filme->film_id}}" style="text-decoration: none;">
                <img src="{{$filme->imagem1}}" style="height:190px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">{{$filme->nome}}</h5>
                    <p class="card-text text-white">{{$filme->sinopse}}</p>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <p>Nenhum filme registrada no acervo</p>
        @endif
    </div>
</div>
@stop
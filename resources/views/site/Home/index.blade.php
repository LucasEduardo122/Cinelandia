    @extends('layout')
    @section('pagina_titulo', 'Home')

    @section('pagina_conteudo')

    <div class="container">
        <h4 class="text-white mb-4 mt-4">Filmes</h4>
        <div class="card-deck">
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
        </div>
    </div>

    <div class="container">
        <h4 class="text-white mb-4 mt-4">Séries</h4>
        @if(count($series) === 1)
        <div class="card-deck mb-4" style="width:570px;">
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
        </div>
        @endif

        @if(count($series) > 1)
        <div class="card-deck">
            @foreach($series as $serie)
            <div class="card bg-dark" id="card" style="height:350px; overflow:hidden">
                <a href="" style="text-decoration: none;">
                    <img src="{{$serie->imagem1}}" style="height:190px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">{{$serie->nome}}</h5>
                        <p class="card-text text-white">{{$serie->sinopse}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
    @stop
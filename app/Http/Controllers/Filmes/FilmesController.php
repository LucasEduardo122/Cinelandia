<?php

namespace App\Http\Controllers\Filmes;

use App\Http\Controllers\Controller;
use App\Models\Filmes;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index() {
        $filmes = new Filmes();

        $resultado = $filmes->trazerFilmes();

        return view('site.filmes.index', ["filmes" => $resultado]);
    }

    public function assistir(int $id) {

        $filmes = new Filmes();

        $resultado = $filmes->trazerFilme($id);

        if(!empty($resultado[0]->id)){
            return view('site.filmes.assistir', ["filmes" => $resultado]);
        }else {
            return redirect()->route('filmes');
        }
    }
}

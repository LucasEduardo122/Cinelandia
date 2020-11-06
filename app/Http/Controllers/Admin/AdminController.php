<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\audios;
use App\Models\Diretor;
use App\Models\Filmes;
use App\Models\legendas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
        if(Auth::check()){

            $id = session('nivel_id');

            if($id === 1){
                return view('site.admin.index');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->route('home');
    }

    public function formaddDiretor() {
        if(Auth::check()){

            $id = session('nivel_id');

            if($id === 1){
                return view('site.admin.diretor');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->route('home');
    }

    public function addDiretor(Request $request) {
        $dados = ['name_director' => $request->name_director, 'studio' => $request->studio];

        $Diretor = new Diretor();

        $Diretor->validarDiretor($dados);
    }

    public function formaddFilme() {
        if(Auth::check()){

            $id = session('nivel_id');

            if($id === 1){
                $Diretor = new Diretor();

                $director = $Diretor->buscarDiretor();

                $Legend = new legendas();

                $legenda = $Legend->buscarLegenda();

                $Audio = new audios();

                $audio = $Audio->buscarAudios();

                return view('site.admin.filme', ['director' => $director, 'audio' => $audio, 'legenda' => $legenda]);
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->route('home');
    }

    public function addFilme(Request $request) {
        $dados = ['nome' => $request->nome, 'sinopse' => $request->sinopse, 'imagem1' => $request->imagem1,
         'imagem2' => $request->imagem2, 'imagem3' => $request->imagem3, 'legend_id' => $request->legend_id, 'audio_id' => $request->audio_id,
         'ano' => $request->ano, 'url_film' => $request->url_film , 'director_id' => $request->director_id];

        $Filmes = new Filmes();

        $Filmes->validarFilme($dados);
    }
}

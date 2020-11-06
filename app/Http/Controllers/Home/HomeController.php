<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Filmes;
use App\Models\Series;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $filmes = new Filmes();

        $resultado = $filmes->trazerFilmes();

        $series = new Series();

        $reultado_series = $series->trazerSeries();

        return view('site.home.index', ['filmes' => $resultado, 'series' => $reultado_series]);
    }

    
    
}

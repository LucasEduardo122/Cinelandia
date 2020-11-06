<?php

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = new Series();

        $resultado = $series->trazerSeries();

        return view('site.series.index', ['series' => $resultado]);
    }

    public function assistir(int $id)
    {
        $series = new Series();

        $resultado = $series->trazerSerie($id);

        if (!empty($resultado[0]->id)) {
            return view('site.series.assistir', ['serie' => $resultado]);
        } else {
            return redirect()->route('series');
        }
    }
}

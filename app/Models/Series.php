<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Series extends Model
{
    use HasFactory;

    public function trazerSeries() {
        $series = DB::table('videos_serie')
        ->join('series', 'videos_serie.serie_id', '=', 'series.id')
        ->join('diretor', 'videos_serie.director_id', '=', 'diretor.id')->get();
        return $series;
    }


    public function trazerSerie(int $id){
        $series = DB::table('videos_serie')->where('serie_id', $id)->get();

        return $series;
    }
}

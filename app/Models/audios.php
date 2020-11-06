<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class audios extends Model
{
    use HasFactory;

    public function buscarAudios(){
        $audios = DB::table('audios')->get();
        return $audios;
    }
}

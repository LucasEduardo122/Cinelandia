<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class legendas extends Model
{
    use HasFactory;

    public function buscarLegenda(){
        $legendas = DB::table('legendas')->get();
        return $legendas;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Filmes extends Model
{
    use HasFactory;

    protected $Dados;

    public function trazerFilmes(){
        $filmes = DB::table('videos_filme')
        ->join('filmes', 'videos_filme.film_id', '=', 'filmes.id')
        ->join('diretor', 'videos_filme.director_id', '=', 'diretor.id')->get();
        return $filmes;
    }

    public function trazerFilme(int $id) {
        $filme = DB::table('videos_filme')->where('film_id', $id)->get();

        return $filme;
    }

    public function validarFilme(array $dados) {
        $this->Dados = $dados;

        if(in_array('', $this->Dados)){
            $login['status'] = false;
            $login['mensagem'] = "Preencha todos os campos";
            echo json_encode($login);
            return;
        } else {
            $this->adicionarFilmes();
        }
    }

    private function adicionarFilmes() {
         DB::table('filmes')->insert(['nome' => $this->Dados['nome'], 'sinopse' => $this->Dados['sinopse'], 'imagem1' => $this->Dados['imagem1'],
        'imagem2' => $this->Dados['imagem2'], 'imagem3' => $this->Dados['imagem3'], 'legend_id' => $this->Dados['legend_id'], 'audio_id' => $this->Dados['audio_id'],
        'ano' => $this->Dados['ano']]);

        $filme = DB::table('filmes')->where('nome', $this->Dados['nome'])->get();

        $this->adicionarVideoFilme($filme);
    }

    private function adicionarVideoFilme($filme) {
      $video =  DB::table('videos_filme')->insert(['film_id' => $filme[0]->id, 'director_id' => $this->Dados['director_id'], 'url_film' => $this->Dados['url_film']]);

      if($video) {
        $login['status'] = true;
        $login['mensagem'] = "Filme cadastrado";
        echo json_encode($login);
        return;
    } else {
        $login['status'] = false;
        $login['mensagem'] = "Falha ao adicionar os dados";
        echo json_encode($login);
        return;
    }
    }
}

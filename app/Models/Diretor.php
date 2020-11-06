<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Diretor extends Model
{
    use HasFactory;

    protected $Dados;

    public function validarDiretor(array $dados) {
        $this->Dados = $dados;

        if(in_array('', $this->Dados)){
            $login['status'] = false;
            $login['mensagem'] = "Preencha todos os campos";
            echo json_encode($login);
            return;
        } else {

        $this->adicionarDiretor();

        }
    }

    private function adicionarDiretor() {
      $diretor = DB::table('diretor')->insert(['name_director' => $this->Dados['name_director'],
         'studio' => $this->Dados['studio']]);

        if($diretor) {
            $login['status'] = true;
            $login['mensagem'] = "Diretor cadastrado";
            echo json_encode($login);
            return;
        } else {
            $login['status'] = false;
            $login['mensagem'] = "Falha ao adicionar os dados";
            echo json_encode($login);
            return;
        }
    }

    public function buscarDiretor(){
        $diretor = DB::table('diretor')->get();
        return $diretor;
    }
}

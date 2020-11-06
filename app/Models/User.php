<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    private $Dados;

    public function validarUser(array $dados)
    {

        $this->Dados = $dados;

        $user = DB::table('users')->where('email', $this->Dados['email'])->get();

        if (!empty($user)) {
            $this->validarSenha();
        } else {
            $login['status'] = false;
            $login['mensagem'] = "Já temos uma conta com este email";
            echo json_encode($login);
            return;
        }
    }

    private function validarSenha()
    {
        $senha = strlen($this->Dados['password']);

        if ($senha < 6) {
            $login['status'] = false;
            $login['mensagem'] = "Senha com menos de 6 caracteres";
            echo json_encode($login);
            return;
        } else {
            $this->cadastrarUser();
        }
    }

    private function cadastrarUser()
    {
        $resultado = DB::table('users')
            ->insert([
                'name' => $this->Dados['name'], 'email' => $this->Dados['email'], 'password' => Hash::make($this->Dados['password']),
                'nivelAcessoId' => 2
            ]);

        if ($resultado) {
            $login['status'] = true;
            $login['mensagem'] = "Usuário cadastrado com sucesso";
            echo json_encode($login);
            return;
        } else {
            $login['status'] = false;
            $login['mensagem'] = "Falha ao cadastrar";
            echo json_encode($login);
            return;
        }
    }

    public function buscarUser(int $id)
    {
        $user = DB::table('users')->where('id', $id)->get();

        if ($user->nivelAcessoId === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function buscarUserPerfil(int $id)
    {
        $user = DB::table('users')->where('id', $id)->get();

        return $user;
    }

    public function buscarEmail(string $email)
    {
        $user = DB::table('users')->where('email', $email)->get();
        return $user;
    }

    public function updateUser(array $dados, int $id) {
        $this->Dados = $dados;

        $user = DB::table('users')
        ->where('id', $id)
        ->update(['name' => $this->Dados['name'], 
        'email' => $this->Dados['email']]);

        if($user) {
            $login['status'] = true;
            $login['mensagem'] = "Dados atualizados";
            echo json_encode($login);
            return;
        } else {
            $login['status'] = false;
            $login['mensagem'] = "Falha ao atualizar";
            echo json_encode($login);
            return;
        }
    }
}

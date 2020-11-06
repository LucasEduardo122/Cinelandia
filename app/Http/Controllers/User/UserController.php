<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        if(Auth::check()){

            $id = session('id');

            $user = new User();

            $dados = $user->buscarUserPerfil($id);

            return view('site.user.perfil', ['dados' => $dados]);
        } else {    
            return redirect()->route('home');
        }
    }


    public function formupdateUser() {
        if(Auth::check()){

            $id = session('id');

            $user = new User();

            $dados = $user->buscarUserPerfil($id);

            return view('site.user.update', ['dados' => $dados]);
        } else {    
            return redirect()->route('home');
        }
    }

    public function updateUser(Request $request) {
        $dados = ['name' => $request->name, 'email' => $request->email];

        $user = new User();

        $id = session('id');

        $user->updateUser($dados, $id);
    }
}

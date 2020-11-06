<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function formLogin()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('site.Auth.formLogin');
    }

    public function login(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $login['status'] = false;
            $login['mensagem'] = "Email inválido";
            echo json_encode($login);
            return;
        }

        $credentials = ['email' => $request->email, 'password' => $request->password];


        if (Auth::attempt($credentials)) {
            $user = new User();

            $usuario =  $user->buscarEmail($credentials['email']);

            Session::put('id', $usuario[0]->id);
            Session::put('nome', $usuario[0]->name);
            Session::put('email', $usuario[0]->email);
            Session::put('nivel_id', $usuario[0]->nivelAcessoId);

            $login['status'] = true;
            echo json_encode($login);
            return;
        } else {
            $login['status'] = false;
            $login['mensagem'] = "Credenciais informadas inválidas";
            echo json_encode($login);
            return;
        }
    }

    public function deslogar()
    {
        Auth::logout();

        Session::forget(['id', 'nome', 'email', 'nivel_id']);
        return redirect()->route('home');
    }
}

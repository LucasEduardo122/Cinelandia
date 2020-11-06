<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function formRegister()
    {
        return view('site.register.register');
    }

    public function registerUser(Request $request)
    {
        $dados = ['email' => $request->email, 'password'=> $request->password, 'name' => $request->name];

        $user = new User();

        $user->validarUser($dados);
    }
}

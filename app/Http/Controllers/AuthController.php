<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. Mostrar formulário
    public function create()
{
    if (Auth::check()) {
        return redirect()->route('catalogo');
    }

    return view('auth.cadastro'); // ou auth.cadastro
}


    // 2. Processar cadastro
    public function store(Request $request)
    {
        // validação
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // criar usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // login automático
        Auth::login($user);

        // redirecionar
        return redirect()->route('catalogo');
    }
    public function loginForm()
{
    if (Auth::check()) {
        return redirect()->route('catalogo');
    }

    return view('auth.login');
}

// processa o login
public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('catalogo');
    }

    return back()->withErrors([
        'email' => 'Email ou senha inválidos.',
    ])->onlyInput('email');
}

// logout
public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}

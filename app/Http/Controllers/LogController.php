<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

class LogController extends Controller
{
    public function index()
    {
        return view('layout.login');
    }

    public function ingresar(LoginRequest $request) 
    {
        $registro = \App\Registro::where('codigo', $request->codigo)->first();
        $registro_id = $registro ? $registro->id : 0000;
        $data = [
            'registro_id' => $registro_id,
            'dni' => $request->dni,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('inicio');
        }
        return redirect()->route('login')->withErrors('Datos incorrectos.');
    }
}

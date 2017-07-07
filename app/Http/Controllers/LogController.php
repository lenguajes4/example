<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
//use Session;
//use Redirect;

class LogController extends Controller
{
    public function index()
    {
        return view('layout.login');
    }

    public function ingresar(LoginRequest $request) 
    {
        $data = [
            'codigo' => $request->codigo,
            'usuario' => $request->usuario,
            'password' => $request->password
        ];

        if(Auth::attempt($data)) {
            return redirect()->route('/');
        }
        //Session::flash('message-error','Los datos ingresados son incorrectos');
        return redirect()->route('login.index')->withErrors('Datos incorrectos');
    }
}

<?php

namespace App\Http\Controllers;
use Auth;
use App\User; 

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function meusdados()
    {
    	$user = Auth::user();

    	return view('usuarios.meusdados', ['user'=>Auth::user()]);

    }

    public function salvardados(Request $request)
    {
    	$user = User::find($request->id);

    	$user->fill([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'telefone'=>$request->telefone


    	]);

    	$user->save();

    	return redirect()->route('meusdados');
    }

}

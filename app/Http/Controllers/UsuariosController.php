<?php

namespace App\Http\Controllers;
use Auth;
use App\User; 

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function meusdados()
    {
    	
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

    public function usuarios(){
        $usuarios=User::all();
        return view('usuarios.todosusuarios', ['usuarios'=>$usuarios]);

    }

    public function tipo($id,$tipo){

        $user = User::find($id);
        $user->fill([
            'tipoUsuario'=>$tipo

        ]);

        $user->save();
        return redirect()->route('usuarios');

    }

}

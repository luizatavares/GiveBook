<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\livros;


class LivrosController extends Controller
{
    public function meuslivros()
    {


    	$user= Auth::user();

    	$livros=livros::where('idUsuario', '=', $user->id)->get();
    	return view ('livros.meuslivros' , ['livros'=>$livros]);



    }

    public function cadastrarlivro()
    {
    	
    }
}
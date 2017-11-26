<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	App\generos;

class GenerosController extends Controller
{
    public function generos()
    {
    	$generos=generos::all();
    	return view ('generos.generos', ['generos'=>$generos]);
    }

    public function cadastrargenero()
    {
    	return view('generos.cadastrargenero');
    }

    public function salvargenero(Request $request){

    	$genero=generos::create([

    		'genero'=>$request->genero

    	]);
    		return redirect()->route('generos');
    	}

    public function editargenero($id){

    	$genero= generos::find($id);
    	return view ('generos.cadastrargenero', ['genero'=>$genero]);


    }

	public function gravargenero(Request $request){
    		$genero=generos::find($request->id); 


    		$genero->fill([
    			 
    			'genero'=>$request->genero
    			

    		]);
    		$genero->save();
    		return redirect()->route('generos');

	}

	public function excluirgenero($id){

    		$genero=generos::find($id);
    		$genero->delete();
    		return redirect()->route('generos');


    	}
}


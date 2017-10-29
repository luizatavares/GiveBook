<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\livros;
use App\generos;

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
    	$generos=generos::all();
    	return view ('livros.cadastro-edita', ['generos'=>$generos]);


    }

    public function salvarlivro(Request $request){

    	$imagem = $request->file('foto');

    	$livro = new livros;
    	$livro->nome = $request->nome;
    	$livro->descricao = $request->descricao;
        $livro->idGenero = $request->idGenero;
        $livro->idUsuario=Auth::user()->id;
        $livro->foto = $imagem->getClientOriginalName();
        $livro->save();
        $input_data = $request->all();

        $validator = Validator::make(
            $input_data, [
            'imagem.*' => 'required|mimes:jpg,jpeg,png,bmp'
            ],[
                'imagem.*.required' => 'Please upload an image',
                'imagem.*.mimes' => 'Apenas extensões jpeg,png e bmp são permitidas',
            ]
        );

        if ($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400);             
        }
        else{
            $destinationPath = 'imagens/fotos/'.$livro->id;
            $imagem->move($destinationPath,$imagem->getClientOriginalName());
        }
        return redirect()->route('meuslivros');

    }

    	public function editalivro($id){

    		$livro= livros::find($id);
    		$generos=generos::all();
    		return view ('livros.cadastro-edita', ['generos'=>$generos,'livro'=>$livro]);

    	}

    	public function gravarlivro(Request $request){
    		$livro=livros::find($request->id); 
    		$livro->fill([
    			'nome'=>$request->nome, 
    			'descricao'=>$request->descricao,
    			'idGenero'=>$request->idGenero

    		]);
    		$livro->save();
    		return redirect()->route('meuslivros');
    	}

    	public function excluilivro($id){

    		$livro=livros::find($id);
    		$livro->delete();
    		return redirect()->route('meuslivros');

    	}
}
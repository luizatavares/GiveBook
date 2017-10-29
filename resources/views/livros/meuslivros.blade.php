@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meus Livros 


                    <div class="pull-right"><a href="{{route('cadastrarlivro')}}">Cadastrar Livro</a></div>


                </div>




                <div class="panel-body">
                    
                 @if(count($livros)==0)
                     Não há livros cadastrados. 
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Código</td>
                                <td>Nome</td>
                                <td>Genero</td>
                                <td>Descrição</td>
                                <td></td>
                                <td></td>
                            </thead>
                            <tbody>
                                @foreach ($livros as $livro)
                                <tr>
                                    <td>{{ $livro->id }}</td>
                                    <td>{{ $livro->nome }}</td>
                                    <td>{{ $livro->Genero->genero }}</td>
                                    <td>{{ $livro->descricao }}</td>
                                    <td>
                                        <a href="{{route('editalivro', ['id'=>$livro->id])}}"><span class="glyphicon glyphicon-pencil"></span></a> 
                                    </td>
                                    <td>
                                        <a href="{{route('excluilivro', ['id'=>$livro->id])}}"><span class="glyphicon glyphicon-remove"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>
                    
                 @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

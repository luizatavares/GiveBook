@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meus Livros 


                    <div class="pull-right"><a href="{{route('cadastrargenero')}}">Cadastrar Genero</a></div>


                </div>




                <div class="panel-body">
                    
                 @if(count($generos)==0)
                     Não há gêneros cadastrados. 
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Código</td>
                                <td>Genero</td>
                                <td></td>
                                <td></td>
                            </thead>
                            <tbody>
                                @foreach ($generos as $genero)
                                <tr>
                                    <td>{{ $genero->id }}</td>
                                    <td>{{ $genero->genero }}</td>
                                    <td>
                                        <a href="{{route('editargenero', ['id'=>$genero->id])}}"><span class="glyphicon glyphicon-pencil"></span></a> 
                                    </td>
                                    <td>
                                        <a href="{{route('excluirgenero', ['id'=>$genero->id])}}"><span class="glyphicon glyphicon-remove"></span></a>
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

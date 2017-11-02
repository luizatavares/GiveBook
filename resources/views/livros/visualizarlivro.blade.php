@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$livro->nome}}  


                   


                </div>




                <div class="panel-body">
                    
                
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <td>Código</td>
                                <td>Nome</td>
                                <td>Genero</td>
                                <td>Descrição</td>
                               <td>Imagem</td>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>{{ $livro->id }}</td>
                                    <td>{{ $livro->nome }}</td>
                                    <td>{{ $livro->Genero->genero }}</td>
                                    <td>{{ $livro->descricao }}</td>
                                    <td>
                                        <img class="img-responsive" src="{{ asset('imagens/fotos/'.$livro->id.'/'.$livro->foto) }}">
                                    </td>
                                    
                                </tr>
                             
                            </tbody>
                        </table>    
                    </div>      


                </div>
            </div>

 <div class="panel panel-default">
                <div class="panel-heading">Dados do Doador  


                   


                </div>




                <div class="panel-body">
                    
                
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td>Telefone</td>
                                
                               
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>{{ $livro->Proprietario->name }}</td>
                                    <td>{{ $livro->Proprietario->email }}</td>
                                    <td>{{ $livro->Proprietario->telefone }}</td>
                                   
                                </tr>
                             
                            </tbody>
                        </table>    
                    </div>      


                </div>
            </div>






        </div>
    </div>
</div>
@endsection

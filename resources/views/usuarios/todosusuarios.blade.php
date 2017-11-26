@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos Usuários 


                    
                </div>




                <div class="panel-body">
                    
                 @if(count($usuarios)==0)
                     Não há livros cadastrados. 
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <td>Código</td>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td>Telefone</td>
                                <td>Tipo de Usuário</td>
                                <td>Alterar Tipo</td>
                                <td></td>
                                <td></td>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $users)
                                <tr>
                                    <td>{{ $users->id }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->telefone }}</td>
                                    <td>{{ $users->tipoUsuario }}</td>
                                <td>
                                    @if ($users->tipoUsuario == 'admin')
                                        <a href="{{route('alterartipo', ['id'=>$users->id, 'tipo'=>'padrao'])}}"><span class="glyphicon glyphicon-retweet"></span></a>
                                    @else
                                        <a href="{{route('alterartipo', ['id'=>$users->id, 'tipo'=>'admin'])}}"><span class="glyphicon glyphicon-retweet"></span></a> 
                                    @endif
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

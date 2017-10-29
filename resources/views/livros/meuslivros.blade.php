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


                 @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

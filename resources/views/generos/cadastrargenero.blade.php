@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gerenciar Livros 


                    

                </div>




                <div class="panel-body">
                    
                    <form action="{{ isset($genero) ? route('gravargenero') : route('salvargenero')}}" method="post" enctype="multipart/form-data">
                      <div class="form-group"><label>
                            Nome: 
                        </label>
                        <input type="text" name="genero" class='form-control' value='{{ isset($genero) ? $genero->genero : ''}}' required>
                    </div>
                     
                                         

                    <div class="form-group">
                        @if (isset($genero))
                        <input type="hidden" name="id" value='{{$genero->id}}'>
                        @endif
                        {{csrf_field()}}
                        <input type="submit" class="col-md-12 btn btn-success" name="salvar" value='Salvar'>
                        
                    </div>

                    

                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

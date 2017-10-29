@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gerenciar Livros 


                    

                </div>




                <div class="panel-body">
                    
                    <form action="{{route('salvarlivro')}}" method="post" enctype="multipart/form-data">
                      <div class="form-group"><label>
                            Nome: 
                        </label>
                        <input type="text" name="nome" class='form-control' value='{{ isset($livro) ? $livro->nome : ''}}' required>
                    </div>
                     
                     <div class="form-group"><label>
                           Descrição: 
                        </label>
                        <textarea name = "descricao" rows = "5" class = "form-control" required></textarea>
                    </div>


                     <div class="form-group"><label>
                            Gênero: 
                        </label>
                        <select name='idGenero' class="form-control" required>
                            <option value="">Selecione um gênero</option>
                        @foreach ($generos as $genero)
                        <option value='{{$genero->id}}'>{{$genero->genero}}</option>
                        @endforeach                            
                        </select>
                    </div>

                     <div class="form-group"><label>
                           Foto: 
                        </label>
                        <input type="file" name="foto" required>
                    </div>



                    <div class="form-group">
                        @if (isset($livro))
                        <input type="hidden" name="id" value='{{$livro->id}}'>
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

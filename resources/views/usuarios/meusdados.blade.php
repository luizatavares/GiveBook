@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Meus Dados</div>




                <div class="panel-body">
                    
                  <form action="{{route('salvardados')}}" method="post">
                      <div class="form-group"><label>
                            Nome: 
                        </label>
                        <input type="text" name="name" class='form-control' value='{{ $user->name }}'>
                    </div>
                     <div class="form-group"><label>
                            E-mail: 
                        </label>
                        <input type="text" name="email" class='form-control' value='{{ $user->email }}'>
                    </div>
                    <div class="form-group"><label>
                            Telefone: 
                        </label>
                        <input type="text" name="telefone" class='form-control' value='{{ $user->telefone }}'>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value='{{$user->id}}'>
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

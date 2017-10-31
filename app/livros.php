<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livros extends Model
{
	protected $fillable = [
        'nome', 'descricao', 'idGenero','idUsuario', 'foto'
    ];
    
    public function Genero(){
    	return $this->belongsTo("App\generos", 'idGenero');
    }

    public function Proprietario(){
    	return $this->belongsTo("App\User", 'idUsuario');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livros extends Model
{
    public function Genero(){
    	return $this->belongsTo("App\generos", 'idGenero');
    }
}

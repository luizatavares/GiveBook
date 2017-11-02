<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\generos;

class InicioController extends Controller
{
  
public function inicio(){
$generos=generos::all();


return view('welcome', ['generos'=>$generos]);

}

public function quemsomos(){

return view('quemsomos');



}

}

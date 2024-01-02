<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //Buscar a una vista index que esté dentro de una carpeta que se llame post
        //view hará que valla a views y busque la carpeta post y dentro de ella el archivo index
        //El archivo al que apunta etá en  publicaciones\resources\views\posts\index.blade.php
        return view('posts.index');
    }
    public function store(Request $request){
        //guardar Retorna todo lo que te han enviado
        return $request->all();
    }

    public function destroy(){
        
    }
}

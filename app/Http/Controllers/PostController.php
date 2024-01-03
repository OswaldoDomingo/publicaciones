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
        //Validar si body está vacío o no
        $request->validate([
            'body' => 'required'
        ]);
        //Helper para depurar errores
        // dd($request->only('body'));
        
        //El helper también puede ser, la idea es cerear un array, son diferentes técnicas para llegar a un resultado
        // dd(['body' => $request->body]);
        
        // Retorna todo lo que te han enviado si es que no hay errores en la validación
        // return $request->all();
        //Crea una publicación a partir de el usuario
        //posts() es una referencia al modelo que definimos en app\Models\User.php\User.php 
        // retorna solo el campo body de lo que se envió
        $request->user()->posts()->create($request->only('body'));

        //Redirecciona a la página anterior, que será el index
        return back()->with('status', 'Publicación guardada con éxito!');

    }

    public function destroy(){
        
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body'];

    //Creamos una nueva propiedad protegida
    //Cada vez que se hace una consulta, inculuirá la relación de los usuarios
    // La propiedad $with es una característica de Eloquent que especifica las relaciones 
    //que deben cargarse automáticamente cada vez que se recupera una instancia de Post. 
    //En este caso, cada vez que recuperas un Post, Laravel también cargará automáticamente la relación user.
    protected $with = ['user'];
    
    //Una publicación pertenece a un usuario
    public function user()
    {
        //Un post pertenece a un usuario
        return $this->belongsTo(User::class);
    }
}

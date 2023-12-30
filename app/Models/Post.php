<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body'];
    
    //Una publicación pertenece a un usuario
    public function user(){
        //Un post pertenece a un usuario
        $this->belongsTo(User::class);
    }
}

<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;

//Añadida a mano ya que no se crea cuando se crea la clase
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    //Añadida a mano ya que no se crea cuando se crea la clase
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    // public function __construct()
    // {
    //     //
    // }
    public function delete(User $user, Post $post){
        return $user->id === $post->user_id;

    }
}

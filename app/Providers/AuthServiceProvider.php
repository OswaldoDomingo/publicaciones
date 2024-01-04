<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Post;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //Añado esta línea que no estaba en el código original
        $this->registerPolicies();
        //
        Gate::define('destroy-post', function(User $user, Post $post){
            //Si el usuario es igual al que ha creado el post puede borrarlo retorna verdadero o falso
            return $user->id === $post->user_id;
        });

    }
}

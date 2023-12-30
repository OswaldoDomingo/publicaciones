<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //conectar las publicaciones con los diferentes usuarios
            $table->unsignedBigInteger('user_id');
            //Relacion user_id con id de la tabla users con eliminacion en cascada
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //donde se van a guardar los post
            $table->text('body');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

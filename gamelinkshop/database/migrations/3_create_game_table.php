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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('game_name');
            $table->longText('description');
            $table->foreign('genre_id')->references('id')->on('game_genres');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id_2')->references('id')->on('game_genres');
            $table->unsignedBigInteger('genre_id_2')->nullable();
            $table->integer('sold_quatity');
            $table->decimal('price', 9, 2);
            $table->string('game_image');
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users');
            $table->string('game_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

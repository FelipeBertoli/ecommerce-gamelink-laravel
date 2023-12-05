<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameGenre extends Model
{
    use HasFactory;
    protected $table = "game_genres";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'genre_name',
    ];

    public function games() {
        return $this->hasMany(Game::class, 'genre_id');
    }

    public function gamesSecondGenre()
    {
        return $this->hasMany(Game::class, 'genre_id_2');
    }
}

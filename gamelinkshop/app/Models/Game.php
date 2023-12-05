<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = "games";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'game_name',
        'description',
        'genre_id',
        'genre_id_2',
        'sold_quatity',
        'price',
        'game_img',
        'author_id',
        'game_link'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function genre_1()
    {
        return $this->belongsTo(GameGenre::class, 'genre_id');
    }

    public function genre_2()
    {
        return $this->belongsTo(GameGenre::class, 'genre_id_2');
    }

    public function cartGames() {
        return $this->hasMany(GameCart::class);
    }

    public function libraryGames() {
        return $this->hasMany(LibraryGame::class);
    }
}

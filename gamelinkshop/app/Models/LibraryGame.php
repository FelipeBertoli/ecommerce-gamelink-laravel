<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryGame extends Model
{
    use HasFactory;
    protected $table = "library_games";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'game_id',
        'library_id'
    ];

    public function game() {
        return $this->belongsTo(Game::class);
    }

    public function library() {
        return $this->belongsTo(Library::class);
    }
}

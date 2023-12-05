<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Library extends Model
{
    use HasFactory;
    protected $table = "library";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function libraryGames() {
        return $this->hasMany(LibraryGame::class);
    }
}

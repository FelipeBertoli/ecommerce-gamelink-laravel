<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameCart extends Model
{
    use HasFactory;
    protected $table = "cart_games";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'game_id',
        'cart_id'
    ];

    public function game() {
        return $this->belongsTo(Game::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}

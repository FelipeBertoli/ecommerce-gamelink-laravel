<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameCart;
use App\Models\Library;
use App\Models\LibraryGame;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{
    function getGames()
    {
        $games = Game::with('users', 'genre_1', 'genre_2')->get();

        return view('store', compact('games'));
    }

    function gamePage($id)
    {
        $game = Game::find($id);
        $user = auth()->user();
        $cart = $user->cart;
        return view('game', compact('game', 'cart'));
    }

    function saveCart(Request $request)
    {
        $request->validate([
            'game_id' => 'required',
            'cart_id' => 'required'
        ]);
        $gameCart = GameCart::create([
            'game_id' => $request->input('game_id'),
            'cart_id' => $request->input('cart_id'),
        ]);

        $user = auth()->user();
        $cart = $user->cart;

        $cart->totalItens += 1;
        $cart->price += $gameCart->game->price;

        $cart->save();

        return redirect(route('cart'));
    }

    function getCartGames()
    {
        $user = auth()->user();
        $cart = $user->cart;
        $cartGames = $cart->cartGames()->with('game')->get();
        $library = $user->library;

        return view('cart', compact('cartGames', 'cart', 'user', 'library'));
    }

    function postCartGames(Request $request)
    {
        $request->validate([
            'game_id' => 'required',
            'library_id' => 'required'
        ]);

        $gameIds = $request->input('game_id');
        $libraryIds = $request->input('library_id');
        
        foreach ($gameIds as $index => $gameId) {
            $libraryId = $libraryIds[$index];
            
            // Aqui você pode salvar os dados como necessário usando $gameId e $libraryId
            // Exemplo de como poderia ser utilizado:
            LibraryGame::create([
                'game_id' => $gameId,
                'library_id' => $libraryId,
                'cart_id' => $request->input('cart_id'),
            ]);
        }


        return redirect(route('confirmation'));
    }

    function getLibraryGames()
    {
        $user = auth()->user();
        $library = $user->library;
        $libraryGames = $library->libraryGames()->with('game')->get();

        return view('library', compact('libraryGames', 'library', 'user'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameCart;
use App\Models\Library;
use App\Models\LibraryGame;
use App\Models\GameGenre;
use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{
    function getGames()
    {
        $games = Game::with('author', 'genre_1', 'genre_2')->get();
        $genres = GameGenre::with('games', 'gamesSecondGenre', 'games.author')->get();


        return view('store', compact('games', 'genres'));
    }

    function gamePage($id)
    {
        $game = Game::find($id);
        $user = auth()->user();
        $cart = $user->cart;
        $userHasGame = false;
        $userHasGame = $user->library->libraryGames->contains('game_id', $id);
        return view('game', compact('game', 'cart', 'userHasGame'));
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

            LibraryGame::create([
                'game_id' => $gameId,
                'library_id' => $libraryId,
                'cart_id' => $request->input('cart_id'),
            ]);

            $user = auth()->user();
            $cart = $user->cart;
            $cartId = $cart->id;
            GameCart::where('cart_id', $cartId)->delete();
            $cart->totalItens = 0;
            $cart->price = 0;

            $cart->save();
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

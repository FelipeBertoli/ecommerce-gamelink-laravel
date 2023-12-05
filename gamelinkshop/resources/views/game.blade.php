@extends('template.template')
@section('css')
<link rel="stylesheet" href="{{asset('css/game.css')}}">
@endsection

<!-- #region MAIN-->
@section('main')

<div class="game-container">
    <div class="game-content">
        <img src="{{ $game-> game_image }}" alt="">
        <div class="game-info">
            <div class="game-inline">
                <span class="game-title">{{ $game->game_name }}</span>
                <span class="game-publisher">{{ $game->users->username }}</span>
                <hr>
            </div>
            <div class="game-inline">
                <span class="game-genre">{{ $game->genre_1->genre_name }}</span>
                @if (!is_null($game->genre_2))
                <span class="game-genre">{{ $game->genre_2->genre_name }}</span>
                @endif

            </div>
            <p class="game-description">{{ $game->description }}</p>
            <div class="game-block">
                <span class="game-price">R$ {{ $game->price }}</span>
                <form action="{{route('game.post')}}" method="POST">
                    @csrf
                    <input class="d-none" name="game_id" value="{{ $game->id }}"></input>
                    <input class="d-none" name="cart_id" value="{{ $cart->id }}"></input>
                    <button class="btn-add" type="submit"><span>+</span>Carrinho</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
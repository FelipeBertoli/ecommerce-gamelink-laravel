@extends('template.template')
    @section('css')
    <link rel="stylesheet" href="{{asset('css/library.css')}}">
    @endsection
    <!-- #region MAIN-->
    @section('main')
    <main>
            <div class="main-grid">
                <h1 class="main-title">BIBLIOTECA</h1>
            </div>
            <hr class="main-line">

            <div class="library-content">
                <div class="game-grid">
                @foreach($libraryGames as $libraryGame)
                
                    <a class="game-card" href="{{ $libraryGame->game->game_link}}" target="_blank"><img src="{{ $libraryGame->game->game_image }}" alt="" class="game-img"><span class="game-title">{{ $libraryGame->game->game_name }}</span></a>
                @endforeach
            </div>
    </main>
    @endsection

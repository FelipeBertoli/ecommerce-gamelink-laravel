
@extends('template.template')
    @section('css')
    <link rel="stylesheet" href="{{asset('css/store.css')}}">
    @endsection
    <!-- #region MAIN-->
    @section('main')
            <!-- #region HIGHLIGHTS-->
    <div class="main-grid">
                <h1 class="main-title mr-auto">Loja</h1>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Procurar..." aria-label="Procurar">
                    <button class="btn my-2 my-sm-0" type="submit">Procurar</button>
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="margin-left: 5%;">Filtros</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </form>
            </div>
            <hr class="main-line">
            <!-- #endregion-->

            <!-- #region HIGHLIGHTS-->
            <div class="store-content">
                <div class="store-subtitle">
                    <h5>DESTAQUES</h5>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../img/games/defend-the-crown.PNG" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/games/star-wars.PNG" class="d-block" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/games/running-nikuman.PNG" class="d-block" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- #endregion -->

            <!-- #region CONTENT-->
            <div class="store-content">
                <div class="store-subtitle">
                    <h5>TODOS OS JOGOS</h5>
                </div>
                <div id="game-container">
                    <span onclick="slideRight()" class="arrow-btn"></span>
                    <div id="game-slider">
                        @foreach($games as $game)
                        <a class="game-card" href="{{ route('game', ['id' => $game->id]) }}">
                            <img src="{{ $game-> game_image }}" alt="" class="game-img">
                            <span class="game-price">R$ {{ $game->price }}</span>
                            <div class="game-info">
                                <h3 class="game-title">{{ $game->game_name }}</h3>
                                <span class="game-publisher">{{ $game->users->username }}</span>
                                <label class="game-genre">{{ $game->genre_1->genre_name }}</label>
                                @if (!is_null($game->genre_2))
                                <label class="game-genre">{{ $game->genre_2->genre_name }}</label>
                                @endif
                                
                                <p class="game-description">{{ $game->description }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <span onclick="slideLeft()" class="arrow-btn"></span>
                </div>
            </div>
            <!-- #endregion -->
        </div>
    @endsection
    <!-- #endregion -->
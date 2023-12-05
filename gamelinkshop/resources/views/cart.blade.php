@extends('template.template')
@section('css')
<link rel="stylesheet" href="{{asset('css/payment.css')}}">
@endsection

<body style="background: white;">
    <!-- #region MAIN-->
    @section('main')
    <div class="payment-container">
        <form action="{{route('cart.post')}}" method="POST">
            @csrf
            <div class="payment-grid">
                <span>Seu carrinho</span>
            </div>
            <div class="cart-content">
                @foreach($cartGames as $cartGame)
                

                <input class="d-none" name="game_id[]" value="{{ $cartGame->game->id }}"></input>
                <input class="d-none" name="library_id[]" value="{{ $library->id }}"></input>


                <div class="cart-item">
                    <img src="{{$cartGame->game->game_image}}" alt="">

                    <div class="cart-details">
                        <span class="game-title">{{$cartGame->game->game_name}}</span>
                        <span class="game-value">R$ {{$cartGame->game->price}}</span>
                        <button class="btn-trash"><i class="fi fi-br-trash"></i></button>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="payment-group mt-1">
                <button class="btn-generic">Remover todos os itens</button>
            </div>

            <div class="payment-grid mt-5">
                <span>Realizar compra</span>
            </div>
            <div class="payment-group">
                <span class="border p-5"><b>API DE PAGAMENTO AQUI</b></span>
            </div>
            <div class="payment-group">
                <span>Quantidade total de itens: <b>{{$cart->totalItens}}</b></span>
                <span>Valor total: <b>{{$cart->price}}</b></span>
            </div>

            <div class="payment-group">
                <button class="btn-generic" type="submit">Confirmar compra</button>
            </div>

    </div>
    </form>
    @endsection
</body>
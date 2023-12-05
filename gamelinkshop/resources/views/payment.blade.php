@extends('template.template')
    @section('css')
    <link rel="stylesheet" href="{{asset('css/library.css')}}">
    @endsection
    <!-- #region MAIN-->
    @section('main')
    <!-- #region MAIN-->
    <main>
        <div class="payment-container">
            <div class="payment-grid">
                <span>Finalizar compra</span>
            </div>
          
            <div class="payment-group">
                <span>Valor total: <b>R$ 00,00</b></span>
            </div>
            <div class="payment-group">
                <a href="" class="cart-ref"><button class="btn-generic">Finalizar compra</button></a>
            </div>

        </div>
    </main>
    @endsection

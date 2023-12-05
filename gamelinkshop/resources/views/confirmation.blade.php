@extends('template.template')
    @section('css')
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    @endsection
    
<body style="background: white;">
    @section('main')
    
        <div class="payment-container">
            <div class="payment-group">
                <div class="swal-icon swal-icon--success">
                    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
                    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
                    <div class="swal-icon--success__ring"></div>
                    <div class="swal-icon--success__hide-corners"></div>
                </div>
            </div>
            <div class="payment-group">
                <span><b>Compra realizada com sucesso!</b></span>
                <span>Vá aproveitar os seus jogos!</span>
            </div>
            <div class="payment-group">
                <a href="{{route('library')}}" class="cart-ref"><button class="btn-generic">Ir para biblioteca</button></a>
            </div>

        </div>
        </body>
    @endsection
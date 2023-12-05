@extends('template.template')
@section('css')
<link rel="stylesheet" href="{{asset('css/workshop.css')}}">
@endsection
<!-- #region MAIN-->
@section('main')
<main>
    <div class="main-grid">
        <h1 class="main-title mr-auto">WORKSHOP</h1>
        <button class="btn btn-add" id="btn-add"><span>+</span>Adicionar jogo</button>
    </div>
    <hr class="main-line">

    <div id="result"></div>

    <div class="workshop-content">
        <div class="workshop-item">
            <img src="../../img/placeholder.jpg" alt="">
            <span class="game-title workshop-span">Jogo</span>
            <div class="game-genres">
                <small>Gênero I</small>
                <small>Gênero II</small>
            </div>
            <div class="workshop-group">
                <span class="workshop-span">Valor atual</span>
                <span class="workshop-value">R$ 00,00</span>
            </div>
            <div class="workshop-group">
                <span class="workshop-span">Cópias vendidas</span>
                <span class="workshop-value">0</span>
            </div>
            <button class="btn btn-generic" id="btn-edit" onclick="openEdit()">EDITAR</button>
            <button class="btn btn-trash" id="btn-trash"><i class="fi fi-br-trash"></i></button>
        </div>
        <div class="workshop-item">
            <img src="../../img/placeholder.jpg" alt="">
            <span class="game-title workshop-span">Jogo</span>
            <div class="game-genres">
                <small>Gênero I</small>
                <small>Gênero II</small>
            </div>
            <div class="workshop-group">
                <span class="workshop-span">Valor atual</span>
                <span class="workshop-value">R$ 00,00</span>
            </div>
            <div class="workshop-group">
                <span class="workshop-span">Cópias vendidas</span>
                <span class="workshop-value">0</span>
            </div>
            <button class="btn btn-generic" id="btn-edit" onclick="openEdit()">EDITAR</button>
            <button class="btn btn-trash" id="btn-trash"><i class="fi fi-br-trash"></i></button>
        </div>
    </div>
</main>
<script src="../../js/game.js"></script>
@endsection
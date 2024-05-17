@extends('site.layout')
@section('title', 'BitStorm - Product Details Page')
@section('conteudo')

<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-6 text-center">
            <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h1 class="display-4 mb-4">{{ $produto->nome }}</h1>
            <p class="lead mb-4">{{ $produto->descricao }}</p>
            <p class="lead mb-4">Postado por:{{ $produto->user->firstName }}</p>
            <p class="lead mb-4">Categoria:{{ $produto->categoria->nome }}</p>
            <button class="btn btn-primary btn-lg">Comprar</button>
        </div>
    </div>
</div>

@endsection

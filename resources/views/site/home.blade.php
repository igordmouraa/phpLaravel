@extends('site.layout')
@section('title', 'BitStorm - Home Page')
@section('conteudo')

<div class="row row-cols-1 row-cols-md-3 g-3 p-5">
    @foreach($produtos as $produto)
    <div class="col">
        <div class="card h-80">
            <img src="{{ $produto->imagem }}" class="card-img-top" alt="{{ $produto->nome }}">
            <div class="card-body">
                <h5 class="card-title">{{ $produto->nome }}</h5>
                <p class="card-text">{{ $produto->descricao }}</p>
                <a href="{{ route('site.details', $produto->slug)}}" class="btn btn-primary btn-sm">Veja agora!</a>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">{{ $produto->updated_at }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>

<nav aria-label="Page navigation example">
    <div class="d-flex justify-content-center">
        {{ $produtos->links('custom.pagination') }}
    </div>
</nav>

@endsection

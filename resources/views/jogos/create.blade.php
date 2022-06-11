@extends('layouts.app')

@section('title', 'Criação')
    
@section('content')
    <div class="container mt-5">
        <h1>Crie um novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite um nome">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input class="form-control" type="text" name="categoria" placeholder="Digite uma categoria">
            </div>
            <div class="form-group">
                <label for="ano_criacao">Lançamento:</label>
                <input class="form-control" type="number" name="ano_criacao" placeholder="Ano de lançamento">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input class="form-control" type="number" name="valor" placeholder="Digite qual o valor">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
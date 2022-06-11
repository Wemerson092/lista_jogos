@extends('layouts.app')

@section('title', 'Edição')
    
@section('content')
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" value="{{ $jogos->nome }}"     placeholder="Digite um nome">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input class="form-control" type="text" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma categoria">
            </div>
            <div class="form-group">
                <label for="ano_criacao">Lançamento:</label>
                <input class="form-control" type="number" name="ano_criacao" value="{{ $jogos->ano_criacao }}"placeholder="Ano de lançamento">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input class="form-control" type="number" name="valor" value="{{ $jogos->valor }}"placeholder="Digite qual o valor">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
            </div>
        </form>
    </div>
@endsection
@extends('template.template')
@section('content')

    <form>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" placeholder="Digite seu nome" autofocus required>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="Digite seu email">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a class="btn btn-danger" href="/crud-laravel/public/">Retornar</a>
    </form>

@endsection
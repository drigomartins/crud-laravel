@extends('template.template')
@section('content')

    <form method="post" action="/crud-laravel/public/cadastrar">
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" value="{{($usuario)?'$usuario->name':'' }}" placeholder="Digite seu nome" autofocus required>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control"value="{{($usuario)?'$usuario->email':'' }}" placeholder="Digite seu email">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a class="btn btn-danger" href="/crud-laravel/public/">Retornar</a>
    </form>

@endsection
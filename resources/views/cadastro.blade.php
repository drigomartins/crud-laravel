@extends('template.template')
@section('content')
    
    @if(isset($usuario))
    <form method="post" action="/crud-laravel/public/update/{{$usuario->id}}">
    @else
    <form method="post" action="/crud-laravel/public/cadastrar">
    @endif
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Nome:</label>
        @if(isset($usuario))
        <input type="text" name="name" class="form-control" value="{{$usuario->name}}" placeholder="Digite seu nome" autofocus required>
        @else
        <input type="text" name="name" class="form-control" placeholder="Digite seu nome" autofocus required>
        @endif
    </div>
    <div class="form-group">
        <label>Email:</label>
        @if(isset($usuario))
        <input type="email" name="email" class="form-control" value="{{$usuario->email}}" placeholder="Digite seu email">
        @else
        <input type="email" name="email" class="form-control" placeholder="Digite seu email">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a class="btn btn-danger" href="/crud-laravel/public/">Retornar</a>
    </form>

@endsection
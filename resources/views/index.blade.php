@extends('template.template')
@section('content')

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Opções</th>
        </tr>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>
                <a class="btn btn-success" href="/crud-laravel/public/alterar/{{$usuario->id}}">Alterar</a>
                <a class="btn btn-danger" href="/crud-laravel/public/deletar/{{$usuario->id}}">Deletar</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a class="btn btn-primary" href="/crud-laravel/public/cadastro">Cadastrar</a>

@endsection
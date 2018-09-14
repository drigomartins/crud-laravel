@extends('template.template')
@section('content')
    <a class="btn btn-primary" href="/crud-laravel/public/cadastro">Cadastrar</a>

    <table class="table table-striped" style="margin-top:20px">
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

    <div style="display: flex;justify-content: center;">{!! $usuarios->links()  !!}</div>

@endsection
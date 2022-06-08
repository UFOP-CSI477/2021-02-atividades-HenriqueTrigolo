@extends('principal')

@section('conteudo')

    <a href="{{route('estados.create')}}">Cadastrar</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $e)
            <tr>
                <th>{{$e->id}}</th>
                <th>{{$e->nome}}</th>
                <th>{{$e->sigla}}</th>
                <th><a href="{{route('estados.show', $e->id)}}">Exibir</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
@extends('principal')

@section('conteudo')
    
    <a href="{{route('produtos.create')}}">Cadastrar</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>UM</th>
                <th>Exibir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $p)
            <tr>
                <th>{{$p->id}}</th>
                <th>{{$p->nome}}</th>
                <th>{{$p->um}}</th>
                <th><a href="{{route('produtos.show', $p->id)}}">Exibir</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
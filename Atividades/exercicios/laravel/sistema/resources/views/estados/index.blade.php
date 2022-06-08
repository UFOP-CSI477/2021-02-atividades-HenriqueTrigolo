@extends('principal')

@section('conteudo')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sigla</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $e)
            <tr>
                <th>{{$e->id}}</th>
                <th>{{$e->nome}}</th>
                <th>{{$e->sigla}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
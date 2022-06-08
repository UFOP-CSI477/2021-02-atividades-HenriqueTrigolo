@extends('principal')

@section('conteudo')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>UM</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $p)
            <tr>
                <th>{{$p->id}}</th>
                <th>{{$p->nome}}</th>
                <th>{{$p->um}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
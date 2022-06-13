@extends('administrativa')

@section('tabela')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Data limite</th>
                <th>Nome do equipamento</th>
                <th>Nome do usuário</th>
                <th>Tipo da manutenção</th>
                <th>Descrição da manutenção/problema</th>    
                <th>Exibir</th>         
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $r)
            @foreach($equipamentos as $e)
            @foreach($users as $u)
            <tr>
            @if($e->id == $r->equipamento_id && $u->id == $r->user_id)
                <th>{{$r->datalimite}}</th>
                <th>{{$e->nome}}</th>
                <th>{{$u->name}}</th>
                <th>{{$r->tipo}}</th>
                <th>{{$r->descricao}}</th>
                <th><a href="{{route('registros.show', $e->id)}}">Exibir</a></th>
                @endif
            </tr>
            @endforeach
            @endforeach
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{route('registros.create')}}">Cadastrar</a>
    </div>

@endsection
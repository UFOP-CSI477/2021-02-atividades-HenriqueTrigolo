@extends('administrativa')

@section('conteudo')

<h1>Dados dos Equipamento</h1>
<p>Id: {{$equipamento->id}}</p>
<p>Nome: {{$equipamento->nome}}</p>

<a href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>

<a href="{{route('equipamentos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('equipamentos.destroy', $equipamento->id)}}" method="post">
    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">
</form>

@endsection
@extends('administrativa')

@section('conteudo')

<h1>Dados da Manutenção</h1>
<p>Tipo da manutenção: {{$registro->tipo}}</p>
<p>Descrição: {{$registro->descricao}}</p>

<a href="{{route('registros.edit', $registro->id)}}">Editar</a>

<a href="{{route('registros.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('registros.destroy', $registro->id)}}" method="post">
    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">
</form>

@endsection
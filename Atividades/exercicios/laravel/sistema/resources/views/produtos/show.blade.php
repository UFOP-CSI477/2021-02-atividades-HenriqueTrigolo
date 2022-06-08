@extends('principal')

@section('conteudo')

<h1>Dados dos Produtos</h1>
<p>Id: {{$produto->id}}</p>
<p>Nome: {{$produto->nome}}</p>
<p>UM: {{$produto->um}}</p>

<a href="{{route('produtos.edit', $produto->id)}}">Editar</a>

<a href="{{route('produtos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('produtos.destroy', $produto->id)}}" method="post">
    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">
</form>

@endsection
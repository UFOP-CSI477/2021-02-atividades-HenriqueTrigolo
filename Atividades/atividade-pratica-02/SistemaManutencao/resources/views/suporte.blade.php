@extends('index')

@section('conteudo')

<a href="{{route('equipamentos.index')}}">Lista de equipamentos</a>

<a href="{{route('registros.index')}}">Manutenções cadastradas para os equipamentos</a>

@yield('tabela')


@endsection
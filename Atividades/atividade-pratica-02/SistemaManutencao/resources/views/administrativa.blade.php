@extends('index')

@section('conteudo')

    <a href="{{route('equipamentos.index')}}">Equipamentos</a>
    <a href="{{route('registros.index')}}">Manutenções</a>

@yield('tabela')

@endsection
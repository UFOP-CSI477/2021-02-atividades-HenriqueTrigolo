@extends('index')

@section('conteudo')
<?php
    $email = $_GET['email'];
    $senha = $_GET['senha'];
?>

    @foreach($users as $u)
       
    @if($u->email == $email && $u->password == $senha)
        <a href="{{route('equipamentos.index')}}">Equipamentos</a>
        <a href="{{route('registros.index')}}">Manutenções</a>
    @endif
    @endforeach

@yield('tabela')

@endsection
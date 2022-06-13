@extends('administrativa')

@section('conteudo')

@foreach ([$equipamentos, $users] as list ($e, $u))

<form action="{{route('equipamentos.store')}}" method="post">

    @csrf
    <div class="form-group">
        <label for="nome">Nome do equipamento</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <div class="form-group">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>
@endforeach
@endsection
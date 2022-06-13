@extends('administrativa')

@section('conteudo')

<form action="{{route('registros.update', $registro->id)}}" method="post">

    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="tipo">Tipo da manutenção</label>
        <select name="tipo" id="tipo">
            <option value="1">1 - Preventiva</option>
            <option value="2">2 - Corretiva</option>
            <option value="3">3 - Urgente</option>
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <div class="form-group">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </div>
</form>

@endsection
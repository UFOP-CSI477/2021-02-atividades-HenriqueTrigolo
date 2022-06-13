@extends('index')

@section('conteudo')

<form action="{{route('users.index')}}" method="get">
@csrf

    <h1 class="h3 mb-3 fw-normal">Efetue o Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
      <label for="email">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senha" id="senha" placeholder="Password">
      <label for="senha">Senha</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">Sistemas de Informação – 2022</p>
</form>

<form action="{{route('users.create')}}">
    <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar usuário</button>
</form>


@endsection
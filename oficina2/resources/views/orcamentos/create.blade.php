@extends('shared.base')
    @section('content')

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif

    <div class="panel panel-default">
        <h3>Cadastrar Orçamento</h3>
    </div>
  <form method="POST" action="{{route('orcamento.store')}}">
            {{csrf_field()}}
            <div class="form-group">

              <label for="nome">Nome</label>
              <input type="text" class="form-control" placeholder="Nome Cliente" name="nome">
              <small id="nome" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="valor">Valor</label>
              <input type="number" min="0" value="0" step="any"
              class="form-control"  placeholder="R$ 00,00" name="valor">
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" name="descricao">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
        
    @endsection
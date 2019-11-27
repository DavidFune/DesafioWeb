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
  <form method="POST" action="{{route('orcamento.update',$orcamento->id)}}">
        <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            <div class="form-group">

              <label for="nome">Nome</label>
            <input type="text" class="form-control" value="{{$orcamento->nome}}" name="nome">
              <small id="nome" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="valor">Valos</label>
              <input type="number" min="0" step="any"
              class="form-control"  value="{{$orcamento->valor}}" name="valor">
            </div>

            <div class="form-group">
              <label for="vendedor">Vendedor</label>
              <input type="text" class="form-control" value="{{$orcamento->vendedor}}" name="vendedor">
            </div>

            <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" value="{{$orcamento->descricao}}" name="descricao">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
       
@endsection
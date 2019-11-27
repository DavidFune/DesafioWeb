@extends('shared.base')
@section('content')
<div class="panel panel-default">
      <div class="panel-heading">Remover o Orçamento</div>
        <div class="panel-body">
            <form method="post" action="{{route ('orcamento.destroy', $orcamento->id)}}">
                    <input type="hidden" name="_method" value="DELETE">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tem certeza que deseja remover o Orcamento?</h4>
                        <hr>
                        <h4>Sobre o Orcamento</h4>
                        <p>Descrição: {{$orcamento->descricao}}</p>
                        <p>Preço: R$ {{number_format($orcamento->preco, 2, ',', '.')}}</p>
                        <p>Vendedor: {{$orcamento->vendedor}}</p>
                        <hr>
                        <h4>Data</h4>
                        <p>Data de Criação: {{$orcamento->created_at->format('d-m-Y')}}</p>
                        <p>Data de Atualização: {{$orcamento->updated_at->format('d-m-Y')}}</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Remover</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
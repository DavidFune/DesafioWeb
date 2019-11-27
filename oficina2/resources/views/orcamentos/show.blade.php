@extends('shared.base')
@section('content')

<div class="col-md-12">
    <h4>Sobre o Orçamento</h4>
    <p>Descrição: {{$orcamento->descricao}}</p>
    <p>Preço: R$ {{number_format($orcamento->valor, 2, ',', '.')}}</p>
    <p>Vendedor: {{$orcamento->vendedor}}</p>
    <hr>
    <h4>Data</h4>
    <p>Data de Criação: {{$orcamento->created_at->format('d-m-Y')}}</p>
    <p>Data de Atualização: {{$orcamento->updated_at->format('d-m-Y')}}</p>
</div>
    
@endsection
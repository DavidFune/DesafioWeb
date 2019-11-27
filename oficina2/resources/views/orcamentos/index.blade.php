@extends('shared.base')
@section('content')
<div class="panel panel-default">    
        <div class="panel-heading">Lista de Orçamentos</div>

        <a href="{{route('orcamentos.filter')}}">
            <button class="btn btn-primary">Pesquisar</button></a>

<hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Cliente</th>
                            <th>Preço</th>
                            <th>Vendedor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($orcamentos as $orcamento)
                            <tr>
                                <td>{{$orcamento->descricao}}</td>
                                <td>{{$orcamento->nome}}</td>
                                <td>R$ {{$orcamento->valor}}</td>
                                <td>{{$orcamento->vendedor}}</td>

                                <td>
                                    <a href="{{route('orcamento.edit', $orcamento->id)}}"><i class="material-icons">create</i></i></a>
                                    <a href="{{route('orcamento.remove', $orcamento->id)}}"><i class="material-icons">delete</i></a>
                                    <a href="{{route('orcamento.show', $orcamento->id)}}"><i class="material-icons">search</i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                
                    </tbody>
                </table> 
            </div> 
        </div>
        <div class="d-flex justify-content-center">
            {{ $orcamentos->links() }}
        </div>
    </div>
    <a href="{{route('orcamento.create')}}"><button class="btn btn-primary">Adicionar</button></a>
    
    
@endsection
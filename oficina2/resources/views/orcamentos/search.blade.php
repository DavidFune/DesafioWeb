@extends('shared.base')
@section('content')

<div class="container align-content-center" >
<form method="GET" action="{{route('orcamento.index','buscarC','data1','data2')}}">
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" value="" placeholder="Digite o nome do Cliente" name="buscarC">
                    </div>
                    <hr>
                </div>
            </div>
        
        
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" value=""  placeholder="Digite o nome do Vendedor" name="buscarV">
                    </div>
                    <hr>
                </div>
            </div>
        
        
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="date" class="form-control" value="" placeholder="Da data..." name="data1">
                        </div>
                        <hr>
                    </div>
                
                    <div class="col-md-4">
                        <div class="input-group">
                            <input type="date" class="form-control" value="" placeholder="Até data..." name="data2">
                        </div>
                        <hr>
                    </div>
                </div>

        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">Pesquisar</button>
        </span>
    </form>
</div> 

@endsection
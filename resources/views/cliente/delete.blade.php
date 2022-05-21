@extends('global')




@section('titulo')
                Deletar Clientes
@stop

@section('conteudo')
<div class="d-inline-flex bg-dark p-3 py-4">
<p class="text-light">ID: {{ $cliente->id }}</p>
<p class="text-light">Nome: {{ $cliente->nome }}</p>

<div class="d-inline-flex bg-dark p-3 py-4">
        <form method="POST" action="{{ route('excluir_cliente' , ['id' => $cliente ->id]) }}">
        @csrf <!-- {{ csrf_field() }} -->
        <p class="text-light">Tem certeza que quer deletar esse cliente?</p>
        <input type="submit" value="SIM" class="btn btn-primary">
        </form>
        </div>
</div>
@stop
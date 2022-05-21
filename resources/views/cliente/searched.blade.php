@extends('global')




@section('titulo')
                Lista a busca de Clientes
@stop



@section('conteudo')

        <h1>Retornando a listagem de clientes</h1>
        <ul class="list-group">
            @forelse($clientes as $cliente)
            <li class="list-group-item"> {'id': '{{$cliente->id}}','nome': '{{$cliente->nome}}','cpf': '{{$cliente->cpf}}','nascimento': '{{$cliente->nascimento}}','telefone': '{{$cliente->telefone}}'} </li>       
            @empty
            <li class="list-group-item">Nao existe clientes</li>  
            @endforelse
        </ul>

@stop

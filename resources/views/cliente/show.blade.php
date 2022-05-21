@extends('global')




@section('titulo')
                Listar Clientes
@stop



@section('conteudo')

        <h1>{{$title}}</h1>
        <ul class="list-group">
            @forelse($clientes as $cliente)
            <li class="list-group-item"> {'id': '{{$cliente->id}}','nome': '{{$cliente->nome}}','cpf': '{{$cliente->cpf}}','nascimento': '{{$cliente->nascimento}}','telefone': '{{$cliente->telefone}}'} <a href="./excluir/{{$cliente->id}}">deletar cliente</a></li>       
            @empty
            <li class="list-group-item">Nao existe clientes</li>  
            @endforelse
        </ul>

@stop

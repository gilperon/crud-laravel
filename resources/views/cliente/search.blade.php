@extends('global')



@section('titulo')
                Procurar Cliente
@stop



@section('conteudo')

        <div class="row">
            <div class="d-inline-flex bg-dark p-3 py-4 justify-content-center" style="zoom: 150%;"> 
            <form method="POST" action="{{ route('procurar_cliente') }}">
            @csrf <!-- {{ csrf_field() }} -->
            <p class="text-light">Insira os dados do cliente para buscar:</p>
            <input type="text" name="nome" class="form-control mb-2" placeholder="Digita o Nome"  />
            <input type="text" name="cpf" class="form-control mb-2" placeholder="Digita o CPF"  />
            <input type="submit" value="Buscar" class="btn btn-primary">
            </form>
            </div>
        </div>

@stop

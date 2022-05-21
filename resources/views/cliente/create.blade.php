@extends('global')




@section('titulo')
                Criar Cliente
@stop



@section('conteudo')

        <div class="row">
            <div class="d-inline-flex bg-dark p-3 py-4 justify-content-center" style="zoom: 150%;"> 
            <form method="POST" action="{{ route('registrar_cliente') }}">
            @csrf <!-- {{ csrf_field() }} -->
            <p class="text-light">Insira os dados do cliente para salvar:</p>
            <input type="text" name="nome" class="form-control mb-2" placeholder="Digita seu Nome" required />
            <input type="text" name="cpf" class="form-control mb-2" placeholder="Digita seu CPF" required />
            <input type="date" name="nascimento" class="form-control mb-2" placeholder="Data de nascimento" required />
            <input type="text" name="telefone" class="form-control mb-2" placeholder="Digite seu telefone" />
            <input type="submit" value="Salvar" class="btn btn-primary">
            </form>
            </div>
        </div>

@stop

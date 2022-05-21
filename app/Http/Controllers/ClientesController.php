<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Call DB
use DB;
//Call Model /Cliente
use App\Models\Cliente;

class ClientesController extends Controller
{
    //

    public function create(){

        return view('cliente.create');

    }

    

    //CREATE (INSERT)
    public function store(Request $request){

        
        $nome = $request -> nome;
        $cpf = $request -> cpf;
        $nascimento = $request -> nascimento;
        $telefone = $request -> telefone;
        $telefone = isset($telefone) ? $telefone : 0;


        //Pode fazer verificacoes adicionais, if telefone is valid, etc..
        if(strlen($nome)<6){
            return "Erro, seu nome é invalido minimo 6 caracteres";
        }
        if($this->validaCPF($cpf)==false){
            return "Erro, CPF é invalido";
        }else{ 
            $cpf = $this->validaCPF($cpf); 
        }
        
        
                //Create Cliente
                Cliente::create([
                    'nome' => $nome,
                    'cpf' => $cpf,
                    'nascimento' => $nascimento,
                    'telefone' => $telefone

                ]);

                //return "Cliente cadastrado com sucesso.
                return "{'nome': '$nome','cpf': '$cpf','nascimento': '$nascimento','telefone': '$telefone'}";
                
    }


    
    //READ (SELECT) 
    public function show(){


        $clientes   = DB::table('cliente')->get();
        $title      = "Listagem";
        return view('cliente.show', compact('clientes', 'title'));

    }


   


     //DELETE 
     public function delete($id){

        $cliente = Cliente::findOrFail($id);
        return view('cliente.delete', ['cliente' => $cliente]);

    }
    public function destroy($id){


        $cliente = Cliente::findOrFail($id);
        $cliente -> delete();
        return "Cliente excluido com sucesso";

    }


    //search
    public function search(){

        return view('cliente.search');

    }

    public function searched(Request $request){

        // Get the search value from the request
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');

        // Search in the title and body columns from the posts table
        $clientes = Cliente::query()
            ->where('nome', 'LIKE', "%{$nome}%")
            ->Where('cpf', 'LIKE', "%{$cpf}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('cliente.searched', compact('clientes'));

    }



    










    function validaCPF($cpf) {

        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return $cpf;

    }






}

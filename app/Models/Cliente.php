<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;

     // minha tabela tem outro nome
     protected $table = 'cliente';

     // tirar a opção de created_at updated_at das tabelas
     public $timestamps = false;
 
     protected $fillable = ['nome', 'cpf', 'nascimento', 'telefone']; 

}

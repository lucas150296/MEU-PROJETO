<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroPessoa extends Model
{
    protected $fillable = ['nomeCompleto',
    'estadoCivil',
    'cidadeNascimento',
    'estadoNascimento',
    'cep',
    'nomeMae',
    'cpf',
    'rg',
    'endereco',
    'numero',
    'bairro',
    'cidade',
    'telefone',
    'ano_nascimento'];

}

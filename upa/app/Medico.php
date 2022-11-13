<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['mone',
'status',
'crmUf',
'crmNumero',
'especialidade_id',
'dataNascimento',
'dataFormatura',
'cpf',
'cpj',
'rgNumero',
'rgInstituicao',
'cep',
'cidade',
'endereco',
'bairro',
'numeroEndereco',
'complemento',
'pontoReferencia',
'telefone',
'email',
];
}

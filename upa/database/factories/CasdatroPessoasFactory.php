<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */



use Faker\Generator as Faker;
use App\CadastroPessoa;

$factory->define(CadastroPessoa::class, function (Faker $faker) {
    return [
    'nomeCompleto' => $faker->name,
    'estadoCivil' => $faker->numberBetween(1,4),
    'cidadeNascimento' =>$faker->city ,
    'estadoNascimento' => $faker->stateAbbr ,
    'cep' => $faker->creditCardNumber ,
    'nomeMae' =>$faker->name,
    'cpf' =>$faker->unixTime($max = 'now') ,
    'rg' =>$faker->unixTime($max = 'now') ,
    'endereco' =>$faker->city,
    'numero' =>$faker->numberBetween(1,4),
    'bairro' =>$faker->city,
    'cidade' =>$faker->city,
    'telefone'=>$faker->tollFreePhoneNumber,
    'ano_nascimento'=>$faker->date($format = 'Y', $max = 'now')
    ];
});

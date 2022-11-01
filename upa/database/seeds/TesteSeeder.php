<?php

use Illuminate\Database\Seeder;
use App\CadastroPessoa;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CadastroPessoa = new CadastroPessoa();

        /*CadastroPessoa::create([
            'nomeCompleto' => 'lucas Henrique ferreira ',
            'estadoCivil' => '1',
            'cidadeNascimento' => 'matozinhos',
            'estadoNascimento' => 'mg',
            'cep' => '3572000',
            'nomeMae' => 'elidia',
            'cpf' => '1324604468',
            'rg' => '19673393',
            'endereco' => 'esmeralda',
            'numero' => '105',
            'bairro' => 'sao sebastiao',
            'cidade'=> 'matozinhos',
            'telefone' => '119999999'
        ]);*/

        factory(CadastroPessoa::class, 50)->create();

    }
}

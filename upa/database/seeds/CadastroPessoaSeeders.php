<?php

use Illuminate\Database\Seeder;
use App\CadastroPessoa;
class CadastroPessoaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CadastroPessoa::class, 50)->create();
    }
}

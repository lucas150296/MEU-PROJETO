<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroPessoa;
use App\AreasMesdicas;

class Ficha extends Controller
{

    public function abriFicha(Request $request){

        $erro = "";

        if($request->get('error') == 1){
            $erro = 'Paciente nao localiza na rede da upa gastaria de cadastra';
        };


        return view('abriFicha' , ['titulo' => 'abri Ficha' , 'error' => $erro ]);


    }

    public function salvaFicha(Request $request){

        $pessoa = cadastroPessoa::all();

        $especialidade = AreasMesdicas::all();

        $id = $request->get('id');

        return view('ficha' ,['pessoa' => $pessoa, 'id' => $id , 'especialidade' => $especialidade ] );

    }
    public function ficha (Request $request){


        $cadastroPessoa = cadastroPessoa::all();

        return view('ficha', ['titulo' => $request->get('nomeCompleto')]);
    }

    public function salva (Request $request){


        $op = $request->get('op');

        $pessoa = new cadastroPessoa();

        $paciente = $pessoa->where('id', $op)->get()->first();

        if (isset($paciente->id)) {
            $id = $paciente->id;

            return redirect()->route('salvaFicha', ['id' => $id]);
        }else{

            return redirect()->route('abriFicha', ['error' => 1]);
        }


    }
}

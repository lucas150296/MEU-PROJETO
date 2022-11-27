<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroPessoa;
use App\AreasMesdicas;

class Ficha extends Controller
{

    public function index(Request $request){
        $erro = "";

        if($request->get('error') == 1){
            $erro = 'Paciente nao localiza na rede da upa gastaria de cadastra';
        };

        return view('abriFicha' , ['titulo' => 'abri Ficha' , 'error' => $erro]);


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

    public function busca (Request $request){

        $escolha = $request->get('escolha');

        if ($escolha == 1) {
            $op = $request->get('cpf');

            $pessoa = new cadastroPessoa();

            $paciente = $pessoa->where('cpf', $op)->get()->first();

            if (isset($paciente->id)) {
                $id = $paciente->id;

                return redirect()->route('ficha', ['id' => $id]);
            }else{

                return redirect()->route('abriFicha', ['error' => 1]);
            }
        };

        if($escolha == 2 ){
            $op = $request->get('nome');

            return redirect()->route('nomePaciente', ['op' => $op]);

        };
    }

    public function nomePaciente(Request $request){
        $paciente = $request->get('op');
        $pessoa = new cadastroPessoa();
        $pacientes = $pessoa::where('nomeCompleto', 'like' , "%$paciente%")->get();

        return view('teste', ['pacientes' => $pacientes, 'op' => $paciente]);



    }
}

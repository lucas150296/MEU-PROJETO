<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroPessoa;

class CadastroController extends Controller
{
    public function cadastro(Request $request) {

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Paciente ja cadastrado na upa';
        };

        return view('cadastro' , ['error' => $erro]);
    }

    public function salva(Request $request){
        $pessoas = new cadastroPessoa();

        $cadastro = $request->get('cpf');

        $teste = $pessoas->where('cpf', $cadastro)->get()->first();

        if (isset($teste->id)) {
            $error = 1 ;

            return redirect()->route('site.cadastro', ['erro' => $error]);
        } else {
            cadastroPessoa::create($request->all());
        return redirect()->route('site.principal');
        }



    }
}

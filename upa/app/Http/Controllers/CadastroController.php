<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroPessoa;

class CadastroController extends Controller
{
    public function cadastro() {
        return view('cadastro');
    }

    public function salva(Request $request){
        cadastroPessoa::create($request->all());
        return redirect()->route('site.principal');

    }
}

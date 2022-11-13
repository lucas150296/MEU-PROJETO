<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreasMesdicas;
use App\Medico;
use Illuminate\Support\Facades\Redirect;

class medicoController extends Controller
{
    public function cadastro(Request $request){

        $especialidade = AreasMesdicas::all();


        return view('medicoCadastro', ['titulo' => 'cadastro medico', 'especialidade' => $especialidade]);
    }

    public function salva(Request $request){


        Medico::create($request->all());

        return redirect()->route('site.principal');

    }
}

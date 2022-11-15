<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreasMesdicas;
use App\Medico;
use Illuminate\Support\Facades\Redirect;

class medicoController extends Controller
{
    public function cadastro(Request $request){

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'medico ja cadastrado na upa';
        };

        $especialidade = AreasMesdicas::all();


        return view('medicoCadastro', ['titulo' => 'cadastro medico', 'especialidade' => $especialidade, 'error' => $erro]);
    }

    public function salva(Request $request){

        $crm = $request->get('crmNumero');
        $medicos = new Medico();

        $teste = $medicos->where('crmNumero', $crm)->get()->first();


        if (isset($teste->id)) {
            $error = 1 ;

            return redirect()->route('medico.cadastro', ['erro' => $error]);
        }else {
            Medico::create($request->all());
            echo "<script>window.close();</script>";
         }

    }
}

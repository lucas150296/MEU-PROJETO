@extends('extencao.pagianl')

@section('titulo', $titulo)

@section('conteudo')
    <form action="{{ route('site.ficha') }}" method="post" >
        @csrf

        <div class="centro">
            <label for="">escolha a identificação </label>
            <select name="escolha" id="escolha" required onchange="habilitaEscolha()">
                <option value="">Escolha</option>
                <option value="1">cpf</option>
                <option value="2">nome</option>
            </select>

            <div id="cpf" class="escola">
                <label style="margin-top: 10px" for="">cpf do paciente</label>
                <input name="cpf" type="text" class="cpf-mask">
                <button type="submit">busca</button>
            </div>

            <div id="nome" class="escola">
                <label style="margin-top: 10px" for="">digite o nome do paciente</label>
                <input name="nome" type="text">
                <button type="submit">busca</button>
            </div>


            {{ isset($error) && $error != '' ? $error : '' }}
        </div>

    </form>

     <hr>

@endsection

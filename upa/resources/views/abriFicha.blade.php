@extends('extencao.pagianl')

@section('tiulo', $titulo)

@section('conteudo')
    <form action="{{ route('site.ficha') }}" method="post" style="margin-top: 10px;margin-left: 20px;">
        @csrf

        <div style="text-align: center">
            <label for="">escolha a identificação </label>
            <select name="escolha" id="escolha" required onchange="mask()">
                <option value="">escolha</option>
                <option value="1">cpf</option>
                <option value="2">nome</option>
            </select>
            <div id="cpf" style="display: none">
                <label style="margin-top: 10px" for="">cpf do paciente</label>
                <input name="cpf" type="text" class="cpf-mask">
                <button type="submit">busca</button>
            </div>

            <div id="nome" style="display: none">
                <label style="margin-top: 10px" for="">digite o nome do paciente</label>
                <input name="nome" type="text">
                <button type="submit">busca</button>
            </div>


            {{ isset($error) && $error != '' ? $error : '' }}
        </div>

    </form>



    <hr style="border-top-width: 9px;">

@endsection

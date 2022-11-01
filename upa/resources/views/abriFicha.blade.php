@extends('extencao.pagianl')

@section('tiulo' , $titulo)

@section('conteudo')
    <form action="{{ route('site.ficha') }}" method="post" style="margin-top: 10px;margin-left: 20px;" >
        @csrf

        <label for="">cpf do paciente</label>

        <input id="cpf" type="text" name="op" required>

        <button type="submit">busca</button>
    </form>
  {{ isset($error) && $error != '' ? $error : '' }}


    <hr style="border-top-width: 9px;">

@endsection

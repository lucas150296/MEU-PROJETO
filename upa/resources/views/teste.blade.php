@extends('extencao.pagianl')

@section('titulo', 'pacientes')

@section('conteudo')

    <h5 style="text-align: center">dados dos pacientes da upa com {{ $op }} </h5>


    @foreach ($pacientes as $key => $pacientes)
        <ul style="font-size: 20px">{{ $pacientes->nomeCompleto }} e cpf {{ $pacientes->cpf }}
            <a style="color: red" href="{{ route('salvaFicha', ['id' => $pacientes->id]) }}">escolha</a>

            <hr>
        </ul>
    @endforeach



@endsection

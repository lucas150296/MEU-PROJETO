@extends('extencao.pagianl')

@section('tiulo', 'principal')

@section('conteudo')

    <h1 style="text-align : center ; margin-top: 100px ">OLA BEM VINDA A UPA 24H </h1>

    <div class="container text-center">
        <div class="row">

            <div class="col, btn btn-secondary" style="margin-top: 20px">

                <button type="button" class="btn btn-secondary"><a style="color: rgb(200, 198, 198)"
                     href="{{ route('site.principal') }}">INICIO</a></button>


            </div>

            <div class="col, btn btn-secondary" style="margin-top: 20px">

                <button type="button" class="btn btn-secondary"><a style="color: rgb(200, 198, 198)"
                        href="{{ route('site.cadastro') }}">CADASTRO</a></button>

            </div>

            <div class="col, btn btn-secondary" style="margin-top: 20px">
                <button type="button" class="btn btn-secondary"><a style="color: rgb(200, 198, 198)"
                    href="{{ route('abriFicha') }}">ABRI FICHA DE ATENDIMENTO</a></button>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

@endsection

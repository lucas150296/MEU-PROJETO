@extends('principal')

@section('tiulo', 'salva ficha')

@section('conteudo')
    <form action="" method="post" class="row g-3 needs-validation" style="margin-left: 15px;
margin-right: 15px;">
        @csrf
        @foreach ($pessoa as $key => $pessoa)
            @if ($pessoa->id == $id)
                <input type="int" name="paciente_id_fk" value="{{ $pessoa->id }}" style="display: none">

                <div class="col-md-4">
                    <label class="form-label">mone do paciente</label>
                    <input type="text" class="form-control" value="{{ $pessoa->nomeCompleto }}" disabled>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Data de nascimento</label>
                    <input id="ano_nascimento" type="text" class="form-control" value="{{ $pessoa->ano_nascimento }}"
                        disabled>
                </div>

                <div class="col-md-3" onmouseup="mostraValor(this)">
                    <label class="form-label"> Idade </label>
                    <input name="idade" type="text" class="form-control" placeholder="EX:99" disabled>
                </div>

                <div class="col-md-3">
                    <label class="form-label"> cpf </label>
                    <input class="form-control" value="{{ $pessoa->cpf }}" disabled>
                </div>

                <hr
                    style="
                    border: 0;
                    border-top: 1px dashed rgba(6, 6, 6, 0.993);
                    border-bottom: 2px solid hsla(0, 0%, 0%, 0.964);
                    height: 3px;
                  ">


                <div class="col-md-3">
                    <label class="form-label">qual e a especialidade medica</label>
                    <select class="form-control" name="">
                        <option value="">qual e a especialidade medica</option>
                        @foreach ($especialidade as $key => $especialidade)
                            <option value="{{ $especialidade->id }}">{{ $especialidade->mone }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">relatório de medico</label>
                    <textarea name="relatorioMedico" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            @endif
        @endforeach
    </form>


@endsection

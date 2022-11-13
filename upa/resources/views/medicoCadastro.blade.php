@extends('extencao.pagianl')

@section('titulo', $titulo)

@section('conteudo')
    <img src="{{ asset('Imagens_UPA.jpg') }} " style="margin-left: 28%" alt="">
    <h1 style="text-align : center  ">OLA BEM VINDA A UPA 24H </h1>
    <h3 style="text-align: center; margin-top 10px">AQUI VOCÊ VAI CADASTRO NO BANCO DE DADO DA UPA 24H </h3>
    <div style="text-align: center; margin-top 10px" style="text-colo">
        {{ isset($error) && $error != '' ? $error : '' }}
    </div>

    <form action="{{ route('cadastro') }}" method="post" class="row g-3 needs-validation"
        style="margin-left: 15px; margin-right: 15px;">
        @csrf
        <div class="col-md-8">
            <label for="" class="form-label">mone :</label>
            <input type="text" name="mone" placeholder="nome" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">STATUS : </label>
            <select name="status" class="form-control" id="">
                <option value="1" style="color: blue">ativo</option>
                <option value="2" style="color: brown">desativado</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="validationCustom04" class="form-label">UF:</label>
            <select name="crmUf" class="form-select">
                <option selected disabled value="">estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">NUMERO DO CRM:</label>
            <input type="text" name="crmNumero" class="form-control" placeholder="crm">
        </div>
        <div class="col-md-4">
            <label class="form-label">especialidade medica:</label>
            <select class="form-control" name="especialidade_id">
                <option value="">qual e a especialidade medica</option>
                @foreach ($especialidade as $key => $especialidade)
                    <option value="{{ $especialidade->id }}">{{ $especialidade->mone }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">data de nascimento</label>
            <input type="date" name="dataNascimento" class="form-control">
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">data formatura</label>
            <input type="date" name="dataFormatura" class="form-control">
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">cmpj</label>
            <input type="text" name="cpj" class="form-control" placeholder="cmpj">
        </div>

        <div class="col-md-3">
            <label for="" class="form-label">N°RG</label>
            <input type="text" class="form-control" name="rgNumero" placeholder="N°RG">
        </div>

        <div class="col-md-1">
            <label for="" class="form-label">instituição</label>
            <select name="rgInstituicao" id="" class="form-control">
                <option value="ssp">ssp</option>
                <option value="pc">pc</option>
                <option value="pm">pm</option>
            </select>

        </div>

        <hr>
        <h5 style="text-align: center">Endereço</h5>

        <div class="col-md-2">
            <label for="" class="form-label">cep</label>
            <input type="text" name="cep" class="form-control" placeholder="cep">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" placeholder="endereço">
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">Bairro</label>
            <input type="text" name="bairro" class="form-control" placeholder="bairro">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">Numero</label>
            <input type="text" name="numeroEndereco" class="form-control" placeholder="Numero">
        </div>

        <div class="col-md-4">
            <label for="" class="form-label">Complemento</label>
            <input type="text" name="complemento" class="form-control" placeholder="complemento">
        </div>

        <div class="col-md-6">
            <label for="" class="form-label">Ponto de Referencia</label>
            <input type="text" name="pontoReferencia" class="form-control" placeholder="Ponto de Referencia">
        </div>

        <div class="col-md-2">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Telefone">
        </div>

        <div class="col-md-8">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="email">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">salva</button>
        </div>
    </form>
@endsection

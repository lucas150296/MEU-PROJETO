@extends('extencao.pagianl')

@section('titulo', 'cadastro')

@section('conteudo')
<img src="{{ asset('Imagens_UPA.jpg')}} " class="cadastro">
<h1 style="text-align : center  ">OLA BEM VINDA A UPA 24H </h1>
<h3 style="text-align: center; margin-top 10px">AQUI VOCÊ VAI CADASTRO NO BANCO DE DADO DA UPA 24H </h3>
<div style="text-align: center; margin-top 10px" style="text-colo">
    {{ isset($error ) && $error != '' ? $error : '' }}
</div>


<form action="{{ route('site.cadastro') }}" method="POST" class="row g-3 needs-validation formulario">

    @csrf

    <div class="col-md-4">
        <label class="form-label">Nome Completo</label>
        <input name="nomeCompleto" type="text" class="form-control" value="nome" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-md-2">
        <label class="form-label">Estado Civil </label>
        <select name="estadoCivil" class="form-select" required>
            <option selected disabled value="">Estado</option>
            <option value="1">casalado(a) </option>
            <option value="2">Solteiro(a) </option>
            <option value="3">Viúvo(a)</option>
            <option value="4"></option>
        </select>
    </div>

    <div class="col-md-2">
        <label class="form-label" for="form-label">Ano Nascimento</label>
        <input id="ano_nascimento" name="ano_nascimento" type="date" class="form-control" placeholder="EX:1999" required onchange="mostraValor()">
    </div>
    <div class="col-md-2">
        <label class="form-label" for="form-label">Idade</label>
        <input name="idade" type="text" class="form-control" placeholder="EX:99" disabled>
    </div>


    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Cidade de Nascimento</label>
        <input name="cidadeNascimento" type="text" class="form-control" id="cidade" required>

    </div>

    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Estado Nascimento</label>
        <select name="estadoNascimento" class="form-select" required>
            <option selected disabled value="">Estado</option>
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



    <div class="col-md-3">
        <label class="form-label">Cep</label>
        <input  name="cep" type="text" class="form-control cep-mask" id="cep"
            placeholder="Ex.: 00000-000" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>

    <div class="col-md-4">
        <label class="form-label">Nome da Mae</label>
        <input name="nomeMae" type="text" class="form-control" id="nomeMae" required>

    </div>

    <div class="col-md-4">
        <label class="form-label">CPF</label>
        <input name="cpf" type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00"
            id="cpf" required>

    </div>

    <div class="col-md-4">
        <label class="from-label">RG</label>
        <input id="rg" name="rg" type="text" class="form-control "  placeholder="EX.: 00.000.000" required onchange="maskRg()" >

    </div>

    <div class="col-md-8">
        <label class="from-label">Endereço</label>
        <input name="endereco" type="text" class="form-control" placeholder="Enderço" required>

    </div>
    <div class="col-md-2">
        <label class="from-label">Númeno</label>
        <input name="numero" type="number" class="form-control" placeholder="EX.: 000" required>

    </div>

    <div class="col-md-8">
        <label class="from-label">Bairro</label>
        <input name="bairro" type="text" class="form-control" placeholder="EX.: sao sebastião" required>

    </div>

    <div class="col-md-4">
        <label class="from-label">Cidade</label>
        <input name="cidade" type="text" class="form-control" placeholder="EX.: matozinhos" required>

    </div>
    <div class="col-md-6">
        <label class="from-label">Telefone</label>
        <input id="telefone" name="telefone" type="text" class="form-control " placeholder="Ex: 31 90000-0000" required maxlength="13" onchange="maskTelefone()" >

    </div>


    <div class="col-12" >
        <button id="oi" class="btn btn-primary" type="submit">Salva</button>
    </div>
</form>

<script src="{{ asset('js\idade.js') }}"></script>


<script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
@endsection

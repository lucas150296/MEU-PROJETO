function mostraValor() {
    var texte = document.getElementById("ano_nascimento").valueAsDate

    var ano = texte.getUTCFullYear()
    var dia = texte.getUTCDate();
    var mes = texte.getUTCMonth() + 1



    const anoAtual = new Date()
    const a = anoAtual.getFullYear()
    const b = anoAtual.getDate()
    const c = anoAtual.getMonth() + 1
    console.log("idade :" + ano + "idade :"+ a +" dia: " + dia +" dia 2 " + b)


    if (c >= mes) {
        const idade = a - ano
        var dias = b - dia
        const mess = c  - mes
        document.querySelector("[name='idade']").value =(idade + " anos " +mess + " messes" + dias + " dias")

    } else {
        const idade = a - ano - 1
        var dias = b - dia
        const mess = c + 12 - mes
        document.querySelector("[name='idade']").value =(idade + " anos " +mess + " messes " + dias + " dias")

    }
}

function valor() {
    const id = document.getElementById("texte").value

    document.querySelector("[name='teste']").value = id
    console.log(id)
}

function habilitaEscolha() {

    const escolha = document.getElementById("escolha").value

    if (escolha == 1) {
        const cpf = document.getElementById("cpf")
        cpf.classList.remove('escola')
        const nome = document.getElementById("nome")
        nome.classList.add('escola')


    }
    if (escolha == 2) {
        const cpf = document.getElementById("cpf")
        cpf.classList.add('escola')
        const nome = document.getElementById("nome")
        nome.classList.remove('escola')

    }


}

function maskRg(){
    var rg = document.getElementById("rg").value

    rgP1 = rg.slice(0,2)
    rgP2 = rg.slice(2,5)
    rgP3 = rg.slice(5,10)

    console.log(rgP1 + "-" + rgP2 + "." +rgP3)
    document.querySelector("[name='rg']").value = (rgP1 + "-" + rgP2 + "." +rgP3)
}

function maskTelefone(){
    var telefone = document.getElementById("telefone").value

    ddd = telefone.slice(0,2)
    p1 = telefone.slice(2,7)
    p2 = telefone.slice(7,12)

    document.querySelector("[name='telefone']").value = ("("+ddd+") " + p1 + " - " + p2)
}

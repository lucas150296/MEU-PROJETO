function mostraValor() {
    const texte = document.getElementById("ano_nascimento").value


    const anoAtual = new Date()
    const ano = anoAtual.getFullYear()
    console.log(texte + ano)

    document.querySelector("[name='idade']").value = ano - texte



}

function valor(){
    const id = document.getElementById("texte").value

    document.querySelector("[name='teste']").value = id
    console.log(id)
}

function mask(){

    const escolha = document.getElementById("escolha").value

    if (escolha == 1) {
        const cpf = document.getElementById("cpf")
        cpf.removeAttribute("style")
        const nome = document.getElementById("nome")
        nome.style.display = "none"


    }
    if(escolha == 2){
        const cpf = document.getElementById("cpf")
        const nome = document.getElementById("nome")

        nome.removeAttribute("style")
        cpf.style.display = "none"

    }



    console.log(escolha)

}


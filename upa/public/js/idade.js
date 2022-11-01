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




/*document.getElementById("oi").onclick = function(e){
    mostraValor()
}*/

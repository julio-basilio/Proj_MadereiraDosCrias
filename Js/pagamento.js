
document.getElementById("cep").addEventListener("blur", async function(){

    let cep = this.value.replace(/\D/g,'');

    if(cep.length != 8)
    {
        alert("CEP inválido");
        return;
    }

    try{

        let resposta = await fetch(
            `https://viacep.com.br/ws/${cep}/json/`
        );

        let dados = await resposta.json();

        if(dados.erro)
        {
            alert("CEP não encontrado");
            return;
        }

        document.getElementById("rua").value = dados.logradouro;
        document.getElementById("bairro").value = dados.bairro;
        document.getElementById("cidade").value = dados.localidade;
        document.getElementById("estado").value = dados.uf;

    }
    catch(erro)
    {
        alert("Erro ao buscar CEP");
    }

});

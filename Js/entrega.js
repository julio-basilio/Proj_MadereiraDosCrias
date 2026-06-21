const btnBuscar = document.getElementById("btnBuscar");

btnBuscar.addEventListener("click", buscarCEP);

document.getElementById("cep").addEventListener("keypress", function(e){

    if(e.key === "Enter"){
        buscarCEP();
    }

});

async function buscarCEP(){

    const cep = document
        .getElementById("cep")
        .value
        .replace(/\D/g,"");

    const erro = document.getElementById("erro");

    erro.textContent = "";

    if(cep.length !== 8){

        erro.textContent =
        "Digite um CEP válido.";

        return;
    }

    try{

        const resposta =
        await fetch(
            `https://viacep.com.br/ws/${cep}/json/`
        );

        const dados =
        await resposta.json();

        if(dados.erro){

            erro.textContent =
            "CEP não encontrado.";

            return;
        }

        document
        .getElementById("logradouro")
        .value = dados.logradouro;

        document
        .getElementById("bairro")
        .value = dados.bairro;

        document
        .getElementById("cidade")
        .value = dados.localidade;

        document
        .getElementById("uf")
        .value = dados.uf;

        document
        .getElementById("resultado")
        .style.display = "block";

    }
    catch{

        erro.textContent =
        "Erro ao consultar o CEP.";

    }

}

const nomeTela = localStorage.getItem('nomeUsuario');
const fotoperfil = localStorage.getItem('urlImagem67');

const divNome = document.getElementById('nomeUsuario');
const divPerfil = document.getElementById('fotoPerfil');

if (divNome && nomeTela) {
    divNome.innerHTML = `<span>${nomeTela.toUpperCase()}</span>`;
}

if (divPerfil && fotoperfil) {
    divPerfil.innerHTML = `<img src="${fotoperfil}" alt="Foto de Perfil" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;" />`;
}

console.log("foto perfil: " + fotoperfil);
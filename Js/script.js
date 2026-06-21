const sleep = (ms) => new Promise((r) => setTimeout(r, ms));
const tituloOriginal = document.title;

// Efeito de alteração do título da aba
document.addEventListener("visibilitychange", async () => {
  if (document.hidden) {
    while (document.hidden) {
      await sleep(500);
      document.title = "Ei manin...";
      await sleep(1000);
      document.title = "Volte pra cá";
      await sleep(1000);
    }
    document.title = tituloOriginal;
  }
});


// Envio do formulário de pedidos
function EnviarDados() {
  const form = document.getElementById('formPedido');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const dados = {
      nome: document.getElementById('nomeCliente').value,
      endereco: document.getElementById('enderecoCliente').value,
      tipMadeira: document.getElementById('tipoMadeira').value,
      quantMadeira: document.getElementById('quantidadeMetro').value
    };

    try {
      const enviarDados = await fetch('../backend/API.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(dados)
      });

      if (!enviarDados.ok) throw new Error('Erro na rede');
      const dadosRecebidos = await enviarDados.json();

      if (dadosRecebidos.status === 'sucesso') {
        alert("Tudo funcionando!");
      } else {
        alert("Houve um erro ao salvar seu pedido.");
      }
    } catch (error) {
      console.error('Erro ao buscar dados: ', error);
    }
  });
}

// Controle de Login
function login() {
    const form = document.getElementById('login');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); 

        const urlImagemInput = document.getElementById('imageUser') ? document.getElementById('imageUser').value : '';
        
       
        const idUsuarioEl = document.getElementById('id_usuario');
        const nomeEl = document.getElementById('nome');
        const emailEl = document.getElementById('email'); 
        const senhaEl = document.getElementById('senha');
        const idadeEl = document.getElementById('idade');
        const enderecoEl = document.getElementById('endereco');

        const dadosUsuario = {
            id_usuario: idUsuarioEl ? parseInt(idUsuarioEl.value) : 0,
            nome: nomeEl ? nomeEl.value : '',
            email: emailEl ? emailEl.value : '',
            senha: senhaEl ? senhaEl.value : '',
            idade: idadeEl ? parseInt(idadeEl.value) : 0,
            endereco: enderecoEl ? enderecoEl.value.toLowerCase() : '',
            urlImagem: urlImagemInput
        };

        try {
            const resposta = await fetch('backend/LoginController.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(dadosUsuario)
            });

            if (resposta.ok) {
                const resultado = await resposta.json();
                
                try {
                    localStorage.setItem('nomeUsuario', resultado.nomeUsuarioLocal || dadosUsuario.nome);
                    localStorage.setItem('urlImagem67', urlImagemInput);
                    localStorage.setItem('Logado', 'true');


                } catch (storageError) {
                    console.warn("LocalStorage indisponível no navegador:", storageError);
                }

                window.location.href = resultado.url;
            } else {
                console.error('Erro no servidor:', resposta.status);
                alert('Falha ao tentar logar.');
            }

        } catch (erro) {
            console.error('Erro na requisição:', erro);
            alert('Não foi possível conectar ao servidor. Verifique o console para detalhes.');
        }
    });
}


window.addEventListener('DOMContentLoaded', () => {
  EnviarDados();
    login();



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
});


function sair(){
    localStorage.setItem('Logado', 'false');
    localStorage.removeItem('nomeUsuario');
    localStorage.removeItem('urlImagem67');
    window.location.href = "/index.html";
}
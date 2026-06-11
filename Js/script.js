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

// Easter Egg de Administrador
let historicoTeclas = '';
document.addEventListener('keydown', (tecla) => {
  historicoTeclas += tecla.key.toLowerCase();
  if (historicoTeclas.length > 6) { 
    historicoTeclas = historicoTeclas.slice(-6);
  }
  if (historicoTeclas === 'admphp') {
    alert('Você não quer isso...');
    window.location.href = "adm.php";
    historicoTeclas = '';
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
      const enviarDados = await fetch('../Pages/API.php', {
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
function Login() {
  const form = document.getElementById('login'); 
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const urlImagemInput = document.getElementById('imageUser').value;

    const dadosUsuario = {
      id_usuario: parseInt(document.getElementById('id_usuario').value), 
      nome: document.getElementById('nome').value.toLowerCase(),
      email: document.getElementById('email').value.toLowerCase(),
      senha: document.getElementById('senha').value.toLowerCase(),
      idade: parseInt(document.getElementById('idade').value),           
      endereco: document.getElementById('endereco').value.toLowerCase(),
      UrlImage: urlImagemInput
    };

    try {
      const resposta = await fetch('../LoginController.php', { 
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(dadosUsuario) 
      });

      if (resposta.ok) {
        const resultado = await resposta.json();
        localStorage.setItem('nomeUsuario', resultado.nomeUsuarioLocal);
        localStorage.setItem('urlImage', urlImagemInput);
        window.location.href = resultado.url;
      } else {
        console.error('Erro no servidor:', resposta.status);
        alert('Falha ao tentar logar.');
      }
    } catch (erro) {
      console.error('Erro na requisição:', erro);
      alert('Não foi possível conectar ao servidor.');
    }
  });
}

const nomeTela = localStorage.getItem('nomeUsuario');
const fotoperfil = localStorage.getItem('urlImage');

const divNome = document.getElementById('nomeUsuario');
const divPerfil = document.getElementById('fotoPerfil');

if (divNome && nomeTela) {
    divNome.innerHTML = `<span>${nomeTela.toUpperCase()}</span>`;
}

if (divPerfil && fotoperfil) {
    divPerfil.innerHTML = `<img src="${fotoperfil}" alt="Foto" />`;
}
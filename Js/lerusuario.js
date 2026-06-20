document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('BuscarUsuario');
    const div = document.getElementById('resultado');
    
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const nomeUsuario = document.getElementById("nome").value.toLowerCase();
        
        try {
            const enviarDados = await fetch('../backend/LerBancoDeDados.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ nome: nomeUsuario })
            });

            if (!enviarDados.ok) throw new Error('Erro na rede');

            const dadosRecebidos = await enviarDados.json();

            if (dadosRecebidos.status === 'sucesso') {
                localStorage.setItem('DadosUsuario', JSON.stringify(dadosRecebidos));
                localStorage.setItem('nomeUsuario', dadosRecebidos.dados.nome);
                localStorage.setItem('emailUsuario', dadosRecebidos.dados.email);
                div.innerHTML = `
                    <strong>Nome:</strong> ${dadosRecebidos.dados.nome}<br>
                    <strong>Email:</strong> ${dadosRecebidos.dados.email}<br>
                    <strong>Senha:</strong> ${dadosRecebidos.dados.senha}<br>
                    <strong>Idade:</strong> ${dadosRecebidos.dados.idade}<br>
                    <strong>Endereço:</strong> ${dadosRecebidos.dados.endereco}
                `;
            } else {
                alert("Houve um erro ao buscar seu pedido."); 
            }
        } catch (error) {
            console.error('Erro ao buscar dados: ', error);
        }
    });
});

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
    window.location.href = "./backend/adm.php";
    historicoTeclas = '';
  }
});

const sleep = (ms) => new Promise((r) => setTimeout(r, ms));
const tituloOriginal = document.title;

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

let historicoTeclas = ''; 

document.addEventListener('keydown', (tecla) => { 
    historicoTeclas += tecla.key.toLowerCase();
    
    if (historicoTeclas.length > 7) {
        historicoTeclas = historicoTeclas.slice(-7);
    }
    
    if (historicoTeclas === 'monster') {
        alert('Você não quer isso...');
        window.location.href = "super.php";
        historicoTeclas = '';
    }
});

function EnviarDados(){
  const form = document.getElementById('formPedido');

  form.addEventListener('submit', async (e)=>{
    e.preventDefault();

    const nomeCliente = document.getElementById('nomeCliente').value;
    const enderecoCliente = document.getElementById('enderecoCliente').value;
    const tipoMadeira = document.getElementById('tipoMadeira').value;
    const quantidadeMetro = document.getElementById('quantidadeMetro').value;

    try {
      const enviarDados = await fetch('Pages/API.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json' },
        body: JSON.stringify({
          nome: nomeCliente,
          endereco: enderecoCliente,
          tipMadeira: tipoMadeira,
          quantMadeira: quantidadeMetro
        })
      });

      if(!enviarDados.ok) throw new Error('Erro na rede');

      const dadosRecebidos = await enviarDados.json();

      if (dadosRecebidos.status === 'sucesso') {
          alert("Tudo funcionando!");
      } else {
          alert("Houve um erro ao salvar seu pedido.");
      }
    }
    catch(error){
      console.error('Erro ao buscar dados: ', error);
    }
  });
}



document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('BuscarUsuario');
    const div = document.getElementById('resultado');
    
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const nomeUsuario = document.getElementById("nome").value.toLowerCase();
        
        try {
            const enviarDados = await fetch('../Pages/LerBancoDeDados.php', {
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
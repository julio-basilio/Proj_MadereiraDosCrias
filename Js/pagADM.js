document.addEventListener('DOMContentLoaded', () => {

    // Configuração do Nome do Admin
    const nome = localStorage.getItem('nomeADM')?.toUpperCase();
    const div = document.getElementById('nomeAdm');
    if (div && nome) {
        div.textContent = nome;
    }

    // Requisição dos dados do Dashboard
    fetch('../Pages/ADMPGController.php') 
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro na requisição com o servidor');
            }
            return response.json();
        })
        .then(data => {
            
            // Atualiza os contadores superiores (Cards)
            document.getElementById('totalUsuarios').textContent = data.usuarios.quantidade;
            document.getElementById('totalProdutos').textContent = data.produtos.quantidade;
            document.getElementById('totalMensagens').textContent = data.mensagens.quantidade;
            document.getElementById('totalPedidos').textContent = "0"; 

            // --- TABELA DE USUÁRIOS ---
            const tabelaUser = document.getElementById('tabelaUsuarios');
            if (tabelaUser) {
                tabelaUser.innerHTML = "";
                if (!data.usuarios.lista || data.usuarios.lista.length === 0) {
                    tabelaUser.innerHTML = "<tbody><tr><td colspan='4' style='text-align: center; padding: 20px;'>Nenhum usuário cadastrado.</td></tr></tbody>";
                } else {
                    let thead = `<thead><tr><th>Nome</th><th>E-mail</th><th>Idade</th><th>Endereço</th></tr></thead>`;
                    let linhas = "";
                    data.usuarios.lista.forEach(u => {
                        linhas += `<tr><td>${u.nome}</td><td>${u.email}</td><td>${u.idade} anos</td><td>${u.endereco}</td></tr>`;
                    });
                    tabelaUser.innerHTML = thead + "<tbody>" + linhas + "</tbody>";
                }
            }

            // --- TABELA DE PRODUTOS ---
            const tabelaProd = document.getElementById('tabelaProdutos');
            if (tabelaProd) {
                tabelaProd.innerHTML = "";
                if (!data.produtos.lista || data.produtos.lista.length === 0) {
                    tabelaProd.innerHTML = "<tbody><tr><td colspan='4' style='text-align: center; padding: 20px;'>Nenhum produto em estoque.</td></tr></tbody>";
                } else {
                    let thead = `<thead><tr><th>Madeira</th><th>Tipo</th><th>Preço/Metro</th><th>Quantidade</th></tr></thead>`;
                    let linhas = "";
                    data.produtos.lista.forEach(p => {
                        let preco = typeof p.Preco_Metro === 'number' || !isNaN(p.Preco_Metro)
                            ? parseFloat(p.Preco_Metro).toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })
                            : p.Preco_Metro;

                        linhas += `<tr><td>${p.Nome}</td><td>${p.Tipo}</td><td>R$ ${preco}</td><td>${p.Quantidade} un.</td></tr>`;
                    });
                    tabelaProd.innerHTML = thead + "<tbody>" + linhas + "</tbody>";
                }
            }

            // --- TABELA DE MENSAGENS ---
            const tabelaMsg = document.getElementById('tabelaMensagens');
            if (tabelaMsg) {
                tabelaMsg.innerHTML = "";
                if (!data.mensagens.lista || data.mensagens.lista.length === 0) {
                    tabelaMsg.innerHTML = "<tbody><tr><td colspan='3' style='text-align: center; padding: 20px;'>Nenhuma mensagem recebida.</td></tr></tbody>";
                } else {
                    let thead = `<thead><tr><th>Remetente</th><th>E-mail</th><th>Mensagem</th></tr></thead>`;
                    let linhas = "";
                    data.mensagens.lista.forEach(m => {
                        linhas += `<tr><td>${m.nameUsuario}</td><td>${m.email}</td><td>${m.mensagem}</td></tr>`;
                    });
                    tabelaMsg.innerHTML = thead + "<tbody>" + linhas + "</tbody>";
                }
            }

        })
        .catch(erro => {
            console.error("Erro ao carregar os dados do Dashboard:", erro);
            document.getElementById('totalUsuarios').textContent = "!";
            document.getElementById('totalProdutos').textContent = "!";
            document.getElementById('totalMensagens').textContent = "!";
            document.getElementById('totalPedidos').textContent = "!";
        });
});
document.addEventListener('DOMContentLoaded', () => {

    const nome = localStorage.getItem('nomeADM')?.toUpperCase();
    const div = document.getElementById('nomeAdm');
    if (div && nome) {
        div.textContent = nome;
    }

    fetch('../Pages/ADMPGController.php') 
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro na requisição com o servidor');
            }
            return response.json();
        })
        .then(data => {
            
           
            document.getElementById('totalUsuarios').textContent = data.usuarios.quantidade;
            document.getElementById('totalProdutos').textContent = data.produtos.quantidade;
            document.getElementById('totalMensagens').textContent = data.mensagens.quantidade;
            document.getElementById('totalPedidos').textContent = "0"; 

           
            const tabelaUser = document.getElementById('tabelaUsuarios');
            if (tabelaUser) {
                tabelaUser.innerHTML = "";
                if (data.usuarios.lista.length === 0) {
                    tabelaUser.innerHTML = "<tr><td colspan='4'>Nenhum usuário cadastrado.</td></tr>";
                } else {
                    let thead = `<thead><tr><th>Nome</th><th>E-mail</th><th>Idade</th><th>Endereço</th></tr></thead><tbody>`;
                    let linhas = "";
                    data.usuarios.lista.forEach(u => {
                        linhas += `<tr><td>${u.nome}</td><td>${u.email}</td><td>${u.idade} anos</td><td>${u.endereco}</td></tr>`;
                    });
                    tabelaUser.innerHTML = thead + linhas + "</tbody>";
                }
            }

            
            const tabelaProd = document.getElementById('tabelaProdutos');
            if (tabelaProd) {
                tabelaProd.innerHTML = "";
                if (data.produtos.lista.length === 0) {
                    tabelaProd.innerHTML = "<tr><td colspan='4'>Nenhum produto em estoque.</td></tr>";
                } else {
                    let thead = `<thead><tr><th>Madeira</th><th>Tipo</th><th>Preço/Metro</th><th>Quantidade</th></tr></thead><tbody>`;
                    let linhas = "";
                    data.produtos.lista.forEach(p => {
                        linhas += `<tr><td>${p.Nome}</td><td>${p.Tipo}</td><td>R$ ${p.Preco_Metro},00</td><td>${p.Quantidade} un.</td></tr>`;
                    });
                    tabelaProd.innerHTML = thead + linhas + "</tbody>";
                }
            }

            
            const tabelaMsg = document.getElementById('tabelaMensagens');
            if (tabelaMsg) {
                tabelaMsg.innerHTML = "";
                if (data.mensagens.lista.length === 0) {
                    tabelaMsg.innerHTML = "<tr><td colspan='3'>Nenhuma mensagem recebida.</td></tr>";
                } else {
                    let thead = `<thead><tr><th>Remetente</th><th>E-mail</th><th>Mensagem</th></tr></thead><tbody>`;
                    let linhas = "";
                    data.mensagens.lista.forEach(m => {
                        linhas += `<tr><td>${m.nameUsuario}</td><td>${m.email}</td><td>${m.mensagem}</td></tr>`;
                    });
                    tabelaMsg.innerHTML = thead + linhas + "</tbody>";
                }
            }

        })
        .catch(erro => {
            console.error("Erro ao carregar os dados do Dashboard:", erro);
            document.getElementById('totalUsuarios').textContent = "!";
            document.getElementById('totalProdutos').textContent = "!";
            document.getElementById('totalMensagens').textContent = "!";
        });
});
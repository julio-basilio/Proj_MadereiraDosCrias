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

                //TABELA DE USUÁRIOS 
                const tabelaUser = document.getElementById('tabelaUsuarios');
                if (tabelaUser) {
                    tabelaUser.innerHTML = "";
                    if (!data.usuarios.lista || data.usuarios.lista.length === 0) {
                        
                        tabelaUser.innerHTML = "<tbody><tr><td colspan='5' style='text-align: center; padding: 20px;'>Nenhum usuário cadastrado.</td></tr></tbody>";
                    } else {
                       
                        let thead = `<thead><tr><th>Foto</th><th>Nome</th><th>E-mail</th><th>Idade</th><th>Endereço</th></tr></thead>`;
                        let linhas = "";
                        data.usuarios.lista.forEach(u => {
                            
                            let fotoTag = u.UrlImage 
                                ? `<img src="${u.UrlImage}" alt="${u.nome}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%; vertical-align: middle;">`
                                : `<div style="width: 40px; height: 40px; background-color: #ccc; border-radius: 50%; display: inline-block; vertical-align: middle; line-height: 40px; text-align: center; font-size: 12px; color: #666;">👤</div>`;

                            linhas += `<tr>
                                <td style="text-align: center; vertical-align: middle;">${fotoTag}</td>
                                <td style="vertical-align: middle;">${u.nome}</td>
                                <td style="vertical-align: middle;">${u.email}</td>
                                <td style="vertical-align: middle;">${u.idade} anos</td>
                                <td style="vertical-align: middle;">${u.endereco}</td>
                            </tr>`;
                        });
                        tabelaUser.innerHTML = thead + "<tbody>" + linhas + "</tbody>";
                    }
                }

                //TABELA DE PRODUTOS 
                const tabelaProd = document.getElementById('tabelaProdutos');
                if (tabelaProd) {
                    tabelaProd.innerHTML = "";
                    if (!data.produtos.lista || data.produtos.lista.length === 0) {
                        tabelaProd.innerHTML = "<tbody><tr><td colspan='5' style='text-align: center; padding: 20px;'>Nenhum produto em estoque.</td></tr></tbody>";
                    } else {
                        let thead = `<thead><tr><th>Imagem</th><th>Madeira</th><th>Tipo</th><th>Preço/Metro</th><th>Quantidade</th></tr></thead>`;
                        let linhas = "";
                        data.produtos.lista.forEach(p => {
                            let preco = typeof p.Preco_Metro === 'number' || !isNaN(p.Preco_Metro)
                                ? parseFloat(p.Preco_Metro).toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })
                                : p.Preco_Metro;

                            
                            let imagemTag = p.UrlImage 
                                ? `<img src="${p.UrlImage}" alt="${p.Nome}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 4px; vertical-align: middle;">`
                                : `<span style="color: #999; font-size: 12px;">Sem foto</span>`;

                            linhas += `<tr>
                                <td style="text-align: center; vertical-align: middle;">${imagemTag}</td>
                                <td style="vertical-align: middle;">${p.Nome}</td>
                                <td style="vertical-align: middle;">${p.Tipo}</td>
                                <td style="vertical-align: middle;">R$ ${preco}</td>
                                <td style="vertical-align: middle;">${p.Quantidade} un.</td>
                            </tr>`;
                        });
                        tabelaProd.innerHTML = thead + "<tbody>" + linhas + "</tbody>";
                    }
                }

                // ABELA DE MENSAGENS 
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
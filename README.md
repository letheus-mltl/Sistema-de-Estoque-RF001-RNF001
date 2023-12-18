# Sistema-de-Estoque-RF001-RNF001
Sistema de Estoque - README

Este é um sistema de estoque simples, composto por três páginas web básicas: index.php, cadastrar.php, e consultar.php. Abaixo estão as descrições e características de cada página:

Página index.php
A página inicial do sistema, que contém uma breve descrição e boas-vindas ao Sistema de Estoque. Também possui um menu de navegação à esquerda, permitindo acesso fácil às outras partes do sistema.

Página cadastrar.php
Esta página oferece um formulário para cadastrar produtos no estoque. Os campos incluem nome, descrição, categoria, preço e quantidade. Após o envio do formulário, se o cadastro for bem-sucedido, uma mensagem de sucesso será exibida. O código PHP nesta página lida com o cadastro no banco de dados. Atenção: o campo código não está visível porque o campo é de auto incremento, após ser enviado é gerado automaticamente um código para aquele produto.

Página consultar.php
A página de consulta exibe uma tabela com informações sobre todos os produtos no estoque. Possui um botão "Consultar" que, quando pressionado, recupera os dados do banco de dados e os exibe na tabela. A tabela inclui as colunas Código, Nome, Descrição, Categoria, Preço e Quantidade.

Estilo Global
As páginas compartilham um estilo global, definido no cabeçalho do HTML. O estilo inclui um esquema de cores simples, uma barra de navegação lateral fixa e um layout responsivo.

Banco de Dados
O sistema se conecta a um banco de dados MySQL local com as configurações padrão (usuário: root, senha: vazia, banco de dados: bdproduto). Certifique-se de ajustar essas configurações conforme necessário.


------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Tutorial Detalhado - Sistema de Estoque

Este tutorial fornece instruções passo a passo para configurar e executar um simples sistema de estoque utilizando PHP e MySQL. Este sistema incluirá três páginas: index.php, cadastrar.php, e consultar.php. A seguir, explicarei cada parte do processo:

Requisitos:
Servidor web (XAMPP - 8.0.30 / PHP 8.0.30)

Passo 1: Instalação do XAMPP
- A versão utilizada no desenvolvimento deste site foi a versão 8.0.30 / PHP 8.0.30. 
- Após a instalação você deverá inicializar o Apache (A porta que utilizei foi a 80 mas você pode definir a porta de sua preferência) e o MySQL (A porta utilizada foi a padrão 3306).
- Agora você irá até o explorador de arquivos e acessará o seguinte endereço: C:\xampp\htdocs . Nesta pasta você irá colar a pasta 'crud' disponilizada na área de trabalho.

Passo 2: Importação da tabela 'tbcadastro'
- No seu navegador você digitará o seguinte endereço: http://localhost:80/phpmyadmin.php (Atenção: se a sua porta configurada no XAMPP não for a porta 80 você deverá substituir no link pela porta escolhida.)
- Você criará um banco de dados chamado 'bdcadastro'
- Após isso você irá na opção "IMPORTAR" e escolherá o aquivo que disponibilizei na pasta zip 'tbcadastro.sql'. Caso de algum erro na importação da tabela, você mesmo pode criar a tabela e dar o nome de 'tbcadastro', mas se atente em seguir exatamente como mostra a estrutura abaixo:
CREATE TABLE tbcadastro (
    cd_produto INT AUTO_INCREMENT PRIMARY KEY,
    nm_produto VARCHAR(50) NOT NULL,
    ds_produto VARCHAR(100) NOT NULL,
    nm_categoria_produto VARCHAR(50) NOT NULL,
    vl_preco_produto DECIMAL(10, 2) NOT NULL,
    qt_produto_estoque INT NOT NULL
);
- Após isso você já estará conectado com o banco de dados, seguiremos com a aplicação agora.

Passo 3: Usabilidade do site
- No seu navegador você digitará o seguinte endereço: httP://localhost:80/crud/index.php
- Agora você visualizara uma página inicial de boas vindas e ao lado esquerdo terá um menu com 3 links: 
	• Home (Página inicial de boas vindas)
	• Cadastrar Produto (Nesta página abrirá um formulário para cadastrar um novo produto, nele você irá preencher todos os campos com a informação de um novo produto: nome, descrição, categoria, preço e quantidade. Após isso você deve clicar no botão "Cadastrar". Caso o produto seja cadastrado aparecerá uma mensagem em verde "Produto Cadastrado com Sucesso!", caso o produto não seja cadastrado deverá retornar a mensagem de erro.
	• Consultar Estoque (Nesta página abrirá uma tela apenas com o título "Consultar Estoque", o menu esquerdo presente em todas as páginas e um botão "Consultar". Após clicar no botão consultar deverá retornar uma listagem de todos os produtos cadastrados na tabela "tbcadastro" do banco de dados, com os seguintes campos: codigo, nome, descrição, categoria, preço e quantidade.

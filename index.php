<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estoque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            width: 200px;
            background-color: #eee;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-x: hidden;
        }

        nav a {
            display: block;
            padding: 10px;
            margin-bottom: 5px;
            text-decoration: none;
            color: #333;
            background-color: #fff;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #ddd;
        }

        main {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Estoque</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="cadastrar.php">Cadastrar Produto</a>
        <a href="consultar.php">Consultar Estoque</a>
    </nav>

    <main>
        <!-- Conteúdo da Página Home -->
        <section id="home">
            <h2>Bem-vindo ao Sistema de Estoque</h2>
            <p>Esta é a página inicial do sistema. Aqui você poderá fazer o gerenciamento de estoque e produtos da sua empresa.</p>
        </section>
    </main>
</body>
</html>

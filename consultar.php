<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Estoque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
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
            margin-left: 220px; /* Ajuste para considerar a largura da navegação lateral */
            margin-top: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        form {
            margin-bottom: 20px;
            text-align: center;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Consultar Estoque</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="cadastrar.php">Cadastrar Produto</a>
        <a href="consultar.php">Consultar Estoque</a>
    </nav>

    <main>
        <form method="post" action="">
            <input type="submit" name="btnconsultar" value="Consultar">
        </form>

        <?php
        $conexao = mysqli_connect("localhost", "root", "", "bdproduto");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnconsultar'])) {
            $sql = "SELECT * FROM tbcadastro";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado) {
                echo '<table>';
                echo '<tr><th>Código</th><th>Nome</th><th>Descrição</th><th>Categoria</th><th>Preço</th><th>Quantidade</th></tr>';

                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    echo '<td>' . $row['cd_produto'] . '</td>';
                    echo '<td>' . $row['nm_produto'] . '</td>';
                    echo '<td>' . $row['ds_produto'] . '</td>';
                    echo '<td>' . $row['nm_categoria_produto'] . '</td>';
                    echo '<td>' . $row['vl_preco_produto'] . '</td>';
                    echo '<td>' . $row['qt_produto_estoque'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo "Erro ao consultar o estoque: " . mysqli_error($conexao);
            }
        }

        mysqli_close($conexao);
        ?>
    </main>
</body>
</html>

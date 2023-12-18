<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
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

        main {
            margin: 20px;
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

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }

        .success-message {
            margin-top: 50px; /* Ajuste do espaçamento superior */
            margin-left:200px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            display: <?php echo ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['txtnome'])) ? "block" : "none"; ?>;
        }
    </style>
</head>
<body>
    <header>
        <h1>Cadastrar Produto</h1>
    </header>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="cadastrar.php">Cadastrar Produto</a>
        <a href="consultar.php">Consultar Estoque</a>
    </nav>

    <main>
        <form name="dados" method="post" action="">
            Nome: <input type="text" name="txtnome" size="30" maxlength="50" required><br>
            Descrição: <input type="text" name="txtdescricao" size="30" maxlength="100" required><br>
            Categoria: <input type="text" name="txtcategoria" size="30" maxlength="50" required><br>
            Preço: <input type="text" name="txtpreco" size="50" maxlength="20" required><br>
            Quantidade: <input type="text" name="txtquantidade" size="50" maxlength="11" required><br>
            <input type="submit" name="btngravar" value="Cadastrar">
        </form>

        <div class="success-message" id="successMessage">
            Produto cadastrado com sucesso!
        </div>
    </main>
</body>
</html>

<?php
$conexao = mysqli_connect("localhost", "root", "", "bdproduto");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['txtnome'])) {
        $nome = $_POST['txtnome'];
        $descricao = $_POST['txtdescricao'];
        $categoria = $_POST['txtcategoria'];
        $preco = $_POST['txtpreco'];
        $quantidade = $_POST['txtquantidade'];

        $sql = "INSERT INTO tbcadastro(nm_produto, ds_produto, nm_categoria_produto, vl_preco_produto, qt_produto_estoque) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($stmt, "ssssd", $nome, $descricao, $categoria, $preco, $quantidade);

        $resultado = mysqli_stmt_execute($stmt);
        if ($resultado) {
            exit();
        } else {
            echo "Erro ao cadastrar produto: " . mysqli_error($conexao);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexao);
    }
}
?>
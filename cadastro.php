<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0C0F1F;
            color: #FFFFFF;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: none;
            background-color: #1E1E1E;
            color: #FFFFFF;
        }

        input[type="submit"] {
            background-color: #FFD700;
            cursor: pointer;
        }

        .btn-home {
            position: absolute;
            top: 20px;
            left: 20px;
            background: none;
            border: none;
            color: #FFFFFF;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php
    include_once 'conn.php';

    function xss($data)
    {
        return htmlspecialchars(trim(stripslashes($data)));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        $nome = xss($_POST["nome"]);
        $email = xss($_POST["email"]);
        $senha = xss($_POST["senha"]);

        $sql = "INSERT INTO cadastro (nome,email,senha) VALUES (?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $nome, $email, $senha);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Registro cadastrado com sucesso!";
        } else {
            echo "Falha ao cadastrar registro!";
        }
        $stmt->close();
        $conn->close();
    }



    ?>

    <h1>Cadastro</h1>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <button class="btn-home" onclick="window.location.href='index.php'">Voltar para Home</button>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            font-size: 36px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Temas Escuros */
        body.edu-cosmica {
            background-color: #0C0F1F;
            color: #FFFFFF;
        }

        .edu-cosmica .btn {
            background-color: #FFD700;
            color: #0C0F1F;
        }
    </style>
</head>

<body class="edu-cosmica">
    <h1>Bem-vindo à Página Inicial</h1>
    <p>Escolha uma opção:</p>
    <a href="login.php" class="btn">Login</a>
    <a href="cadastro.php" class="btn">Cadastro</a>
</body>

</html>